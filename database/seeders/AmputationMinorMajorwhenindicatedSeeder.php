<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AmputationMinorMajorwhenindicatedSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Amputation (Minor / Major) when indicated')],
            [
                'title' => 'Amputation (Minor / Major) when indicated',
                'slug' => Str::slug('Amputation (Minor / Major) when indicated'),
                'introduction' => 'Amputation may be necessary in severe diabetic foot disease when infection or tissue damage cannot be controlled.',
                'what_is' => 'The goal is to remove non-viable tissue, control infection, and preserve as much limb function as possible.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Severe gangrene'],
            ['value' => 'Uncontrolled infection'],
            ['value' => 'Advanced osteomyelitis'],
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Non-salvageable tissue damage'],
            ['value' => 'Treatments'],
            ['value' => 'Procedures may include toe amputation, partial foot amputation, below-knee amputation, or above-knee amputation depending on disease severity.'],
            ['value' => 'Benefits'],
            ['value' => 'Infection control'],
            ['value' => 'Pain relief'],
            ['value' => 'Prevention of life-threatening sepsis'],
            ['value' => 'Improved rehabilitation potential'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Phantom limb pain'],
            ['value' => 'Emotional stress'],
            ['value' => 'Prosthetic rehabilitation needs'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wound care and dressing changes'],
            ['value' => 'Physiotherapy'],
            ['value' => 'Prosthetic rehabilitation'],
            ['value' => 'Blood sugar management'],
            ['value' => 'Psychological support'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Early rehabilitation and proper diabetic management help improve mobility and quality of life after amputation.',
                'conclusion' => '',
                'seo_title' => 'Amputation (Minor / Major) when indicated',
                'seo_description' => 'Amputation may be necessary in severe diabetic foot disease when infection or tissue damage cannot be controlled.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
