<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryRehabilitationProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Rehabilitation Programs')],
            [
                'name' => 'Pulmonary Rehabilitation Programs',
                'slug' => Str::slug('Pulmonary Rehabilitation Programs'),
                'h1' => 'Pulmonary Rehabilitation Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pulmonary rehabilitation programs are specialized respiratory care procedures designed to improve lung function, physical endurance, breathing efficiency, and overall quality of life in individuals with chronic respiratory diseases or long-term breathing difficulties. These programs combine supervised exercise training, breathing techniques, education, nutritional support, and lifestyle counseling to help patients manage respiratory symptoms and improve daily functioning.',
                'about_more' => '',
                'overview' => 'Pulmonary rehabilitation programs are commonly recommended for patients with chronic obstructive pulmonary disease (COPD), asthma, interstitial lung disease, pulmonary fibrosis, post-COVID lung complications, bronchiectasis, pulmonary hypertension, and other chronic respiratory conditions. These programs are conducted by multidisciplinary healthcare teams including pulmonologists, physiotherapists, respiratory therapists, nutritionists, and rehabilitation specialists. Rehabilitation focuses on improving breathing capacity, reducing breathlessness, strengthening respiratory muscles, enhancing physical activity tolerance, and supporting emotional well-being through structured therapy sessions and long-term respiratory care planning.',
                'symptoms' => [
            ['value' => 'Persistent shortness of breath or breathing difficulty'],
            ['value' => 'Reduced exercise tolerance or physical weakness'],
            ['value' => 'Chronic cough or respiratory discomfort'],
            ['value' => 'Fatigue and difficulty performing daily activities'],
            ['value' => 'Reduced lung function following chronic respiratory illness or hospitalization'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Breathing discomfort during physical activity in severe lung disease patients'],
            ['value' => 'Fatigue or temporary muscle soreness during rehabilitation exercises'],
            ['value' => 'Risk of worsening respiratory symptoms if exercises are not properly supervised'],
            ['value' => 'Reduced treatment effectiveness with poor program adherence'],
            ['value' => 'Need for long-term respiratory monitoring in advanced chronic lung disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pulmonary rehabilitation programs focus on improving respiratory efficiency, physical fitness, symptom control, and overall lung health. Treatment may include breathing exercises, supervised physical training, airway clearance techniques, oxygen therapy support, respiratory muscle strengthening, nutritional counseling, smoking cessation support, stress management, and patient education regarding disease management and medication use. Patients may also receive psychological counseling, vaccination guidance, lifestyle modification support, and long-term pulmonary follow-up to improve respiratory stability and prevent disease exacerbations.'],
            ['value' => 'Regular monitoring of respiratory function and exercise tolerance'],
            ['value' => 'Continued breathing exercises and physical conditioning programs'],
            ['value' => 'Medication adherence and inhaler technique education'],
            ['value' => 'Nutritional support and healthy lifestyle counseling'],
            ['value' => 'Long-term pulmonology follow-up and rehabilitation reassessment when required'],
        ],
                'recovery' => 'The long-term outlook following pulmonary rehabilitation is generally positive when patients actively participate in rehabilitation and long-term respiratory care. Early rehabilitation, regular exercise, smoking cessation, medication adherence, breathing training, nutritional support, and continuous pulmonary follow-up significantly help improve lung function, reduce respiratory symptoms, prevent hospitalizations, enhance physical endurance, and improve overall quality of life. _____________ 5. Antibiotic Therapy (Community & Hospital-Acquired Infections) Antibiotic Therapy (Community & Hospital-Acquired Infections) Procedures',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Pulmonary Rehabilitation Programs',
                'meta_description' => 'Pulmonary rehabilitation programs are specialized respiratory care procedures designed to improve lung function, physical endurance, breathing efficiency, and o',
                'meta_keywords' => '',
            ]
        );
    }
}
