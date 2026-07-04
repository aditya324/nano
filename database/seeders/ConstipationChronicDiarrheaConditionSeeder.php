<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConstipationChronicDiarrheaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Constipation / Chronic Diarrhea')],
            [
                'name' => 'Constipation / Chronic Diarrhea',
                'slug' => Str::slug('Constipation / Chronic Diarrhea'),
                'h1' => 'Constipation / Chronic Diarrhea',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Constipation refers to infrequent or difficult bowel movements, while chronic diarrhea involves persistent loose or watery stools lasting for several weeks. Both conditions are common gastrointestinal problems that can significantly affect daily life and nutrition.',
                'about_more' => '',
                'overview' => 'Constipation refers to infrequent or difficult bowel movements, while chronic diarrhea involves persistent loose or watery stools lasting for several weeks. Both conditions are common gastrointestinal problems that can significantly affect daily life and nutrition.',
                'symptoms' => [
            ['value' => 'Difficulty passing stools'],
            ['value' => 'Hard or infrequent bowel movements'],
            ['value' => 'Loose watery stools occurring frequently'],
            ['value' => 'Abdominal bloating and discomfort'],
            ['value' => 'Fatigue and dehydration in severe diarrhea'],
        ],
                'causes' => [
            ['value' => 'Low-fiber diet and poor hydration'],
            ['value' => 'Intestinal infections or food intolerance'],
            ['value' => 'Irritable bowel syndrome (IBS)'],
            ['value' => 'Thyroid disorders or diabetes'],
            ['value' => 'Certain medications and stress'],
        ],
                'risks' => [
            ['value' => 'Hemorrhoids and anal fissures'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Malnutrition and weight loss'],
            ['value' => 'Fecal impaction in chronic constipation'],
            ['value' => 'Reduced quality of life and weakness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-fiber diet and increased fluid intake'],
            ['value' => 'Probiotics and digestive support'],
            ['value' => 'Anti-diarrheal or laxative medications'],
            ['value' => 'Treatment of underlying disease'],
            ['value' => 'Colonoscopy or stool investigations when needed'],
        ],
                'recovery' => 'Most patients improve with dietary changes and proper treatment. Persistent symptoms require detailed evaluation to rule out serious disease.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Constipation / Chronic Diarrhea',
                'meta_description' => 'Constipation refers to infrequent or difficult bowel movements, while chronic diarrhea involves persistent loose or watery stools lasting for several weeks. Bot',
                'meta_keywords' => '',
            ]
        );
    }
}
