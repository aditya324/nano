<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverDiseaseMonitoringSurveillanceUltrasoundFibroscanAFPSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Liver Disease Monitoring & Surveillance (Ultrasound, Fibroscan, AFP)')],
            [
                'title' => 'Liver Disease Monitoring & Surveillance (Ultrasound, Fibroscan, AFP)',
                'slug' => Str::slug('Liver Disease Monitoring & Surveillance (Ultrasound, Fibroscan, AFP)'),
                'introduction' => 'Liver disease monitoring and surveillance involve regular evaluation of liver health to detect disease progression, fibrosis, cirrhosis, or liver cancer early.',
                'what_is' => 'Monitoring tools include: Ultrasound imaging Fibroscan for liver stiffness AFP blood testing Liver function tests These evaluations are important in: Chronic hepatitis Cirrhosis Fatty liver disease Liver cancer surveillance Early detection improves treatment success and survival.',
                'symptoms' => [
            ['value' => 'Chronic liver disease history'],
            ['value' => 'Fatigue or weakness'],
            ['value' => 'Abdominal swelling'],
            ['value' => 'Jaundice symptoms'],
            ['value' => 'Abnormal liver blood tests'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Anxiety related to repeated monitoring'],
            ['value' => 'Delayed detection if follow-up is missed'],
            ['value' => 'Progression of liver disease despite surveillance'],
            ['value' => 'Rare false-positive imaging findings'],
            ['value' => 'Ongoing need for long-term medical follow-up'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled monitoring appointments regularly'],
            ['value' => 'Maintain healthy diet and body weight'],
            ['value' => 'Avoid alcohol and smoking'],
            ['value' => 'Follow medication plans carefully'],
            ['value' => 'Report new symptoms promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Anxiety related to repeated monitoring'],
            ['value' => 'Delayed detection if follow-up is missed'],
            ['value' => 'Progression of liver disease despite surveillance'],
            ['value' => 'Rare false-positive imaging findings'],
            ['value' => 'Ongoing need for long-term medical follow-up'],
        ],
                'long_term_outlook' => 'Regular liver surveillance improves early detection of complications, enhances treatment outcomes, and supports better long-term liver health.',
                'conclusion' => '',
                'seo_title' => 'Liver Disease Monitoring & Surveillance (Ultrasound, Fibroscan, AFP)',
                'seo_description' => 'Liver disease monitoring and surveillance involve regular evaluation of liver health to detect disease progression, fibrosis, cirrhosis, or liver cancer early.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
