<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForeignBodyinEarNoseorThroatConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Foreign Body in Ear, Nose or Throat')],
            [
                'name' => 'Foreign Body in Ear, Nose or Throat',
                'slug' => Str::slug('Foreign Body in Ear, Nose or Throat'),
                'h1' => 'Foreign Body in Ear, Nose or Throat',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Foreign body insertion in the ear, nose, or throat is common in children and may also occur accidentally in adults. Immediate evaluation is important to prevent injury or airway obstruction.',
                'about_more' => '',
                'overview' => 'Foreign body insertion in the ear, nose, or throat is common in children and may also occur accidentally in adults. Immediate evaluation is important to prevent injury or airway obstruction.',
                'symptoms' => [
            ['value' => 'Pain or irritation in the affected area'],
            ['value' => 'Difficulty breathing or swallowing'],
            ['value' => 'Ear discharge or bleeding'],
            ['value' => 'Nasal blockage or foul smell'],
            ['value' => 'Sudden coughing or choking'],
        ],
                'causes' => [
            ['value' => 'Accidental insertion by children'],
            ['value' => 'Food particles stuck in the throat'],
            ['value' => 'Small toys or beads in the nose or ear'],
            ['value' => 'Improper ear cleaning practices'],
            ['value' => 'Accidental aspiration during eating'],
        ],
                'risks' => [
            ['value' => 'Infection and inflammation'],
            ['value' => 'Airway obstruction and breathing difficulty'],
            ['value' => 'Damage to ear canal or eardrum'],
            ['value' => 'Bleeding and tissue injury'],
            ['value' => 'Aspiration-related lung complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency ENT evaluation'],
            ['value' => 'Safe removal using specialized instruments'],
            ['value' => 'Endoscopic removal procedures'],
            ['value' => 'Antibiotics if infection develops'],
            ['value' => 'Observation for complications after removal'],
        ],
                'recovery' => 'Most patients recover completely after prompt removal. Delayed treatment may increase the risk of complications.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Foreign Body in Ear, Nose or Throat',
                'meta_description' => 'Foreign body insertion in the ear, nose, or throat is common in children and may also occur accidentally in adults. Immediate evaluation is important to prevent',
                'meta_keywords' => '',
            ]
        );
    }
}
