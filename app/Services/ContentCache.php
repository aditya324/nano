<?php

namespace App\Services;

use Closure;
use Illuminate\Support\Facades\Cache;

class ContentCache
{
    public const TTL_SHORT = 1800;  // 30 minutes — home / filtered lists
    public const TTL_MEDIUM = 3600; // 1 hour — detail pages
    public const TTL_LONG = 21600;  // 6 hours — sitemap

    /**
     * Cache a value under a versioned content key so flush() can invalidate
     * all content entries without wiping OTP or other application cache.
     */
    public function remember(string $key, int $ttlSeconds, Closure $callback): mixed
    {
        return Cache::remember($this->versionedKey($key), $ttlSeconds, $callback);
    }

    /**
     * Invalidate every content cache entry by bumping the shared version.
     */
    public function flush(): void
    {
        $version = (int) Cache::get($this->versionKey(), 1);
        Cache::forever($this->versionKey(), $version + 1);
    }

    private function versionKey(): string
    {
        return 'content:version';
    }

    private function versionedKey(string $key): string
    {
        $version = (int) Cache::get($this->versionKey(), 1);

        return 'content:v'.$version.':'.$key;
    }
}
