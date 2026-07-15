<?php

namespace App\Observers;

use App\Services\ContentCache;

class ContentCacheObserver
{
    public function __construct(
        private readonly ContentCache $contentCache,
    ) {}

    public function saved(mixed $model): void
    {
        $this->contentCache->flush();
    }

    public function deleted(mixed $model): void
    {
        $this->contentCache->flush();
    }
}
