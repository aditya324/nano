<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverDiseaseManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Liver Disease Management')],
            [
                'title' => 'Liver Disease Management',
                'slug' => Str::slug('Liver Disease Management'),
                'introduction' => 'Liver disease management involves comprehensive medical care aimed at controlling liver disorders, reducing complications, preserving liver function, and improving overall health. Treatment approaches may include medications, regular monitoring, nutritional support, lifestyle modifications, and supportive therapies tailored to the underlying liver condition.',
                'what_is' => 'Liver disease management is commonly used for conditions such as hepatitis, fatty liver disease, cirrhosis, liver inflammation, autoimmune liver disorders, and liver failure. Management plans focus on treating the underlying cause, monitoring liver function, preventing complications, and supporting long-term liver health. Care may involve medication therapy, regular laboratory testing, imaging studies, nutritional counseling, and management of complications such as fluid retention, bleeding, or infection.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice (yellowing of the skin and eyes)'],
            ['value' => 'Abdominal swelling or discomfort'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Itchy skin, dark urine, or pale stools'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Progression to liver cirrhosis or liver failure'],
            ['value' => 'Fluid accumulation and portal hypertension'],
            ['value' => 'Internal bleeding and blood clotting abnormalities'],
            ['value' => 'Increased risk of liver cancer and infections'],
            ['value' => 'Kidney dysfunction and metabolic complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular liver function tests and imaging monitoring'],
            ['value' => 'Medication adherence and supportive therapy management'],
            ['value' => 'Dietary counseling and alcohol avoidance'],
            ['value' => 'Monitoring for complications such as ascites or encephalopathy'],
            ['value' => 'Long-term hepatology or internal medicine follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Progression to liver cirrhosis or liver failure'],
            ['value' => 'Fluid accumulation and portal hypertension'],
            ['value' => 'Internal bleeding and blood clotting abnormalities'],
            ['value' => 'Increased risk of liver cancer and infections'],
            ['value' => 'Kidney dysfunction and metabolic complications'],
        ],
                'long_term_outlook' => 'The long-term outlook for liver disease depends on the underlying cause, severity of liver damage, and response to treatment. Early diagnosis, proper medical management, lifestyle modifications, and continuous monitoring can significantly slow disease progression and improve quality of life. Ongoing liver care and preventive management are important for maintaining long-term liver function and overall health.',
                'conclusion' => '',
                'seo_title' => 'Liver Disease Management',
                'seo_description' => 'Liver disease management involves comprehensive medical care aimed at controlling liver disorders, reducing complications, preserving liver function, and improving overall health. Treatment approaches may include medications, regular monitoring, nutritional support, lifestyle modifications, and supportive therapies tailored to the underlying liver condition.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
