<?php

namespace App\Console\Commands;

use App\Http\Controllers\SeoController;
use Illuminate\Console\Command;

class GenerateSeoFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate public/sitemap.xml, public/merchant.xml, and public/robots.txt files';

    /**
     * Execute the console command.
     */
    public function handle(SeoController $seoController): int
    {
        $this->info('Generating SEO files in public directory...');

        // 1. Sitemap
        $this->line('- Generating sitemap.xml...');
        $sitemapResponse = $seoController->sitemap();
        file_put_contents(public_path('sitemap.xml'), $sitemapResponse->getContent());
        $this->info('  ✓ public/sitemap.xml created.');

        // 2. Merchant Center
        $this->line('- Generating merchant.xml (Google Merchant Center feed)...');
        $merchantResponse = $seoController->merchantFeed();
        file_put_contents(public_path('merchant.xml'), $merchantResponse->getContent());
        file_put_contents(public_path('merchant-center.xml'), $merchantResponse->getContent());
        $this->info('  ✓ public/merchant.xml and public/merchant-center.xml created.');

        // 3. Robots.txt
        $this->line('- Updating robots.txt...');
        $robotsResponse = $seoController->robots();
        file_put_contents(public_path('robots.txt'), $robotsResponse->getContent());
        $this->info('  ✓ public/robots.txt updated.');

        $this->newLine();
        $this->info('All SEO and Google Merchant Center files generated successfully!');

        return 0;
    }
}
