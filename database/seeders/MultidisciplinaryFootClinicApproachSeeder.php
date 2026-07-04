<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryFootClinicApproachSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Foot Clinic Approach')],
            [
                'title' => 'Multidisciplinary Foot Clinic Approach',
                'slug' => Str::slug('Multidisciplinary Foot Clinic Approach'),
                'introduction' => 'A multidisciplinary foot clinic approach involves coordinated care from multiple specialists for diabetic foot management.',
                'what_is' => 'Complex diabetic foot conditions often require combined expertise from diabetologists, surgeons, vascular specialists, podiatrists, wound care nurses, and physiotherapists.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Complex diabetic foot ulcers'],
            ['value' => 'Recurrent infections'],
            ['value' => 'Charcot foot'],
            ['value' => 'Limb salvage programs'],
            ['value' => 'Post-amputation rehabilitation'],
            ['value' => 'Treatments'],
            ['value' => 'Care may include wound management, vascular procedures, infection control, diabetic optimization, rehabilitation, orthotic support, and patient education.'],
            ['value' => 'Benefits'],
            ['value' => 'Comprehensive treatment planning'],
            ['value' => 'Improved healing outcomes'],
            ['value' => 'Reduced amputation rates'],
            ['value' => 'Better long-term diabetic care'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Multiple hospital visits'],
            ['value' => 'Need for long-term follow-up'],
            ['value' => 'Coordination challenges in severe cases'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular specialist follow-up'],
            ['value' => 'Medication adherence'],
            ['value' => 'Wound care continuation'],
            ['value' => 'Lifestyle modification'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Multidisciplinary care significantly improves diabetic foot healing and overall patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Multidisciplinary Foot Clinic Approach',
                'seo_description' => 'A multidisciplinary foot clinic approach involves coordinated care from multiple specialists for diabetic foot management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
