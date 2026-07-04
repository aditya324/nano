<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabetesLipidProfilingEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diabetes & Lipid Profiling Equipment')],
            [
                'title' => 'Diabetes & Lipid Profiling Equipment',
                'slug' => Str::slug('Diabetes & Lipid Profiling Equipment'),
                'introduction' => 'Diabetes and lipid profiling equipment are specialized diagnostic tools used to measure blood sugar levels, cholesterol levels, triglycerides, and other important metabolic health indicators. These devices help healthcare providers diagnose, monitor, and manage diabetes, dyslipidemia, metabolic syndrome, and cardiovascular risk factors. Regular metabolic monitoring plays a vital role in preventive healthcare and long-term disease management.',
                'what_is' => 'Diabetes monitoring equipment includes blood glucose analyzers, HbA1c testing devices, glucometers, and continuous glucose monitoring (CGM) systems used to assess blood sugar control and diabetes management effectiveness. Lipid profiling equipment measures cholesterol, triglycerides, HDL, LDL, and other lipid parameters to evaluate cardiovascular and metabolic health. These investigations are widely used in hospitals, diagnostic laboratories, diabetes clinics, preventive healthcare centers, and home monitoring settings for early diagnosis, treatment planning, chronic disease monitoring, and prevention of long-term metabolic and cardiovascular complications.',
                'symptoms' => [
            ['value' => 'High or fluctuating blood sugar levels'],
            ['value' => 'Excessive thirst, frequent urination, or fatigue'],
            ['value' => 'Obesity or metabolic syndrome-related concerns'],
            ['value' => 'High cholesterol or triglyceride levels'],
            ['value' => 'Increased cardiovascular risk factors or family history of metabolic disease'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus or uncontrolled blood sugar levels'],
            ['value' => 'High cholesterol, triglycerides, or lipid imbalance'],
            ['value' => 'Obesity, metabolic syndrome, or sedentary lifestyle'],
            ['value' => 'Family history of diabetes or cardiovascular disease'],
            ['value' => 'Hypertension or increased cardiovascular risk factors'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of diabetes or lipid disorders'],
            ['value' => 'Poor blood sugar and cholesterol control'],
            ['value' => 'Increased risk of heart disease, stroke, and vascular complications'],
            ['value' => 'Kidney, nerve, or blood vessel damage due to uncontrolled metabolic disease'],
            ['value' => 'Progression of diabetes, obesity, and cardiovascular conditions without regular monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Diabetes and lipid profiling equipment support accurate diagnosis, continuous metabolic monitoring, treatment planning, and preventive healthcare management. These devices help guide diabetes treatment, insulin therapy, cholesterol management, nutritional counseling, weight control, cardiovascular risk reduction, and lifestyle modification programs. Patients may also benefit from medication adjustments, exercise planning, telehealth monitoring, preventive screening, chronic disease education, endocrinology consultation, and long-term metabolic follow-up to optimize blood sugar control and cardiovascular health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular blood sugar and lipid profile monitoring'],
            ['value' => 'Review and interpretation of metabolic test results'],
            ['value' => 'Medication adjustment and individualized treatment planning'],
            ['value' => 'Dietary counseling and lifestyle modification support'],
            ['value' => 'Long-term metabolic and cardiovascular follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of diabetes or lipid disorders'],
            ['value' => 'Poor blood sugar and cholesterol control'],
            ['value' => 'Increased risk of heart disease, stroke, and vascular complications'],
            ['value' => 'Kidney, nerve, or blood vessel damage due to uncontrolled metabolic disease'],
            ['value' => 'Progression of diabetes, obesity, and cardiovascular conditions without regular monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Diabetes and lipid profiling equipment support accurate diagnosis, continuous metabolic monitoring, treatment planning, and preventive healthcare management. These devices help guide diabetes treatment, insulin therapy, cholesterol management, nutritional counseling, weight control, cardiovascular risk reduction, and lifestyle modification programs. Patients may also benefit from medication adjustments, exercise planning, telehealth monitoring, preventive screening, chronic disease education, endocrinology consultation, and long-term metabolic follow-up to optimize blood sugar control and cardiovascular health outcomes.'],
        ],
                'long_term_outlook' => 'Diabetes and lipid profiling equipment play an important role in preventive healthcare, early diagnosis, and long-term metabolic disease management. Regular monitoring, healthy lifestyle habits, medication adherence, balanced nutrition, exercise, preventive healthcare, and continuous medical follow-up significantly help improve blood sugar and cholesterol control, reduce cardiovascular complications, preserve organ function, support early intervention, and enhance overall metabolic and cardiovascular health and well-being.',
                'conclusion' => '',
                'seo_title' => 'Diabetes & Lipid Profiling Equipment',
                'seo_description' => 'Diabetes and lipid profiling equipment are specialized diagnostic tools used to measure blood sugar levels, cholesterol levels, triglycerides, and other important metabolic health indicators. These devices help healthcare providers diagnose, monitor, and manage diabetes, dyslipidemia, metabolic syndrome, and cardiovascular risk factors. Regular metabolic monitoring plays a vital role in preventive healthcare and long-term disease management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
