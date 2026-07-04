<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PalliativeSurgicalCareinAdvancedCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Palliative Surgical Care in Advanced Cancer')],
            [
                'title' => 'Palliative Surgical Care in Advanced Cancer',
                'slug' => Str::slug('Palliative Surgical Care in Advanced Cancer'),
                'introduction' => 'Palliative surgical care involves procedures performed to relieve symptoms and improve quality of life in patients with advanced or incurable cancer. The focus is on comfort, symptom relief, and supportive care rather than cure.',
                'what_is' => 'Palliative surgery may help manage: Pain Intestinal obstruction Bleeding Difficulty swallowing Wound complications Fluid accumulation Procedures are carefully planned based on: Patient condition Cancer stage Functional status Expected quality-of-life benefit The care approach is multidisciplinary and includes oncology, pain specialists, nutritionists, and psychological support teams.',
                'symptoms' => [
            ['value' => 'Severe cancer-related pain'],
            ['value' => 'Intestinal obstruction symptoms'],
            ['value' => 'Bleeding or ulcerating tumors'],
            ['value' => 'Difficulty eating or swallowing'],
            ['value' => 'Advanced cancer-related weakness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical complications in weakened patients'],
            ['value' => 'Delayed healing due to advanced disease'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Temporary symptom recurrence'],
            ['value' => 'Emotional and psychological stress'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Focus on comfort and pain management'],
            ['value' => 'Maintain nutritional and emotional support'],
            ['value' => 'Attend palliative care follow-up regularly'],
            ['value' => 'Monitor for symptom recurrence or infection'],
            ['value' => 'Continue supportive therapies as advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical complications in weakened patients'],
            ['value' => 'Delayed healing due to advanced disease'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Temporary symptom recurrence'],
            ['value' => 'Emotional and psychological stress'],
        ],
                'long_term_outlook' => 'Palliative surgical care can significantly improve comfort, dignity, symptom control, and quality of life in advanced cancer patients.',
                'conclusion' => '',
                'seo_title' => 'Palliative Surgical Care in Advanced Cancer',
                'seo_description' => 'Palliative surgical care involves procedures performed to relieve symptoms and improve quality of life in patients with advanced or incurable cancer. The focus is on comfort, symptom relief, and supportive care rather than cure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
