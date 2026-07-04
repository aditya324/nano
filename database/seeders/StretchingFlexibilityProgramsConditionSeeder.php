<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StretchingFlexibilityProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Stretching & Flexibility Programs')],
            [
                'name' => 'Stretching & Flexibility Programs',
                'slug' => Str::slug('Stretching & Flexibility Programs'),
                'h1' => 'Stretching & Flexibility Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Stretching and flexibility programs are rehabilitation and fitness therapies designed to improve joint mobility, muscle flexibility, posture, and overall physical function. These programs help reduce stiffness, prevent injuries, improve movement efficiency, and support recovery from musculoskeletal, neurological, and sports-related conditions.',
                'about_more' => '',
                'overview' => 'Stretching exercises focus on lengthening muscles, tendons, and soft tissues to improve range of motion and reduce tension. Flexibility programs may include active stretching, passive stretching, dynamic stretching, and therapeutic mobility exercises tailored to individual physical needs and rehabilitation goals. These programs are commonly used in physiotherapy, sports rehabilitation, post-surgical recovery, chronic pain management, and preventive wellness care.',
                'symptoms' => [
            ['value' => 'Muscle tightness or stiffness'],
            ['value' => 'Reduced joint flexibility or range of motion'],
            ['value' => 'Pain during movement or physical activity'],
            ['value' => 'Poor posture or movement restrictions'],
            ['value' => 'Difficulty performing daily activities comfortably'],
            ['value' => 'Common Causes'],
            ['value' => 'Sedentary lifestyle or prolonged sitting'],
            ['value' => 'Sports injuries or muscle overuse'],
            ['value' => 'Arthritis or musculoskeletal disorders'],
            ['value' => 'Post-surgical stiffness or immobilization'],
            ['value' => 'Neurological conditions affecting movement and flexibility'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Muscle soreness after stretching exercises'],
            ['value' => 'Overstretching or muscle strain if performed incorrectly'],
            ['value' => 'Temporary discomfort during rehabilitation sessions'],
            ['value' => 'Joint instability in individuals with excessive flexibility'],
            ['value' => 'Delayed recovery if exercises are not performed consistently'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Stretching and flexibility programs may include static stretching, dynamic stretching, range-of-motion exercises, yoga-based movements, posture correction, mobility drills, and therapeutic exercise routines. Rehabilitation specialists may combine these programs with strengthening exercises, manual therapy, hydrotherapy, and functional training to improve movement, reduce stiffness, and support long-term physical health.'],
            ['value' => 'Performing prescribed stretching exercises regularly'],
            ['value' => 'Maintaining proper posture and body mechanics'],
            ['value' => 'Warming up before physical activity or exercise'],
            ['value' => 'Avoiding sudden or forceful overstretching'],
            ['value' => 'Attending regular rehabilitation and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with stretching and flexibility programs is generally very positive when exercises are practiced consistently and correctly. These programs help improve mobility, posture, muscle balance, physical performance, and overall quality of movement. Ongoing exercise, healthy movement habits, and preventive rehabilitation are important for maintaining long-term flexibility and musculoskeletal health. ______________________ 15. Strength Training & Functional Mobility Exercises Strength Training & Functional Mobility Exercises Procedures',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Stretching & Flexibility Programs',
                'meta_description' => 'Stretching and flexibility programs are rehabilitation and fitness therapies designed to improve joint mobility, muscle flexibility, posture, and overall physic',
                'meta_keywords' => '',
            ]
        );
    }
}
