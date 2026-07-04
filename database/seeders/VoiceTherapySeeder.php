<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VoiceTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Voice Therapy')],
            [
                'title' => 'Voice Therapy',
                'slug' => Str::slug('Voice Therapy'),
                'introduction' => 'Voice therapy is a specialized rehabilitation program designed to improve voice quality, vocal strength, and communication in individuals with voice disorders. The therapy is conducted by trained speech and voice specialists in coordination with ENT doctors. It helps patients develop healthy voice habits and recover normal vocal function.',
                'what_is' => 'Voice therapy includes exercises and techniques to improve breathing, vocal cord function, resonance, pitch, and speech clarity. It is commonly recommended for: Hoarseness Vocal cord strain Professional voice users Vocal nodules Post-surgical voice rehabilitation Neurological voice disorders The therapy program is individualized based on the patient’s condition and vocal requirements.',
                'symptoms' => [
            ['value' => 'Hoarseness'],
            ['value' => 'Voice fatigue'],
            ['value' => 'Weak or strained voice'],
            ['value' => 'Difficulty speaking loudly'],
            ['value' => 'Vocal discomfort'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary vocal fatigue during exercises'],
            ['value' => 'Slow improvement in chronic disorders'],
            ['value' => 'Need for long-term therapy in some cases'],
            ['value' => 'Recurrence if vocal misuse continues'],
            ['value' => 'Incomplete improvement in severe disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Perform voice exercises regularly'],
            ['value' => 'Avoid shouting or excessive speaking'],
            ['value' => 'Stay hydrated adequately'],
            ['value' => 'Avoid smoking and throat irritants'],
            ['value' => 'Attend scheduled therapy sessions consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary vocal fatigue during exercises'],
            ['value' => 'Slow improvement in chronic disorders'],
            ['value' => 'Need for long-term therapy in some cases'],
            ['value' => 'Recurrence if vocal misuse continues'],
            ['value' => 'Incomplete improvement in severe disease'],
        ],
                'long_term_outlook' => 'Voice therapy significantly improves vocal quality, communication ability, and vocal endurance. Consistent therapy and proper voice care provide long-term benefits.',
                'conclusion' => '',
                'seo_title' => 'Voice Therapy',
                'seo_description' => 'Voice therapy is a specialized rehabilitation program designed to improve voice quality, vocal strength, and communication in individuals with voice disorders. The therapy is conducted by trained speech and voice specialists in coordination with ENT doctors. It helps patients develop healthy voice habits and recover normal vocal function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
