<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastricCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Gastric Cancer')],
            [
                'title' => 'Gastric Cancer',
                'slug' => Str::slug('Gastric Cancer'),
                'introduction' => '',
                'what_is' => 'Gastric cancer, also known as stomach cancer, develops when abnormal cells grow uncontrollably in the lining of the stomach. The condition may develop gradually over time and can spread to nearby organs or lymph nodes if not detected early. Early diagnosis and timely treatment are important for improving treatment outcomes and survival. Common Symptoms Persistent stomach pain or discomfort Loss of appetite and unexplained weight loss Nausea or vomiting Feeling full quickly after eating small amounts of food Difficulty swallowing or blood in vomit or stool in advanced cases Causes & Triggers Infection with Helicobacter pylori (H. pylori) bacteria Smoking and excessive alcohol consumption Diet high in smoked, salty, or processed foods Family history and genetic predisposition Chronic stomach inflammation or gastric ulcers Risks & Complications Spread of cancer to nearby organs or lymph nodes Severe weight loss and malnutrition Stomach bleeding and anemia Difficulty eating and digestive complications Treatment-related complications affecting immunity and digestion Treatment Options Surgical removal of the tumor or part of the stomach Chemotherapy and targeted therapy Radiation therapy in selected cases Nutritional support and symptom management Multidisciplinary cancer care and long-term monitoring Recovery & Outlook The long-term outlook for gastric cancer depends on the stage of cancer, overall health condition, and response to treatment. Early diagnosis and comprehensive cancer management can significantly improve survival and quality of life. Continuous follow-up, nutritional care, and preventive lifestyle modifications are important for long-term recovery and monitoring for recurrence. Esophageal Cancer Conditions',
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
                'seo_title' => 'Gastric Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
