<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoordinationwithSubspecialtiesCardiologyNephrologyEndocrinologyPulmonologySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Coordination with Subspecialties (Cardiology, Nephrology, Endocrinology & Pulmonology)')],
            [
                'title' => 'Coordination with Subspecialties (Cardiology, Nephrology, Endocrinology & Pulmonology)',
                'slug' => Str::slug('Coordination with Subspecialties (Cardiology, Nephrology, Endocrinology & Pulmonology)'),
                'introduction' => '',
                'what_is' => '',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Coordination with Subspecialties (Cardiology, Nephrology, Endocrinology & Pulmonology)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
