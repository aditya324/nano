<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryPulmonologyTeamApproachSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Pulmonology Team Approach')],
            [
                'title' => 'Multidisciplinary Pulmonology Team Approach',
                'slug' => Str::slug('Multidisciplinary Pulmonology Team Approach'),
                'introduction' => 'A multidisciplinary pulmonology team approach is a coordinated respiratory care procedure in which healthcare professionals from multiple medical specialties work together to diagnose, treat, monitor, and manage complex lung and respiratory conditions. This collaborative approach helps provide comprehensive, patient-centered care by combining the expertise of pulmonologists, respiratory therapists, radiologists, thoracic surgeons, oncologists, physiotherapists, nutritionists, and other specialists involved in respiratory health management.',
                'what_is' => 'Chronic and advanced respiratory diseases often require integrated medical care involving multiple specialties to optimize diagnosis, treatment planning, rehabilitation, and long-term follow-up. A multidisciplinary pulmonology team approach is commonly used in the management of conditions such as COPD, asthma, interstitial lung disease, pulmonary fibrosis, lung cancer, pulmonary hypertension, sleep disorders, tuberculosis, post-COVID complications, and critical respiratory illnesses. Regular team discussions, coordinated treatment plans, advanced diagnostic evaluation, pulmonary rehabilitation, and supportive care help improve treatment accuracy, reduce complications, and enhance patient outcomes and quality of life.',
                'symptoms' => [
            ['value' => 'Persistent breathing difficulty or chronic respiratory symptoms'],
            ['value' => 'Recurrent lung infections or unexplained respiratory illness'],
            ['value' => 'Progressive lung disease requiring advanced evaluation and treatment'],
            ['value' => 'Reduced exercise tolerance or oxygen dependency'],
            ['value' => 'Complex respiratory conditions requiring combined specialist care'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis or disease progression without coordinated care'],
            ['value' => 'Increased risk of respiratory complications in advanced lung disease'],
            ['value' => 'Reduced treatment effectiveness if multidisciplinary follow-up is inadequate'],
            ['value' => 'Medication-related side effects requiring specialist monitoring'],
            ['value' => 'Emotional stress and reduced quality of life in chronic respiratory illness patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'A multidisciplinary pulmonology team approach focuses on comprehensive respiratory care, accurate diagnosis, individualized treatment planning, rehabilitation, and long-term disease management. Treatment may include medication management, inhaler therapy, pulmonary rehabilitation, oxygen therapy, respiratory physiotherapy, bronchoscopy, thoracic surgery, cancer care, sleep therapy, nutritional counseling, psychological support, smoking cessation programs, and advanced respiratory interventions. Patients may also benefit from coordinated follow-up care, vaccination support, chronic disease monitoring, lifestyle modification counseling, and rehabilitation programs tailored to their respiratory condition and overall health status.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular pulmonology follow-up and multidisciplinary care coordination'],
            ['value' => 'Continuous monitoring of lung function and respiratory symptoms'],
            ['value' => 'Pulmonary rehabilitation and breathing exercise programs'],
            ['value' => 'Nutritional support, psychological counseling, and lifestyle modification guidance'],
            ['value' => 'Long-term disease monitoring and adjustment of treatment plans when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis or disease progression without coordinated care'],
            ['value' => 'Increased risk of respiratory complications in advanced lung disease'],
            ['value' => 'Reduced treatment effectiveness if multidisciplinary follow-up is inadequate'],
            ['value' => 'Medication-related side effects requiring specialist monitoring'],
            ['value' => 'Emotional stress and reduced quality of life in chronic respiratory illness patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'A multidisciplinary pulmonology team approach focuses on comprehensive respiratory care, accurate diagnosis, individualized treatment planning, rehabilitation, and long-term disease management. Treatment may include medication management, inhaler therapy, pulmonary rehabilitation, oxygen therapy, respiratory physiotherapy, bronchoscopy, thoracic surgery, cancer care, sleep therapy, nutritional counseling, psychological support, smoking cessation programs, and advanced respiratory interventions. Patients may also benefit from coordinated follow-up care, vaccination support, chronic disease monitoring, lifestyle modification counseling, and rehabilitation programs tailored to their respiratory condition and overall health status.'],
        ],
                'long_term_outlook' => 'The long-term outlook following multidisciplinary pulmonology care is generally positive when patients receive coordinated, specialized, and continuous respiratory management. Early diagnosis, integrated treatment planning, pulmonary rehabilitation, medication adherence, smoking cessation, healthy lifestyle habits, vaccination, and regular specialist follow-up significantly help improve lung function, reduce complications, prevent disease progression, enhance physical endurance, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Multidisciplinary Pulmonology Team Approach',
                'seo_description' => 'A multidisciplinary pulmonology team approach is a coordinated respiratory care procedure in which healthcare professionals from multiple medical specialties work together to diagnose, treat, monitor, and manage complex lung and respiratory conditions. This collaborative approach helps provide comprehensive, patient-centered care by combining the expertise of pulmonologists, respiratory therapists, radiologists, thoracic surgeons, oncologists, physiotherapists, nutritionists, and other specialists involved in respiratory health management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
