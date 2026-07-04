<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalBiopsyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Biopsy')],
            [
                'name' => 'Renal Biopsy',
                'slug' => Str::slug('Renal Biopsy'),
                'h1' => 'Renal Biopsy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal biopsy is a diagnostic procedure in which a small sample of kidney tissue is removed for microscopic examination to identify kidney diseases accurately.',
                'about_more' => 'This procedure helps diagnose glomerular diseases, inflammation, autoimmune disorders, unexplained kidney failure, and proteinuria. Renal biopsy provides critical information for selecting the most effective treatment plan.',
                'overview' => 'The procedure is usually performed under ultrasound guidance using local anesthesia. A specialized biopsy needle is inserted through the skin into the kidney to obtain tissue samples. The biopsy helps diagnose: Glomerulonephritis Lupus nephritis Nephrotic syndrome Kidney transplant rejection Unexplained renal dysfunction After the procedure, patients are monitored for bleeding, pain, blood pressure changes, and urine abnormalities. Laboratory examination of the tissue guides future treatment decisions.',
                'symptoms' => [
            ['value' => 'Persistent protein in urine'],
            ['value' => 'Blood in urine'],
            ['value' => 'Unexplained kidney failure'],
            ['value' => 'Nephrotic syndrome'],
            ['value' => 'Autoimmune kidney disease suspicion'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Blood in urine'],
            ['value' => 'Infection'],
            ['value' => 'Rare injury to surrounding structures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Rest for the advised duration'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Monitor urine for blood'],
            ['value' => 'Maintain hydration'],
            ['value' => 'Attend follow-up review appointments'],
        ],
                'recovery' => 'Renal biopsy provides accurate diagnosis and improves treatment planning for complex kidney diseases. Early diagnosis through biopsy often leads to better disease control and improved long-term renal outcomes.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Renal Biopsy',
                'meta_description' => 'Renal biopsy is a diagnostic procedure in which a small sample of kidney tissue is removed for microscopic examination to identify kidney diseases accurately.',
                'meta_keywords' => '',
            ]
        );
    }
}
