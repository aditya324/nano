<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OralCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Oral Cancer')],
            [
                'name' => 'Oral Cancer',
                'slug' => Str::slug('Oral Cancer'),
                'h1' => 'Oral Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Oral cancer is a malignant growth affecting the lips, tongue, cheeks, gums, or floor of the mouth. It is strongly associated with tobacco, alcohol, and certain viral infections.',
                'about_more' => '',
                'overview' => 'Oral cancer is a malignant growth affecting the lips, tongue, cheeks, gums, or floor of the mouth. It is strongly associated with tobacco, alcohol, and certain viral infections.',
                'symptoms' => [
            ['value' => 'Nonhealing mouth ulcer or sore'],
            ['value' => 'White or red patches inside the mouth'],
            ['value' => 'Pain or bleeding in the oral cavity'],
            ['value' => 'Difficulty chewing or swallowing'],
            ['value' => 'Neck swelling due to lymph node involvement'],
        ],
                'causes' => [
            ['value' => 'Tobacco smoking or chewing'],
            ['value' => 'Excessive alcohol consumption'],
            ['value' => 'HPV infection'],
            ['value' => 'Poor oral hygiene'],
            ['value' => 'Chronic irritation from sharp teeth or dentures'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to lymph nodes'],
            ['value' => 'Difficulty speaking and eating'],
            ['value' => 'Facial disfigurement after progression'],
            ['value' => 'Weight loss and malnutrition'],
            ['value' => 'Life-threatening metastatic disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral examination and biopsy'],
            ['value' => 'Surgical removal of cancer'],
            ['value' => 'Radiation therapy'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Rehabilitation and nutritional support'],
        ],
                'recovery' => 'Early-stage oral cancer has a better prognosis with prompt treatment. Avoiding tobacco greatly reduces future risk.',
                'sort_order' => 46,
                'is_active' => true,
                'meta_title' => 'Oral Cancer',
                'meta_description' => 'Oral cancer is a malignant growth affecting the lips, tongue, cheeks, gums, or floor of the mouth. It is strongly associated with tobacco, alcohol, and certain ',
                'meta_keywords' => '',
            ]
        );
    }
}
