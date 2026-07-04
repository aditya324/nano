<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadandNeckCancersOralLaryngealPharyngealSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Head and Neck Cancers (Oral, Laryngeal, Pharyngeal)')],
            [
                'title' => 'Head and Neck Cancers (Oral, Laryngeal, Pharyngeal)',
                'slug' => Str::slug('Head and Neck Cancers (Oral, Laryngeal, Pharyngeal)'),
                'introduction' => '',
                'what_is' => 'Head and neck cancers are cancers that develop in the mouth, throat, larynx (voice box), pharynx, tongue, sinuses, and surrounding head and neck structures. These cancers can affect speech, swallowing, breathing, eating, and overall quality of life. Early diagnosis and timely treatment are important to control disease progression and improve long-term outcomes. Common Symptoms Persistent mouth ulcers or sores that do not heal Difficulty swallowing, speaking, or breathing Hoarseness or change in voice Lump or swelling in the neck, mouth, or throat Unexplained weight loss or bleeding from the mouth/throat Causes & Triggers Tobacco smoking or chewing tobacco Excessive alcohol consumption Human Papillomavirus (HPV) infection Poor oral hygiene and chronic irritation Exposure to environmental pollutants or chemicals Risks & Complications Spread of cancer to nearby tissues and lymph nodes Difficulty with eating, swallowing, and speech Breathing obstruction in advanced disease Nutritional deficiencies and severe weight loss Recurrence of cancer after treatment Recovery & Outlook Recovery depends on the type, stage, and early detection of the cancer. Timely treatment, healthy lifestyle changes, smoking and alcohol cessation, nutritional support, rehabilitation therapy, and regular follow-up care significantly improve recovery outcomes and quality of life. Early diagnosis and multidisciplinary cancer care help reduce complications, improve survival rates, and support long-term physical and functional well-being.',
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
                'seo_title' => 'Head and Neck Cancers (Oral, Laryngeal, Pharyngeal)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
