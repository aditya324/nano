<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VertigoEvaluationandTreatmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vertigo Evaluation and Treatment')],
            [
                'title' => 'Vertigo Evaluation and Treatment',
                'slug' => Str::slug('Vertigo Evaluation and Treatment'),
                'introduction' => 'Vertigo evaluation and treatment involve specialized assessment and management of dizziness and balance disorders caused by inner ear or neurological conditions. Vertigo creates a spinning sensation that may affect walking, balance, and daily activities. Accurate diagnosis is important to identify the underlying cause and provide effective treatment.',
                'what_is' => 'The evaluation includes ear examination, balance testing, hearing assessment, positional tests, and sometimes imaging studies. ENT specialists assess whether the dizziness is related to inner ear disorders, nerve problems, or neurological disease. Treatment may involve: Vestibular rehabilitation exercises Medications Positional maneuvers Treatment of underlying ear disorders Lifestyle modifications Common causes include: Benign paroxysmal positional vertigo (BPPV) Vestibular neuritis Ménière’s disease Ear infections Migraine-related vertigo',
                'symptoms' => [
            ['value' => 'Spinning sensation'],
            ['value' => 'Balance difficulty'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Ear fullness or hearing changes'],
            ['value' => 'Unsteady walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Falls and injuries'],
            ['value' => 'Chronic dizziness'],
            ['value' => 'Anxiety and fear of movement'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Recurrent balance problems'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Perform balance exercises regularly'],
            ['value' => 'Avoid sudden head movements initially'],
            ['value' => 'Stay hydrated properly'],
            ['value' => 'Attend follow-up evaluations consistently'],
            ['value' => 'Report worsening dizziness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Falls and injuries'],
            ['value' => 'Chronic dizziness'],
            ['value' => 'Anxiety and fear of movement'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Recurrent balance problems'],
        ],
                'long_term_outlook' => 'Most vertigo conditions improve significantly with accurate diagnosis and treatment. Long-term balance and symptom control are achievable with proper medical care and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Vertigo Evaluation and Treatment',
                'seo_description' => 'Vertigo evaluation and treatment involve specialized assessment and management of dizziness and balance disorders caused by inner ear or neurological conditions. Vertigo creates a spinning sensation that may affect walking, balance, and daily activities. Accurate diagnosis is important to identify the underlying cause and provide effective treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
