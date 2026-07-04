<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverBiopsyPercutaneousTransjugularSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Liver Biopsy (Percutaneous / Transjugular)')],
            [
                'title' => 'Liver Biopsy (Percutaneous / Transjugular)',
                'slug' => Str::slug('Liver Biopsy (Percutaneous / Transjugular)'),
                'introduction' => 'Liver biopsy is a procedure used to collect a small sample of liver tissue for microscopic examination to diagnose liver diseases. It helps evaluate inflammation, fibrosis, fatty liver disease, infections, and liver tumors.',
                'what_is' => 'Types of liver biopsy include: Percutaneous biopsy through the skin Transjugular biopsy through neck veins The procedure helps diagnose: Hepatitis Cirrhosis Fatty liver disease Autoimmune liver disorders Liver cancer Imaging guidance improves safety and accuracy.',
                'symptoms' => [
            ['value' => 'Abnormal liver function tests'],
            ['value' => 'Chronic hepatitis symptoms'],
            ['value' => 'Liver enlargement or swelling'],
            ['value' => 'Unexplained jaundice'],
            ['value' => 'Suspected liver fibrosis or cirrhosis'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Infection risk'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Rare severe internal bleeding'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest for several hours after procedure'],
            ['value' => 'Avoid heavy lifting temporarily'],
            ['value' => 'Monitor for abdominal pain or bleeding'],
            ['value' => 'Attend follow-up appointments for results'],
            ['value' => 'Follow liver disease treatment plans carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain at biopsy site'],
            ['value' => 'Infection risk'],
            ['value' => 'Injury to nearby organs'],
            ['value' => 'Rare severe internal bleeding'],
        ],
                'long_term_outlook' => 'Liver biopsy provides accurate diagnosis, guides treatment decisions, and improves long-term management of liver diseases.',
                'conclusion' => '',
                'seo_title' => 'Liver Biopsy (Percutaneous / Transjugular)',
                'seo_description' => 'Liver biopsy is a procedure used to collect a small sample of liver tissue for microscopic examination to diagnose liver diseases. It helps evaluate inflammation, fibrosis, fatty liver disease, infections, and liver tumors.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
