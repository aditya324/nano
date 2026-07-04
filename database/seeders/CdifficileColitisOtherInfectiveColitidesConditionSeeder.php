<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CdifficileColitisOtherInfectiveColitidesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('C. difficile Colitis / Other Infective Colitides')],
            [
                'name' => 'C. difficile Colitis / Other Infective Colitides',
                'slug' => Str::slug('C. difficile Colitis / Other Infective Colitides'),
                'h1' => 'C. difficile Colitis / Other Infective Colitides',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'C. difficile colitis is a severe intestinal infection often occurring after antibiotic use. Other infective colitides are caused by bacteria, viruses, or parasites affecting the colon.',
                'about_more' => '',
                'overview' => 'C. difficile colitis is a severe intestinal infection often occurring after antibiotic use. Other infective colitides are caused by bacteria, viruses, or parasites affecting the colon.',
                'symptoms' => [
            ['value' => 'Severe diarrhea'],
            ['value' => 'Fever and abdominal cramps'],
            ['value' => 'Bloody stools in some cases'],
            ['value' => 'Nausea and dehydration'],
            ['value' => 'Weakness and fatigue'],
        ],
                'causes' => [
            ['value' => 'Recent antibiotic use'],
            ['value' => 'Hospital-acquired infections'],
            ['value' => 'Contaminated food or water'],
            ['value' => 'Poor hygiene and sanitation'],
            ['value' => 'Weak immune system'],
        ],
                'risks' => [
            ['value' => 'Severe dehydration'],
            ['value' => 'Toxic megacolon'],
            ['value' => 'Intestinal perforation'],
            ['value' => 'Sepsis and systemic infection'],
            ['value' => 'Recurrent infections'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Stool testing and colon evaluation'],
            ['value' => 'Targeted antibiotics for infection'],
            ['value' => 'Fluid and electrolyte replacement'],
            ['value' => 'Isolation and infection control measures'],
            ['value' => 'Surgery in severe complicated cases'],
        ],
                'recovery' => 'Most patients improve with early treatment, though recurrent infections can occur and require close follow-up.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'C. difficile Colitis / Other Infective Colitides',
                'meta_description' => 'C. difficile colitis is a severe intestinal infection often occurring after antibiotic use. Other infective colitides are caused by bacteria, viruses, or parasi',
                'meta_keywords' => '',
            ]
        );
    }
}
