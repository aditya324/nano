<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharmacotherapyforDyslipidemiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pharmacotherapy for Dyslipidemia')],
            [
                'title' => 'Pharmacotherapy for Dyslipidemia',
                'slug' => Str::slug('Pharmacotherapy for Dyslipidemia'),
                'introduction' => 'Pharmacotherapy for dyslipidemia involves the use of medications to manage abnormal cholesterol and triglyceride levels in the blood. These medications help reduce harmful lipid levels, improve cardiovascular health, and lower the risk of heart attack, stroke, and blood vessel disease.',
                'what_is' => 'Dyslipidemia treatment is tailored according to the patient’s lipid profile, cardiovascular risk factors, and associated medical conditions such as diabetes or hypertension. Common medications used include statins, fibrates, cholesterol absorption inhibitors, omega-3 fatty acid preparations, and other lipid-lowering therapies. Pharmacotherapy is usually combined with lifestyle modifications such as healthy diet, exercise, weight management, and smoking cessation for effective long-term lipid control.',
                'symptoms' => [
            ['value' => 'High cholesterol or triglyceride levels detected in blood tests'],
            ['value' => 'Fatigue or reduced physical stamina'],
            ['value' => 'Chest discomfort related to cardiovascular disease'],
            ['value' => 'Obesity or metabolic syndrome-related concerns'],
            ['value' => 'Symptoms associated with poor blood circulation or vascular disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Coronary artery disease and heart attack'],
            ['value' => 'Stroke and vascular complications'],
            ['value' => 'Atherosclerosis and blood vessel narrowing'],
            ['value' => 'Increased cardiovascular risk in diabetes and hypertension'],
            ['value' => 'Long-term metabolic and circulatory disorders'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular lipid profile monitoring'],
            ['value' => 'Medication adherence and dose adjustments when required'],
            ['value' => 'Routine cardiovascular and metabolic assessment'],
            ['value' => 'Dietary counseling and physical activity recommendations'],
            ['value' => 'Long-term follow-up with internal medicine or cardiology specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Coronary artery disease and heart attack'],
            ['value' => 'Stroke and vascular complications'],
            ['value' => 'Atherosclerosis and blood vessel narrowing'],
            ['value' => 'Increased cardiovascular risk in diabetes and hypertension'],
            ['value' => 'Long-term metabolic and circulatory disorders'],
        ],
                'long_term_outlook' => 'The long-term outlook with dyslipidemia pharmacotherapy is generally positive when medications are used consistently alongside healthy lifestyle changes. Effective lipid control significantly reduces the risk of heart disease, stroke, and vascular complications. Continuous monitoring, preventive care, and long-term cardiovascular risk management are important for maintaining overall heart and metabolic health.',
                'conclusion' => '',
                'seo_title' => 'Pharmacotherapy for Dyslipidemia',
                'seo_description' => 'Pharmacotherapy for dyslipidemia involves the use of medications to manage abnormal cholesterol and triglyceride levels in the blood. These medications help reduce harmful lipid levels, improve cardiovascular health, and lower the risk of heart attack, stroke, and blood vessel disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
