<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Preferred canonical host
    |--------------------------------------------------------------------------
    |
    | All public URLs, canonical tags, and sitemaps should use this host.
    | Apex (non-www) requests for this site are permanently redirected here.
    |
    */

    'preferred_host' => env('SEO_PREFERRED_HOST', 'www.nanohospitals.in'),

    /*
    |--------------------------------------------------------------------------
    | Domains that should be redirected to the preferred host
    |--------------------------------------------------------------------------
    */

    'redirect_hosts' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('SEO_REDIRECT_HOSTS', 'nanohospitals.in'))
    ))),

    /*
    |--------------------------------------------------------------------------
    | Enforce HTTPS when serving on preferred / redirect hosts
    |--------------------------------------------------------------------------
    */

    'force_https' => (bool) env('SEO_FORCE_HTTPS', true),

    /*
    |--------------------------------------------------------------------------
    | Legacy .php URL → clean path map (301)
    |--------------------------------------------------------------------------
    */

    'legacy_php_redirects' => [
        'index.php' => '/',
        'about.php' => '/about',
        'why-nano.php' => '/why-nano',
        'careers.php' => '/careers',
        'career.php' => '/careers',
        'bg-road.php' => '/bg-road',
        'hulimavu.php' => '/bg-road',
        'uttarahalli.php' => '/uttarahalli',
        'doctors.php' => '/doctors',
        'specialities.php' => '/specialities',
        'specialties.php' => '/specialities',
        'conditions.php' => '/conditions',
        'procedures.php' => '/procedures',
        'blog.php' => '/blog',
        'news.php' => '/news-and-media',
        'news-and-media.php' => '/news-and-media',
        'second-opinion.php' => '/second-opinion',
        'international-patients.php' => '/international-patients',
        'patient-testimonials.php' => '/patient-testimonials',
        'testimonials.php' => '/patient-testimonials',
        'doctor-videos.php' => '/doctor-videos',
        'health-packages.php' => '/health-packages',
        'health-facilities.php' => '/health-facilities',
        'basic-package.php' => '/health-packages/basic-health-package',
        'basic-health-package.php' => '/health-packages/basic-health-package',
        'pre-employment.php' => '/health-packages/pre-employment-package',
        'pre-employment-package.php' => '/health-packages/pre-employment-package',
        'master-health-package.php' => '/health-packages/master-health-package',
        'diabetic-health-package.php' => '/health-packages',
        'cancer-pacakge.php' => '/health-packages',
        'cancer-package.php' => '/health-packages',
        'fitness-package.php' => '/health-packages',
        'fertility-package.php' => '/health-packages',
    ],

];
