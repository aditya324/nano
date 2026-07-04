<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DyspepsiaFunctionalOrganicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dyspepsia (Functional / Organic)')],
            [
                'name' => 'Dyspepsia (Functional / Organic)',
                'slug' => Str::slug('Dyspepsia (Functional / Organic)'),
                'h1' => 'Dyspepsia (Functional / Organic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dyspepsia refers to persistent indigestion or discomfort in the upper abdomen. It may occur without structural disease (functional) or due to underlying gastrointestinal disorders (organic).',
                'about_more' => '',
                'overview' => 'Dyspepsia refers to persistent indigestion or discomfort in the upper abdomen. It may occur without structural disease (functional) or due to underlying gastrointestinal disorders (organic).',
                'symptoms' => [
            ['value' => 'Upper abdominal fullness'],
            ['value' => 'Early satiety during meals'],
            ['value' => 'Bloating and burping'],
            ['value' => 'Burning stomach discomfort'],
            ['value' => 'Nausea after eating'],
        ],
                'causes' => [
            ['value' => 'Acid reflux or gastritis'],
            ['value' => 'Peptic ulcer disease'],
            ['value' => 'Stress and anxiety'],
            ['value' => 'Irregular eating habits'],
            ['value' => 'Certain medications and foods'],
        ],
                'risks' => [
            ['value' => 'Reduced quality of life'],
            ['value' => 'Poor nutrition due to reduced appetite'],
            ['value' => 'Sleep disturbances'],
            ['value' => 'Anxiety related to persistent symptoms'],
            ['value' => 'Missed diagnosis of serious gastrointestinal disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dietary modifications'],
            ['value' => 'Acid suppression therapy'],
            ['value' => 'Stress management techniques'],
            ['value' => 'Treatment of underlying conditions'],
            ['value' => 'Endoscopy for persistent symptoms'],
        ],
                'recovery' => 'Many patients improve with lifestyle modifications and medical therapy. Persistent symptoms require further evaluation.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Dyspepsia (Functional / Organic)',
                'meta_description' => 'Dyspepsia refers to persistent indigestion or discomfort in the upper abdomen. It may occur without structural disease (functional) or due to underlying gastroi',
                'meta_keywords' => '',
            ]
        );
    }
}
