<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContinuousGlucoseMonitoringCGMSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Continuous Glucose Monitoring (CGM)')],
            [
                'title' => 'Continuous Glucose Monitoring (CGM)',
                'slug' => Str::slug('Continuous Glucose Monitoring (CGM)'),
                'introduction' => 'Continuous Glucose Monitoring (CGM) is an advanced diabetes management procedure that uses wearable sensor technology to continuously track blood glucose levels throughout the day and night. CGM systems provide real-time glucose readings, trends, and alerts, helping individuals and healthcare providers make informed decisions regarding insulin therapy, diet, physical activity, and overall diabetes management. This technology improves blood sugar control and helps reduce the risk of diabetic complications and emergencies.',
                'what_is' => 'CGM systems use a small sensor placed under the skin to measure glucose levels in the interstitial fluid continuously. The sensor transmits glucose readings to a receiver, smartphone, or insulin pump, allowing real-time monitoring without repeated finger-prick testing. CGM devices can provide alerts for high or low blood sugar levels, helping patients respond quickly to glucose fluctuations. These systems are commonly used in Type 1 Diabetes, insulin-dependent Type 2 Diabetes, gestational diabetes, and patients with frequent hypoglycemia or unstable blood sugar levels. CGM technology is widely utilized in endocrinology clinics, diabetes care programs, hospitals, and home-care settings.',
                'symptoms' => [
            ['value' => 'Frequent blood sugar fluctuations or unstable diabetes control'],
            ['value' => 'Recurrent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Difficulty identifying low blood sugar symptoms'],
            ['value' => 'Poorly controlled diabetes despite medication or insulin therapy'],
            ['value' => 'Need for close glucose monitoring during insulin pump therapy or pregnancy'],
        ],
                'causes' => [
            ['value' => 'Type 1 Diabetes Mellitus'],
            ['value' => 'Insulin-dependent Type 2 Diabetes'],
            ['value' => 'Frequent hypoglycemia or hyperglycemia episodes'],
            ['value' => 'Unstable blood sugar levels despite treatment'],
            ['value' => 'Pregnancy-related diabetes requiring close monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Skin irritation or discomfort at the sensor insertion site'],
            ['value' => 'Sensor malfunction or inaccurate glucose readings in selected situations'],
            ['value' => 'Alarm fatigue from frequent glucose alerts'],
            ['value' => 'Dependence on device monitoring without proper clinical follow-up'],
            ['value' => 'Temporary calibration or connectivity issues affecting glucose tracking'],
            ['value' => 'Treatment Options'],
            ['value' => 'Continuous Glucose Monitoring focuses on improving blood sugar management, preventing diabetic emergencies, supporting insulin therapy adjustment, and enhancing long-term metabolic stability. CGM systems may be used independently or integrated with insulin pumps for automated insulin delivery support. Patients may also benefit from diabetes education, nutritional counseling, carbohydrate counting, exercise planning, medication adjustment, and regular endocrinology follow-up to optimize glucose control and reduce long-term diabetic complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of glucose trends and device performance'],
            ['value' => 'Proper sensor placement and maintenance education'],
            ['value' => 'Monitoring for skin irritation or device-related issues'],
            ['value' => 'Adjustment of medications or insulin doses based on CGM data'],
            ['value' => 'Long-term endocrinology follow-up and diabetes management support'],
        ],
                'surgery_risks' => [
            ['value' => 'Skin irritation or discomfort at the sensor insertion site'],
            ['value' => 'Sensor malfunction or inaccurate glucose readings in selected situations'],
            ['value' => 'Alarm fatigue from frequent glucose alerts'],
            ['value' => 'Dependence on device monitoring without proper clinical follow-up'],
            ['value' => 'Temporary calibration or connectivity issues affecting glucose tracking'],
            ['value' => 'Treatment Options'],
            ['value' => 'Continuous Glucose Monitoring focuses on improving blood sugar management, preventing diabetic emergencies, supporting insulin therapy adjustment, and enhancing long-term metabolic stability. CGM systems may be used independently or integrated with insulin pumps for automated insulin delivery support. Patients may also benefit from diabetes education, nutritional counseling, carbohydrate counting, exercise planning, medication adjustment, and regular endocrinology follow-up to optimize glucose control and reduce long-term diabetic complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook following Continuous Glucose Monitoring is highly positive when combined with proper diabetes management and regular medical follow-up. Real-time glucose tracking, medication adherence, healthy nutrition, exercise, insulin optimization, stress management, and continuous endocrinology care significantly help improve metabolic stability, reduce hypoglycemia risk, prevent diabetic complications, preserve organ health, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Continuous Glucose Monitoring (CGM)',
                'seo_description' => 'Continuous Glucose Monitoring (CGM) is an advanced diabetes management procedure that uses wearable sensor technology to continuously track blood glucose levels throughout the day and night. CGM systems provide real-time glucose readings, trends, and alerts, helping individuals and healthcare providers make informed decisions regarding insulin therapy, diet, physical activity, and overall diabetes management. This technology improves blood sugar control and helps reduce the risk of diabetic complications and emergencies.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
