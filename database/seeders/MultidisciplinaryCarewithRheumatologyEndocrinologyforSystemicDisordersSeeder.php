<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryCarewithRheumatologyEndocrinologyforSystemicDisordersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Care with Rheumatology / Endocrinology for Systemic Disorders')],
            [
                'title' => 'Multidisciplinary Care with Rheumatology / Endocrinology for Systemic Disorders',
                'slug' => Str::slug('Multidisciplinary Care with Rheumatology / Endocrinology for Systemic Disorders'),
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
                'seo_title' => 'Multidisciplinary Care with Rheumatology / Endocrinology for Systemic Disorders',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
