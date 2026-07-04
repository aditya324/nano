<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisWaterTreatmentPlantSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Dialysis Water Treatment Plant')],
            [
                'title' => 'Dialysis Water Treatment Plant',
                'slug' => Str::slug('Dialysis Water Treatment Plant'),
                'introduction' => 'A Dialysis Water Treatment Plant is a specialized purification system designed to provide ultra-pure water for hemodialysis treatment. Since dialysis patients are exposed to large volumes of water during treatment, strict purification standards are essential to prevent infections, toxicity, and dialysis-related complications. The facility is a critical part of safe nephrology dialysis infrastructure.',
                'what_is' => 'The water treatment plant typically includes: Reverse osmosis purification systems Carbon filters Water softeners Ultraviolet sterilization units Endotoxin filters Continuous water quality monitoring The system removes: Harmful bacteria Heavy metals Chemicals Excess minerals Endotoxins and impurities Regular testing and maintenance ensure compliance with dialysis safety standards and NABH protocols. The purified water supports safe and effective long-term dialysis treatment.',
                'symptoms' => [
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Severe fluid overload'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Advanced renal disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Water contamination'],
            ['value' => 'Dialysis-related infection'],
            ['value' => 'Chemical exposure complications'],
            ['value' => 'Treatment interruption'],
            ['value' => 'Equipment malfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend dialysis at certified dialysis centers'],
            ['value' => 'Monitor symptoms during treatment'],
            ['value' => 'Follow dialysis safety instructions'],
            ['value' => 'Maintain regular nephrology follow-up'],
            ['value' => 'Report unusual dialysis reactions immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Water contamination'],
            ['value' => 'Dialysis-related infection'],
            ['value' => 'Chemical exposure complications'],
            ['value' => 'Treatment interruption'],
            ['value' => 'Equipment malfunction'],
        ],
                'long_term_outlook' => 'A properly maintained dialysis water treatment plant greatly improves dialysis safety and patient survival. Advanced water purification systems are essential for high-quality long-term renal replacement therapy.',
                'conclusion' => '',
                'seo_title' => 'Dialysis Water Treatment Plant',
                'seo_description' => 'A Dialysis Water Treatment Plant is a specialized purification system designed to provide ultra-pure water for hemodialysis treatment. Since dialysis patients are exposed to large volumes of water during treatment, strict purification standards are essential to prevent infections, toxicity, and dialysis-related complications. The facility is a critical part of safe nephrology dialysis infrastructure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
