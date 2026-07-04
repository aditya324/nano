<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreaticCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pancreatic Cancer')],
            [
                'name' => 'Pancreatic Cancer',
                'slug' => Str::slug('Pancreatic Cancer'),
                'h1' => 'Pancreatic Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pancreatic cancer is a type of cancer that develops in the tissues of the pancreas, an organ located behind the stomach that helps with digestion and blood sugar regulation. The disease often progresses silently in its early stages and may spread to nearby organs or distant parts of the body if not detected early. Early diagnosis and specialized cancer care are important for improving treatment outcomes.',
                'about_more' => 'Head and neck cancers are cancers that develop in the mouth, throat, larynx (voice box), pharynx, tongue, sinuses, and surrounding head and neck structures. These cancers can affect speech, swallowing, breathing, eating, and overall quality of life. Early diagnosis and timely treatment are important to control disease progression and improve long-term outcomes.',
                'overview' => 'Pancreatic cancer is a type of cancer that develops in the tissues of the pancreas, an organ located behind the stomach that helps with digestion and blood sugar regulation. The disease often progresses silently in its early stages and may spread to nearby organs or distant parts of the body if not detected early. Early diagnosis and specialized cancer care are important for improving treatment outcomes. Head and neck cancers are cancers that develop in the mouth, throat, larynx (voice box), pharynx, tongue, sinuses, and surrounding head and neck structures. These cancers can affect speech, swallowing, breathing, eating, and overall quality of life. Early diagnosis and timely treatment are important to control disease progression and improve long-term outcomes.',
                'symptoms' => [
            ['value' => 'Abdominal pain that may spread to the back or sides'],
            ['value' => 'Nausea, vomiting, or digestive discomfort'],
            ['value' => 'Yellowing of the skin and eyes (jaundice)'],
            ['value' => 'Dark urine and pale-colored stools'],
            ['value' => 'Fatigue, weakness, or unexplained weight loss'],
            ['value' => 'Persistent mouth ulcers or sores that do not heal'],
            ['value' => 'Difficulty swallowing, speaking, or breathing'],
            ['value' => 'Hoarseness or change in voice'],
            ['value' => 'Lump or swelling in the neck, mouth, or throat'],
            ['value' => 'Unexplained weight loss or bleeding from the mouth/throat'],
        ],
                'causes' => [
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Obesity, especially excess abdominal fat'],
            ['value' => 'Type 2 diabetes and metabolic disorders'],
            ['value' => 'Exposure to certain industrial chemicals or pesticides'],
            ['value' => 'Family history and genetic predisposition'],
            ['value' => 'Tobacco smoking or chewing tobacco'],
            ['value' => 'Excessive alcohol consumption'],
            ['value' => 'Human Papillomavirus (HPV) infection'],
            ['value' => 'Poor oral hygiene and chronic irritation'],
            ['value' => 'Exposure to environmental pollutants or chemicals'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or distant body parts'],
            ['value' => 'Severe weight loss and malnutrition'],
            ['value' => 'Digestive problems and poor nutrient absorption'],
            ['value' => 'Liver complications and bile duct obstruction'],
            ['value' => 'Complications related to chemotherapy, surgery, or advanced cancer progression'],
            ['value' => 'Spread of cancer to nearby tissues and lymph nodes'],
            ['value' => 'Difficulty with eating, swallowing, and speech'],
            ['value' => 'Breathing obstruction in advanced disease'],
            ['value' => 'Nutritional deficiencies and severe weight loss'],
            ['value' => 'Recurrence of cancer after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor when possible'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy in selected cases'],
            ['value' => 'Pain management and nutritional support'],
            ['value' => 'Multidisciplinary cancer care and palliative support'],
        ],
                'recovery' => 'The long-term outlook for pancreatic cancer depends on the stage of disease, overall health condition, and response to treatment. Early diagnosis and advanced cancer management can improve survival and quality of life. Continuous follow-up, supportive care, nutritional management, and multidisciplinary treatment planning are important for long-term care and symptom control. _______________________ 8. Head and Neck Cancers (Oral, Laryngeal, Pharyngeal) Head and Neck Cancers (Oral, Laryngeal, Pharyngeal) Conditions Recovery depends on the type, stage, and early detection of the cancer. Timely treatment, healthy lifestyle changes, smoking and alcohol cessation, nutritional support, rehabilitation therapy, and regular follow-up care significantly improve recovery outcomes and quality of life. Early diagnosis and multidisciplinary cancer care help reduce complications, improve survival rates, and support long-term physical and functional well-being. __________________________ 9. Thyroid Cancer',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Pancreatic Cancer',
                'meta_description' => 'Pancreatic cancer is a type of cancer that develops in the tissues of the pancreas, an organ located behind the stomach that helps with digestion and blood suga',
                'meta_keywords' => '',
            ]
        );
    }
}
