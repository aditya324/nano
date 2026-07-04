<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopicalTherapySteroidsAntibioticsAntifungalsRetinoidsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Topical Therapy (Steroids, Antibiotics, Antifungals, Retinoids)')],
            [
                'title' => 'Topical Therapy (Steroids, Antibiotics, Antifungals, Retinoids)',
                'slug' => Str::slug('Topical Therapy (Steroids, Antibiotics, Antifungals, Retinoids)'),
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
                'seo_title' => 'Topical Therapy (Steroids, Antibiotics, Antifungals, Retinoids)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
