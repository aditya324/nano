<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BenignParoxysmalPositionalVertigoBPPVConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Benign Paroxysmal Positional Vertigo (BPPV)')],
            [
                'name' => 'Benign Paroxysmal Positional Vertigo (BPPV)',
                'slug' => Str::slug('Benign Paroxysmal Positional Vertigo (BPPV)'),
                'h1' => 'Benign Paroxysmal Positional Vertigo (BPPV)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'BPPV is a common inner ear disorder caused by displacement of tiny calcium crystals within the balance canals of the ear. It causes brief episodes of vertigo triggered by changes in head position.',
                'about_more' => '',
                'overview' => 'BPPV is a common inner ear disorder caused by displacement of tiny calcium crystals within the balance canals of the ear. It causes brief episodes of vertigo triggered by changes in head position.',
                'symptoms' => [
            ['value' => 'Sudden spinning sensation with head movement'],
            ['value' => 'Dizziness while turning in bed'],
            ['value' => 'Nausea or imbalance'],
            ['value' => 'Brief episodes lasting seconds to minutes'],
            ['value' => 'Fear of sudden movement due to vertigo'],
        ],
                'causes' => [
            ['value' => 'Age-related inner ear degeneration'],
            ['value' => 'Head injury or trauma'],
            ['value' => 'Inner ear infections'],
            ['value' => 'Prolonged bed rest'],
            ['value' => 'Idiopathic crystal displacement in the ear'],
        ],
                'risks' => [
            ['value' => 'Falls and accidental injury'],
            ['value' => 'Recurrent dizziness episodes'],
            ['value' => 'Anxiety and activity limitation'],
            ['value' => 'Difficulty performing daily tasks'],
            ['value' => 'Balance problems in elderly patients'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dix–Hallpike positional testing'],
            ['value' => 'Epley or canal repositioning maneuvers'],
            ['value' => 'Vestibular rehabilitation therapy'],
            ['value' => 'Medications for severe nausea'],
            ['value' => 'Rare surgical intervention in resistant cases'],
        ],
                'recovery' => 'Most patients improve rapidly with repositioning maneuvers. Recurrences can occur but are usually manageable.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Benign Paroxysmal Positional Vertigo (BPPV)',
                'meta_description' => 'BPPV is a common inner ear disorder caused by displacement of tiny calcium crystals within the balance canals of the ear. It causes brief episodes of vertigo tr',
                'meta_keywords' => '',
            ]
        );
    }
}
