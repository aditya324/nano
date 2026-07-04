<?php

namespace App\Filament\Resources\HealthFacilityPages\Pages;

use App\Filament\Resources\HealthFacilityPages\HealthFacilityPageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Arr;

class CreateHealthFacilityPage extends CreateRecord
{
    protected static string $resource = HealthFacilityPageResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['faqs'] = collect($data['faqs'] ?? [])
            ->map(fn ($item) => [
                'question' => trim((string) Arr::get($item, 'question', '')),
                'answer' => trim((string) Arr::get($item, 'answer', '')),
            ])
            ->filter(fn ($item) => filled($item['question']) && filled($item['answer']))
            ->values()
            ->all();

        return $data;
    }
}
