<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationDietExerciseSmokingCessationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification (Diet, Exercise, Smoking Cessation)')],
            [
                'title' => 'Lifestyle Modification (Diet, Exercise, Smoking Cessation)',
                'slug' => Str::slug('Lifestyle Modification (Diet, Exercise, Smoking Cessation)'),
                'introduction' => 'Lifestyle modification is a fundamental part of cardiology care that focuses on improving heart health through healthy daily habits, dietary changes, regular physical activity, weight management, and avoidance of harmful substances such as tobacco and excessive alcohol. These changes help reduce the risk of heart disease, stroke, hypertension, diabetes, and other cardiovascular complications. Lifestyle improvement is often recommended alongside medications and medical procedures for better long-term heart health.',
                'what_is' => 'Lifestyle modification programs are designed to improve cardiovascular function and reduce risk factors associated with heart disease. Key components include: Heart-healthy diet Regular physical activity Smoking cessation Weight management Stress reduction Adequate sleep and hydration Patients are guided by cardiologists, dietitians, physiotherapists, and counselors to adopt sustainable habits. Lifestyle management is beneficial in: Hypertension Coronary artery disease Heart failure High cholesterol Obesity Diabetes-related heart disease Consistent lifestyle changes can significantly reduce hospitalizations and improve quality of life.',
                'symptoms' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Obesity or weight gain'],
            ['value' => 'Chest discomfort during exertion'],
            ['value' => 'Fatigue and poor stamina'],
            ['value' => 'Elevated cholesterol or blood sugar levels'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Difficulty maintaining long-term lifestyle changes'],
            ['value' => 'Temporary muscle soreness after exercise initiation'],
            ['value' => 'Withdrawal symptoms during smoking cessation'],
            ['value' => 'Stress related to dietary restrictions'],
            ['value' => 'Poor compliance affecting treatment outcomes'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow a balanced low-salt and low-fat diet'],
            ['value' => 'Exercise regularly as medically advised'],
            ['value' => 'Avoid smoking and tobacco products completely'],
            ['value' => 'Attend routine cardiac follow-up visits'],
            ['value' => 'Monitor blood pressure, sugar, and cholesterol regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Difficulty maintaining long-term lifestyle changes'],
            ['value' => 'Temporary muscle soreness after exercise initiation'],
            ['value' => 'Withdrawal symptoms during smoking cessation'],
            ['value' => 'Stress related to dietary restrictions'],
            ['value' => 'Poor compliance affecting treatment outcomes'],
        ],
                'long_term_outlook' => 'Long-term lifestyle modification greatly improves cardiovascular health, reduces heart disease progression, lowers the risk of heart attack and stroke, and enhances overall longevity and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Lifestyle Modification (Diet, Exercise, Smoking Cessation)',
                'seo_description' => 'Lifestyle modification is a fundamental part of cardiology care that focuses on improving heart health through healthy daily habits, dietary changes, regular physical activity, weight management, and avoidance of harmful substances such as tobacco and excessive alcohol. These changes help reduce the risk of heart disease, stroke, hypertension, diabetes, and other cardiovascular complications. Lifestyle improvement is often recommended alongside medications and medical procedures for better long-term heart health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
