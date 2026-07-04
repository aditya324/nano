<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydroceleVaricoceleConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hydrocele / Varicocele')],
            [
                'name' => 'Hydrocele / Varicocele',
                'slug' => Str::slug('Hydrocele / Varicocele'),
                'h1' => 'Hydrocele / Varicocele',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hydrocele is fluid accumulation around the testicle causing scrotal swelling, while varicocele refers to enlargement of veins within the scrotum. Both conditions commonly affect male reproductive health.',
                'about_more' => '',
                'overview' => 'Hydrocele is fluid accumulation around the testicle causing scrotal swelling, while varicocele refers to enlargement of veins within the scrotum. Both conditions commonly affect male reproductive health.',
                'symptoms' => [
            ['value' => 'Swelling of the scrotum'],
            ['value' => 'Heaviness or discomfort in the scrotal area'],
            ['value' => 'Visible enlarged veins in varicocele'],
            ['value' => 'Pain worsening after prolonged standing'],
            ['value' => 'Fertility problems in some cases'],
        ],
                'causes' => [
            ['value' => 'Congenital fluid imbalance around the testicle'],
            ['value' => 'Weak or damaged scrotal veins'],
            ['value' => 'Increased venous pressure'],
            ['value' => 'Trauma or infection'],
            ['value' => 'Developmental abnormalities in blood vessels'],
        ],
                'risks' => [
            ['value' => 'Chronic scrotal discomfort'],
            ['value' => 'Infertility or reduced sperm quality'],
            ['value' => 'Enlargement of swelling over time'],
            ['value' => 'Cosmetic concerns and anxiety'],
            ['value' => 'Rare infection or rupture complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Physical examination and scrotal ultrasound'],
            ['value' => 'Observation in mild asymptomatic cases'],
            ['value' => 'Surgical hydrocelectomy for hydrocele'],
            ['value' => 'Varicocelectomy or embolization procedures'],
            ['value' => 'Pain relief and supportive care'],
        ],
                'recovery' => 'Most patients recover well after treatment. Surgical correction often improves symptoms and fertility outcomes.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Hydrocele / Varicocele',
                'meta_description' => 'Hydrocele is fluid accumulation around the testicle causing scrotal swelling, while varicocele refers to enlargement of veins within the scrotum. Both condition',
                'meta_keywords' => '',
            ]
        );
    }
}
