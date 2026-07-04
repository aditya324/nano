<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OralCavityLesionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Oral Cavity Lesions')],
            [
                'name' => 'Oral Cavity Lesions',
                'slug' => Str::slug('Oral Cavity Lesions'),
                'h1' => 'Oral Cavity Lesions',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Oral cavity lesions are abnormal patches, ulcers, swellings, or growths inside the mouth involving the lips, tongue, cheeks, gums, or palate. They may be benign, infectious, inflammatory, or cancerous.',
                'about_more' => '',
                'overview' => 'Oral cavity lesions are abnormal patches, ulcers, swellings, or growths inside the mouth involving the lips, tongue, cheeks, gums, or palate. They may be benign, infectious, inflammatory, or cancerous.',
                'symptoms' => [
            ['value' => 'White or red patches inside the mouth'],
            ['value' => 'Painful or painless oral sores'],
            ['value' => 'Difficulty chewing or swallowing'],
            ['value' => 'Bleeding from mouth lesions'],
            ['value' => 'Persistent mouth discomfort or irritation'],
        ],
                'causes' => [
            ['value' => 'Infections and inflammation'],
            ['value' => 'Tobacco and alcohol use'],
            ['value' => 'Nutritional deficiencies'],
            ['value' => 'Trauma from sharp teeth or dentures'],
            ['value' => 'Precancerous or cancerous changes'],
        ],
                'risks' => [
            ['value' => 'Chronic pain and eating difficulty'],
            ['value' => 'Infection and bleeding'],
            ['value' => 'Delayed diagnosis of oral cancer'],
            ['value' => 'Nutritional problems due to painful chewing'],
            ['value' => 'Spread of malignant disease if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT and oral examination'],
            ['value' => 'Biopsy for suspicious lesions'],
            ['value' => 'Medications for infections or inflammation'],
            ['value' => 'Removal of irritants and lifestyle modification'],
            ['value' => 'Surgical excision or cancer treatment if required'],
        ],
                'recovery' => 'Many lesions heal with proper treatment and oral care. Persistent lesions require prompt evaluation to rule out malignancy.',
                'sort_order' => 42,
                'is_active' => true,
                'meta_title' => 'Oral Cavity Lesions',
                'meta_description' => 'Oral cavity lesions are abnormal patches, ulcers, swellings, or growths inside the mouth involving the lips, tongue, cheeks, gums, or palate. They may be benign',
                'meta_keywords' => '',
            ]
        );
    }
}
