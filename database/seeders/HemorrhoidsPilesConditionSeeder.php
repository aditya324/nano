<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HemorrhoidsPilesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hemorrhoids / Piles')],
            [
                'name' => 'Hemorrhoids / Piles',
                'slug' => Str::slug('Hemorrhoids / Piles'),
                'h1' => 'Hemorrhoids / Piles',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hemorrhoids, commonly called piles, are swollen veins in the lower rectum or anus that can cause pain, bleeding, and discomfort during bowel movements.',
                'about_more' => '',
                'overview' => 'Hemorrhoids, commonly called piles, are swollen veins in the lower rectum or anus that can cause pain, bleeding, and discomfort during bowel movements.',
                'symptoms' => [
            ['value' => 'Bleeding during passing stool'],
            ['value' => 'Pain or discomfort around the anus'],
            ['value' => 'Itching and irritation'],
            ['value' => 'Swelling or lump near the anus'],
            ['value' => 'Mucus discharge or incomplete bowel feeling'],
        ],
                'causes' => [
            ['value' => 'Chronic constipation and straining'],
            ['value' => 'Pregnancy and increased abdominal pressure'],
            ['value' => 'Low-fiber diet'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Chronic diarrhea or prolonged sitting'],
        ],
                'risks' => [
            ['value' => 'Painful thrombosed hemorrhoids'],
            ['value' => 'Persistent bleeding and anemia'],
            ['value' => 'Infection and ulceration'],
            ['value' => 'Prolapse of hemorrhoidal tissue'],
            ['value' => 'Chronic discomfort affecting daily activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-fiber diet and hydration'],
            ['value' => 'Stool softeners and medications'],
            ['value' => 'Sitz bath and local treatments'],
            ['value' => 'Rubber band ligation or minimally invasive procedures'],
            ['value' => 'Hemorrhoidectomy surgery for severe cases'],
        ],
                'recovery' => 'Most patients improve with dietary changes and medical care. Surgical treatment is highly effective for advanced or recurrent hemorrhoids.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Hemorrhoids / Piles',
                'meta_description' => 'Hemorrhoids, commonly called piles, are swollen veins in the lower rectum or anus that can cause pain, bleeding, and discomfort during bowel movements.',
                'meta_keywords' => '',
            ]
        );
    }
}
