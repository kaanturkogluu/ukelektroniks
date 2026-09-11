<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    /**
     * Generate dynamic sitemap.xml
     */
    public function sitemap(): Response
    {
        $baseUrl = rtrim(config('app.url', url('/')), '/');
        
        $urls = [];

        // Static Pages
        $staticPages = [
            ['loc' => $baseUrl . '/', 'priority' => '1.0', 'freq' => 'daily', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/products', 'priority' => '0.9', 'freq' => 'daily', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/about', 'priority' => '0.7', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/service', 'priority' => '0.8', 'freq' => 'weekly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/project', 'priority' => '0.8', 'freq' => 'weekly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/contact', 'priority' => '0.7', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/faq', 'priority' => '0.6', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/quote', 'priority' => '0.7', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/datacenter', 'priority' => '0.6', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/team', 'priority' => '0.5', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/feature', 'priority' => '0.5', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
            ['loc' => $baseUrl . '/testimonial', 'priority' => '0.5', 'freq' => 'monthly', 'lastmod' => date('Y-m-d')],
        ];

        foreach ($staticPages as $page) {
            $urls[] = $page;
        }

        // Product Categories
        $categories = ProductCategory::where('is_active', true)
            ->whereHas('products', function ($q) {
                $q->where('is_active', true);
            })
            ->get();

        foreach ($categories as $category) {
            $urls[] = [
                'loc' => $baseUrl . '/products?category=' . $category->slug,
                'priority' => '0.8',
                'freq' => 'weekly',
                'lastmod' => $category->updated_at ? $category->updated_at->format('Y-m-d') : date('Y-m-d'),
            ];
        }

        // Products with image support
        $products = Product::where('is_active', true)
            ->orderBy('id', 'desc')
            ->get();

        foreach ($products as $product) {
            $imageUrl = null;
            if (!empty($product->image)) {
                if (str_starts_with($product->image, 'http://') || str_starts_with($product->image, 'https://')) {
                    $imageUrl = $product->image;
                } else {
                    $imageUrl = $baseUrl . '/' . ltrim($product->image, '/');
                }
            }

            $urls[] = [
                'loc' => $baseUrl . '/product/' . $product->slug,
                'priority' => '0.8',
                'freq' => 'weekly',
                'lastmod' => $product->updated_at ? $product->updated_at->format('Y-m-d') : date('Y-m-d'),
                'image' => $imageUrl,
                'image_title' => $product->name,
            ];
        }

        // Services
        $services = Service::where('is_active', true)->get();
        foreach ($services as $service) {
            $urls[] = [
                'loc' => $baseUrl . '/service/' . $service->slug,
                'priority' => '0.7',
                'freq' => 'monthly',
                'lastmod' => $service->updated_at ? $service->updated_at->format('Y-m-d') : date('Y-m-d'),
            ];
        }

        // Projects
        $projects = Project::where('is_active', true)->get();
        foreach ($projects as $project) {
            $urls[] = [
                'loc' => $baseUrl . '/project/' . $project->slug,
                'priority' => '0.7',
                'freq' => 'monthly',
                'lastmod' => $project->updated_at ? $project->updated_at->format('Y-m-d') : date('Y-m-d'),
            ];
        }

        // Blogs (if class exists and table populated)
        if (class_exists(Blog::class)) {
            $blogs = Blog::where('is_active', true)->get();
            foreach ($blogs as $blog) {
                $urls[] = [
                    'loc' => $baseUrl . '/blog/' . $blog->slug,
                    'priority' => '0.7',
                    'freq' => 'monthly',
                    'lastmod' => $blog->updated_at ? $blog->updated_at->format('Y-m-d') : date('Y-m-d'),
                ];
            }
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

        foreach ($urls as $item) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "    <lastmod>" . $item['lastmod'] . "</lastmod>\n";
            $xml .= "    <changefreq>" . $item['freq'] . "</changefreq>\n";
            $xml .= "    <priority>" . $item['priority'] . "</priority>\n";

            if (!empty($item['image'])) {
                $xml .= "    <image:image>\n";
                $xml .= "      <image:loc>" . htmlspecialchars($item['image'], ENT_XML1, 'UTF-8') . "</image:loc>\n";
                if (!empty($item['image_title'])) {
                    $xml .= "      <image:title>" . htmlspecialchars($item['image_title'], ENT_XML1, 'UTF-8') . "</image:title>\n";
                }
                $xml .= "    </image:image>\n";
            }

            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    /**
     * Generate Google Merchant Center Product Feed (RSS 2.0 XML)
     */
    public function merchantFeed(): Response
    {
        $baseUrl = rtrim(config('app.url', url('/')), '/');
        $siteTitle = Setting::get('site_title', 'UK Elektronik');
        $siteDesc = Setting::get('site_description', 'UK Elektronik Güneş Enerjisi ve Solar Sistemler');

        $products = Product::with(['category.parent', 'brand'])
            ->where('is_active', true)
            ->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">' . "\n";
        $xml .= "  <channel>\n";
        $xml .= "    <title>" . htmlspecialchars($siteTitle, ENT_XML1, 'UTF-8') . "</title>\n";
        $xml .= "    <link>" . htmlspecialchars($baseUrl, ENT_XML1, 'UTF-8') . "</link>\n";
        $xml .= "    <description>" . htmlspecialchars($siteDesc, ENT_XML1, 'UTF-8') . "</description>\n";

        foreach ($products as $p) {
            $productUrl = $baseUrl . '/product/' . $p->slug;

            // Main image
            $mainImg = '';
            if (!empty($p->image)) {
                if (str_starts_with($p->image, 'http://') || str_starts_with($p->image, 'https://')) {
                    $mainImg = $p->image;
                } else {
                    $mainImg = $baseUrl . '/' . ltrim($p->image, '/');
                }
            }

            // Description cleaning (strip HTML, truncate to 5000 chars)
            $cleanDesc = strip_tags($p->description ?? '');
            $cleanDesc = html_entity_decode($cleanDesc, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $cleanDesc = preg_replace('/\s+/', ' ', $cleanDesc);
            $cleanDesc = trim($cleanDesc);
            if (empty($cleanDesc)) {
                $cleanDesc = $p->name . ' - UK Elektronik Güneş Enerjisi Sistemleri';
            }
            $cleanDesc = Str::limit($cleanDesc, 4900);

            // Brand
            $brandName = $p->brand ? $p->brand->name : 'UK Elektronik';

            // Category hierarchy for product_type
            $categoryName = '';
            if ($p->category) {
                if ($p->category->parent) {
                    $categoryName = $p->category->parent->name . ' > ' . $p->category->name;
                } else {
                    $categoryName = $p->category->name;
                }
            }

            $xml .= "    <item>\n";
            $xml .= "      <g:id>" . $p->id . "</g:id>\n";
            $xml .= "      <g:title><![CDATA[" . $p->name . "]]></g:title>\n";
            $xml .= "      <g:description><![CDATA[" . $cleanDesc . "]]></g:description>\n";
            $xml .= "      <g:link>" . htmlspecialchars($productUrl, ENT_XML1, 'UTF-8') . "</g:link>\n";
            if ($mainImg) {
                $xml .= "      <g:image_link>" . htmlspecialchars($mainImg, ENT_XML1, 'UTF-8') . "</g:image_link>\n";
            }
            
            // Additional images
            if (is_array($p->images)) {
                $imgCount = 0;
                foreach ($p->images as $extraImg) {
                    if ($extraImg !== $p->image && !empty($extraImg)) {
                        $fullExtra = (str_starts_with($extraImg, 'http')) ? $extraImg : ($baseUrl . '/' . ltrim($extraImg, '/'));
                        $xml .= "      <g:additional_image_link>" . htmlspecialchars($fullExtra, ENT_XML1, 'UTF-8') . "</g:additional_image_link>\n";
                        if (++$imgCount >= 10) break; // Google limits to 10 additional images
                    }
                }
            }

            $xml .= "      <g:availability>in_stock</g:availability>\n";
            $xml .= "      <g:price>0.00 TRY</g:price>\n";
            $xml .= "      <g:condition>new</g:condition>\n";
            $xml .= "      <g:brand><![CDATA[" . $brandName . "]]></g:brand>\n";

            if (!empty($p->stock_code)) {
                $xml .= "      <g:mpn><![CDATA[" . $p->stock_code . "]]></g:mpn>\n";
                $xml .= "      <g:identifier_exists>yes</g:identifier_exists>\n";
            } else {
                $xml .= "      <g:identifier_exists>no</g:identifier_exists>\n";
            }

            if (!empty($categoryName)) {
                $xml .= "      <g:product_type><![CDATA[" . $categoryName . "]]></g:product_type>\n";
            }

            // Google product category for solar/energy products
            $xml .= "      <g:google_product_category>Hardware > Building Consumables > Solar Energy Solutions</g:google_product_category>\n";

            $xml .= "    </item>\n";
        }

        $xml .= "  </channel>\n";
        $xml .= "</rss>";

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    /**
     * Return dynamic robots.txt
     */
    public function robots(): Response
    {
        $baseUrl = rtrim(config('app.url', url('/')), '/');

        $content = "User-agent: *\n";
        $content .= "Allow: /\n";
        $content .= "Disallow: /admin\n";
        $content .= "Disallow: /admin/\n";
        $content .= "Disallow: /login\n";
        $content .= "Disallow: /register\n\n";
        $content .= "Sitemap: {$baseUrl}/sitemap.xml\n";

        return response($content, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
        ]);
    }
}
