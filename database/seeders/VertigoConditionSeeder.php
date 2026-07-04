<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VertigoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vertigo')],
            [
                'name' => 'Vertigo',
                'slug' => Str::slug('Vertigo'),
                'h1' => 'Vertigo',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Vertigo is a sensation of spinning or movement when no actual motion exists. It usually results from inner ear or balance system disorders and may significantly affect daily activities and balance.',
                'about_more' => '',
                'overview' => 'Vertigo is a sensation of spinning or movement when no actual motion exists. It usually results from inner ear or balance system disorders and may significantly affect daily activities and balance.',
                'symptoms' => [
            ['value' => 'Spinning sensation or dizziness'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Loss of balance or unsteadiness'],
            ['value' => 'Sweating or lightheadedness'],
            ['value' => 'Difficulty walking or standing'],
        ],
                'causes' => [
            ['value' => 'Inner ear balance disorders'],
            ['value' => 'Benign positional vertigo'],
            ['value' => 'Meniere’s disease'],
            ['value' => 'Vestibular nerve infections'],
            ['value' => 'Head injury or neurological conditions'],
        ],
                'risks' => [
            ['value' => 'Falls and accidental injuries'],
            ['value' => 'Persistent balance disturbances'],
            ['value' => 'Anxiety and fear of movement'],
            ['value' => 'Dehydration from vomiting'],
            ['value' => 'Reduced mobility and daily functioning'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT and neurological evaluation'],
            ['value' => 'Vestibular rehabilitation exercises'],
            ['value' => 'Medications for dizziness and nausea'],
            ['value' => 'Canal repositioning maneuvers'],
            ['value' => 'Treatment of underlying ear disorders'],
        ],
                'recovery' => 'Most patients improve with appropriate therapy and balance rehabilitation. Early treatment reduces recurrence and improves stability.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Vertigo',
                'meta_description' => 'Vertigo is a sensation of spinning or movement when no actual motion exists. It usually results from inner ear or balance system disorders and may significantly',
                'meta_keywords' => '',
            ]
        );
    }
}
