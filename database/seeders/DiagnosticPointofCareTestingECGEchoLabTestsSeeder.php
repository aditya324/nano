<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiagnosticPointofCareTestingECGEchoLabTestsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diagnostic & Point-of-Care Testing (ECG, Echo & Lab Tests)')],
            [
                'title' => 'Diagnostic & Point-of-Care Testing (ECG, Echo & Lab Tests)',
                'slug' => Str::slug('Diagnostic & Point-of-Care Testing (ECG, Echo & Lab Tests)'),
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
                'seo_title' => 'Diagnostic & Point-of-Care Testing (ECG, Echo & Lab Tests)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
