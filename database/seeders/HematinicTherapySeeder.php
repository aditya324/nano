<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HematinicTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hematinic Therapy')],
            [
                'title' => 'Hematinic Therapy',
                'slug' => Str::slug('Hematinic Therapy'),
                'introduction' => 'Hematinic therapy involves the use of medications and nutritional supplements that help improve the production of healthy blood cells and treat different types of anemia. Hematinics commonly include iron, vitamin B12, folic acid, and other nutrients essential for red blood cell formation and proper oxygen transport in the body.',
                'what_is' => 'Hematinic therapy is widely used in individuals with iron deficiency anemia, vitamin B12 deficiency anemia, folate deficiency, chronic illness-related anemia, pregnancy-related anemia, and nutritional deficiencies. Treatment may be given orally or through injections depending on the severity of deficiency and the patient’s ability to absorb nutrients. Hematinic therapy helps restore hemoglobin levels, improve oxygen delivery, and reduce symptoms such as fatigue and weakness.',
                'symptoms' => [
            ['value' => 'Fatigue and generalized weakness'],
            ['value' => 'Pale skin or dizziness'],
            ['value' => 'Shortness of breath during activity'],
            ['value' => 'Poor appetite or nutritional deficiency symptoms'],
            ['value' => 'Low hemoglobin or abnormal blood test results'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Untreated anemia and reduced oxygen delivery'],
            ['value' => 'Severe nutritional deficiencies affecting blood formation'],
            ['value' => 'Pregnancy-related complications due to anemia'],
            ['value' => 'Neurological complications from vitamin B12 deficiency'],
            ['value' => 'Reduced immunity and physical performance'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood count and hemoglobin monitoring'],
            ['value' => 'Monitoring iron, vitamin B12, and folate levels'],
            ['value' => 'Dietary counseling and nutritional support'],
            ['value' => 'Medication adherence and follow-up evaluations'],
            ['value' => 'Long-term monitoring of response to therapy and underlying causes'],
        ],
                'surgery_risks' => [
            ['value' => 'Untreated anemia and reduced oxygen delivery'],
            ['value' => 'Severe nutritional deficiencies affecting blood formation'],
            ['value' => 'Pregnancy-related complications due to anemia'],
            ['value' => 'Neurological complications from vitamin B12 deficiency'],
            ['value' => 'Reduced immunity and physical performance'],
        ],
                'long_term_outlook' => 'The long-term outlook with hematinic therapy is generally positive when nutritional deficiencies and underlying causes are properly treated. Most individuals experience improvement in hemoglobin levels, energy, and overall health with regular treatment and monitoring. Early diagnosis, balanced nutrition, and continued medical follow-up are important for preventing recurrence and maintaining healthy blood cell production.',
                'conclusion' => '',
                'seo_title' => 'Hematinic Therapy',
                'seo_description' => 'Hematinic therapy involves the use of medications and nutritional supplements that help improve the production of healthy blood cells and treat different types of anemia. Hematinics commonly include iron, vitamin B12, folic acid, and other nutrients essential for red blood cell formation and proper oxygen transport in the body.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
