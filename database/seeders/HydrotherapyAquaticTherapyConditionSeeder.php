<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HydrotherapyAquaticTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hydrotherapy / Aquatic Therapy')],
            [
                'name' => 'Hydrotherapy / Aquatic Therapy',
                'slug' => Str::slug('Hydrotherapy / Aquatic Therapy'),
                'h1' => 'Hydrotherapy / Aquatic Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hydrotherapy, also known as aquatic therapy, is a rehabilitation treatment that uses water-based exercises and therapeutic movements to improve strength, mobility, balance, flexibility, and pain relief. The buoyancy and resistance of water help reduce stress on joints and muscles while supporting safe movement during rehabilitation.',
                'about_more' => '',
                'overview' => 'Aquatic therapy is commonly used for musculoskeletal injuries, arthritis, neurological disorders, post-surgical rehabilitation, chronic pain conditions, and balance problems. Warm water therapy pools provide a supportive environment that allows individuals to perform exercises with less pain and reduced weight-bearing stress. Hydrotherapy programs are supervised by rehabilitation specialists and are tailored to individual physical abilities and recovery goals.',
                'symptoms' => [
            ['value' => 'Joint pain or stiffness'],
            ['value' => 'Muscle weakness or reduced mobility'],
            ['value' => 'Balance and coordination difficulties'],
            ['value' => 'Chronic pain or physical fatigue'],
            ['value' => 'Difficulty performing land-based exercises comfortably'],
            ['value' => 'Common Causes'],
            ['value' => 'Arthritis and joint disorders'],
            ['value' => 'Neurological conditions such as stroke or Parkinson’s disease'],
            ['value' => 'Sports injuries or post-surgical recovery'],
            ['value' => 'Chronic pain syndromes or muscle stiffness'],
            ['value' => 'Age-related mobility and balance decline'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Slipping or falls around wet surfaces'],
            ['value' => 'Fatigue or muscle soreness after therapy sessions'],
            ['value' => 'Skin irritation or sensitivity to pool chemicals'],
            ['value' => 'Risk of infection in individuals with open wounds'],
            ['value' => 'Breathing discomfort in some respiratory conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hydrotherapy and aquatic rehabilitation may include stretching exercises, walking exercises in water, resistance training, balance therapy, mobility exercises, relaxation techniques, and cardiovascular conditioning. The supportive properties of water help improve movement, reduce pain, and enhance overall physical function while minimizing stress on joints and muscles.'],
            ['value' => 'Staying hydrated before and after therapy sessions'],
            ['value' => 'Following prescribed aquatic exercise programs regularly'],
            ['value' => 'Monitoring for fatigue, dizziness, or pain after therapy'],
            ['value' => 'Maintaining proper pool safety and hygiene practices'],
            ['value' => 'Attending regular rehabilitation follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with hydrotherapy and aquatic therapy is generally very positive when therapy is performed consistently and under professional supervision. Aquatic rehabilitation can significantly improve mobility, strength, balance, endurance, and pain control while supporting overall physical well-being. Ongoing exercise, rehabilitation follow-up, and healthy lifestyle practices are important for maintaining long-term functional recovery and mobility. _______________________ 11. Respiratory Therapy & Pulmonary Rehabilitation Respiratory Therapy & Pulmonary Rehabilitation Procedures',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Hydrotherapy / Aquatic Therapy',
                'meta_description' => 'Hydrotherapy, also known as aquatic therapy, is a rehabilitation treatment that uses water-based exercises and therapeutic movements to improve strength, mobili',
                'meta_keywords' => '',
            ]
        );
    }
}
