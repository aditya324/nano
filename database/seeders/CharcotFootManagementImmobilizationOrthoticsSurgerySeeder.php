<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CharcotFootManagementImmobilizationOrthoticsSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Charcot Foot Management (Immobilization, Orthotics, Surgery)')],
            [
                'title' => 'Charcot Foot Management (Immobilization, Orthotics, Surgery)',
                'slug' => Str::slug('Charcot Foot Management (Immobilization, Orthotics, Surgery)'),
                'introduction' => 'Charcot foot management focuses on stabilizing weakened bones and joints affected by diabetic neuropathy.',
                'what_is' => 'Charcot foot can lead to severe deformity, fractures, ulcers, and disability if not treated promptly.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic neuropathy'],
            ['value' => 'Foot deformity'],
            ['value' => 'Recurrent foot ulcers'],
            ['value' => 'Joint instability'],
            ['value' => 'Bone collapse in diabetic foot'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment includes immobilization with casts or boots, custom orthotics, pressure offloading, physiotherapy, and corrective surgery in severe deformities.'],
            ['value' => 'Benefits'],
            ['value' => 'Prevention of deformity progression'],
            ['value' => 'Reduced ulcer formation'],
            ['value' => 'Improved foot stability'],
            ['value' => 'Better mobility'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Delayed diagnosis'],
            ['value' => 'Recurrent ulcers'],
            ['value' => 'Joint deformity'],
            ['value' => 'Surgical complications'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Strict offloading'],
            ['value' => 'Regular foot monitoring'],
            ['value' => 'Diabetic footwear use'],
            ['value' => 'Follow-up imaging evaluation'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Early management helps preserve foot structure and reduces long-term disability.',
                'conclusion' => '',
                'seo_title' => 'Charcot Foot Management (Immobilization, Orthotics, Surgery)',
                'seo_description' => 'Charcot foot management focuses on stabilizing weakened bones and joints affected by diabetic neuropathy.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
