<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaryngealCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Laryngeal Cancer')],
            [
                'name' => 'Laryngeal Cancer',
                'slug' => Str::slug('Laryngeal Cancer'),
                'h1' => 'Laryngeal Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Laryngeal cancer is cancer of the voice box (larynx), commonly associated with smoking and alcohol use. It can affect speech, breathing, and swallowing.',
                'about_more' => '',
                'overview' => 'Laryngeal cancer is cancer of the voice box (larynx), commonly associated with smoking and alcohol use. It can affect speech, breathing, and swallowing.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness of voice'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chronic throat pain'],
            ['value' => 'Breathing difficulty or noisy breathing'],
            ['value' => 'Neck swelling or unexplained weight loss'],
        ],
                'causes' => [
            ['value' => 'Tobacco smoking'],
            ['value' => 'Excessive alcohol use'],
            ['value' => 'Exposure to industrial chemicals'],
            ['value' => 'HPV-related infection'],
            ['value' => 'Chronic throat irritation'],
        ],
                'risks' => [
            ['value' => 'Airway obstruction'],
            ['value' => 'Loss of normal voice function'],
            ['value' => 'Spread of cancer to nearby tissues'],
            ['value' => 'Difficulty eating and breathing'],
            ['value' => 'Advanced metastatic disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Laryngoscopy and biopsy'],
            ['value' => 'Surgery for tumor removal'],
            ['value' => 'Radiation therapy'],
            ['value' => 'Chemotherapy in advanced disease'],
            ['value' => 'Speech rehabilitation after treatment'],
        ],
                'recovery' => 'Early diagnosis improves voice preservation and survival rates. Long-term follow-up is essential after treatment.',
                'sort_order' => 47,
                'is_active' => true,
                'meta_title' => 'Laryngeal Cancer',
                'meta_description' => 'Laryngeal cancer is cancer of the voice box (larynx), commonly associated with smoking and alcohol use. It can affect speech, breathing, and swallowing.',
                'meta_keywords' => '',
            ]
        );
    }
}
