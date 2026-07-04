<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OtitisExternaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Otitis Externa')],
            [
                'name' => 'Otitis Externa',
                'slug' => Str::slug('Otitis Externa'),
                'h1' => 'Otitis Externa',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Otitis externa, commonly called “swimmer’s ear,” is an infection or inflammation of the outer ear canal. It often occurs due to moisture retention, trauma, or bacterial and fungal infections.',
                'about_more' => '',
                'overview' => 'Otitis externa, commonly called “swimmer’s ear,” is an infection or inflammation of the outer ear canal. It often occurs due to moisture retention, trauma, or bacterial and fungal infections.',
                'symptoms' => [
            ['value' => 'Ear pain and tenderness'],
            ['value' => 'Itching inside the ear canal'],
            ['value' => 'Ear discharge or swelling'],
            ['value' => 'Pain while touching or pulling the ear'],
            ['value' => 'Temporary hearing reduction'],
        ],
                'causes' => [
            ['value' => 'Swimming or excessive moisture exposure'],
            ['value' => 'Bacterial or fungal infections'],
            ['value' => 'Ear canal injury from cleaning objects'],
            ['value' => 'Allergic skin conditions or eczema'],
            ['value' => 'Use of contaminated ear devices'],
        ],
                'risks' => [
            ['value' => 'Severe ear canal swelling and blockage'],
            ['value' => 'Spread of infection to nearby tissues'],
            ['value' => 'Chronic otitis externa'],
            ['value' => 'Hearing difficulty due to swelling'],
            ['value' => 'Rare malignant otitis externa in diabetics'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ear canal cleaning by ENT specialist'],
            ['value' => 'Antibiotic or antifungal ear drops'],
            ['value' => 'Pain relief medications'],
            ['value' => 'Keeping ears dry and protected'],
            ['value' => 'Treatment of underlying skin conditions'],
        ],
                'recovery' => 'Most cases respond well to treatment within a few days. Preventing moisture buildup reduces recurrence risk.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Otitis Externa',
                'meta_description' => 'Otitis externa, commonly called “swimmer’s ear,” is an infection or inflammation of the outer ear canal. It often occurs due to moisture retention, trauma, or b',
                'meta_keywords' => '',
            ]
        );
    }
}
