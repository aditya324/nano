<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GaitTrainingDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Gait Training Devices')],
            [
                'title' => 'Gait Training Devices',
                'slug' => Str::slug('Gait Training Devices'),
                'introduction' => 'Gait training devices are specialized rehabilitation tools used to improve walking ability, balance, coordination, posture, and mobility in individuals with movement difficulties caused by neurological, orthopedic, musculoskeletal, or age-related conditions. These devices help patients regain safe and functional walking patterns during rehabilitation and recovery.',
                'what_is' => 'Gait training devices may include walkers, parallel bars, gait trainers, body-weight support systems, robotic-assisted walking devices, canes, treadmills, and mobility support equipment. These tools are commonly used in rehabilitation programs for stroke recovery, spinal cord injuries, cerebral palsy, post-surgical rehabilitation, amputations, neurological disorders, and balance impairments. Rehabilitation specialists use these devices to improve strength, endurance, gait mechanics, and functional independence.',
                'symptoms' => [
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Unsteady gait or frequent falls'],
            ['value' => 'Muscle weakness or coordination problems'],
            ['value' => 'Reduced mobility and physical endurance'],
            ['value' => 'Difficulty performing daily activities independently'],
        ],
                'causes' => [
            ['value' => 'Stroke or neurological disorders'],
            ['value' => 'Spinal cord injuries or traumatic brain injuries'],
            ['value' => 'Orthopedic injuries or post-surgical weakness'],
            ['value' => 'Age-related balance and mobility decline'],
            ['value' => 'Musculoskeletal or neuromuscular conditions affecting walking ability'],
        ],
                'condition_risks' => [
            ['value' => 'Falls or instability during rehabilitation training'],
            ['value' => 'Muscle fatigue or soreness after therapy sessions'],
            ['value' => 'Improper device use causing discomfort or strain'],
            ['value' => 'Reduced mobility if rehabilitation is delayed or inconsistent'],
            ['value' => 'Skin irritation or pressure discomfort from supportive equipment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Gait training devices are used in rehabilitation programs involving walking exercises, balance training, posture correction, strength training, endurance conditioning, and mobility re-education. Rehabilitation specialists may combine gait training with physiotherapy, neuromuscular rehabilitation, assistive device training, and functional mobility exercises to improve safe walking patterns and overall independence.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Using gait training devices safely and correctly'],
            ['value' => 'Practicing prescribed walking and balance exercises regularly'],
            ['value' => 'Monitoring for fatigue, pain, or instability during training'],
            ['value' => 'Maintaining proper posture and body mechanics during movement'],
            ['value' => 'Attending regular rehabilitation and mobility assessment sessions'],
        ],
                'surgery_risks' => [
            ['value' => 'Falls or instability during rehabilitation training'],
            ['value' => 'Muscle fatigue or soreness after therapy sessions'],
            ['value' => 'Improper device use causing discomfort or strain'],
            ['value' => 'Reduced mobility if rehabilitation is delayed or inconsistent'],
            ['value' => 'Skin irritation or pressure discomfort from supportive equipment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Gait training devices are used in rehabilitation programs involving walking exercises, balance training, posture correction, strength training, endurance conditioning, and mobility re-education. Rehabilitation specialists may combine gait training with physiotherapy, neuromuscular rehabilitation, assistive device training, and functional mobility exercises to improve safe walking patterns and overall independence.'],
        ],
                'long_term_outlook' => 'The long-term outlook with gait training rehabilitation is generally very positive when therapy is started early and practiced consistently. Gait training devices can significantly improve walking ability, balance, coordination, endurance, and independence. Ongoing rehabilitation, physical activity, and regular follow-up are important for maintaining long-term mobility and reducing fall risk.',
                'conclusion' => '',
                'seo_title' => 'Gait Training Devices',
                'seo_description' => 'Gait training devices are specialized rehabilitation tools used to improve walking ability, balance, coordination, posture, and mobility in individuals with movement difficulties caused by neurological, orthopedic, musculoskeletal, or age-related conditions. These devices help patients regain safe and functional walking patterns during rehabilitation and recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
