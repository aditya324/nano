<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionalSupportExerciseTherapyinChronicLungDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nutritional Support & Exercise Therapy in Chronic Lung Disease')],
            [
                'name' => 'Nutritional Support & Exercise Therapy in Chronic Lung Disease',
                'slug' => Str::slug('Nutritional Support & Exercise Therapy in Chronic Lung Disease'),
                'h1' => 'Nutritional Support & Exercise Therapy in Chronic Lung Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nutritional support and exercise therapy are important supportive care procedures used to improve physical strength, respiratory function, energy levels, and overall quality of life in individuals with chronic lung diseases. These therapies help patients maintain healthy body weight, improve muscle strength, enhance breathing efficiency, and reduce the physical limitations associated with long-term respiratory conditions such as COPD, interstitial lung disease, bronchiectasis, pulmonary fibrosis, and chronic respiratory failure.',
                'about_more' => '',
                'overview' => 'Chronic lung diseases often increase the body’s energy requirements and may lead to muscle weakness, poor nutrition, fatigue, and reduced physical endurance due to persistent breathing difficulty. Nutritional support focuses on providing balanced dietary intake, improving calorie and protein consumption, correcting nutritional deficiencies, and supporting immune and respiratory health. Exercise therapy involves supervised physical activity, breathing exercises, pulmonary rehabilitation, endurance training, and respiratory muscle strengthening to improve lung function and physical performance. These therapies are commonly provided by pulmonologists, nutritionists, physiotherapists, and rehabilitation specialists as part of long-term respiratory care programs.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced physical endurance'],
            ['value' => 'Weight loss or poor nutritional status due to chronic illness'],
            ['value' => 'Persistent shortness of breath during daily activities'],
            ['value' => 'Muscle weakness affecting mobility and respiratory function'],
            ['value' => 'Reduced exercise tolerance and difficulty performing routine tasks'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Malnutrition or muscle wasting in advanced lung disease'],
            ['value' => 'Breathing discomfort during physical activity if not properly supervised'],
            ['value' => 'Reduced treatment effectiveness with poor dietary or exercise adherence'],
            ['value' => 'Increased risk of infections due to weakened immunity and poor nutrition'],
            ['value' => 'Progressive physical deconditioning and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nutritional support and exercise therapy focus on improving respiratory efficiency, strengthening muscles, enhancing energy levels, and supporting long-term lung health. Treatment may include individualized meal planning, high-protein and calorie-rich diets, hydration management, vitamin and mineral supplementation, pulmonary rehabilitation, breathing exercises, supervised aerobic activity, respiratory muscle training, and lifestyle counseling. Patients may also benefit from smoking cessation, oxygen therapy, stress management, vaccination, and long-term pulmonology follow-up to optimize respiratory health and prevent disease progression.'],
            ['value' => 'Regular nutritional assessment and dietary monitoring'],
            ['value' => 'Supervised exercise sessions and pulmonary rehabilitation programs'],
            ['value' => 'Monitoring breathing capacity and exercise tolerance during therapy'],
            ['value' => 'Lifestyle modification, smoking cessation, and hydration support'],
            ['value' => 'Long-term respiratory follow-up and rehabilitation reassessment when required'],
        ],
                'recovery' => 'The long-term outlook following nutritional support and exercise therapy is generally positive when patients actively participate in rehabilitation and maintain healthy lifestyle habits. Early intervention, balanced nutrition, regular exercise, pulmonary rehabilitation, medication adherence, smoking cessation, and continuous medical follow-up significantly help improve breathing function, increase physical endurance, reduce complications, preserve muscle strength, and enhance overall quality of life. _________________ 19. Post-COVID Pulmonary Care & Rehabilitation Post-COVID Pulmonary Care & Rehabilitation Procedures',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Nutritional Support & Exercise Therapy in Chronic Lung Disease',
                'meta_description' => 'Nutritional support and exercise therapy are important supportive care procedures used to improve physical strength, respiratory function, energy levels, and ov',
                'meta_keywords' => '',
            ]
        );
    }
}
