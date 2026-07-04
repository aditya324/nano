<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OccupationalTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Occupational Therapy')],
            [
                'name' => 'Occupational Therapy',
                'slug' => Str::slug('Occupational Therapy'),
                'h1' => 'Occupational Therapy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Occupational therapy is a rehabilitation service that helps individuals develop, recover, or maintain the skills needed for daily living and independent functioning. Therapy focuses on improving activities of daily living (ADL), fine motor skills, coordination, cognitive function, and adaptive abilities in individuals affected by injury, illness, neurological disorders, or physical disabilities.',
                'about_more' => '',
                'overview' => 'Occupational therapy programs are designed to help patients perform everyday tasks such as dressing, eating, writing, bathing, cooking, and mobility-related activities safely and independently. Therapists use therapeutic exercises, adaptive techniques, assistive devices, and functional training to improve hand function, coordination, grip strength, and overall independence in daily life and work-related activities.',
                'symptoms' => [
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Reduced hand strength or coordination'],
            ['value' => 'Poor fine motor skills or grip control'],
            ['value' => 'Cognitive or sensory difficulties affecting function'],
            ['value' => 'Limited mobility or reduced functional independence'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or neurological disorders'],
            ['value' => 'Traumatic injuries or fractures'],
            ['value' => 'Developmental or pediatric conditions'],
            ['value' => 'Arthritis, musculoskeletal disorders, or chronic pain'],
            ['value' => 'Post-surgical recovery or age-related functional decline'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced independence in daily living activities'],
            ['value' => 'Muscle weakness or joint stiffness affecting hand function'],
            ['value' => 'Difficulty returning to work, school, or social activities'],
            ['value' => 'Emotional stress or reduced confidence in functional abilities'],
            ['value' => 'Increased risk of falls or injury during routine activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Occupational therapy may include ADL training, hand and finger exercises, coordination training, cognitive rehabilitation, sensory integration therapy, adaptive equipment training, and functional skill development. Therapists may also recommend splints, assistive devices, environmental modifications, and ergonomic strategies to improve independence and safety in daily life.'],
            ['value' => 'Regular participation in occupational therapy sessions'],
            ['value' => 'Practicing prescribed home exercises and functional activities'],
            ['value' => 'Using assistive devices or adaptive techniques correctly'],
            ['value' => 'Monitoring progress in mobility, coordination, and independence'],
            ['value' => 'Ongoing follow-up and rehabilitation support when required'],
        ],
                'recovery' => 'The long-term outlook with occupational therapy is generally very positive when therapy is started early and continued consistently. Occupational therapy helps individuals improve independence, functional abilities, coordination, and quality of life. Continuous rehabilitation, supportive care, and active participation in therapy are important for maintaining long-term physical and functional well-being. ________________________ 3. Speech & Swallowing Therapy (Post-Stroke / Neurological Disorders) Speech & Swallowing Therapy (Post-Stroke / Neurological Disorders) Procedures',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Occupational Therapy',
                'meta_description' => 'Occupational therapy is a rehabilitation service that helps individuals develop, recover, or maintain the skills needed for daily living and independent functio',
                'meta_keywords' => '',
            ]
        );
    }
}
