<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SystemicTherapyOralAntibioticsAntifungalsRetinoidsImmunosuppressantsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Systemic Therapy (Oral Antibiotics, Antifungals, Retinoids, Immunosuppressants)')],
            [
                'title' => 'Systemic Therapy (Oral Antibiotics, Antifungals, Retinoids, Immunosuppressants)',
                'slug' => Str::slug('Systemic Therapy (Oral Antibiotics, Antifungals, Retinoids, Immunosuppressants)'),
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
                'seo_title' => 'Systemic Therapy (Oral Antibiotics, Antifungals, Retinoids, Immunosuppressants)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
