<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HomeExerciseProgramPatientEducationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Home Exercise Program & Patient Education')],
            [
                'name' => 'Home Exercise Program & Patient Education',
                'slug' => Str::slug('Home Exercise Program & Patient Education'),
                'h1' => 'Home Exercise Program & Patient Education',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Home exercise programs and patient education are important components of rehabilitation and long-term health management. These programs help individuals continue therapeutic exercises, maintain physical function, prevent complications, and improve recovery outside of clinical settings through guided self-care and structured education.',
                'about_more' => '',
                'overview' => 'Home exercise programs are personalized sets of exercises designed by rehabilitation specialists to improve strength, flexibility, mobility, balance, posture, and overall physical function. Patient education focuses on teaching proper body mechanics, disease management, injury prevention, safe movement techniques, and lifestyle modifications to support long-term recovery and independence. These programs are commonly used in neurological, orthopedic, cardiopulmonary, pediatric, geriatric, and sports rehabilitation.',
                'symptoms' => [
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Joint stiffness or pain during movement'],
            ['value' => 'Balance or coordination difficulties'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Common Causes'],
            ['value' => 'Injury, surgery, or prolonged immobilization'],
            ['value' => 'Neurological or musculoskeletal disorders'],
            ['value' => 'Chronic pain or degenerative conditions'],
            ['value' => 'Physical deconditioning due to inactivity'],
            ['value' => 'Need for long-term rehabilitation and preventive care'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Incorrect exercise technique leading to strain or injury'],
            ['value' => 'Delayed recovery if exercises are not performed consistently'],
            ['value' => 'Muscle soreness or temporary fatigue after activity'],
            ['value' => 'Reduced motivation or adherence to rehabilitation plans'],
            ['value' => 'Risk of falls or overexertion in certain medical conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Home exercise programs may include stretching exercises, strengthening routines, balance training, posture correction, breathing exercises, mobility exercises, endurance conditioning, and functional movement activities. Patient education may involve guidance on ergonomics, fall prevention, pain management, safe exercise practices, assistive device usage, and lifestyle modifications to support long-term recovery and overall health.'],
            ['value' => 'Performing prescribed home exercises regularly and safely'],
            ['value' => 'Following therapist instructions and activity precautions'],
            ['value' => 'Monitoring for pain, swelling, or worsening symptoms'],
            ['value' => 'Maintaining proper posture and body mechanics during activities'],
            ['value' => 'Attending follow-up rehabilitation and progress review sessions'],
        ],
                'recovery' => 'The long-term outlook with home exercise programs and patient education is generally very positive when individuals actively participate in their rehabilitation and self-care routines. Consistent exercise, healthy lifestyle habits, and proper education can significantly improve mobility, strength, independence, and overall quality of life. Ongoing follow-up and adherence to rehabilitation plans are important for maintaining long-term physical health and preventing future complications. ____________________________ 19. Tele-Rehabilitation / Remote Monitoring Tele-Rehabilitation / Remote Monitoring Procedures',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Home Exercise Program & Patient Education',
                'meta_description' => 'Home exercise programs and patient education are important components of rehabilitation and long-term health management. These programs help individuals continu',
                'meta_keywords' => '',
            ]
        );
    }
}
