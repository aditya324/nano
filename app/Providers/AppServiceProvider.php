<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Condition;
use App\Models\ConditionFaq;
use App\Models\Doctor;
use App\Models\HealthFacilityPage;
use App\Models\HealthPackage;
use App\Models\PackageSection;
use App\Models\PackageSectionItem;
use App\Models\Procedure;
use App\Models\ProcedureFaq;
use App\Models\Speciality;
use App\Models\SpecialityFaq;
use App\Observers\ContentCacheObserver;
use App\Services\ContentCache;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ContentCache::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
        $this->configurePreferredUrlGeneration();

        $observer = ContentCacheObserver::class;

        foreach ([
            Blog::class,
            Condition::class,
            ConditionFaq::class,
            Doctor::class,
            HealthFacilityPage::class,
            HealthPackage::class,
            PackageSection::class,
            PackageSectionItem::class,
            Procedure::class,
            ProcedureFaq::class,
            Speciality::class,
            SpecialityFaq::class,
        ] as $model) {
            $model::observe($observer);
        }
    }

    /**
     * Ensure route(), url(), and asset() URLs match the preferred canonical host.
     *
     * In local, bind generated URLs (including Vite build assets) to the host
     * you are actually browsing — not a remote APP_URL — so `npm run build`
     * loads /build from php artisan serve instead of production.
     */
    protected function configurePreferredUrlGeneration(): void
    {
        if ($this->app->environment('local')) {
            $this->app->booted(function () {
                if ($this->app->runningInConsole()) {
                    return;
                }

                $root = rtrim((string) request()->root(), '/');

                if ($root !== '') {
                    URL::forceRootUrl($root);
                }
            });

            return;
        }

        $root = rtrim((string) config('app.url'), '/');

        if ($root === '' || str_contains($root, 'localhost') || str_contains($root, '127.0.0.1')) {
            return;
        }

        $preferredHost = strtolower((string) config('seo.preferred_host'));
        $redirectHosts = array_map('strtolower', config('seo.redirect_hosts', []));
        $currentHost = strtolower((string) parse_url($root, PHP_URL_HOST));

        if ($preferredHost !== '' && $currentHost !== '' && (
            $currentHost === $preferredHost || in_array($currentHost, $redirectHosts, true)
        )) {
            $scheme = parse_url($root, PHP_URL_SCHEME) ?: 'https';
            if (config('seo.force_https', true)) {
                $scheme = 'https';
            }
            $root = $scheme.'://'.$preferredHost;
        }

        URL::forceRootUrl($root);

        if (str_starts_with($root, 'https://')) {
            URL::forceScheme('https');
        }
    }
}
