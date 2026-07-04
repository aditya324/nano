<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HemodialysisUnitROBasedSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hemodialysis Unit (RO-Based)')],
            [
                'title' => 'Hemodialysis Unit (RO-Based)',
                'slug' => Str::slug('Hemodialysis Unit (RO-Based)'),
                'introduction' => 'A Hemodialysis Unit with Reverse Osmosis (RO)-based water purification is a specialized nephrology facility designed to provide safe and effective dialysis treatment for patients with severe kidney failure and advanced renal disease. The RO purification system removes bacteria, toxins, heavy metals, chemicals, and harmful impurities from water used during dialysis treatment. Since dialysis exposes patients to large amounts of treated water, maintaining high-quality purified water is essential for patient safety and successful dialysis outcomes. This facility serves as a critical life-support service for patients requiring regular renal replacement therapy.',
                'what_is' => 'The hemodialysis unit is equipped with advanced dialysis infrastructure including: RO-based purified water systems Modern dialysis machines Patient monitoring systems Emergency resuscitation support Infection-control facilities Specialized dialysis staff and nephrology supervision During dialysis, blood is circulated through a dialysis machine where waste products, excess fluid, and toxins are removed before the blood is safely returned to the body. The unit supports: Maintenance hemodialysis Emergency dialysis Acute kidney injury management Fluid overload treatment Electrolyte correction Long-term renal replacement therapy Strict infection prevention measures, water quality monitoring, and patient safety protocols are continuously maintained according to nephrology and NABH standards.',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Severe fluid overload'],
            ['value' => 'Dangerous electrolyte imbalance'],
            ['value' => 'Uremic symptoms'],
            ['value' => 'Acute kidney injury requiring dialysis'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Blood pressure fluctuations during dialysis'],
            ['value' => 'Dialysis-related infections'],
            ['value' => 'Vascular access complications'],
            ['value' => 'Muscle cramps or fatigue'],
            ['value' => 'Rare allergic or technical complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend all dialysis sessions regularly'],
            ['value' => 'Maintain dialysis access hygiene carefully'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Monitor weight and blood pressure routinely'],
            ['value' => 'Inform healthcare providers about unusual symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Blood pressure fluctuations during dialysis'],
            ['value' => 'Dialysis-related infections'],
            ['value' => 'Vascular access complications'],
            ['value' => 'Muscle cramps or fatigue'],
            ['value' => 'Rare allergic or technical complications'],
        ],
                'long_term_outlook' => 'A well-equipped RO-based hemodialysis unit significantly improves survival, symptom control, and quality of life in patients with kidney failure. Modern dialysis care combined with nephrology supervision allows patients to maintain safer long-term renal replacement therapy with improved overall health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Hemodialysis Unit (RO-Based)',
                'seo_description' => 'A Hemodialysis Unit with Reverse Osmosis (RO)-based water purification is a specialized nephrology facility designed to provide safe and effective dialysis treatment for patients with severe kidney failure and advanced renal disease. The RO purification system removes bacteria, toxins, heavy metals, chemicals, and harmful impurities from water used during dialysis treatment. Since dialysis exposes patients to large amounts of treated water, maintaining high-quality purified water is essential for patient safety and successful dialysis outcomes. This facility serves as a critical life-support service for patients requiring regular renal replacement therapy.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
