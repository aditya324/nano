<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalBiopsyNeedlesImagingGuidanceSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Renal Biopsy Needles & Imaging Guidance')],
            [
                'title' => 'Renal Biopsy Needles & Imaging Guidance',
                'slug' => Str::slug('Renal Biopsy Needles & Imaging Guidance'),
                'introduction' => 'Renal biopsy needles and imaging guidance systems are specialized nephrology tools used to safely obtain kidney tissue samples for microscopic examination and diagnosis. The procedure helps diagnose complex kidney diseases, inflammatory disorders, autoimmune conditions, and unexplained kidney dysfunction. Advanced imaging guidance improves biopsy accuracy and reduces complications.',
                'what_is' => 'The facility includes: Specialized renal biopsy needles Ultrasound or CT imaging guidance Sterile biopsy instruments Monitoring equipment Emergency support systems Imaging guidance allows doctors to: Precisely locate the kidney Avoid nearby structures Reduce bleeding risk Obtain adequate tissue samples safely Renal biopsy helps diagnose: Glomerulonephritis Lupus nephritis Nephrotic syndrome Kidney transplant rejection Unexplained renal failure Patients are closely monitored after the procedure for bleeding, pain, or urinary complications.',
                'symptoms' => [
            ['value' => 'Persistent protein in urine'],
            ['value' => 'Blood in urine'],
            ['value' => 'Unexplained kidney dysfunction'],
            ['value' => 'Autoimmune kidney disease suspicion'],
            ['value' => 'Abnormal renal test results'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Blood in urine'],
            ['value' => 'Infection risk'],
            ['value' => 'Rare injury to nearby organs'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest for the advised duration'],
            ['value' => 'Monitor urine color carefully'],
            ['value' => 'Avoid heavy activity temporarily'],
            ['value' => 'Attend follow-up review appointments'],
            ['value' => 'Report severe pain or dizziness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Blood in urine'],
            ['value' => 'Infection risk'],
            ['value' => 'Rare injury to nearby organs'],
        ],
                'long_term_outlook' => 'Modern biopsy guidance systems improve diagnostic accuracy and patient safety during kidney disease evaluation. Accurate biopsy diagnosis supports targeted treatment and better long-term renal care outcomes.',
                'conclusion' => '',
                'seo_title' => 'Renal Biopsy Needles & Imaging Guidance',
                'seo_description' => 'Renal biopsy needles and imaging guidance systems are specialized nephrology tools used to safely obtain kidney tissue samples for microscopic examination and diagnosis. The procedure helps diagnose complex kidney diseases, inflammatory disorders, autoimmune conditions, and unexplained kidney dysfunction. Advanced imaging guidance improves biopsy accuracy and reduces complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
