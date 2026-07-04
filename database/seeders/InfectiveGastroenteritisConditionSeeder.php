<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectiveGastroenteritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infective Gastroenteritis')],
            [
                'name' => 'Infective Gastroenteritis',
                'slug' => Str::slug('Infective Gastroenteritis'),
                'h1' => 'Infective Gastroenteritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infective gastroenteritis is inflammation of the stomach and intestines caused by viruses, bacteria, or parasites. It commonly leads to diarrhea, vomiting, abdominal cramps, and dehydration.',
                'about_more' => '',
                'overview' => 'Infective gastroenteritis is inflammation of the stomach and intestines caused by viruses, bacteria, or parasites. It commonly leads to diarrhea, vomiting, abdominal cramps, and dehydration.',
                'symptoms' => [
            ['value' => 'Loose stools or diarrhea'],
            ['value' => 'Vomiting and nausea'],
            ['value' => 'Fever and chills'],
            ['value' => 'Abdominal cramps and pain'],
            ['value' => 'Weakness and dehydration'],
        ],
                'causes' => [
            ['value' => 'Contaminated food or water'],
            ['value' => 'Viral infections such as rotavirus or norovirus'],
            ['value' => 'Bacterial infections like Salmonella or E. coli'],
            ['value' => 'Poor hygiene and sanitation'],
            ['value' => 'Consumption of improperly cooked food'],
        ],
                'risks' => [
            ['value' => 'Severe dehydration'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Kidney injury due to fluid loss'],
            ['value' => 'Malnutrition in prolonged illness'],
            ['value' => 'Spread of infection to others'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral or intravenous fluid replacement'],
            ['value' => 'Antibiotics in selected bacterial infections'],
            ['value' => 'Antiemetic and anti-diarrheal medications'],
            ['value' => 'Probiotics and nutritional support'],
            ['value' => 'Hygiene and infection prevention measures'],
        ],
                'recovery' => 'Most cases recover completely within a few days. Early hydration is essential to prevent serious complications.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Infective Gastroenteritis',
                'meta_description' => 'Infective gastroenteritis is inflammation of the stomach and intestines caused by viruses, bacteria, or parasites. It commonly leads to diarrhea, vomiting, abdo',
                'meta_keywords' => '',
            ]
        );
    }
}
