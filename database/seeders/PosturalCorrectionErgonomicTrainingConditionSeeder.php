<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PosturalCorrectionErgonomicTrainingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Postural Correction & Ergonomic Training')],
            [
                'name' => 'Postural Correction & Ergonomic Training',
                'slug' => Str::slug('Postural Correction & Ergonomic Training'),
                'h1' => 'Postural Correction & Ergonomic Training',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Postural correction and ergonomic training are rehabilitation and preventive care approaches designed to improve body alignment, reduce physical strain, and promote healthy movement patterns during daily activities, work, and exercise. These therapies help prevent musculoskeletal pain, improve comfort, and enhance overall physical function.',
                'about_more' => '',
                'overview' => 'Postural correction focuses on improving spinal alignment, muscle balance, and movement habits through targeted exercises and therapeutic techniques. Ergonomic training involves educating individuals on proper body mechanics, workstation setup, lifting techniques, and movement strategies to reduce stress on muscles and joints. These interventions are commonly used for neck pain, back pain, repetitive strain injuries, workplace-related discomfort, and rehabilitation after injury or surgery.',
                'symptoms' => [
            ['value' => 'Neck, shoulder, or back pain'],
            ['value' => 'Muscle stiffness or tension'],
            ['value' => 'Poor sitting or standing posture'],
            ['value' => 'Fatigue during prolonged work or physical activity'],
            ['value' => 'Reduced flexibility or movement-related discomfort'],
            ['value' => 'Common Causes'],
            ['value' => 'Prolonged sitting or improper workstation setup'],
            ['value' => 'Poor posture during daily activities'],
            ['value' => 'Repetitive strain or overuse injuries'],
            ['value' => 'Muscle weakness or imbalance'],
            ['value' => 'Sedentary lifestyle or lack of physical activity'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Chronic neck or back pain'],
            ['value' => 'Muscle strain and joint stress'],
            ['value' => 'Reduced flexibility and physical endurance'],
            ['value' => 'Repetitive strain injuries or nerve compression'],
            ['value' => 'Difficulty performing work or daily activities comfortably'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Postural correction and ergonomic training may include stretching exercises, strengthening programs, posture retraining, spinal alignment exercises, ergonomic workstation modifications, manual therapy, and movement education. Rehabilitation specialists may also provide guidance on lifting techniques, sitting posture, sleeping positions, and preventive strategies to improve long-term musculoskeletal health.'],
            ['value' => 'Practicing prescribed posture and strengthening exercises regularly'],
            ['value' => 'Maintaining ergonomic work and home environments'],
            ['value' => 'Avoiding prolonged poor posture or repetitive strain'],
            ['value' => 'Monitoring for recurring pain or muscle tension'],
            ['value' => 'Attending regular rehabilitation and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with postural correction and ergonomic training is generally very positive when healthy movement habits are maintained consistently. These therapies help reduce pain, improve flexibility, enhance physical comfort, and prevent recurrent musculoskeletal problems. Ongoing exercise, ergonomic awareness, and preventive care are important for maintaining long-term posture and physical well-being. _________________________ 10. Hydrotherapy / Aquatic Therapy Hydrotherapy / Aquatic Therapy Procedures',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Postural Correction & Ergonomic Training',
                'meta_description' => 'Postural correction and ergonomic training are rehabilitation and preventive care approaches designed to improve body alignment, reduce physical strain, and pro',
                'meta_keywords' => '',
            ]
        );
    }
}
