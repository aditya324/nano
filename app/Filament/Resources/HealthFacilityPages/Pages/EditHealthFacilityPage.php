<?php

namespace App\Filament\Resources\HealthFacilityPages\Pages;

use App\Filament\Resources\HealthFacilityPages\HealthFacilityPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Arr;

class EditHealthFacilityPage extends EditRecord
{
    protected static string $resource = HealthFacilityPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $existingFaqs = collect($data['faqs'] ?? [])
            ->filter(fn ($item) => filled(Arr::get($item, 'question')) && filled(Arr::get($item, 'answer')))
            ->values()
            ->all();

        if (!empty($existingFaqs)) {
            $data['faqs'] = $existingFaqs;

            return $data;
        }

        $legacyFaqs = $this->parseLegacyFaqs($data['faqs_content'] ?? null);
        if (!empty($legacyFaqs)) {
            $data['faqs'] = $legacyFaqs;
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
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

    /**
     * Convert legacy faqs_content HTML (h2/h3/h4 + body) to structured FAQs.
     */
    private function parseLegacyFaqs(?string $html): array
    {
        if (blank($html)) {
            return [];
        }

        preg_match_all('/<h([234])[^>]*>(.*?)<\/h\1>(.*?)(?=<h[234]\s|$)/si', $html, $matches, PREG_SET_ORDER);

        return collect($matches)
            ->map(function (array $match): array {
                return [
                    'question' => trim(strip_tags($match[2] ?? '')),
                    'answer' => trim($match[3] ?? ''),
                ];
            })
            ->filter(fn ($item) => filled($item['question']) && filled($item['answer']))
            ->values()
            ->all();
    }
}
