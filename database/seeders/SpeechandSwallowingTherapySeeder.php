<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpeechandSwallowingTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Speech and Swallowing Therapy')],
            [
                'title' => 'Speech and Swallowing Therapy',
                'slug' => Str::slug('Speech and Swallowing Therapy'),
                'introduction' => 'Speech and swallowing therapy is a specialized rehabilitation program designed to improve communication, voice quality, and swallowing ability in patients affected by ENT, neurological, or post-surgical conditions. The therapy is conducted by trained speech-language specialists in coordination with ENT doctors. It helps restore safe swallowing and effective speech function.',
                'what_is' => 'The therapy program may include: Voice rehabilitation exercises Swallowing retraining Speech articulation improvement Breathing and vocal techniques Feeding and swallowing safety guidance Speech and swallowing therapy is commonly recommended for: Stroke patients Head and neck cancer patients Vocal cord disorders Neurological diseases Post-throat surgery recovery Individualized rehabilitation plans improve functional recovery and quality of life.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Hoarseness or weak voice'],
            ['value' => 'Choking during eating'],
            ['value' => 'Speech difficulty'],
            ['value' => 'Food sticking sensation in the throat'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Slow recovery in severe disorders'],
            ['value' => 'Aspiration risk during swallowing'],
            ['value' => 'Vocal fatigue during therapy'],
            ['value' => 'Nutritional deficiencies if untreated'],
            ['value' => 'Emotional stress related to communication difficulty'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Practice therapy exercises regularly'],
            ['value' => 'Follow safe swallowing techniques carefully'],
            ['value' => 'Maintain adequate nutrition and hydration'],
            ['value' => 'Attend therapy sessions consistently'],
            ['value' => 'Avoid vocal strain when advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Slow recovery in severe disorders'],
            ['value' => 'Aspiration risk during swallowing'],
            ['value' => 'Vocal fatigue during therapy'],
            ['value' => 'Nutritional deficiencies if untreated'],
            ['value' => 'Emotional stress related to communication difficulty'],
        ],
                'long_term_outlook' => 'Speech and swallowing therapy significantly improves communication ability, swallowing safety, and independence. Long-term outcomes improve with early and consistent rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Speech and Swallowing Therapy',
                'seo_description' => 'Speech and swallowing therapy is a specialized rehabilitation program designed to improve communication, voice quality, and swallowing ability in patients affected by ENT, neurological, or post-surgical conditions. The therapy is conducted by trained speech-language specialists in coordination with ENT doctors. It helps restore safe swallowing and effective speech function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
