<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultidisciplinaryCareforMetabolicSyndromeObesitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multidisciplinary Care for Metabolic Syndrome / Obesity')],
            [
                'title' => 'Multidisciplinary Care for Metabolic Syndrome / Obesity',
                'slug' => Str::slug('Multidisciplinary Care for Metabolic Syndrome / Obesity'),
                'introduction' => 'Multidisciplinary care for metabolic syndrome and obesity involves a coordinated treatment approach provided by a team of healthcare professionals to manage weight, metabolic health, and associated chronic diseases. This comprehensive care model focuses on improving overall health through medical management, nutrition, physical activity, behavioral support, and long-term lifestyle modification.',
                'what_is' => 'Management of metabolic syndrome and obesity often requires collaboration between internal medicine specialists, endocrinologists, dietitians, physiotherapists, cardiologists, and behavioral health professionals. Treatment plans may include weight management programs, dietary counseling, exercise therapy, blood sugar and cholesterol control, blood pressure management, and psychological support. Multidisciplinary care helps reduce the risk of diabetes, heart disease, fatty liver disease, and other obesity-related complications.',
                'symptoms' => [
            ['value' => 'Excess body weight or abdominal obesity'],
            ['value' => 'Fatigue and reduced physical activity tolerance'],
            ['value' => 'High blood pressure or elevated blood sugar levels'],
            ['value' => 'Abnormal cholesterol or triglyceride levels'],
            ['value' => 'Difficulty maintaining healthy lifestyle habits'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'Heart disease and stroke'],
            ['value' => 'High blood pressure and vascular complications'],
            ['value' => 'Fatty liver disease and sleep apnea'],
            ['value' => 'Reduced mobility and long-term metabolic complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of weight, blood sugar, and metabolic health'],
            ['value' => 'Nutritional counseling and individualized meal planning'],
            ['value' => 'Exercise programs and physical rehabilitation support'],
            ['value' => 'Medication management and lifestyle modification follow-up'],
            ['value' => 'Long-term multidisciplinary healthcare monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'Heart disease and stroke'],
            ['value' => 'High blood pressure and vascular complications'],
            ['value' => 'Fatty liver disease and sleep apnea'],
            ['value' => 'Reduced mobility and long-term metabolic complications'],
        ],
                'long_term_outlook' => 'The long-term outlook with multidisciplinary care for metabolic syndrome and obesity is highly positive when patients actively participate in treatment and lifestyle changes. Comprehensive medical management, healthy nutrition, regular physical activity, and continuous follow-up can significantly reduce chronic disease risk, improve metabolic health, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Multidisciplinary Care for Metabolic Syndrome / Obesity',
                'seo_description' => 'Multidisciplinary care for metabolic syndrome and obesity involves a coordinated treatment approach provided by a team of healthcare professionals to manage weight, metabolic health, and associated chronic diseases. This comprehensive care model focuses on improving overall health through medical management, nutrition, physical activity, behavioral support, and long-term lifestyle modification.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
