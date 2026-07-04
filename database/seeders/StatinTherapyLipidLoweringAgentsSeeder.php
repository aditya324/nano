<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatinTherapyLipidLoweringAgentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Statin Therapy / Lipid-Lowering Agents')],
            [
                'title' => 'Statin Therapy / Lipid-Lowering Agents',
                'slug' => Str::slug('Statin Therapy / Lipid-Lowering Agents'),
                'introduction' => 'Statin therapy and lipid-lowering medications are treatments used to reduce cholesterol levels and decrease the risk of cardiovascular disease. These medications help stabilize arterial plaques and reduce the risk of heart attack and stroke. They form a major component of preventive cardiology care.',
                'what_is' => 'Common lipid-lowering medications include: Atorvastatin Rosuvastatin Simvastatin Ezetimibe PCSK9 inhibitors The therapy helps: Lower LDL cholesterol Reduce arterial inflammation Prevent plaque progression Improve vascular health Treatment is commonly recommended in: Coronary artery disease Diabetes High cholesterol Stroke prevention Familial hyperlipidemia Lifestyle modification is usually combined with medication therapy.',
                'symptoms' => [
            ['value' => 'High cholesterol levels'],
            ['value' => 'Previous heart attack or stroke'],
            ['value' => 'Coronary artery disease'],
            ['value' => 'Obesity or diabetes-related risk factors'],
            ['value' => 'Family history of cardiovascular disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Muscle pain or weakness'],
            ['value' => 'Mild liver enzyme elevation'],
            ['value' => 'Digestive discomfort'],
            ['value' => 'Rare severe muscle injury'],
            ['value' => 'Medication interactions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take cholesterol medications regularly'],
            ['value' => 'Follow a heart-healthy diet consistently'],
            ['value' => 'Exercise regularly as advised'],
            ['value' => 'Attend routine lipid profile monitoring'],
            ['value' => 'Report persistent muscle pain promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Muscle pain or weakness'],
            ['value' => 'Mild liver enzyme elevation'],
            ['value' => 'Digestive discomfort'],
            ['value' => 'Rare severe muscle injury'],
            ['value' => 'Medication interactions'],
        ],
                'long_term_outlook' => 'Lipid-lowering therapy significantly reduces cardiovascular risk, slows disease progression, and improves long-term heart and vascular health.',
                'conclusion' => '',
                'seo_title' => 'Statin Therapy / Lipid-Lowering Agents',
                'seo_description' => 'Statin therapy and lipid-lowering medications are treatments used to reduce cholesterol levels and decrease the risk of cardiovascular disease. These medications help stabilize arterial plaques and reduce the risk of heart attack and stroke. They form a major component of preventive cardiology care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
