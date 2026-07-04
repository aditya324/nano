<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisWaterTreatmentPlantConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis Water Treatment Plant')],
            [
                'name' => 'Dialysis Water Treatment Plant',
                'slug' => Str::slug('Dialysis Water Treatment Plant'),
                'h1' => 'Dialysis Water Treatment Plant',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Dialysis Water Treatment Plant is a specialized purification system designed to provide ultra-pure water for hemodialysis treatment.',
                'about_more' => 'Since dialysis patients are exposed to large volumes of water during treatment, strict purification standards are essential to prevent infections, toxicity, and dialysis-related complications. The facility is a critical part of safe nephrology dialysis infrastructure.',
                'overview' => 'The water treatment plant typically includes: Reverse osmosis purification systems Carbon filters Water softeners Ultraviolet sterilization units Endotoxin filters Continuous water quality monitoring The system removes: Harmful bacteria Heavy metals Chemicals Excess minerals Endotoxins and impurities Regular testing and maintenance ensure compliance with dialysis safety standards and NABH protocols. The purified water supports safe and effective long-term dialysis treatment.',
                'symptoms' => [
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Severe fluid overload'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Advanced renal disease'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Water contamination'],
            ['value' => 'Dialysis-related infection'],
            ['value' => 'Chemical exposure complications'],
            ['value' => 'Treatment interruption'],
            ['value' => 'Equipment malfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend dialysis at certified dialysis centers'],
            ['value' => 'Monitor symptoms during treatment'],
            ['value' => 'Follow dialysis safety instructions'],
            ['value' => 'Maintain regular nephrology follow-up'],
            ['value' => 'Report unusual dialysis reactions immediately'],
        ],
                'recovery' => 'A properly maintained dialysis water treatment plant greatly improves dialysis safety and patient survival. Advanced water purification systems are essential for high-quality long-term renal replacement therapy.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Dialysis Water Treatment Plant',
                'meta_description' => 'A Dialysis Water Treatment Plant is a specialized purification system designed to provide ultra-pure water for hemodialysis treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
