<?php

namespace App\Services;

final class LeadWebhookSendResult
{
    public function __construct(
        public readonly bool $wasAttempted,
        public readonly bool $succeeded,
    ) {}

    public function shouldTreatAsSuccess(): bool
    {
        return ! $this->wasAttempted || $this->succeeded;
    }
}
