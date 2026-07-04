<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostAmputationRehabilitationGaitTrainingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Amputation Rehabilitation & Gait Training')],
            [
                'name' => 'Post-Amputation Rehabilitation & Gait Training',
                'slug' => Str::slug('Post-Amputation Rehabilitation & Gait Training'),
                'h1' => 'Post-Amputation Rehabilitation & Gait Training',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-amputation rehabilitation and gait training are specialized rehabilitation programs designed to help individuals regain mobility, balance, strength, and independence after limb amputation. These therapies focus on stump care, prosthetic adaptation, walking training, and functional recovery to improve overall quality of life and daily functioning.',
                'about_more' => '',
                'overview' => 'Rehabilitation after amputation involves a multidisciplinary approach that includes physiotherapy, occupational therapy, prosthetic fitting, strengthening exercises, balance training, and gait re-education. Gait training helps individuals learn safe walking techniques with or without prosthetic devices while improving posture, coordination, and endurance. Rehabilitation programs are individualized according to the level of amputation, physical condition, and recovery goals of the patient.',
                'symptoms' => [
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Pain, swelling, or sensitivity at the stump site'],
            ['value' => 'Phantom limb sensations or discomfort'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Common Causes'],
            ['value' => 'Traumatic injuries or accidents'],
            ['value' => 'Diabetes-related complications and poor circulation'],
            ['value' => 'Severe infections or chronic non-healing wounds'],
            ['value' => 'Peripheral vascular disease'],
            ['value' => 'Bone or soft tissue tumors requiring amputation'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Joint stiffness or muscle contractures'],
            ['value' => 'Skin irritation or pressure sores from prosthetic use'],
            ['value' => 'Falls or balance-related injuries'],
            ['value' => 'Phantom limb pain or nerve-related discomfort'],
            ['value' => 'Emotional stress, anxiety, or adjustment difficulties'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Post-amputation rehabilitation may include strengthening exercises, balance training, gait re-education, prosthetic training, stump shaping, mobility exercises, pain management, and occupational therapy. Rehabilitation specialists may also provide assistive devices, posture correction, endurance training, and education on prosthetic care and safe mobility techniques to improve functional independence.'],
            ['value' => 'Maintaining proper stump hygiene and skin care'],
            ['value' => 'Performing prescribed stretching and strengthening exercises regularly'],
            ['value' => 'Using prosthetic devices safely and correctly'],
            ['value' => 'Monitoring for skin irritation, swelling, or pressure sores'],
            ['value' => 'Attending regular rehabilitation and prosthetic follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook after post-amputation rehabilitation is generally positive when therapy is started early and followed consistently. Rehabilitation and gait training can significantly improve mobility, balance, independence, and confidence. Continuous physiotherapy, prosthetic adjustments, supportive care, and regular follow-up are important for maintaining long-term functional recovery and quality of life. _________________________ 24. Multidisciplinary Rehabilitation Team Approach Multidisciplinary Rehabilitation Team Approach Procedures',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Post-Amputation Rehabilitation & Gait Training',
                'meta_description' => 'Post-amputation rehabilitation and gait training are specialized rehabilitation programs designed to help individuals regain mobility, balance, strength, and in',
                'meta_keywords' => '',
            ]
        );
    }
}
