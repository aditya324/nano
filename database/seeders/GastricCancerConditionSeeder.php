<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastricCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastric Cancer')],
            [
                'name' => 'Gastric Cancer',
                'slug' => Str::slug('Gastric Cancer'),
                'h1' => 'Gastric Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastric cancer, also known as stomach cancer, develops when abnormal cells grow uncontrollably in the lining of the stomach. The condition may develop gradually over time and can spread to nearby organs or lymph nodes if not detected early. Early diagnosis and timely treatment are important for improving treatment outcomes and survival.',
                'about_more' => '',
                'overview' => 'Gastric cancer, also known as stomach cancer, develops when abnormal cells grow uncontrollably in the lining of the stomach. The condition may develop gradually over time and can spread to nearby organs or lymph nodes if not detected early. Early diagnosis and timely treatment are important for improving treatment outcomes and survival.',
                'symptoms' => [
            ['value' => 'Persistent stomach pain or discomfort'],
            ['value' => 'Loss of appetite and unexplained weight loss'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Feeling full quickly after eating small amounts of food'],
            ['value' => 'Difficulty swallowing or blood in vomit or stool in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Infection with Helicobacter pylori (H. pylori) bacteria'],
            ['value' => 'Smoking and excessive alcohol consumption'],
            ['value' => 'Diet high in smoked, salty, or processed foods'],
            ['value' => 'Family history and genetic predisposition'],
            ['value' => 'Chronic stomach inflammation or gastric ulcers'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or lymph nodes'],
            ['value' => 'Severe weight loss and malnutrition'],
            ['value' => 'Stomach bleeding and anemia'],
            ['value' => 'Difficulty eating and digestive complications'],
            ['value' => 'Treatment-related complications affecting immunity and digestion'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor or part of the stomach'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy in selected cases'],
            ['value' => 'Nutritional support and symptom management'],
            ['value' => 'Multidisciplinary cancer care and long-term monitoring'],
        ],
                'recovery' => 'The long-term outlook for gastric cancer depends on the stage of cancer, overall health condition, and response to treatment. Early diagnosis and comprehensive cancer management can significantly improve survival and quality of life. Continuous follow-up, nutritional care, and preventive lifestyle modifications are important for long-term recovery and monitoring for recurrence. ________________________ Esophageal Cancer Conditions',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Gastric Cancer',
                'meta_description' => 'Gastric cancer, also known as stomach cancer, develops when abnormal cells grow uncontrollably in the lining of the stomach. The condition may develop gradually',
                'meta_keywords' => '',
            ]
        );
    }
}
