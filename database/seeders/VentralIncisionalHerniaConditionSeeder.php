<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VentralIncisionalHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ventral / Incisional Hernia')],
            [
                'name' => 'Ventral / Incisional Hernia',
                'slug' => Str::slug('Ventral / Incisional Hernia'),
                'h1' => 'Ventral / Incisional Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A ventral or incisional hernia occurs when abdominal tissue protrudes through weakened muscles in the abdominal wall, often at the site of previous surgery.',
                'about_more' => '',
                'overview' => 'A ventral or incisional hernia occurs when abdominal tissue protrudes through weakened muscles in the abdominal wall, often at the site of previous surgery.',
                'symptoms' => [
            ['value' => 'Swelling or bulge in the abdomen'],
            ['value' => 'Pain during coughing or lifting'],
            ['value' => 'Feeling of pressure or discomfort'],
            ['value' => 'Visible protrusion while standing'],
            ['value' => 'Nausea in severe obstruction cases'],
        ],
                'causes' => [
            ['value' => 'Previous abdominal surgery'],
            ['value' => 'Weak wound healing'],
            ['value' => 'Obesity and heavy lifting'],
            ['value' => 'Chronic cough or constipation'],
            ['value' => 'Infection at surgical site'],
        ],
                'risks' => [
            ['value' => 'Hernia enlargement'],
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Strangulation of bowel tissue'],
            ['value' => 'Chronic abdominal discomfort'],
            ['value' => 'Recurrent hernia formation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical evaluation and imaging'],
            ['value' => 'Laparoscopic hernia repair with mesh'],
            ['value' => 'Open abdominal wall reconstruction'],
            ['value' => 'Weight reduction before surgery when needed'],
            ['value' => 'Emergency surgery for obstruction or strangulation'],
        ],
                'recovery' => 'Proper surgical repair usually provides good outcomes. Lifestyle changes and weight control help prevent recurrence.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Ventral / Incisional Hernia',
                'meta_description' => 'A ventral or incisional hernia occurs when abdominal tissue protrudes through weakened muscles in the abdominal wall, often at the site of previous surgery.',
                'meta_keywords' => '',
            ]
        );
    }
}
