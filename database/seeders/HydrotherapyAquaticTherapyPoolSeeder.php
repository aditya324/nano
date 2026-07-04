<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydrotherapyAquaticTherapyPoolSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hydrotherapy / Aquatic Therapy Pool')],
            [
                'title' => 'Hydrotherapy / Aquatic Therapy Pool',
                'slug' => Str::slug('Hydrotherapy / Aquatic Therapy Pool'),
                'introduction' => 'Hydrotherapy and aquatic therapy pools are specialized rehabilitation pools designed to support therapeutic exercises, pain relief, mobility training, and physical rehabilitation in a controlled water environment. The buoyancy and resistance of water help reduce stress on joints and muscles while improving movement, balance, strength, and flexibility.',
                'what_is' => 'Aquatic therapy pools are commonly used in physiotherapy and rehabilitation programs for orthopedic injuries, neurological disorders, arthritis, chronic pain conditions, sports injuries, and post-surgical recovery. Warm water therapy provides muscle relaxation, improved circulation, and reduced joint loading, allowing individuals to perform exercises more comfortably and safely. These pools may include supportive rails, adjustable depth systems, underwater treadmills, and temperature-controlled environments for therapeutic use.',
                'symptoms' => [
            ['value' => 'Joint pain or stiffness'],
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Balance and coordination difficulties'],
            ['value' => 'Chronic pain or physical fatigue'],
            ['value' => 'Difficulty performing land-based exercises comfortably'],
        ],
                'causes' => [
            ['value' => 'Arthritis and musculoskeletal disorders'],
            ['value' => 'Neurological conditions affecting mobility and balance'],
            ['value' => 'Sports injuries or post-surgical rehabilitation needs'],
            ['value' => 'Chronic pain syndromes and muscle tightness'],
            ['value' => 'Age-related weakness and reduced physical endurance'],
        ],
                'condition_risks' => [
            ['value' => 'Slipping or falls around wet surfaces'],
            ['value' => 'Fatigue or muscle soreness after therapy sessions'],
            ['value' => 'Skin irritation or sensitivity to pool chemicals'],
            ['value' => 'Risk of infection in individuals with open wounds'],
            ['value' => 'Breathing discomfort in certain respiratory conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hydrotherapy and aquatic therapy pools are used for stretching exercises, gait training, strengthening exercises, balance rehabilitation, mobility training, cardiovascular conditioning, and relaxation therapy. Rehabilitation specialists supervise individualized aquatic therapy programs to improve movement, reduce pain, increase endurance, and support functional recovery in a low-impact environment.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Following prescribed aquatic therapy programs consistently'],
            ['value' => 'Maintaining proper hydration before and after therapy sessions'],
            ['value' => 'Monitoring for fatigue, dizziness, or discomfort during therapy'],
            ['value' => 'Practicing pool safety and hygiene measures'],
            ['value' => 'Attending regular rehabilitation and progress evaluation sessions'],
        ],
                'surgery_risks' => [
            ['value' => 'Slipping or falls around wet surfaces'],
            ['value' => 'Fatigue or muscle soreness after therapy sessions'],
            ['value' => 'Skin irritation or sensitivity to pool chemicals'],
            ['value' => 'Risk of infection in individuals with open wounds'],
            ['value' => 'Breathing discomfort in certain respiratory conditions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hydrotherapy and aquatic therapy pools are used for stretching exercises, gait training, strengthening exercises, balance rehabilitation, mobility training, cardiovascular conditioning, and relaxation therapy. Rehabilitation specialists supervise individualized aquatic therapy programs to improve movement, reduce pain, increase endurance, and support functional recovery in a low-impact environment.'],
        ],
                'long_term_outlook' => 'The long-term outlook with hydrotherapy and aquatic rehabilitation is generally very positive when therapy is performed regularly under professional supervision. Aquatic therapy can significantly improve mobility, strength, balance, endurance, and pain control while reducing stress on joints and muscles. Continuous rehabilitation, exercise, and healthy lifestyle habits are important for maintaining long-term physical function and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'Hydrotherapy / Aquatic Therapy Pool',
                'seo_description' => 'Hydrotherapy and aquatic therapy pools are specialized rehabilitation pools designed to support therapeutic exercises, pain relief, mobility training, and physical rehabilitation in a controlled water environment. The buoyancy and resistance of water help reduce stress on joints and muscles while improving movement, balance, strength, and flexibility.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
