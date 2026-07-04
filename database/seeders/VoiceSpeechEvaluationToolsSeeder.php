<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VoiceSpeechEvaluationToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Voice & Speech Evaluation Tools')],
            [
                'title' => 'Voice & Speech Evaluation Tools',
                'slug' => Str::slug('Voice & Speech Evaluation Tools'),
                'introduction' => 'Voice and speech evaluation tools are specialized diagnostic systems used to assess voice quality, speech clarity, vocal cord function, and communication disorders. These tools help ENT specialists and speech therapists diagnose and monitor voice and speech abnormalities accurately. They support comprehensive rehabilitation planning.',
                'what_is' => 'The evaluation systems may include: Acoustic voice analysis software Speech recording systems Vocal frequency analysis tools Voice range assessment devices Resonance analysis equipment The tools are commonly used for: Hoarseness evaluation Vocal cord disorders Speech abnormalities Professional voice assessment Neurological speech disorders Objective measurements improve diagnosis and treatment monitoring.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness'],
            ['value' => 'Weak or strained voice'],
            ['value' => 'Speech difficulty'],
            ['value' => 'Voice fatigue'],
            ['value' => 'Communication problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Vocal strain during prolonged testing'],
            ['value' => 'Temporary discomfort during voice exercises'],
            ['value' => 'Anxiety in speech-impaired patients'],
            ['value' => 'Fatigue during extensive evaluation'],
            ['value' => 'Rare emotional distress related to communication difficulties'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow speech therapy recommendations consistently'],
            ['value' => 'Avoid excessive voice strain'],
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Attend follow-up voice assessments regularly'],
            ['value' => 'Practice prescribed vocal exercises carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Vocal strain during prolonged testing'],
            ['value' => 'Temporary discomfort during voice exercises'],
            ['value' => 'Anxiety in speech-impaired patients'],
            ['value' => 'Fatigue during extensive evaluation'],
            ['value' => 'Rare emotional distress related to communication difficulties'],
        ],
                'long_term_outlook' => 'Voice and speech evaluation systems support accurate diagnosis and rehabilitation, improving communication ability and long-term vocal health.',
                'conclusion' => '',
                'seo_title' => 'Voice & Speech Evaluation Tools',
                'seo_description' => 'Voice and speech evaluation tools are specialized diagnostic systems used to assess voice quality, speech clarity, vocal cord function, and communication disorders. These tools help ENT specialists and speech therapists diagnose and monitor voice and speech abnormalities accurately. They support comprehensive rehabilitation planning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
