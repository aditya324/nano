<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HepatitisViralAutoimmuneDrugInducedConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hepatitis (Viral / Autoimmune / Drug-Induced)')],
            [
                'name' => 'Hepatitis (Viral / Autoimmune / Drug-Induced)',
                'slug' => Str::slug('Hepatitis (Viral / Autoimmune / Drug-Induced)'),
                'h1' => 'Hepatitis (Viral / Autoimmune / Drug-Induced)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hepatitis is inflammation of the liver caused by viral infections, autoimmune disorders, toxins, alcohol, or medications.',
                'about_more' => '',
                'overview' => 'Hepatitis is inflammation of the liver caused by viral infections, autoimmune disorders, toxins, alcohol, or medications.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Yellow discoloration of skin and eyes (jaundice)'],
            ['value' => 'Loss of appetite'],
            ['value' => 'Nausea and abdominal discomfort'],
            ['value' => 'Dark urine and pale stools'],
        ],
                'causes' => [
            ['value' => 'Hepatitis A, B, C, D, or E viral infections'],
            ['value' => 'Autoimmune liver inflammation'],
            ['value' => 'Alcohol and toxic substances'],
            ['value' => 'Drug-induced liver injury'],
            ['value' => 'Metabolic and genetic disorders'],
        ],
                'risks' => [
            ['value' => 'Chronic liver disease'],
            ['value' => 'Liver cirrhosis and failure'],
            ['value' => 'Liver cancer risk'],
            ['value' => 'Severe jaundice and bleeding problems'],
            ['value' => 'Hepatic encephalopathy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antiviral medications'],
            ['value' => 'Immunosuppressive therapy for autoimmune hepatitis'],
            ['value' => 'Avoidance of alcohol and toxic drugs'],
            ['value' => 'Liver function monitoring'],
            ['value' => 'Nutritional and supportive care'],
        ],
                'recovery' => 'Many forms of hepatitis are treatable and manageable with early diagnosis. Chronic hepatitis requires long-term follow-up.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Hepatitis (Viral / Autoimmune / Drug-Induced)',
                'meta_description' => 'Hepatitis is inflammation of the liver caused by viral infections, autoimmune disorders, toxins, alcohol, or medications.',
                'meta_keywords' => '',
            ]
        );
    }
}
