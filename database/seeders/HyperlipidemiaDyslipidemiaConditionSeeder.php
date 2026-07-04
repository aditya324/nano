<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperlipidemiaDyslipidemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hyperlipidemia / Dyslipidemia')],
            [
                'name' => 'Hyperlipidemia / Dyslipidemia',
                'slug' => Str::slug('Hyperlipidemia / Dyslipidemia'),
                'h1' => 'Hyperlipidemia / Dyslipidemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hyperlipidemia or dyslipidemia refers to abnormal levels of cholesterol and fats in the blood, increasing the risk of atherosclerosis, heart attack, stroke, and vascular disease.',
                'about_more' => '',
                'overview' => 'Hyperlipidemia or dyslipidemia refers to abnormal levels of cholesterol and fats in the blood, increasing the risk of atherosclerosis, heart attack, stroke, and vascular disease.',
                'symptoms' => [
            ['value' => 'Often asymptomatic in early stages'],
            ['value' => 'Chest pain in advanced cardiovascular disease'],
            ['value' => 'Fatigue and reduced exercise tolerance'],
            ['value' => 'Fat deposits around eyes or skin in severe cases'],
            ['value' => 'Symptoms related to heart or vascular complications'],
        ],
                'causes' => [
            ['value' => 'High-fat and unhealthy diet'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Diabetes and metabolic syndrome'],
            ['value' => 'Genetic cholesterol disorders'],
            ['value' => 'Smoking and alcohol consumption'],
        ],
                'risks' => [
            ['value' => 'Coronary artery disease and heart attack'],
            ['value' => 'Stroke and peripheral vascular disease'],
            ['value' => 'Fatty liver disease'],
            ['value' => 'Pancreatitis in severe triglyceride elevation'],
            ['value' => 'Chronic vascular damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lipid profile screening and monitoring'],
            ['value' => 'Dietary modification and exercise'],
            ['value' => 'Cholesterol-lowering medications (statins)'],
            ['value' => 'Weight reduction and diabetes control'],
            ['value' => 'Smoking cessation and lifestyle management'],
        ],
                'recovery' => 'Long-term cholesterol control greatly reduces cardiovascular risk. Early lifestyle changes and medications improve overall heart health.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Hyperlipidemia / Dyslipidemia',
                'meta_description' => 'Hyperlipidemia or dyslipidemia refers to abnormal levels of cholesterol and fats in the blood, increasing the risk of atherosclerosis, heart attack, stroke, and',
                'meta_keywords' => '',
            ]
        );
    }
}
