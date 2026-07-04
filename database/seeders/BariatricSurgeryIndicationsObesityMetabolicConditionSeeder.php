<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BariatricSurgeryIndicationsObesityMetabolicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bariatric Surgery Indications (Obesity & Metabolic)')],
            [
                'name' => 'Bariatric Surgery Indications (Obesity & Metabolic)',
                'slug' => Str::slug('Bariatric Surgery Indications (Obesity & Metabolic)'),
                'h1' => 'Bariatric Surgery Indications (Obesity & Metabolic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bariatric surgery refers to surgical procedures performed to help individuals with severe obesity achieve weight loss and improve obesity-related metabolic diseases such as diabetes and hypertension.',
                'about_more' => '',
                'overview' => 'Bariatric surgery refers to surgical procedures performed to help individuals with severe obesity achieve weight loss and improve obesity-related metabolic diseases such as diabetes and hypertension.',
                'symptoms' => [
            ['value' => 'Severe obesity with high body mass index (BMI)'],
            ['value' => 'Difficulty performing daily physical activities'],
            ['value' => 'Breathlessness and fatigue'],
            ['value' => 'Sleep apnea and snoring'],
            ['value' => 'Diabetes or hypertension associated with obesity'],
        ],
                'causes' => [
            ['value' => 'Excess calorie intake and sedentary lifestyle'],
            ['value' => 'Genetic predisposition to obesity'],
            ['value' => 'Hormonal and metabolic disorders'],
            ['value' => 'Emotional eating and stress factors'],
            ['value' => 'Long-standing unhealthy dietary habits'],
        ],
                'risks' => [
            ['value' => 'Type 2 diabetes and cardiovascular disease'],
            ['value' => 'Joint problems and reduced mobility'],
            ['value' => 'Fatty liver disease'],
            ['value' => 'Sleep apnea and respiratory complications'],
            ['value' => 'Reduced quality of life and psychological stress'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dietary and lifestyle modification programs'],
            ['value' => 'Medical weight-loss management'],
            ['value' => 'Sleeve gastrectomy surgery'],
            ['value' => 'Gastric bypass procedures'],
            ['value' => 'Long-term nutritional and metabolic follow-up'],
        ],
                'recovery' => 'Bariatric surgery can significantly improve weight control, diabetes, blood pressure, and overall quality of life when combined with long-term lifestyle changes.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Bariatric Surgery Indications (Obesity & Metabolic)',
                'meta_description' => 'Bariatric surgery refers to surgical procedures performed to help individuals with severe obesity achieve weight loss and improve obesity-related metabolic dise',
                'meta_keywords' => '',
            ]
        );
    }
}
