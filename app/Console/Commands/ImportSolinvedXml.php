<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImportSolinvedXml extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:import-solinved-xml 
                            {file=solinved-urunler.xml : XML dosyasının yolu} 
                            {--keep-old : Eski ürünleri silmeden içeri aktar} 
                            {--clean-categories : Ürünü bulunmayan eski kategorileri temizle}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'solinved-urunler.xml dosyasındaki ürünleri veritabanına aktarır (eski ürünleri silerek yenileri yükler)';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $filePath = $this->argument('file');

        // Check if relative to base path
        if (!file_exists($filePath)) {
            $filePath = base_path($filePath);
        }

        if (!file_exists($filePath)) {
            $this->error("XML dosyası bulunamadı: {$filePath}");
            return 1;
        }

        $this->info("XML dosyası okunuyor: {$filePath}");

        libxml_use_internal_errors(true);
        $xml = simplexml_load_file($filePath);

        if ($xml === false) {
            $this->error("XML dosyası çözümlenemedi.");
            foreach (libxml_get_errors() as $error) {
                $this->error($error->message);
            }
            return 1;
        }

        $totalProducts = count($xml->product);
        $this->info("XML dosyasında toplam {$totalProducts} ürün bulundu.");

        if ($totalProducts === 0) {
            $this->warn("İçeri aktarılacak ürün bulunamadı.");
            return 0;
        }

        // Wipe old products if --keep-old not supplied
        if (!$this->option('keep-old')) {
            $oldCount = Product::count();
            $this->warn("Eski ürünler temizleniyor ({$oldCount} adet ürün siliniyor)...");
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Product::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            $this->info("Eski ürünler başarıyla silindi.");
        } else {
            $this->info("--keep-old seçeneği etkin: Eski ürünler silinmedi.");
        }

        $this->newLine();
        $this->info("Ürünler veritabanına aktarılıyor...");

        $bar = $this->output->createProgressBar($totalProducts);
        $bar->start();

        $brandCache = [];
        $categoryCache = [];
        $usedSlugs = [];

        // Pre-populate used slugs if keeping old products
        if ($this->option('keep-old')) {
            $usedSlugs = Product::pluck('slug')->flip()->toArray();
        }

        $imported = 0;
        $skipped = 0;
        $counter = 0;

        foreach ($xml->product as $p) {
            $counter++;

            try {
                $code = trim((string) $p->code);
                $title = trim((string) $p->title);
                $brandName = trim((string) $p->brand);
                $mainCategory = trim((string) $p->category);
                $subCategory = trim((string) $p->subcategory);
                $stockCode = trim((string) $p->stock_code);
                $datasheet = trim((string) $p->datasheet);
                $details = trim((string) $p->details_html);
                $gallery = trim((string) $p->detail_gallery_html);

                if (empty($title)) {
                    $skipped++;
                    $bar->advance();
                    continue;
                }

                // Brand
                $brandId = null;
                if (!empty($brandName)) {
                    $brandKey = mb_strtolower($brandName);
                    if (!isset($brandCache[$brandKey])) {
                        $brand = Brand::firstOrCreate(
                            ['name' => $brandName],
                            ['slug' => Str::slug($brandName)]
                        );
                        $brandCache[$brandKey] = $brand->id;
                    }
                    $brandId = $brandCache[$brandKey];
                }

                // Category & Subcategory
                $categoryId = null;
                if (!empty($mainCategory)) {
                    $parentSlug = Str::slug($mainCategory);
                    
                    if (!isset($categoryCache[$parentSlug])) {
                        $parentCat = ProductCategory::firstOrCreate(
                            ['slug' => $parentSlug],
                            [
                                'name' => ['tr' => $mainCategory, 'en' => $mainCategory],
                                'description' => ['tr' => '', 'en' => ''],
                                'parent_id' => null,
                                'is_active' => true,
                                'sort_order' => 0,
                            ]
                        );
                        $categoryCache[$parentSlug] = $parentCat->id;
                    }
                    $parentCatId = $categoryCache[$parentSlug];

                    if (!empty($subCategory)) {
                        // Category display name: e.g. "Solar Sürücüler - Trifaze"
                        $catDisplayName = "{$mainCategory} - {$subCategory}";
                        $subSlug = $parentSlug . '-' . Str::slug($subCategory);

                        if (!isset($categoryCache[$subSlug])) {
                            $childCat = ProductCategory::firstOrCreate(
                                ['slug' => $subSlug],
                                [
                                    'name' => ['tr' => $catDisplayName, 'en' => $catDisplayName],
                                    'description' => ['tr' => '', 'en' => ''],
                                    'parent_id' => $parentCatId,
                                    'is_active' => true,
                                    'sort_order' => 0,
                                ]
                            );
                            $categoryCache[$subSlug] = $childCat->id;
                        }
                        $categoryId = $categoryCache[$subSlug];
                    } else {
                        $categoryId = $parentCatId;
                    }
                }

                // Images
                $imageUrls = [];
                if (!empty($p->images)) {
                    foreach ($p->images->image as $img) {
                        $imgUrl = trim((string) $img);
                        if ($imgUrl !== '') {
                            $imageUrls[] = $imgUrl;
                        }
                    }
                }
                $mainImage = $imageUrls[0] ?? null;

                // Relative image URLs fixing in HTML (e.g. /img/... -> https://www.solinved.com/img/...)
                $details = preg_replace('/src=["\'](\/[^"\']+)["\']/', 'src="https://www.solinved.com$1"', $details);
                $gallery = preg_replace('/src=["\'](\/[^"\']+)["\']/', 'src="https://www.solinved.com$1"', $gallery);

                $description = $details;
                if ($gallery !== '') {
                    $description = ($description !== '' ? $description . "\n" : '') . $gallery;
                }

                // Slug
                $baseSlug = !empty($code) ? Str::slug($code) : Str::slug($title);
                $slug = $baseSlug;
                $slugCounter = 1;
                while (isset($usedSlugs[$slug])) {
                    $slug = $baseSlug . '-' . $slugCounter++;
                }
                $usedSlugs[$slug] = true;

                // Specs / Datasheet
                $specs = null;
                if (!empty($datasheet)) {
                    $specs = ['datasheet' => $datasheet];
                }

                // Create Product
                Product::create([
                    'stock_code' => $stockCode !== '' ? $stockCode : null,
                    'slug' => $slug,
                    'name' => $title,
                    'category_id' => $categoryId,
                    'brand_id' => $brandId,
                    'stock_amount' => 1,
                    'image' => $mainImage,
                    'images' => !empty($imageUrls) ? $imageUrls : null,
                    'description' => $description !== '' ? $description : null,
                    'specs' => $specs,
                    'features' => null,
                    'is_active' => true,
                    'sort_order' => $counter,
                ]);

                $imported++;
            } catch (\Throwable $e) {
                $skipped++;
                $this->newLine();
                $this->warn("Ürün işlenirken hata (Satır {$counter}): " . $e->getMessage());
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);

        // Clean orphaned categories if option set
        if ($this->option('clean-categories')) {
            $deletedCount = ProductCategory::doesntHave('products')
                ->whereDoesntHave('children', function ($q) {
                    $q->has('products');
                })
                ->delete();
            $this->info("Ürünü bulunmayan {$deletedCount} eski kategori temizlendi.");
        }

        $this->info("=========================================");
        $this->info(" İÇERİ AKTARMA TAMAMLANDI");
        $this->info("=========================================");
        $this->info(" Aktarılan Ürün Sayısı : {$imported}");
        if ($skipped > 0) {
            $this->warn(" Atlanan / Hatalı Sayı  : {$skipped}");
        }
        $this->info(" Kullanılan Kategoriler: " . count($categoryCache));
        $this->info(" Kullanılan Markalar   : " . count($brandCache));
        $this->info(" Toplam Veritabanı Ürün: " . Product::count());
        $this->info("=========================================");

        return 0;
    }
}
