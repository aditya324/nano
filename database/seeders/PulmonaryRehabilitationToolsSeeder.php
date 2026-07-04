<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryRehabilitationToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Rehabilitation Tools')],
            [
                'title' => 'Pulmonary Rehabilitation Tools',
                'slug' => Str::slug('Pulmonary Rehabilitation Tools'),
                'introduction' => 'Pulmonary rehabilitation tools are specialized medical and rehabilitation devices used to improve breathing efficiency, lung function, physical endurance, and respiratory muscle strength in individuals with chronic respiratory conditions. These tools support respiratory therapy programs aimed at enhancing overall lung health and quality of life.',
                'what_is' => 'Pulmonary rehabilitation tools may include incentive spirometers, breathing trainers, nebulizers, oxygen delivery systems, pulse oximeters, respiratory exercise devices, airway clearance equipment, stationary cycles, treadmills, and monitoring systems. These tools are commonly used in rehabilitation programs for chronic obstructive pulmonary disease (COPD), asthma, interstitial lung disease, post-COVID recovery, and other respiratory disorders. Rehabilitation specialists use these devices to improve breathing capacity, endurance, airway clearance, and physical functioning.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Reduced physical endurance or fatigue'],
            ['value' => 'Chronic cough or wheezing'],
            ['value' => 'Chest tightness or reduced exercise tolerance'],
            ['value' => 'Difficulty performing daily activities due to breathing problems'],
        ],
                'causes' => [
            ['value' => 'Chronic obstructive pulmonary disease (COPD)'],
            ['value' => 'Asthma and airway inflammation'],
            ['value' => 'Interstitial lung disease or pulmonary fibrosis'],
            ['value' => 'Post-COVID respiratory complications'],
            ['value' => 'Smoking, pollution, or chronic respiratory infections'],
        ],
                'condition_risks' => [
            ['value' => 'Fatigue or breathlessness during rehabilitation exercises'],
            ['value' => 'Improper device use reducing treatment effectiveness'],
            ['value' => 'Oxygen dependency or respiratory discomfort in severe cases'],
            ['value' => 'Risk of infection if respiratory equipment is not cleaned properly'],
            ['value' => 'Reduced physical endurance if therapy is inconsistent'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pulmonary rehabilitation tools are used for breathing exercises, airway clearance therapy, oxygen therapy, respiratory muscle strengthening, endurance training, chest physiotherapy, and monitored exercise programs. Rehabilitation specialists may combine these tools with physiotherapy, nutritional counseling, medication management, and lifestyle modification programs to improve lung function and physical performance.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Using respiratory rehabilitation devices as instructed'],
            ['value' => 'Cleaning and maintaining equipment regularly'],
            ['value' => 'Practicing breathing exercises consistently'],
            ['value' => 'Monitoring oxygen levels and respiratory symptoms'],
            ['value' => 'Attending regular pulmonary rehabilitation and follow-up sessions'],
        ],
                'surgery_risks' => [
            ['value' => 'Fatigue or breathlessness during rehabilitation exercises'],
            ['value' => 'Improper device use reducing treatment effectiveness'],
            ['value' => 'Oxygen dependency or respiratory discomfort in severe cases'],
            ['value' => 'Risk of infection if respiratory equipment is not cleaned properly'],
            ['value' => 'Reduced physical endurance if therapy is inconsistent'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pulmonary rehabilitation tools are used for breathing exercises, airway clearance therapy, oxygen therapy, respiratory muscle strengthening, endurance training, chest physiotherapy, and monitored exercise programs. Rehabilitation specialists may combine these tools with physiotherapy, nutritional counseling, medication management, and lifestyle modification programs to improve lung function and physical performance.'],
        ],
                'long_term_outlook' => 'The long-term outlook with pulmonary rehabilitation tools is generally very positive when rehabilitation programs are followed consistently. These tools can significantly improve breathing efficiency, lung capacity, physical endurance, symptom control, and overall quality of life. Ongoing respiratory care, exercise, healthy lifestyle habits, and regular medical follow-up are important for maintaining long-term pulmonary health and functional independence.',
                'conclusion' => '',
                'seo_title' => 'Pulmonary Rehabilitation Tools',
                'seo_description' => 'Pulmonary rehabilitation tools are specialized medical and rehabilitation devices used to improve breathing efficiency, lung function, physical endurance, and respiratory muscle strength in individuals with chronic respiratory conditions. These tools support respiratory therapy programs aimed at enhancing overall lung health and quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
