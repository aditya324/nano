<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GaitTrainingBalanceExercisesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gait Training & Balance Exercises')],
            [
                'name' => 'Gait Training & Balance Exercises',
                'slug' => Str::slug('Gait Training & Balance Exercises'),
                'h1' => 'Gait Training & Balance Exercises',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gait training and balance exercises are rehabilitation therapies designed to improve walking ability, coordination, stability, posture, and overall mobility. These therapies help individuals regain safe movement patterns, reduce fall risk, and improve independence after injury, surgery, neurological disorders, or musculoskeletal conditions.',
                'about_more' => '',
                'overview' => 'Gait training focuses on correcting walking patterns, improving step coordination, increasing strength, and enhancing mobility using therapeutic exercises and assistive devices when required. Balance exercises help improve body stability, posture control, and coordination to prevent falls and support safe movement. These therapies are commonly used in stroke rehabilitation, orthopedic recovery, neurological disorders, geriatric rehabilitation, and sports injury recovery.',
                'symptoms' => [
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Unsteady gait or frequent falls'],
            ['value' => 'Muscle weakness or coordination problems'],
            ['value' => 'Reduced mobility and physical endurance'],
            ['value' => 'Fear of falling or instability during movement'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or neurological disorders'],
            ['value' => 'Joint injuries or post-surgical recovery'],
            ['value' => 'Muscle weakness or balance impairments'],
            ['value' => 'Aging-related mobility decline'],
            ['value' => 'Spinal cord injuries or vestibular disorders'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Falls and injury during movement'],
            ['value' => 'Reduced mobility and independence'],
            ['value' => 'Muscle weakness or joint stiffness'],
            ['value' => 'Fatigue during rehabilitation exercises'],
            ['value' => 'Delayed recovery if therapy is not performed consistently'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Gait training and balance rehabilitation may include walking exercises, strength training, coordination drills, posture correction, treadmill therapy, balance board exercises, stair training, and functional mobility activities. Therapists may also use assistive devices such as walkers, canes, parallel bars, or supportive equipment to improve safety and mobility during rehabilitation.'],
            ['value' => 'Practicing prescribed exercises regularly'],
            ['value' => 'Using assistive devices safely and correctly'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Monitoring for dizziness, fatigue, or pain during therapy'],
            ['value' => 'Attending regular rehabilitation follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with gait training and balance rehabilitation is generally very positive when therapy is started early and continued consistently. These therapies help improve walking ability, stability, coordination, and confidence while reducing fall risk and enhancing independence. Ongoing exercise, physical activity, and rehabilitation follow-up are important for maintaining long-term mobility and functional health. _______________________________ 8. Pain Management (Physiotherapeutic & Adjunct Medications) Pain Management (Physiotherapeutic & Adjunct Medications) Procedures',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Gait Training & Balance Exercises',
                'meta_description' => 'Gait training and balance exercises are rehabilitation therapies designed to improve walking ability, coordination, stability, posture, and overall mobility. Th',
                'meta_keywords' => '',
            ]
        );
    }
}
