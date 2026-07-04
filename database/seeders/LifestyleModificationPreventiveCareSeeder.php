<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationPreventiveCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification & Preventive Care')],
            [
                'title' => 'Lifestyle Modification & Preventive Care',
                'slug' => Str::slug('Lifestyle Modification & Preventive Care'),
                'introduction' => 'Lifestyle modification and preventive care focus on improving overall health and reducing the risk of chronic diseases through healthy daily habits and medical prevention strategies. These programs emphasize balanced nutrition, regular physical activity, smoking cessation, stress management, and routine health monitoring to support long-term wellness and disease prevention.',
                'what_is' => 'Lifestyle modification programs are commonly recommended for individuals at risk of or living with conditions such as diabetes, hypertension, obesity, heart disease, respiratory disorders, and metabolic syndrome. Preventive care includes dietary counseling, exercise planning, smoking cessation support, weight management, vaccination, and routine health screenings. These measures help improve physical fitness, control chronic conditions, and reduce future health complications.',
                'symptoms' => [
            ['value' => 'Fatigue or reduced physical stamina'],
            ['value' => 'Weight gain or obesity-related concerns'],
            ['value' => 'High blood pressure, blood sugar, or cholesterol levels'],
            ['value' => 'Shortness of breath or reduced exercise tolerance'],
            ['value' => 'Smoking-related health risks or unhealthy lifestyle habits'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart disease and stroke'],
            ['value' => 'Type 2 diabetes and metabolic syndrome'],
            ['value' => 'Obesity and chronic respiratory disorders'],
            ['value' => 'High blood pressure and cholesterol abnormalities'],
            ['value' => 'Increased risk of cancer and chronic lifestyle-related diseases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular health check-ups and preventive screenings'],
            ['value' => 'Ongoing dietary and exercise counseling'],
            ['value' => 'Smoking cessation follow-up and behavioral support'],
            ['value' => 'Monitoring weight, blood pressure, and metabolic health'],
            ['value' => 'Long-term lifestyle maintenance and wellness planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart disease and stroke'],
            ['value' => 'Type 2 diabetes and metabolic syndrome'],
            ['value' => 'Obesity and chronic respiratory disorders'],
            ['value' => 'High blood pressure and cholesterol abnormalities'],
            ['value' => 'Increased risk of cancer and chronic lifestyle-related diseases'],
        ],
                'long_term_outlook' => 'The long-term outlook with lifestyle modification and preventive care is highly positive when healthy habits are maintained consistently. Proper nutrition, regular exercise, smoking cessation, and preventive healthcare can significantly reduce the risk of chronic diseases, improve quality of life, and support long-term physical and mental well-being.',
                'conclusion' => '',
                'seo_title' => 'Lifestyle Modification & Preventive Care',
                'seo_description' => 'Lifestyle modification and preventive care focus on improving overall health and reducing the risk of chronic diseases through healthy daily habits and medical prevention strategies. These programs emphasize balanced nutrition, regular physical activity, smoking cessation, stress management, and routine health monitoring to support long-term wellness and disease prevention.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
