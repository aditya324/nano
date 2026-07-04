<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastritisDuodenitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastritis / Duodenitis')],
            [
                'name' => 'Gastritis / Duodenitis',
                'slug' => Str::slug('Gastritis / Duodenitis'),
                'h1' => 'Gastritis / Duodenitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastritis and duodenitis refer to inflammation of the stomach lining and the first part of the small intestine respectively.',
                'about_more' => '',
                'overview' => 'Gastritis and duodenitis refer to inflammation of the stomach lining and the first part of the small intestine respectively.',
                'symptoms' => [
            ['value' => 'Upper abdominal discomfort'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Bloating after meals'],
            ['value' => 'Loss of appetite'],
            ['value' => 'Burning sensation in the stomach'],
        ],
                'causes' => [
            ['value' => 'H. pylori infection'],
            ['value' => 'Excess alcohol intake'],
            ['value' => 'Long-term painkiller usage'],
            ['value' => 'Stress and severe illness'],
            ['value' => 'Autoimmune disorders'],
        ],
                'risks' => [
            ['value' => 'Stomach ulcers'],
            ['value' => 'Gastrointestinal bleeding'],
            ['value' => 'Chronic digestive symptoms'],
            ['value' => 'Nutritional deficiencies'],
            ['value' => 'Increased cancer risk in chronic gastritis'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Acid-reducing medications'],
            ['value' => 'Antibiotic therapy if infection is present'],
            ['value' => 'Avoidance of irritant foods and alcohol'],
            ['value' => 'Dietary and lifestyle changes'],
            ['value' => 'Endoscopic evaluation when necessary'],
        ],
                'recovery' => 'Most patients recover well with appropriate treatment and avoidance of triggering factors.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Gastritis / Duodenitis',
                'meta_description' => 'Gastritis and duodenitis refer to inflammation of the stomach lining and the first part of the small intestine respectively.',
                'meta_keywords' => '',
            ]
        );
    }
}
