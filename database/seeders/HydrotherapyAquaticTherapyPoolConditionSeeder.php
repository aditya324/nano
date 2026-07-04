<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydrotherapyAquaticTherapyPoolConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hydrotherapy / Aquatic Therapy Pool')],
            [
                'name' => 'Hydrotherapy / Aquatic Therapy Pool',
                'slug' => Str::slug('Hydrotherapy / Aquatic Therapy Pool'),
                'h1' => 'Hydrotherapy / Aquatic Therapy Pool',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hydrotherapy and aquatic therapy pools are specialized rehabilitation pools designed to support therapeutic exercises, pain relief, mobility training, and physical rehabilitation in a controlled water environment. The buoyancy and resistance of water help reduce stress on joints and muscles while improving movement, balance, strength, and flexibility.',
                'about_more' => '',
                'overview' => 'Aquatic therapy pools are commonly used in physiotherapy and rehabilitation programs for orthopedic injuries, neurological disorders, arthritis, chronic pain conditions, sports injuries, and post-surgical recovery. Warm water therapy provides muscle relaxation, improved circulation, and reduced joint loading, allowing individuals to perform exercises more comfortably and safely. These pools may include supportive rails, adjustable depth systems, underwater treadmills, and temperature-controlled environments for therapeutic use.',
                'symptoms' => [
            ['value' => 'Joint pain or stiffness'],
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Balance and coordination difficulties'],
            ['value' => 'Chronic pain or physical fatigue'],
            ['value' => 'Difficulty performing land-based exercises comfortably'],
            ['value' => 'Common Causes'],
            ['value' => 'Arthritis and musculoskeletal disorders'],
            ['value' => 'Neurological conditions affecting mobility and balance'],
            ['value' => 'Sports injuries or post-surgical rehabilitation needs'],
            ['value' => 'Chronic pain syndromes and muscle tightness'],
            ['value' => 'Age-related weakness and reduced physical endurance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Slipping or falls around wet surfaces'],
            ['value' => 'Fatigue or muscle soreness after therapy sessions'],
            ['value' => 'Skin irritation or sensitivity to pool chemicals'],
            ['value' => 'Risk of infection in individuals with open wounds'],
            ['value' => 'Breathing discomfort in certain respiratory conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hydrotherapy and aquatic therapy pools are used for stretching exercises, gait training, strengthening exercises, balance rehabilitation, mobility training, cardiovascular conditioning, and relaxation therapy. Rehabilitation specialists supervise individualized aquatic therapy programs to improve movement, reduce pain, increase endurance, and support functional recovery in a low-impact environment.'],
            ['value' => 'Following prescribed aquatic therapy programs consistently'],
            ['value' => 'Maintaining proper hydration before and after therapy sessions'],
            ['value' => 'Monitoring for fatigue, dizziness, or discomfort during therapy'],
            ['value' => 'Practicing pool safety and hygiene measures'],
            ['value' => 'Attending regular rehabilitation and progress evaluation sessions'],
        ],
                'recovery' => 'The long-term outlook with hydrotherapy and aquatic rehabilitation is generally very positive when therapy is performed regularly under professional supervision. Aquatic therapy can significantly improve mobility, strength, balance, endurance, and pain control while reducing stress on joints and muscles. Continuous rehabilitation, exercise, and healthy lifestyle habits are important for maintaining long-term physical function and overall well-being. ________________________',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Hydrotherapy / Aquatic Therapy Pool',
                'meta_description' => 'Hydrotherapy and aquatic therapy pools are specialized rehabilitation pools designed to support therapeutic exercises, pain relief, mobility training, and physi',
                'meta_keywords' => '',
            ]
        );
    }
}
