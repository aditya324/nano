<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofHepaticEncephalopathySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Hepatic Encephalopathy')],
            [
                'title' => 'Management of Hepatic Encephalopathy',
                'slug' => Str::slug('Management of Hepatic Encephalopathy'),
                'introduction' => 'Hepatic encephalopathy is a brain dysfunction caused by severe liver disease, where toxins accumulate and affect mental function. Treatment focuses on reducing toxin buildup and improving liver function.',
                'what_is' => 'Management includes: Lactulose therapy Antibiotics such as rifaximin Correction of electrolyte imbalance Treatment of infections or bleeding triggers Nutritional support Prompt treatment helps prevent severe neurological complications and coma.',
                'symptoms' => [
            ['value' => 'Confusion or forgetfulness'],
            ['value' => 'Drowsiness or altered behavior'],
            ['value' => 'Difficulty concentrating'],
            ['value' => 'Tremors or hand flapping movements'],
            ['value' => 'Severe cases may progress to unconsciousness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Recurrence of encephalopathy episodes'],
            ['value' => 'Falls or injury from confusion'],
            ['value' => 'Severe neurological deterioration'],
            ['value' => 'Infection-related worsening'],
            ['value' => 'Progression to liver failure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications regularly as prescribed'],
            ['value' => 'Avoid alcohol completely'],
            ['value' => 'Maintain balanced nutrition and hydration'],
            ['value' => 'Monitor mental status changes closely'],
            ['value' => 'Attend regular liver specialist follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Recurrence of encephalopathy episodes'],
            ['value' => 'Falls or injury from confusion'],
            ['value' => 'Severe neurological deterioration'],
            ['value' => 'Infection-related worsening'],
            ['value' => 'Progression to liver failure'],
        ],
                'long_term_outlook' => 'Proper treatment and monitoring can control symptoms, reduce hospitalizations, and improve quality of life in chronic liver disease patients.',
                'conclusion' => '',
                'seo_title' => 'Management of Hepatic Encephalopathy',
                'seo_description' => 'Hepatic encephalopathy is a brain dysfunction caused by severe liver disease, where toxins accumulate and affect mental function. Treatment focuses on reducing toxin buildup and improving liver function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
