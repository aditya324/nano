<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryRehabilitationToolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Rehabilitation Tools')],
            [
                'name' => 'Pulmonary Rehabilitation Tools',
                'slug' => Str::slug('Pulmonary Rehabilitation Tools'),
                'h1' => 'Pulmonary Rehabilitation Tools',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pulmonary rehabilitation tools are specialized medical and rehabilitation devices used to improve breathing efficiency, lung function, physical endurance, and respiratory muscle strength in individuals with chronic respiratory conditions. These tools support respiratory therapy programs aimed at enhancing overall lung health and quality of life.',
                'about_more' => '',
                'overview' => 'Pulmonary rehabilitation tools may include incentive spirometers, breathing trainers, nebulizers, oxygen delivery systems, pulse oximeters, respiratory exercise devices, airway clearance equipment, stationary cycles, treadmills, and monitoring systems. These tools are commonly used in rehabilitation programs for chronic obstructive pulmonary disease (COPD), asthma, interstitial lung disease, post-COVID recovery, and other respiratory disorders. Rehabilitation specialists use these devices to improve breathing capacity, endurance, airway clearance, and physical functioning.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Reduced physical endurance or fatigue'],
            ['value' => 'Chronic cough or wheezing'],
            ['value' => 'Chest tightness or reduced exercise tolerance'],
            ['value' => 'Difficulty performing daily activities due to breathing problems'],
            ['value' => 'Common Causes'],
            ['value' => 'Chronic obstructive pulmonary disease (COPD)'],
            ['value' => 'Asthma and airway inflammation'],
            ['value' => 'Interstitial lung disease or pulmonary fibrosis'],
            ['value' => 'Post-COVID respiratory complications'],
            ['value' => 'Smoking, pollution, or chronic respiratory infections'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Fatigue or breathlessness during rehabilitation exercises'],
            ['value' => 'Improper device use reducing treatment effectiveness'],
            ['value' => 'Oxygen dependency or respiratory discomfort in severe cases'],
            ['value' => 'Risk of infection if respiratory equipment is not cleaned properly'],
            ['value' => 'Reduced physical endurance if therapy is inconsistent'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pulmonary rehabilitation tools are used for breathing exercises, airway clearance therapy, oxygen therapy, respiratory muscle strengthening, endurance training, chest physiotherapy, and monitored exercise programs. Rehabilitation specialists may combine these tools with physiotherapy, nutritional counseling, medication management, and lifestyle modification programs to improve lung function and physical performance.'],
            ['value' => 'Using respiratory rehabilitation devices as instructed'],
            ['value' => 'Cleaning and maintaining equipment regularly'],
            ['value' => 'Practicing breathing exercises consistently'],
            ['value' => 'Monitoring oxygen levels and respiratory symptoms'],
            ['value' => 'Attending regular pulmonary rehabilitation and follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with pulmonary rehabilitation tools is generally very positive when rehabilitation programs are followed consistently. These tools can significantly improve breathing efficiency, lung capacity, physical endurance, symptom control, and overall quality of life. Ongoing respiratory care, exercise, healthy lifestyle habits, and regular medical follow-up are important for maintaining long-term pulmonary health and functional independence. ___________________________ 137. Occupational Therapy Aids Occupational Therapy Aids Equipment',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Pulmonary Rehabilitation Tools',
                'meta_description' => 'Pulmonary rehabilitation tools are specialized medical and rehabilitation devices used to improve breathing efficiency, lung function, physical endurance, and r',
                'meta_keywords' => '',
            ]
        );
    }
}
