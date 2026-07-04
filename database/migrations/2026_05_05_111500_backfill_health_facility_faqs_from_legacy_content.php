<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('health_facility_pages')
            ->orderBy('id')
            ->chunkById(100, function ($rows): void {
                foreach ($rows as $row) {
                    $existingFaqs = json_decode($row->faqs ?? '[]', true);
                    if (!empty($existingFaqs) || blank($row->faqs_content)) {
                        continue;
                    }

                    preg_match_all('/<h([234])[^>]*>(.*?)<\/h\1>(.*?)(?=<h[234]\s|$)/si', $row->faqs_content, $matches, PREG_SET_ORDER);

                    $parsed = collect($matches)
                        ->map(function (array $match): array {
                            return [
                                'question' => trim(strip_tags($match[2] ?? '')),
                                'answer' => trim($match[3] ?? ''),
                            ];
                        })
                        ->filter(fn ($item) => filled($item['question']) && filled($item['answer']))
                        ->values()
                        ->all();

                    if (empty($parsed)) {
                        continue;
                    }

                    DB::table('health_facility_pages')
                        ->where('id', $row->id)
                        ->update(['faqs' => json_encode($parsed)]);
                }
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Intentionally left blank to avoid removing curated FAQ data.
    }
};

