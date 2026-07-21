<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForcePreferredHost
{
    /**
     * Permanently redirect apex / HTTP requests to the preferred HTTPS www host.
     *
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->shouldSkipForLocalDevelopment($request)) {
            return $next($request);
        }

        $preferredHost = strtolower((string) config('seo.preferred_host'));
        $redirectHosts = array_map('strtolower', config('seo.redirect_hosts', []));
        $requestHost = strtolower($request->getHost());

        $isManagedHost = $requestHost === $preferredHost || in_array($requestHost, $redirectHosts, true);

        if (! $isManagedHost || $preferredHost === '') {
            return $next($request);
        }

        $shouldForceHttps = (bool) config('seo.force_https', true);
        $needsHostRedirect = $requestHost !== $preferredHost;
        $needsHttpsRedirect = $shouldForceHttps && ! $request->secure();

        if (! $needsHostRedirect && ! $needsHttpsRedirect) {
            return $next($request);
        }

        $scheme = $shouldForceHttps ? 'https' : $request->getScheme();
        $target = $scheme.'://'.$preferredHost.$request->getRequestUri();

        return redirect()->to($target, 301);
    }

    private function shouldSkipForLocalDevelopment(Request $request): bool
    {
        if (app()->environment('local', 'testing')) {
            return true;
        }

        $host = strtolower($request->getHost());

        return in_array($host, ['127.0.0.1', 'localhost', '[::1]'], true);
    }
}
