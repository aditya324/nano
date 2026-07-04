<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InguinalHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Inguinal Hernia')],
            [
                'name' => 'Inguinal Hernia',
                'slug' => Str::slug('Inguinal Hernia'),
                'h1' => 'Inguinal Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An inguinal hernia occurs when abdominal contents protrude through a weak area in the groin region. It is one of the most common types of hernia and may enlarge over time.',
                'about_more' => '',
                'overview' => 'An inguinal hernia occurs when abdominal contents protrude through a weak area in the groin region. It is one of the most common types of hernia and may enlarge over time.',
                'symptoms' => [
            ['value' => 'Groin swelling or bulge'],
            ['value' => 'Pain or heaviness while lifting or coughing'],
            ['value' => 'Burning or dragging sensation in the groin'],
            ['value' => 'Swelling increasing with standing'],
            ['value' => 'Discomfort during physical activity'],
        ],
                'causes' => [
            ['value' => 'Weakness in abdominal wall muscles'],
            ['value' => 'Heavy lifting or strenuous activity'],
            ['value' => 'Chronic cough or constipation'],
            ['value' => 'Obesity and increased abdominal pressure'],
            ['value' => 'Congenital weakness in the groin area'],
        ],
                'risks' => [
            ['value' => 'Hernia enlargement over time'],
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Strangulation cutting off blood supply'],
            ['value' => 'Severe groin pain and swelling'],
            ['value' => 'Emergency surgical requirement'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and imaging if needed'],
            ['value' => 'Hernia support advice in mild cases'],
            ['value' => 'Laparoscopic hernia repair'],
            ['value' => 'Open mesh hernia surgery'],
            ['value' => 'Emergency surgery for strangulated hernia'],
        ],
                'recovery' => 'Most patients recover completely after surgical repair. Avoiding heavy strain after surgery reduces recurrence risk.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Inguinal Hernia',
                'meta_description' => 'An inguinal hernia occurs when abdominal contents protrude through a weak area in the groin region. It is one of the most common types of hernia and may enlarge',
                'meta_keywords' => '',
            ]
        );
    }
}
