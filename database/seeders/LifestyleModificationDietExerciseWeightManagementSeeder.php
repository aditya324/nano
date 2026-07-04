<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationDietExerciseWeightManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification (Diet, Exercise, Weight Management)')],
            [
                'title' => 'Lifestyle Modification (Diet, Exercise, Weight Management)',
                'slug' => Str::slug('Lifestyle Modification (Diet, Exercise, Weight Management)'),
                'introduction' => 'Lifestyle modification is a preventive and therapeutic healthcare procedure focused on improving overall health through healthy eating habits, regular physical activity, weight management, stress reduction, and positive behavioral changes. These interventions are widely recommended for preventing and managing chronic medical conditions such as diabetes, obesity, hypertension, cardiovascular disease, endocrine disorders, and metabolic syndrome. Long-term lifestyle improvement helps enhance physical fitness, metabolic stability, emotional well-being, and overall quality of life.',
                'what_is' => 'Lifestyle modification programs are designed to support sustainable health improvements through individualized dietary planning, structured exercise routines, weight reduction strategies, and behavioral counseling. These procedures are commonly supervised by endocrinologists, nutritionists, physiotherapists, fitness specialists, and healthcare professionals in hospitals, wellness centers, rehabilitation clinics, and preventive healthcare programs. Lifestyle interventions may include calorie-controlled diets, aerobic exercise, strength training, stress management techniques, sleep optimization, smoking cessation support, and long-term health monitoring to reduce disease risk and improve overall wellness.',
                'symptoms' => [
            ['value' => 'Excess weight gain or obesity-related health concerns'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Elevated blood sugar, cholesterol, or blood pressure levels'],
            ['value' => 'Sedentary lifestyle and poor dietary habits'],
            ['value' => 'Difficulty maintaining healthy weight or metabolic balance'],
        ],
                'causes' => [
            ['value' => 'Unhealthy eating habits and poor nutrition'],
            ['value' => 'Sedentary lifestyle and lack of physical activity'],
            ['value' => 'Obesity and excessive weight gain'],
            ['value' => 'Stress, poor sleep, or unhealthy daily routines'],
            ['value' => 'Chronic medical conditions such as diabetes, hypertension, and metabolic syndrome'],
        ],
                'condition_risks' => [
            ['value' => 'Poor adherence to lifestyle changes reducing treatment effectiveness'],
            ['value' => 'Increased risk of chronic diseases without long-term lifestyle improvement'],
            ['value' => 'Weight regain or metabolic imbalance due to inconsistent habits'],
            ['value' => 'Joint strain or injury from improper exercise techniques'],
            ['value' => 'Emotional stress or lack of motivation affecting long-term progress'],
            ['value' => 'Treatment Options'],
            ['value' => 'Lifestyle modification procedures focus on improving metabolic health, reducing disease risk, supporting healthy weight management, and enhancing long-term physical and emotional well-being. Treatment may include personalized meal planning, nutritional counseling, supervised exercise programs, behavioral therapy, stress management, sleep counseling, hydration support, smoking cessation programs, and regular health monitoring. Patients may also benefit from multidisciplinary care involving endocrinologists, dietitians, physiotherapists, psychologists, and wellness specialists to achieve sustainable health improvements and prevent chronic disease complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of weight, blood sugar, and cardiovascular health'],
            ['value' => 'Ongoing nutritional counseling and exercise supervision'],
            ['value' => 'Lifestyle coaching and behavioral support for long-term adherence'],
            ['value' => 'Stress management and sleep optimization strategies'],
            ['value' => 'Continuous medical follow-up and preventive health assessments'],
        ],
                'surgery_risks' => [
            ['value' => 'Poor adherence to lifestyle changes reducing treatment effectiveness'],
            ['value' => 'Increased risk of chronic diseases without long-term lifestyle improvement'],
            ['value' => 'Weight regain or metabolic imbalance due to inconsistent habits'],
            ['value' => 'Joint strain or injury from improper exercise techniques'],
            ['value' => 'Emotional stress or lack of motivation affecting long-term progress'],
            ['value' => 'Treatment Options'],
            ['value' => 'Lifestyle modification procedures focus on improving metabolic health, reducing disease risk, supporting healthy weight management, and enhancing long-term physical and emotional well-being. Treatment may include personalized meal planning, nutritional counseling, supervised exercise programs, behavioral therapy, stress management, sleep counseling, hydration support, smoking cessation programs, and regular health monitoring. Patients may also benefit from multidisciplinary care involving endocrinologists, dietitians, physiotherapists, psychologists, and wellness specialists to achieve sustainable health improvements and prevent chronic disease complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook following lifestyle modification programs is highly positive when healthy habits are maintained consistently. Balanced nutrition, regular physical activity, healthy weight management, stress reduction, proper sleep, medication adherence when required, and continuous medical follow-up significantly help improve metabolic stability, reduce chronic disease risk, enhance physical fitness, support emotional well-being, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Lifestyle Modification (Diet, Exercise, Weight Management)',
                'seo_description' => 'Lifestyle modification is a preventive and therapeutic healthcare procedure focused on improving overall health through healthy eating habits, regular physical activity, weight management, stress reduction, and positive behavioral changes. These interventions are widely recommended for preventing and managing chronic medical conditions such as diabetes, obesity, hypertension, cardiovascular disease, endocrine disorders, and metabolic syndrome. Long-term lifestyle improvement helps enhance physical fitness, metabolic stability, emotional well-being, and overall quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
