<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiverticulosisDiverticulitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diverticulosis / Diverticulitis')],
            [
                'name' => 'Diverticulosis / Diverticulitis',
                'slug' => Str::slug('Diverticulosis / Diverticulitis'),
                'h1' => 'Diverticulosis / Diverticulitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diverticulosis refers to small pouches forming in the intestinal wall, usually in the colon. When these pouches become inflamed or infected, the condition is called diverticulitis.',
                'about_more' => '',
                'overview' => 'Diverticulosis refers to small pouches forming in the intestinal wall, usually in the colon. When these pouches become inflamed or infected, the condition is called diverticulitis.',
                'symptoms' => [
            ['value' => 'Lower abdominal pain, especially on the left side'],
            ['value' => 'Fever and chills'],
            ['value' => 'Constipation or diarrhea'],
            ['value' => 'Bloating and abdominal tenderness'],
            ['value' => 'Nausea and vomiting'],
        ],
                'causes' => [
            ['value' => 'Low-fiber diet'],
            ['value' => 'Aging-related weakening of colon walls'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Chronic constipation'],
            ['value' => 'Smoking and poor dietary habits'],
        ],
                'risks' => [
            ['value' => 'Abscess formation'],
            ['value' => 'Intestinal perforation'],
            ['value' => 'Fistula formation'],
            ['value' => 'Intestinal obstruction'],
            ['value' => 'Severe abdominal infection (peritonitis)'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-fiber diet and hydration'],
            ['value' => 'Antibiotics for infection'],
            ['value' => 'Pain management and bowel rest'],
            ['value' => 'CT scan evaluation in severe cases'],
            ['value' => 'Surgery for recurrent or complicated disease'],
        ],
                'recovery' => 'Most mild cases recover well with medication and dietary changes. Complicated diverticulitis may require surgery.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Diverticulosis / Diverticulitis',
                'meta_description' => 'Diverticulosis refers to small pouches forming in the intestinal wall, usually in the colon. When these pouches become inflamed or infected, the condition is ca',
                'meta_keywords' => '',
            ]
        );
    }
}
