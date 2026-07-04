<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalBiopsyNeedlesImagingGuidanceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Biopsy Needles & Imaging Guidance')],
            [
                'name' => 'Renal Biopsy Needles & Imaging Guidance',
                'slug' => Str::slug('Renal Biopsy Needles & Imaging Guidance'),
                'h1' => 'Renal Biopsy Needles & Imaging Guidance',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal biopsy needles and imaging guidance systems are specialized nephrology tools used to safely obtain kidney tissue samples for microscopic examination and diagnosis.',
                'about_more' => 'The procedure helps diagnose complex kidney diseases, inflammatory disorders, autoimmune conditions, and unexplained kidney dysfunction. Advanced imaging guidance improves biopsy accuracy and reduces complications.',
                'overview' => 'The facility includes: Specialized renal biopsy needles Ultrasound or CT imaging guidance Sterile biopsy instruments Monitoring equipment Emergency support systems Imaging guidance allows doctors to: Precisely locate the kidney Avoid nearby structures Reduce bleeding risk Obtain adequate tissue samples safely Renal biopsy helps diagnose: Glomerulonephritis Lupus nephritis Nephrotic syndrome Kidney transplant rejection Unexplained renal failure Patients are closely monitored after the procedure for bleeding, pain, or urinary complications.',
                'symptoms' => [
            ['value' => 'Persistent protein in urine'],
            ['value' => 'Blood in urine'],
            ['value' => 'Unexplained kidney dysfunction'],
            ['value' => 'Autoimmune kidney disease suspicion'],
            ['value' => 'Abnormal renal test results'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Blood in urine'],
            ['value' => 'Infection risk'],
            ['value' => 'Rare injury to nearby organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Rest for the advised duration'],
            ['value' => 'Monitor urine color carefully'],
            ['value' => 'Avoid heavy activity temporarily'],
            ['value' => 'Attend follow-up review appointments'],
            ['value' => 'Report severe pain or dizziness immediately'],
        ],
                'recovery' => 'Modern biopsy guidance systems improve diagnostic accuracy and patient safety during kidney disease evaluation. Accurate biopsy diagnosis supports targeted treatment and better long-term renal care outcomes.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Renal Biopsy Needles & Imaging Guidance',
                'meta_description' => 'Renal biopsy needles and imaging guidance systems are specialized nephrology tools used to safely obtain kidney tissue samples for microscopic examination and d',
                'meta_keywords' => '',
            ]
        );
    }
}
