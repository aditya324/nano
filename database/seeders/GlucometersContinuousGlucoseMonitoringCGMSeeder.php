<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GlucometersContinuousGlucoseMonitoringCGMSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Glucometers / Continuous Glucose Monitoring (CGM)')],
            [
                'title' => 'Glucometers / Continuous Glucose Monitoring (CGM)',
                'slug' => Str::slug('Glucometers / Continuous Glucose Monitoring (CGM)'),
                'introduction' => 'Glucometers and Continuous Glucose Monitoring (CGM) systems are advanced diabetes monitoring devices used to measure and track blood glucose levels in individuals with diabetes and other metabolic disorders. These technologies help patients and healthcare providers monitor glucose trends, adjust medications, prevent diabetic emergencies, and maintain long-term metabolic stability. Regular glucose monitoring plays a vital role in improving diabetes management and reducing the risk of complications.',
                'what_is' => 'Glucometers are portable handheld devices that measure blood sugar levels using a small blood sample obtained through a finger-prick test. Continuous Glucose Monitoring systems use wearable sensors placed under the skin to continuously track glucose levels throughout the day and night, providing real-time glucose readings and alerts for high or low blood sugar levels. Advanced CGM systems may integrate with insulin pumps and mobile applications for automated diabetes management support. These devices are commonly used in hospitals, diabetes clinics, intensive care units, endocrinology centers, and home-care settings for Type 1 Diabetes, Type 2 Diabetes, gestational diabetes, and intensive insulin therapy management.',
                'symptoms' => [
            ['value' => 'Frequent blood sugar fluctuations or uncontrolled diabetes'],
            ['value' => 'Excessive thirst, frequent urination, or fatigue'],
            ['value' => 'Recurrent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Difficulty maintaining stable blood glucose levels'],
            ['value' => 'Need for continuous diabetes monitoring and insulin adjustment'],
        ],
                'causes' => [
            ['value' => 'Type 1 or Type 2 Diabetes Mellitus'],
            ['value' => 'Frequent blood sugar fluctuations or uncontrolled diabetes'],
            ['value' => 'Gestational diabetes during pregnancy'],
            ['value' => 'Need for intensive insulin therapy and glucose monitoring'],
            ['value' => 'Metabolic disorders requiring continuous blood sugar assessment'],
        ],
                'condition_risks' => [
            ['value' => 'Inaccurate readings due to improper device usage or calibration issues'],
            ['value' => 'Skin irritation or discomfort from CGM sensor placement'],
            ['value' => 'Risk of delayed treatment if abnormal readings are ignored'],
            ['value' => 'Device malfunction or technical monitoring issues'],
            ['value' => 'Increased dependence on monitoring devices without proper medical follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Glucometers and CGM systems support effective diabetes management by enabling regular glucose monitoring, early detection of blood sugar fluctuations, and timely treatment adjustment. Management may include insulin therapy optimization, oral anti-diabetic medications, dietary planning, carbohydrate counting, exercise guidance, diabetes education, and endocrinology follow-up. Patients may also benefit from remote glucose monitoring, smart insulin delivery systems, lifestyle modification programs, and personalized diabetes management plans to maintain long-term metabolic health and reduce diabetic complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood glucose trends and device accuracy'],
            ['value' => 'Proper device handling, calibration, and sensor maintenance education'],
            ['value' => 'Monitoring for skin irritation or device-related complications'],
            ['value' => 'Adjustment of medications or insulin therapy based on glucose readings'],
            ['value' => 'Long-term endocrinology follow-up and diabetes management support'],
        ],
                'surgery_risks' => [
            ['value' => 'Inaccurate readings due to improper device usage or calibration issues'],
            ['value' => 'Skin irritation or discomfort from CGM sensor placement'],
            ['value' => 'Risk of delayed treatment if abnormal readings are ignored'],
            ['value' => 'Device malfunction or technical monitoring issues'],
            ['value' => 'Increased dependence on monitoring devices without proper medical follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Glucometers and CGM systems support effective diabetes management by enabling regular glucose monitoring, early detection of blood sugar fluctuations, and timely treatment adjustment. Management may include insulin therapy optimization, oral anti-diabetic medications, dietary planning, carbohydrate counting, exercise guidance, diabetes education, and endocrinology follow-up. Patients may also benefit from remote glucose monitoring, smart insulin delivery systems, lifestyle modification programs, and personalized diabetes management plans to maintain long-term metabolic health and reduce diabetic complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with glucometers and Continuous Glucose Monitoring systems is generally highly positive with proper device usage and regular medical supervision. Continuous glucose tracking, medication adherence, healthy nutrition, physical activity, stress management, diabetes education, and ongoing healthcare follow-up significantly help improve blood sugar control, reduce diabetic emergencies, prevent long-term complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Glucometers / Continuous Glucose Monitoring (CGM)',
                'seo_description' => 'Glucometers and Continuous Glucose Monitoring (CGM) systems are advanced diabetes monitoring devices used to measure and track blood glucose levels in individuals with diabetes and other metabolic disorders. These technologies help patients and healthcare providers monitor glucose trends, adjust medications, prevent diabetic emergencies, and maintain long-term metabolic stability. Regular glucose monitoring plays a vital role in improving diabetes management and reducing the risk of complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
