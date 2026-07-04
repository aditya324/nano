<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DysphagiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dysphagia')],
            [
                'name' => 'Dysphagia',
                'slug' => Str::slug('Dysphagia'),
                'h1' => 'Dysphagia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dysphagia refers to difficulty swallowing food, liquids, or saliva due to disorders affecting the throat, esophagus, or nervous system. It may cause nutritional problems and aspiration risk.',
                'about_more' => '',
                'overview' => 'Dysphagia refers to difficulty swallowing food, liquids, or saliva due to disorders affecting the throat, esophagus, or nervous system. It may cause nutritional problems and aspiration risk.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing food or liquids'],
            ['value' => 'Pain while swallowing'],
            ['value' => 'Sensation of food getting stuck'],
            ['value' => 'Choking or coughing during meals'],
            ['value' => 'Weight loss or poor nutrition'],
        ],
                'causes' => [
            ['value' => 'Throat or esophageal infections'],
            ['value' => 'Neurological disorders such as stroke'],
            ['value' => 'Tumors or structural narrowing'],
            ['value' => 'Acid reflux disease'],
            ['value' => 'Muscle or nerve dysfunction'],
        ],
                'risks' => [
            ['value' => 'Aspiration pneumonia'],
            ['value' => 'Malnutrition and dehydration'],
            ['value' => 'Weight loss and weakness'],
            ['value' => 'Choking episodes'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT and swallowing evaluation'],
            ['value' => 'Endoscopy and imaging studies'],
            ['value' => 'Swallowing therapy and rehabilitation'],
            ['value' => 'Treatment of underlying disease'],
            ['value' => 'Surgical intervention if obstruction exists'],
        ],
                'recovery' => 'Recovery depends on the underlying cause. Early diagnosis and therapy improve swallowing function and nutrition.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Dysphagia',
                'meta_description' => 'Dysphagia refers to difficulty swallowing food, liquids, or saliva due to disorders affecting the throat, esophagus, or nervous system. It may cause nutritional',
                'meta_keywords' => '',
            ]
        );
    }
}
