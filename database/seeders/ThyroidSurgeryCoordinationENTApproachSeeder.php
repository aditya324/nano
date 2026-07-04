<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThyroidSurgeryCoordinationENTApproachSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thyroid Surgery Coordination (ENT Approach)')],
            [
                'title' => 'Thyroid Surgery Coordination (ENT Approach)',
                'slug' => Str::slug('Thyroid Surgery Coordination (ENT Approach)'),
                'introduction' => 'Thyroid surgery coordination in ENT involves evaluation, surgical planning, and multidisciplinary management of thyroid gland disorders requiring operative treatment. ENT surgeons often manage thyroid conditions affecting the neck, airway, swallowing, or voice. The approach focuses on safe thyroid surgery and preservation of vital neck structures.',
                'what_is' => 'The service includes: Thyroid examination Ultrasound and biopsy coordination Surgical planning Airway assessment Post-operative voice evaluation ENT-related thyroid surgery may involve: Thyroid nodule removal Partial thyroidectomy Total thyroidectomy Cancer surgery coordination Special attention is given to preserving the recurrent laryngeal nerve and parathyroid glands.',
                'symptoms' => [
            ['value' => 'Neck swelling'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Breathing difficulty'],
            ['value' => 'Thyroid nodules or masses'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Voice changes due to nerve injury'],
            ['value' => 'Low calcium levels'],
            ['value' => 'Infection'],
            ['value' => 'Scar formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend thyroid follow-up evaluations regularly'],
            ['value' => 'Monitor voice changes carefully'],
            ['value' => 'Take thyroid medications if prescribed'],
            ['value' => 'Maintain wound care properly'],
            ['value' => 'Report breathing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Voice changes due to nerve injury'],
            ['value' => 'Low calcium levels'],
            ['value' => 'Infection'],
            ['value' => 'Scar formation'],
        ],
                'long_term_outlook' => 'Proper thyroid surgery coordination improves treatment outcomes and preserves voice and swallowing function. Long-term monitoring supports thyroid health and recovery.',
                'conclusion' => '',
                'seo_title' => 'Thyroid Surgery Coordination (ENT Approach)',
                'seo_description' => 'Thyroid surgery coordination in ENT involves evaluation, surgical planning, and multidisciplinary management of thyroid gland disorders requiring operative treatment. ENT surgeons often manage thyroid conditions affecting the neck, airway, swallowing, or voice. The approach focuses on safe thyroid surgery and preservation of vital neck structures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
