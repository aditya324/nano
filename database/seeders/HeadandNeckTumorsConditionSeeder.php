<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadandNeckTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Head and Neck Tumors')],
            [
                'name' => 'Head and Neck Tumors',
                'slug' => Str::slug('Head and Neck Tumors'),
                'h1' => 'Head and Neck Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Head and neck tumors are abnormal growths occurring in the mouth, throat, nose, salivary glands, thyroid, or surrounding tissues. Tumors may be benign or malignant and require careful evaluation.',
                'about_more' => '',
                'overview' => 'Head and neck tumors are abnormal growths occurring in the mouth, throat, nose, salivary glands, thyroid, or surrounding tissues. Tumors may be benign or malignant and require careful evaluation.',
                'symptoms' => [
            ['value' => 'Persistent neck swelling or lump'],
            ['value' => 'Difficulty swallowing or speaking'],
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Unexplained weight loss'],
            ['value' => 'Bleeding or nonhealing mouth sores'],
        ],
                'causes' => [
            ['value' => 'Tobacco and alcohol use'],
            ['value' => 'Viral infections such as HPV'],
            ['value' => 'Long-term irritation or inflammation'],
            ['value' => 'Radiation exposure'],
            ['value' => 'Genetic predisposition'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby structures'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Difficulty eating and speaking'],
            ['value' => 'Facial or neck deformity'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and biopsy'],
            ['value' => 'Imaging studies such as CT or MRI'],
            ['value' => 'Surgical tumor removal'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Long-term cancer follow-up care'],
        ],
                'recovery' => 'Outcome depends on tumor type and stage. Early diagnosis significantly improves survival and treatment success.',
                'sort_order' => 45,
                'is_active' => true,
                'meta_title' => 'Head and Neck Tumors',
                'meta_description' => 'Head and neck tumors are abnormal growths occurring in the mouth, throat, nose, salivary glands, thyroid, or surrounding tissues. Tumors may be benign or malign',
                'meta_keywords' => '',
            ]
        );
    }
}
