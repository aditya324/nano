<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadandNeckCancerSurgerywithOncologySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Head and Neck Cancer Surgery (with Oncology)')],
            [
                'title' => 'Head and Neck Cancer Surgery (with Oncology)',
                'slug' => Str::slug('Head and Neck Cancer Surgery (with Oncology)'),
                'introduction' => 'Head and neck cancer surgery is a specialized procedure performed in coordination with oncology teams to remove cancerous growths affecting the mouth, throat, larynx, salivary glands, thyroid, nose, sinuses, or neck structures. The surgery aims to remove tumors completely while preserving breathing, swallowing, speech, and appearance as much as possible. Multidisciplinary cancer care improves treatment outcomes and long-term survival.',
                'what_is' => 'The treatment plan is developed jointly by ENT surgeons, oncologists, radiologists, and rehabilitation specialists. Surgical procedures vary depending on the tumor location, size, and stage. The surgery may involve: Tumor excision Neck dissection Reconstruction procedures Airway management Speech and swallowing rehabilitation planning Additional cancer treatment such as chemotherapy or radiation therapy may also be required. Advanced surgical techniques help improve functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Persistent throat pain'],
            ['value' => 'Neck swelling or lump'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Unexplained mouth ulcers or bleeding'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Speech or swallowing difficulty'],
            ['value' => 'Facial or nerve weakness'],
            ['value' => 'Need for tracheostomy or feeding support'],
            ['value' => 'Cancer recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend oncology and ENT follow-up visits regularly'],
            ['value' => 'Maintain nutrition and hydration carefully'],
            ['value' => 'Continue speech or swallowing therapy if advised'],
            ['value' => 'Avoid tobacco and alcohol completely'],
            ['value' => 'Monitor for breathing or swallowing difficulties'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Speech or swallowing difficulty'],
            ['value' => 'Facial or nerve weakness'],
            ['value' => 'Need for tracheostomy or feeding support'],
            ['value' => 'Cancer recurrence'],
        ],
                'long_term_outlook' => 'Early diagnosis and multidisciplinary treatment improve survival and quality of life. Long-term rehabilitation and follow-up are important for cancer recovery and recurrence prevention.',
                'conclusion' => '',
                'seo_title' => 'Head and Neck Cancer Surgery (with Oncology)',
                'seo_description' => 'Head and neck cancer surgery is a specialized procedure performed in coordination with oncology teams to remove cancerous growths affecting the mouth, throat, larynx, salivary glands, thyroid, nose, sinuses, or neck structures. The surgery aims to remove tumors completely while preserving breathing, swallowing, speech, and appearance as much as possible. Multidisciplinary cancer care improves treatment outcomes and long-term survival.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
