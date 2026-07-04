<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OccupationalTherapyAidsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Occupational Therapy Aids')],
            [
                'name' => 'Occupational Therapy Aids',
                'slug' => Str::slug('Occupational Therapy Aids'),
                'h1' => 'Occupational Therapy Aids',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Occupational therapy aids are specialized supportive tools and adaptive devices designed to help individuals perform daily activities more safely, independently, and comfortably. These aids assist people with physical, neurological, developmental, or age-related limitations in improving functional abilities and quality of life.',
                'about_more' => '',
                'overview' => 'Occupational therapy aids may include adaptive utensils, dressing aids, grab bars, writing supports, splints, mobility supports, fine motor training tools, sensory integration equipment, and assistive devices for bathing, eating, grooming, and daily living activities. These aids are commonly used in rehabilitation programs for stroke recovery, arthritis, neurological disorders, developmental delays, orthopedic injuries, and geriatric care. Occupational therapists customize recommendations based on the patient’s physical abilities and functional needs.',
                'symptoms' => [
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Reduced hand strength or coordination'],
            ['value' => 'Fine motor skill limitations'],
            ['value' => 'Balance or mobility difficulties'],
            ['value' => 'Functional challenges related to injury, illness, or disability'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological disorders such as stroke or Parkinson’s disease'],
            ['value' => 'Arthritis and musculoskeletal conditions'],
            ['value' => 'Developmental or pediatric disorders'],
            ['value' => 'Orthopedic injuries or post-surgical limitations'],
            ['value' => 'Age-related weakness or reduced mobility'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced independence in daily functioning'],
            ['value' => 'Falls or injuries during routine activities'],
            ['value' => 'Muscle weakness or joint stiffness affecting movement'],
            ['value' => 'Emotional stress related to functional limitations'],
            ['value' => 'Improper use of assistive devices causing discomfort or strain'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Occupational therapy aids are used alongside rehabilitation programs involving ADL training, fine motor exercises, coordination training, mobility rehabilitation, sensory integration therapy, and functional skill development. Occupational therapists also provide education on safe device usage, adaptive strategies, ergonomic techniques, and home modifications to improve independence and safety.'],
            ['value' => 'Using assistive devices safely and consistently'],
            ['value' => 'Practicing prescribed occupational therapy exercises regularly'],
            ['value' => 'Maintaining and cleaning adaptive equipment properly'],
            ['value' => 'Monitoring for discomfort, skin irritation, or mobility difficulties'],
            ['value' => 'Attending regular occupational therapy and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with occupational therapy aids is generally very positive when devices are appropriately selected and used consistently. These aids can significantly improve independence, mobility, safety, coordination, and overall quality of life. Continuous rehabilitation, adaptive training, and regular follow-up support are important for maintaining long-term functional ability and well-being. _____________________________',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Occupational Therapy Aids',
                'meta_description' => 'Occupational therapy aids are specialized supportive tools and adaptive devices designed to help individuals perform daily activities more safely, independently',
                'meta_keywords' => '',
            ]
        );
    }
}
