<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuromuscularReeducationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neuromuscular Re-education')],
            [
                'name' => 'Neuromuscular Re-education',
                'slug' => Str::slug('Neuromuscular Re-education'),
                'h1' => 'Neuromuscular Re-education',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neuromuscular re-education is a rehabilitation therapy that focuses on restoring normal movement patterns, balance, coordination, posture, muscle control, and functional mobility after injury, neurological disorders, or musculoskeletal conditions. The therapy helps improve communication between the nervous system and muscles to support safe and efficient movement.',
                'about_more' => '',
                'overview' => 'Neuromuscular re-education involves specialized exercises and therapeutic techniques designed to retrain muscles and nerves to work together correctly. It is commonly used in rehabilitation for stroke, spinal cord injuries, sports injuries, balance disorders, post-surgical recovery, and chronic musculoskeletal conditions. Treatment programs are individualized to improve coordination, stability, body awareness, gait, and movement control.',
                'symptoms' => [
            ['value' => 'Poor balance or coordination'],
            ['value' => 'Muscle weakness or abnormal movement patterns'],
            ['value' => 'Difficulty walking or maintaining posture'],
            ['value' => 'Reduced joint stability or body control'],
            ['value' => 'Functional limitations during daily activities'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or neurological disorders'],
            ['value' => 'Sports injuries or musculoskeletal trauma'],
            ['value' => 'Post-surgical weakness or movement dysfunction'],
            ['value' => 'Spinal cord injuries or nerve damage'],
            ['value' => 'Chronic pain or prolonged immobilization'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Muscle fatigue or temporary soreness after therapy'],
            ['value' => 'Difficulty performing exercises in severe neurological conditions'],
            ['value' => 'Balance instability or risk of falls during rehabilitation'],
            ['value' => 'Delayed progress if exercises are not performed consistently'],
            ['value' => 'Temporary discomfort during movement retraining sessions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Neuromuscular re-education may include balance training, gait retraining, posture correction, coordination exercises, proprioceptive training, strengthening programs, functional movement therapy, and stability exercises. Therapists may also use assistive devices, biofeedback techniques, therapeutic equipment, and task-specific rehabilitation to improve movement efficiency and physical function.'],
            ['value' => 'Practicing prescribed rehabilitation exercises regularly'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Following therapist instructions and safety guidelines'],
            ['value' => 'Monitoring for fatigue, pain, or balance issues during therapy'],
            ['value' => 'Attending regular rehabilitation follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with neuromuscular re-education is generally very positive when rehabilitation is started early and performed consistently. Therapy can significantly improve movement control, balance, coordination, posture, and functional independence. Ongoing exercise, rehabilitation support, and healthy movement habits are important for maintaining long-term physical function and preventing recurrence of movement-related problems. ___________________',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Neuromuscular Re-education',
                'meta_description' => 'Neuromuscular re-education is a rehabilitation therapy that focuses on restoring normal movement patterns, balance, coordination, posture, muscle control, and f',
                'meta_keywords' => '',
            ]
        );
    }
}
