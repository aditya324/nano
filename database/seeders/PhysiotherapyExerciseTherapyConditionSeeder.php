<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PhysiotherapyExerciseTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Physiotherapy / Exercise Therapy')],
            [
                'name' => 'Physiotherapy / Exercise Therapy',
                'slug' => Str::slug('Physiotherapy / Exercise Therapy'),
                'h1' => 'Physiotherapy / Exercise Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Physiotherapy and exercise therapy are rehabilitation treatments designed to improve movement, strength, flexibility, balance, endurance, and overall physical function. Active, passive, and assisted exercises are used to help individuals recover from injuries, surgeries, neurological conditions, musculoskeletal disorders, and mobility limitations.',
                'about_more' => '',
                'overview' => 'Active exercises are performed independently by the patient using their own muscle strength, while passive exercises involve movement provided entirely by a therapist or external support. Assisted exercises combine patient effort with therapist assistance or supportive equipment to improve mobility and muscle function. Physiotherapy programs are individualized based on the patient’s condition, physical abilities, and rehabilitation goals.',
                'symptoms' => [
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Joint stiffness or limited range of motion'],
            ['value' => 'Pain affecting movement and physical activity'],
            ['value' => 'Balance or coordination difficulties'],
            ['value' => 'Reduced physical endurance or functional independence'],
            ['value' => 'Common Causes'],
            ['value' => 'Musculoskeletal injuries or joint disorders'],
            ['value' => 'Neurological conditions such as stroke or spinal cord injury'],
            ['value' => 'Post-surgical recovery and immobilization'],
            ['value' => 'Chronic pain or degenerative diseases'],
            ['value' => 'Age-related weakness or physical deconditioning'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Muscle soreness or temporary discomfort after therapy'],
            ['value' => 'Fatigue or overexertion during rehabilitation'],
            ['value' => 'Joint strain or aggravation of existing injuries'],
            ['value' => 'Risk of falls in individuals with severe balance problems'],
            ['value' => 'Delayed recovery if exercises are not performed correctly'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Physiotherapy and exercise therapy programs may include stretching exercises, strengthening routines, mobility training, balance rehabilitation, gait training, posture correction, respiratory exercises, and functional movement therapy. Rehabilitation specialists may also use manual therapy, assistive devices, electrotherapy, hydrotherapy, and therapeutic equipment to improve recovery and physical performance.'],
            ['value' => 'Regular participation in prescribed exercise programs'],
            ['value' => 'Following therapist instructions and safety precautions'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Monitoring for pain, swelling, or excessive fatigue'],
            ['value' => 'Regular rehabilitation follow-up and progress assessment'],
        ],
                'recovery' => 'The long-term outlook with physiotherapy and exercise therapy is generally very positive when rehabilitation is started early and performed consistently. Therapy helps improve mobility, strength, flexibility, endurance, and independence while reducing pain and functional limitations. Ongoing exercise, healthy lifestyle habits, and regular rehabilitation follow-up are important for maintaining long-term physical health and preventing recurrence of mobility problems. ____________________________ 2. Occupational Therapy (ADL Training, Fine Motor Skills) Occupational Therapy (ADL Training & Fine Motor Skills) Procedures',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Physiotherapy / Exercise Therapy',
                'meta_description' => 'Physiotherapy and exercise therapy are rehabilitation treatments designed to improve movement, strength, flexibility, balance, endurance, and overall physical f',
                'meta_keywords' => '',
            ]
        );
    }
}
