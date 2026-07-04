<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperlipidemiaDyslipidemiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hyperlipidemia / Dyslipidemia')],
            [
                'title' => 'Hyperlipidemia / Dyslipidemia',
                'slug' => Str::slug('Hyperlipidemia / Dyslipidemia'),
                'introduction' => 'Hyperlipidemia or dyslipidemia refers to abnormal levels of fats (lipids) in the blood, including cholesterol and triglycerides. High cholesterol contributes to plaque buildup in arteries and increases the risk of heart attack, stroke, and vascular disease. Proper management is essential for long-term cardiovascular health.',
                'what_is' => 'Common lipid abnormalities include: High LDL cholesterol Low HDL cholesterol Elevated triglycerides Risk factors include: Poor diet Obesity Diabetes Smoking Genetic disorders Sedentary lifestyle Diagnosis is performed using lipid profile blood tests. Treatment includes: Lifestyle modification Statin therapy Lipid-lowering medications Weight control and exercise Regular monitoring is important to reduce cardiovascular risk.',
                'symptoms' => [
            ['value' => 'Usually no symptoms initially'],
            ['value' => 'Chest pain from blocked arteries'],
            ['value' => 'Fat deposits around eyes or skin in severe cases'],
            ['value' => 'Obesity-related symptoms'],
            ['value' => 'History of cardiovascular disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Coronary artery disease'],
            ['value' => 'Stroke'],
            ['value' => 'Peripheral vascular disease'],
            ['value' => 'Pancreatitis with high triglycerides'],
            ['value' => 'Atherosclerosis progression'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow a low-fat heart-healthy diet'],
            ['value' => 'Exercise regularly as advised'],
            ['value' => 'Take cholesterol medications consistently'],
            ['value' => 'Avoid smoking and alcohol excess'],
            ['value' => 'Monitor lipid levels routinely'],
        ],
                'surgery_risks' => [
            ['value' => 'Coronary artery disease'],
            ['value' => 'Stroke'],
            ['value' => 'Peripheral vascular disease'],
            ['value' => 'Pancreatitis with high triglycerides'],
            ['value' => 'Atherosclerosis progression'],
        ],
                'long_term_outlook' => 'Proper lipid management significantly lowers cardiovascular risk and supports long-term heart and vascular health.',
                'conclusion' => '',
                'seo_title' => 'Hyperlipidemia / Dyslipidemia',
                'seo_description' => 'Hyperlipidemia or dyslipidemia refers to abnormal levels of fats (lipids) in the blood, including cholesterol and triglycerides. High cholesterol contributes to plaque buildup in arteries and increases the risk of heart attack, stroke, and vascular disease. Proper management is essential for long-term cardiovascular health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
