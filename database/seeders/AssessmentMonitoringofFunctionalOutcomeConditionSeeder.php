<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AssessmentMonitoringofFunctionalOutcomeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Assessment & Monitoring of Functional Outcome')],
            [
                'name' => 'Assessment & Monitoring of Functional Outcome',
                'slug' => Str::slug('Assessment & Monitoring of Functional Outcome'),
                'h1' => 'Assessment & Monitoring of Functional Outcome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Assessment and monitoring of functional outcome involve evaluating an individual’s physical, cognitive, emotional, and functional abilities during rehabilitation and recovery. These evaluations help healthcare professionals measure progress, identify limitations, adjust treatment plans, and improve overall rehabilitation outcomes and quality of life.',
                'about_more' => '',
                'overview' => 'Functional outcome assessment is an important part of rehabilitation programs for neurological, orthopedic, cardiopulmonary, musculoskeletal, pediatric, and geriatric conditions. Healthcare professionals use clinical examinations, mobility assessments, balance testing, strength measurements, pain evaluations, and standardized functional scales to monitor recovery and treatment effectiveness. Regular monitoring helps ensure that rehabilitation goals are being achieved safely and effectively.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical function'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Muscle weakness or balance problems'],
            ['value' => 'Cognitive or communication difficulties'],
            ['value' => 'Reduced endurance or physical performance'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological disorders or injuries'],
            ['value' => 'Orthopedic conditions and post-surgical recovery'],
            ['value' => 'Chronic pain or musculoskeletal disorders'],
            ['value' => 'Cardiopulmonary conditions affecting endurance and mobility'],
            ['value' => 'Developmental or age-related functional decline'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed recovery without proper progress monitoring'],
            ['value' => 'Reduced independence and physical functioning'],
            ['value' => 'Increased risk of falls or injury'],
            ['value' => 'Inadequate adjustment of rehabilitation programs'],
            ['value' => 'Emotional stress related to prolonged disability or recovery challenges'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Functional outcome assessment may include mobility evaluations, gait analysis, muscle strength testing, balance assessments, cognitive screening, pain assessment, posture analysis, respiratory function testing, and activities of daily living (ADL) evaluations. Rehabilitation specialists use these findings to modify therapy plans, set recovery goals, and optimize patient-centered rehabilitation care.'],
            ['value' => 'Attending regular rehabilitation and evaluation appointments'],
            ['value' => 'Following prescribed therapy and home exercise programs consistently'],
            ['value' => 'Monitoring changes in mobility, pain, and daily function'],
            ['value' => 'Maintaining communication with rehabilitation specialists'],
            ['value' => 'Participating actively in rehabilitation progress reviews'],
        ],
                'recovery' => 'The long-term outlook with regular functional assessment and monitoring is generally very positive because continuous evaluation supports timely adjustments in rehabilitation care and improves recovery outcomes. Ongoing monitoring helps maximize independence, physical function, mobility, and quality of life while reducing complications and supporting long-term rehabilitation success.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Assessment & Monitoring of Functional Outcome',
                'meta_description' => 'Assessment and monitoring of functional outcome involve evaluating an individual’s physical, cognitive, emotional, and functional abilities during rehabilitatio',
                'meta_keywords' => '',
            ]
        );
    }
}
