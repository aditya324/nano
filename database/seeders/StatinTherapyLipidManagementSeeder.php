<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatinTherapyLipidManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Statin Therapy & Lipid Management')],
            [
                'title' => 'Statin Therapy & Lipid Management',
                'slug' => Str::slug('Statin Therapy & Lipid Management'),
                'introduction' => 'Statin therapy lowers cholesterol levels and helps stabilize arterial plaques to reduce vascular complications.',
                'what_is' => 'High cholesterol contributes to artery narrowing and increases the risk of stroke, aneurysm, and peripheral arterial disease.',
                'symptoms' => [
            ['value' => 'Often asymptomatic initially'],
            ['value' => 'Leg pain due to PAD'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Stroke symptoms in advanced disease'],
        ],
                'causes' => [
            ['value' => 'High LDL cholesterol'],
            ['value' => 'Obesity'],
            ['value' => 'Poor diet'],
            ['value' => 'Diabetes'],
            ['value' => 'Smoking'],
            ['value' => 'Sedentary lifestyle'],
            ['value' => 'Genetic lipid disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Progressive arterial blockage'],
            ['value' => 'Stroke'],
            ['value' => 'Heart disease'],
            ['value' => 'Aneurysm formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes statin medications, dietary modification, exercise, weight control, and regular lipid monitoring to reduce vascular risk.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue lipid-lowering therapy'],
            ['value' => 'Healthy diet adherence'],
            ['value' => 'Regular cholesterol testing'],
            ['value' => 'Lifestyle modification'],
        ],
                'surgery_risks' => [
            ['value' => 'Progressive arterial blockage'],
            ['value' => 'Stroke'],
            ['value' => 'Heart disease'],
            ['value' => 'Aneurysm formation'],
        ],
                'long_term_outlook' => 'Long-term lipid control slows vascular disease progression and improves overall cardiovascular health.',
                'conclusion' => '',
                'seo_title' => 'Statin Therapy & Lipid Management',
                'seo_description' => 'Statin therapy lowers cholesterol levels and helps stabilize arterial plaques to reduce vascular complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
