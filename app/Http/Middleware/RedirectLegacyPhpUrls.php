<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectLegacyPhpUrls
{
    /**
     * Permanently redirect known legacy *.php paths to their Laravel equivalents.
     *
     * @param  Closure(Request): Response  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = ltrim($request->getPathInfo(), '/');

        if ($path === '' || ! str_ends_with(strtolower($path), '.php')) {
            return $next($request);
        }

        $redirects = config('seo.legacy_php_redirects', []);
        $basename = strtolower(basename($path));

        if (! isset($redirects[$basename])) {
            return $next($request);
        }

        $target = $redirects[$basename];
        $query = $request->getQueryString();

        if ($query) {
            $target .= (str_contains($target, '?') ? '&' : '?').$query;
        }

        $preferredHost = strtolower((string) config('seo.preferred_host'));
        $requestHost = strtolower($request->getHost());
        $redirectHosts = array_map('strtolower', config('seo.redirect_hosts', []));
        $isManagedHost = $requestHost === $preferredHost || in_array($requestHost, $redirectHosts, true);

        if ($isManagedHost && $preferredHost !== '') {
            $scheme = config('seo.force_https', true) ? 'https' : $request->getScheme();

            return redirect()->away($scheme.'://'.$preferredHost.$target, 301);
        }

        return redirect()->to($target, 301);
    }
}
