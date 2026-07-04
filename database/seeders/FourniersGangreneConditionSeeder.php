<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FourniersGangreneConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fournier’s Gangrene')],
            [
                'name' => 'Fournier’s Gangrene',
                'slug' => Str::slug('Fournier’s Gangrene'),
                'h1' => 'Fournier’s Gangrene',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fournier’s gangrene is a rapidly progressive and life-threatening bacterial infection affecting the genital, perineal, and surrounding soft tissues. It causes tissue destruction and severe systemic illness.',
                'about_more' => '',
                'overview' => 'Fournier’s gangrene is a rapidly progressive and life-threatening bacterial infection affecting the genital, perineal, and surrounding soft tissues. It causes tissue destruction and severe systemic illness.',
                'symptoms' => [
            ['value' => 'Severe pain and swelling in genital or perineal area'],
            ['value' => 'Fever and chills'],
            ['value' => 'Foul-smelling wound or discharge'],
            ['value' => 'Skin discoloration or tissue death'],
            ['value' => 'Weakness and shock symptoms'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Poor immunity or chronic illness'],
            ['value' => 'Perianal or urinary infections'],
            ['value' => 'Trauma or surgical wounds'],
            ['value' => 'Poor hygiene and obesity'],
        ],
                'risks' => [
            ['value' => 'Rapid tissue destruction'],
            ['value' => 'Sepsis and multi-organ failure'],
            ['value' => 'Shock and circulatory collapse'],
            ['value' => 'Need for extensive surgical removal'],
            ['value' => 'High mortality risk if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency surgical debridement'],
            ['value' => 'Broad-spectrum intravenous antibiotics'],
            ['value' => 'Intensive care monitoring'],
            ['value' => 'Wound care and reconstructive surgery'],
            ['value' => 'Diabetes and infection control'],
        ],
                'recovery' => 'Early aggressive treatment is lifesaving. Recovery may require multiple surgeries and prolonged wound care.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Fournier’s Gangrene',
                'meta_description' => 'Fournier’s gangrene is a rapidly progressive and life-threatening bacterial infection affecting the genital, perineal, and surrounding soft tissues. It causes t',
                'meta_keywords' => '',
            ]
        );
    }
}
