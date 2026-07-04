<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Condition;
use App\Models\Doctor;
use App\Models\HealthFacilityPage;
use App\Models\HealthPackage;
use App\Models\Procedure;
use App\Models\Speciality;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index(): Response
    {
        return response($this->buildXmlContent(), 200)->header('Content-Type', 'application/xml');
    }

    public function buildXmlContent(): string
    {
        $baseUrl = rtrim((string) config('app.url'), '/');
        $urls = [];

        $staticPages = [
            ['path' => '/', 'priority' => '1.0'],
            ['path' => '/about', 'priority' => '0.9'],
            ['path' => '/why-nano', 'priority' => '0.8'],
            ['path' => '/bg-road', 'priority' => '0.9'],
            ['path' => '/uttarahalli', 'priority' => '0.9'],
            ['path' => '/doctors', 'priority' => '0.9'],
            ['path' => '/specialities', 'priority' => '0.9'],
            ['path' => '/conditions', 'priority' => '0.9'],
            ['path' => '/procedures', 'priority' => '0.9'],
            ['path' => '/health-facilities', 'priority' => '0.9'],
            ['path' => '/health-packages', 'priority' => '0.8'],
            ['path' => '/blog', 'priority' => '0.8'],
            ['path' => '/second-opinion', 'priority' => '0.7'],
            ['path' => '/international-patients', 'priority' => '0.7'],
            ['path' => '/patient-testimonials', 'priority' => '0.6'],
            ['path' => '/doctor-videos', 'priority' => '0.6'],
            ['path' => '/news-and-media', 'priority' => '0.6'],
            ['path' => '/careers', 'priority' => '0.5'],
        ];

        foreach ($staticPages as $page) {
            $urls[] = $this->entry($baseUrl . $page['path'], now(), $page['priority']);
        }

        Doctor::query()
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (Doctor $doctor) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('doctors.show', $doctor->slug, false),
                    $doctor->updated_at,
                    '0.8'
                );
            });

        Speciality::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (Speciality $speciality) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('specialities.show', $speciality->slug, false),
                    $speciality->updated_at,
                    '0.8'
                );
            });

        Condition::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (Condition $condition) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('conditions.show', $condition->slug, false),
                    $condition->updated_at,
                    '0.8'
                );
            });

        Procedure::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (Procedure $procedure) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('procedures.show', $procedure->slug, false),
                    $procedure->updated_at,
                    '0.8'
                );
            });

        HealthFacilityPage::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (HealthFacilityPage $facility) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('health-facilities.show', $facility->slug, false),
                    $facility->updated_at,
                    '0.7'
                );
            });

        HealthPackage::query()
            ->whereNotNull('slug')
            ->orderBy('updated_at', 'desc')
            ->get(['slug', 'updated_at'])
            ->each(function (HealthPackage $package) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('packages.show', $package->slug, false),
                    $package->updated_at,
                    '0.7'
                );
            });

        Blog::query()
            ->where('is_published', true)
            ->whereNotNull('slug')
            ->orderByDesc('published_at')
            ->get(['slug', 'updated_at', 'published_at'])
            ->each(function (Blog $blog) use (&$urls, $baseUrl) {
                $urls[] = $this->entry(
                    $baseUrl . route('blogs.show', $blog->slug, false),
                    $blog->updated_at ?? $blog->published_at,
                    '0.6'
                );
            });

        return $this->buildXml($urls);
    }

    private function buildXml(array $urls): string
    {
        $xml = new \SimpleXMLElement(
            '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>'
        );

        foreach ($urls as $url) {
            $node = $xml->addChild('url');
            $node->addChild('loc', $url['loc']);
            $node->addChild('lastmod', $url['lastmod']);
            $node->addChild('priority', $url['priority']);
        }

        $document = $xml->asXML();

        return is_string($document) ? ltrim($document) : '';
    }

    private function entry(string $loc, ?Carbon $lastModified, string $priority): array
    {
        return [
            'loc' => $loc,
            'lastmod' => ($lastModified ?? now())->toAtomString(),
            'priority' => $priority,
        ];
    }
}
