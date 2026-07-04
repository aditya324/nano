<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SoreThroatConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Sore Throat')],
            [
                'name' => 'Sore Throat',
                'slug' => Str::slug('Sore Throat'),
                'h1' => 'Sore Throat',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Sore throat is pain, irritation, or scratchiness of the throat often associated with infections, allergies, or environmental irritants. It is one of the most common ENT complaints.',
                'about_more' => '',
                'overview' => 'Sore throat is pain, irritation, or scratchiness of the throat often associated with infections, allergies, or environmental irritants. It is one of the most common ENT complaints.',
                'symptoms' => [
            ['value' => 'Throat pain or burning sensation'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Dryness or irritation in the throat'],
            ['value' => 'Fever or cough in infections'],
            ['value' => 'Hoarseness or swollen glands'],
        ],
                'causes' => [
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Allergies and postnasal drip'],
            ['value' => 'Dry air or smoking exposure'],
            ['value' => 'Excessive voice use'],
            ['value' => 'Acid reflux irritation'],
        ],
                'risks' => [
            ['value' => 'Difficulty eating and dehydration'],
            ['value' => 'Spread of throat infection'],
            ['value' => 'Voice changes and discomfort'],
            ['value' => 'Sleep disturbance due to pain'],
            ['value' => 'Chronic throat irritation in recurrent cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Warm fluids and salt water gargles'],
            ['value' => 'Pain relief medications'],
            ['value' => 'Antibiotics if bacterial infection is present'],
            ['value' => 'Hydration and rest'],
            ['value' => 'Treatment of allergy or reflux causes'],
        ],
                'recovery' => 'Most sore throats improve within a few days. Persistent symptoms require ENT evaluation.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Sore Throat',
                'meta_description' => 'Sore throat is pain, irritation, or scratchiness of the throat often associated with infections, allergies, or environmental irritants. It is one of the most co',
                'meta_keywords' => '',
            ]
        );
    }
}
