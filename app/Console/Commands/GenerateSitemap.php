<?php

namespace App\Console\Commands;

use App\Http\Controllers\SitemapController;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the public/sitemap.xml file';

    public function handle(SitemapController $sitemapController): int
    {
        $xml = $sitemapController->buildXmlContent();

        if ($xml === '') {
            $this->error('Sitemap generation failed.');

            return self::FAILURE;
        }

        $path = public_path('sitemap.xml');
        file_put_contents($path, $xml);

        $this->info("Sitemap written to {$path}");

        return self::SUCCESS;
    }
}
