<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RegularFootScreeningRiskStratificationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Regular Foot Screening & Risk Stratification')],
            [
                'title' => 'Regular Foot Screening & Risk Stratification',
                'slug' => Str::slug('Regular Foot Screening & Risk Stratification'),
                'introduction' => 'Regular foot screening helps identify diabetic patients at high risk for ulcers, infections, and circulation problems.',
                'what_is' => 'Routine screening allows early detection of neuropathy, poor circulation, deformities, and skin changes before serious complications develop.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot risk assessment'],
            ['value' => 'Neuropathy screening'],
            ['value' => 'Circulation evaluation'],
            ['value' => 'Ulcer prevention'],
            ['value' => 'Long-term diabetic monitoring'],
            ['value' => 'Treatments'],
            ['value' => 'Screening may include foot examination, sensory testing, vascular assessment, pressure evaluation, footwear assessment, and preventive care planning.'],
            ['value' => 'Benefits'],
            ['value' => 'Early complication detection'],
            ['value' => 'Prevention of ulcers and amputations'],
            ['value' => 'Improved diabetic monitoring'],
            ['value' => 'Better treatment planning'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Missed follow-up appointments'],
            ['value' => 'Delayed intervention in severe disease'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow recommended foot care advice'],
            ['value' => 'Attend regular screenings'],
            ['value' => 'Maintain diabetic control'],
            ['value' => 'Use proper footwear'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Routine screening improves early intervention and reduces severe diabetic foot complications.',
                'conclusion' => '',
                'seo_title' => 'Regular Foot Screening & Risk Stratification',
                'seo_description' => 'Regular foot screening helps identify diabetic patients at high risk for ulcers, infections, and circulation problems.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
