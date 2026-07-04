<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BalanceVestibularTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Balance & Vestibular Therapy')],
            [
                'name' => 'Balance & Vestibular Therapy',
                'slug' => Str::slug('Balance & Vestibular Therapy'),
                'h1' => 'Balance & Vestibular Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Balance and vestibular therapy are specialized rehabilitation treatments designed to improve balance, coordination, stability, and spatial orientation in individuals experiencing dizziness, vertigo, balance disorders, or vestibular dysfunction. These therapies help reduce fall risk, improve mobility, and restore confidence during movement and daily activities.',
                'about_more' => '',
                'overview' => 'Vestibular therapy focuses on retraining the body and brain to adapt to problems affecting the inner ear and balance system. Treatment programs may include balance exercises, gaze stabilization, head movement exercises, gait training, posture correction, and coordination activities. These therapies are commonly recommended for vertigo, vestibular neuritis, labyrinthitis, Ménière’s disease, post-concussion dizziness, neurological disorders, and age-related balance decline.',
                'symptoms' => [
            ['value' => 'Dizziness or vertigo'],
            ['value' => 'Loss of balance or unsteady walking'],
            ['value' => 'Frequent falls or fear of falling'],
            ['value' => 'Nausea or motion sensitivity'],
            ['value' => 'Difficulty focusing vision during movement'],
            ['value' => 'Common Causes'],
            ['value' => 'Inner ear or vestibular disorders'],
            ['value' => 'Neurological conditions affecting balance'],
            ['value' => 'Head injury or concussion'],
            ['value' => 'Age-related decline in balance function'],
            ['value' => 'Infections or inflammation affecting the inner ear'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Increased risk of falls and injuries'],
            ['value' => 'Reduced mobility and physical confidence'],
            ['value' => 'Motion sensitivity or visual disturbances'],
            ['value' => 'Anxiety related to dizziness or instability'],
            ['value' => 'Difficulty performing daily activities safely'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Balance and vestibular rehabilitation may include vestibular exercises, gaze stabilization training, balance retraining, gait exercises, posture correction, habituation exercises, strengthening programs, and coordination therapy. Therapists may also provide fall prevention education, assistive device training, and home exercise programs to improve long-term stability and mobility.'],
            ['value' => 'Performing prescribed vestibular exercises regularly'],
            ['value' => 'Moving slowly and safely during recovery'],
            ['value' => 'Maintaining proper hydration and healthy lifestyle habits'],
            ['value' => 'Monitoring dizziness, nausea, or balance changes'],
            ['value' => 'Attending regular rehabilitation and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with balance and vestibular therapy is generally very positive when rehabilitation is started early and practiced consistently. Therapy can significantly reduce dizziness, improve balance, enhance walking stability, and increase confidence during daily activities. Ongoing exercise, fall prevention strategies, and regular rehabilitation follow-up are important for maintaining long-term balance and functional independence. __________________ 22. Pediatric Developmental Therapy Programs Pediatric Developmental Therapy Programs Procedures',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Balance & Vestibular Therapy',
                'meta_description' => 'Balance and vestibular therapy are specialized rehabilitation treatments designed to improve balance, coordination, stability, and spatial orientation in indivi',
                'meta_keywords' => '',
            ]
        );
    }
}
