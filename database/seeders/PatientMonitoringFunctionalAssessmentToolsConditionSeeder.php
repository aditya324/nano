<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientMonitoringFunctionalAssessmentToolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Patient Monitoring & Functional Assessment Tools')],
            [
                'name' => 'Patient Monitoring & Functional Assessment Tools',
                'slug' => Str::slug('Patient Monitoring & Functional Assessment Tools'),
                'h1' => 'Patient Monitoring & Functional Assessment Tools',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Patient monitoring and functional assessment tools are specialized medical and rehabilitation devices used to evaluate physical performance, monitor health status, track rehabilitation progress, and assess functional abilities in individuals undergoing medical treatment or rehabilitation programs. These tools help healthcare professionals develop personalized treatment plans and improve recovery outcomes.',
                'about_more' => '',
                'overview' => 'Functional assessment tools may include gait analysis systems, balance assessment devices, muscle strength testing equipment, range-of-motion measurement tools, posture analysis systems, mobility assessment scales, and cognitive evaluation tools. Patient monitoring equipment may include pulse oximeters, blood pressure monitors, heart rate monitors, respiratory monitoring devices, and digital rehabilitation tracking systems. These tools are commonly used in neurological, orthopedic, cardiopulmonary, geriatric, pediatric, and sports rehabilitation settings.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical function'],
            ['value' => 'Muscle weakness or balance difficulties'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Fatigue or reduced endurance during activity'],
            ['value' => 'Cognitive, coordination, or movement-related limitations'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological disorders or injuries'],
            ['value' => 'Orthopedic conditions and post-surgical recovery'],
            ['value' => 'Chronic cardiopulmonary or musculoskeletal disorders'],
            ['value' => 'Developmental or age-related functional decline'],
            ['value' => 'Sports injuries or rehabilitation-related mobility limitations'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed recovery without accurate monitoring'],
            ['value' => 'Increased risk of falls or physical complications'],
            ['value' => 'Inadequate adjustment of rehabilitation programs'],
            ['value' => 'Reduced independence and physical functioning'],
            ['value' => 'Emotional stress related to prolonged rehabilitation needs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Patient monitoring and functional assessment tools are used to evaluate mobility, balance, strength, endurance, posture, gait patterns, respiratory function, cardiovascular status, and overall rehabilitation progress. Rehabilitation specialists use these assessments to modify treatment plans, monitor patient safety, improve therapy outcomes, and support individualized rehabilitation care.'],
            ['value' => 'Attending regular monitoring and rehabilitation assessments'],
            ['value' => 'Following prescribed therapy and home exercise programs consistently'],
            ['value' => 'Monitoring changes in mobility, pain, endurance, and daily function'],
            ['value' => 'Maintaining communication with rehabilitation specialists'],
            ['value' => 'Participating actively in rehabilitation progress evaluations'],
        ],
                'recovery' => 'The long-term outlook with patient monitoring and functional assessment is generally very positive because regular evaluations support early intervention, personalized rehabilitation, and improved recovery outcomes. Continuous monitoring helps optimize mobility, independence, physical performance, and overall quality of life while reducing complications and supporting long-term rehabilitation success _________________________ 140. Tele-Rehabilitation Setup Tele-Rehabilitation Setup Equipment',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Patient Monitoring & Functional Assessment Tools',
                'meta_description' => 'Patient monitoring and functional assessment tools are specialized medical and rehabilitation devices used to evaluate physical performance, monitor health stat',
                'meta_keywords' => '',
            ]
        );
    }
}
