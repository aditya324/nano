<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientMonitoringFunctionalAssessmentToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Monitoring & Functional Assessment Tools')],
            [
                'title' => 'Patient Monitoring & Functional Assessment Tools',
                'slug' => Str::slug('Patient Monitoring & Functional Assessment Tools'),
                'introduction' => 'Patient monitoring and functional assessment tools are specialized medical and rehabilitation devices used to evaluate physical performance, monitor health status, track rehabilitation progress, and assess functional abilities in individuals undergoing medical treatment or rehabilitation programs. These tools help healthcare professionals develop personalized treatment plans and improve recovery outcomes.',
                'what_is' => 'Functional assessment tools may include gait analysis systems, balance assessment devices, muscle strength testing equipment, range-of-motion measurement tools, posture analysis systems, mobility assessment scales, and cognitive evaluation tools. Patient monitoring equipment may include pulse oximeters, blood pressure monitors, heart rate monitors, respiratory monitoring devices, and digital rehabilitation tracking systems. These tools are commonly used in neurological, orthopedic, cardiopulmonary, geriatric, pediatric, and sports rehabilitation settings.',
                'symptoms' => [
            ['value' => 'Reduced mobility or physical function'],
            ['value' => 'Muscle weakness or balance difficulties'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Fatigue or reduced endurance during activity'],
            ['value' => 'Cognitive, coordination, or movement-related limitations'],
        ],
                'causes' => [
            ['value' => 'Neurological disorders or injuries'],
            ['value' => 'Orthopedic conditions and post-surgical recovery'],
            ['value' => 'Chronic cardiopulmonary or musculoskeletal disorders'],
            ['value' => 'Developmental or age-related functional decline'],
            ['value' => 'Sports injuries or rehabilitation-related mobility limitations'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed recovery without accurate monitoring'],
            ['value' => 'Increased risk of falls or physical complications'],
            ['value' => 'Inadequate adjustment of rehabilitation programs'],
            ['value' => 'Reduced independence and physical functioning'],
            ['value' => 'Emotional stress related to prolonged rehabilitation needs'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient monitoring and functional assessment tools are used to evaluate mobility, balance, strength, endurance, posture, gait patterns, respiratory function, cardiovascular status, and overall rehabilitation progress. Rehabilitation specialists use these assessments to modify treatment plans, monitor patient safety, improve therapy outcomes, and support individualized rehabilitation care.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attending regular monitoring and rehabilitation assessments'],
            ['value' => 'Following prescribed therapy and home exercise programs consistently'],
            ['value' => 'Monitoring changes in mobility, pain, endurance, and daily function'],
            ['value' => 'Maintaining communication with rehabilitation specialists'],
            ['value' => 'Participating actively in rehabilitation progress evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed recovery without accurate monitoring'],
            ['value' => 'Increased risk of falls or physical complications'],
            ['value' => 'Inadequate adjustment of rehabilitation programs'],
            ['value' => 'Reduced independence and physical functioning'],
            ['value' => 'Emotional stress related to prolonged rehabilitation needs'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient monitoring and functional assessment tools are used to evaluate mobility, balance, strength, endurance, posture, gait patterns, respiratory function, cardiovascular status, and overall rehabilitation progress. Rehabilitation specialists use these assessments to modify treatment plans, monitor patient safety, improve therapy outcomes, and support individualized rehabilitation care.'],
        ],
                'long_term_outlook' => 'The long-term outlook with patient monitoring and functional assessment is generally very positive because regular evaluations support early intervention, personalized rehabilitation, and improved recovery outcomes. Continuous monitoring helps optimize mobility, independence, physical performance, and overall quality of life while reducing complications and supporting long-term rehabilitation success',
                'conclusion' => '',
                'seo_title' => 'Patient Monitoring & Functional Assessment Tools',
                'seo_description' => 'Patient monitoring and functional assessment tools are specialized medical and rehabilitation devices used to evaluate physical performance, monitor health status, track rehabilitation progress, and assess functional abilities in individuals undergoing medical treatment or rehabilitation programs. These tools help healthcare professionals develop personalized treatment plans and improve recovery outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
