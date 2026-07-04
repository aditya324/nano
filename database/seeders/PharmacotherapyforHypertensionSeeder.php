<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharmacotherapyforHypertensionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pharmacotherapy for Hypertension')],
            [
                'title' => 'Pharmacotherapy for Hypertension',
                'slug' => Str::slug('Pharmacotherapy for Hypertension'),
                'introduction' => 'Pharmacotherapy for hypertension involves the use of medications to control high blood pressure and reduce the risk of cardiovascular complications. Blood pressure-lowering medications help improve blood circulation, reduce strain on the heart and blood vessels, and prevent long-term damage to organs such as the brain, kidneys, and heart.',
                'what_is' => 'Hypertension treatment plans are individualized based on the patient’s blood pressure levels, age, medical history, and associated conditions such as diabetes or heart disease. Common medication classes used in hypertension management include ACE inhibitors, ARBs, beta-blockers, calcium channel blockers, and diuretics. Pharmacotherapy is often combined with lifestyle modifications such as healthy diet, exercise, weight control, and smoking cessation for optimal blood pressure management.',
                'symptoms' => [
            ['value' => 'Persistent high blood pressure readings'],
            ['value' => 'Headaches or dizziness'],
            ['value' => 'Fatigue or blurred vision'],
            ['value' => 'Shortness of breath or chest discomfort'],
            ['value' => 'Increased cardiovascular risk factors'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stroke and heart attack'],
            ['value' => 'Heart failure and vascular disease'],
            ['value' => 'Kidney damage and chronic kidney disease'],
            ['value' => 'Vision problems due to blood vessel damage'],
            ['value' => 'Increased risk of metabolic and cardiovascular complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood pressure monitoring'],
            ['value' => 'Medication adherence and dosage adjustment when required'],
            ['value' => 'Routine kidney function and cardiovascular assessment'],
            ['value' => 'Lifestyle counseling including diet and exercise guidance'],
            ['value' => 'Long-term follow-up with internal medicine or cardiology specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke and heart attack'],
            ['value' => 'Heart failure and vascular disease'],
            ['value' => 'Kidney damage and chronic kidney disease'],
            ['value' => 'Vision problems due to blood vessel damage'],
            ['value' => 'Increased risk of metabolic and cardiovascular complications'],
        ],
                'long_term_outlook' => 'The long-term outlook with hypertension pharmacotherapy is generally positive when medications are taken consistently and combined with healthy lifestyle changes. Effective blood pressure control can significantly reduce the risk of heart disease, stroke, kidney damage, and other complications. Continuous medical follow-up and preventive care are important for maintaining long-term cardiovascular health.',
                'conclusion' => '',
                'seo_title' => 'Pharmacotherapy for Hypertension',
                'seo_description' => 'Pharmacotherapy for hypertension involves the use of medications to control high blood pressure and reduce the risk of cardiovascular complications. Blood pressure-lowering medications help improve blood circulation, reduce strain on the heart and blood vessels, and prevent long-term damage to organs such as the brain, kidneys, and heart.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
