<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationRiskFactorManagementSmokingDiabetesHypertensionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification & Risk Factor Management (Smoking, Diabetes, Hypertension)')],
            [
                'title' => 'Lifestyle Modification & Risk Factor Management (Smoking, Diabetes, Hypertension)',
                'slug' => Str::slug('Lifestyle Modification & Risk Factor Management (Smoking, Diabetes, Hypertension)'),
                'introduction' => 'Lifestyle modification and risk factor management are essential components of vascular disease treatment aimed at improving blood circulation and preventing progression of arterial and venous disorders.',
                'what_is' => 'Uncontrolled diabetes, smoking, hypertension, obesity, and high cholesterol significantly increase the risk of vascular blockages, aneurysms, and stroke. Long-term lifestyle management improves overall vascular and cardiovascular health.',
                'symptoms' => [
            ['value' => 'Leg pain while walking'],
            ['value' => 'Fatigue'],
            ['value' => 'Swelling'],
            ['value' => 'Poor circulation'],
            ['value' => 'Elevated blood pressure'],
            ['value' => 'Slow wound healing'],
        ],
                'causes' => [
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'High blood pressure'],
            ['value' => 'High cholesterol'],
            ['value' => 'Obesity'],
            ['value' => 'Physical inactivity'],
            ['value' => 'Poor dietary habits'],
            ['value' => 'Stress and unhealthy lifestyle'],
        ],
                'condition_risks' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Stroke'],
            ['value' => 'Heart attack'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Kidney disease'],
            ['value' => 'Chronic vascular complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes smoking cessation, regular exercise, weight reduction, diabetic control, blood pressure management, healthy diet planning, cholesterol reduction, and regular vascular follow-up. Patients may also require medications such as statins, antiplatelets, and antihypertensive drugs for long-term vascular protection.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue lifestyle modifications'],
            ['value' => 'Regular exercise program'],
            ['value' => 'Monitor BP and blood sugar'],
            ['value' => 'Follow healthy diet plan'],
            ['value' => 'Routine vascular screening'],
        ],
                'surgery_risks' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Stroke'],
            ['value' => 'Heart attack'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Kidney disease'],
            ['value' => 'Chronic vascular complications'],
        ],
                'long_term_outlook' => 'Consistent lifestyle improvement greatly reduces vascular complications and enhances long-term circulation, mobility, and overall health.',
                'conclusion' => '',
                'seo_title' => 'Lifestyle Modification & Risk Factor Management (Smoking, Diabetes, Hypertension)',
                'seo_description' => 'Lifestyle modification and risk factor management are essential components of vascular disease treatment aimed at improving blood circulation and preventing progression of arterial and venous disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
