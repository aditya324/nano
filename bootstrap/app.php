<?php

use App\Http\Middleware\ForcePreferredHost;
use App\Http\Middleware\RedirectLegacyPhpUrls;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(at: '*');

        // Global: must run even when no Laravel route matches (legacy *.php URLs).
        // Legacy PHP first so apex + *.php can land on the final www URL in one hop.
        $middleware->prepend([
            RedirectLegacyPhpUrls::class,
            ForcePreferredHost::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
