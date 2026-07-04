<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EsophagealStrictureTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Esophageal Stricture / Tumors')],
            [
                'name' => 'Esophageal Stricture / Tumors',
                'slug' => Str::slug('Esophageal Stricture / Tumors'),
                'h1' => 'Esophageal Stricture / Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Esophageal strictures are abnormal narrowing of the food pipe, while esophageal tumors are growths that may be benign or malignant. Both conditions can interfere with swallowing and nutrition.',
                'about_more' => '',
                'overview' => 'Esophageal strictures are abnormal narrowing of the food pipe, while esophageal tumors are growths that may be benign or malignant. Both conditions can interfere with swallowing and nutrition.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing food or liquids'],
            ['value' => 'Chest discomfort while eating'],
            ['value' => 'Weight loss and poor appetite'],
            ['value' => 'Vomiting or regurgitation of food'],
            ['value' => 'Persistent heartburn or cough'],
        ],
                'causes' => [
            ['value' => 'Chronic acid reflux disease'],
            ['value' => 'Smoking and alcohol use'],
            ['value' => 'Esophageal cancer development'],
            ['value' => 'Injury from corrosive substances'],
            ['value' => 'Radiation or previous surgery'],
        ],
                'risks' => [
            ['value' => 'Severe malnutrition and dehydration'],
            ['value' => 'Complete blockage of swallowing'],
            ['value' => 'Spread of malignant tumors'],
            ['value' => 'Aspiration pneumonia'],
            ['value' => 'Chronic pain and poor quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Endoscopy and biopsy evaluation'],
            ['value' => 'Balloon dilatation for strictures'],
            ['value' => 'Surgical tumor removal when possible'],
            ['value' => 'Chemotherapy or radiation therapy'],
            ['value' => 'Nutritional support and stent placement'],
        ],
                'recovery' => 'Benign strictures often improve with treatment. Prognosis of tumors depends on stage and response to oncology care.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Esophageal Stricture / Tumors',
                'meta_description' => 'Esophageal strictures are abnormal narrowing of the food pipe, while esophageal tumors are growths that may be benign or malignant. Both conditions can interfer',
                'meta_keywords' => '',
            ]
        );
    }
}
