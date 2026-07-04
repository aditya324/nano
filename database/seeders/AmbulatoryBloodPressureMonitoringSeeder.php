<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AmbulatoryBloodPressureMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ambulatory Blood Pressure Monitoring')],
            [
                'title' => 'Ambulatory Blood Pressure Monitoring',
                'slug' => Str::slug('Ambulatory Blood Pressure Monitoring'),
                'introduction' => 'Ambulatory Blood Pressure Monitoring (ABPM) is a diagnostic method that measures blood pressure continuously over 24 hours during normal daily activities. It provides more accurate assessment compared to single clinic blood pressure readings. ABPM helps diagnose hypertension and monitor treatment effectiveness.',
                'what_is' => 'A portable blood pressure monitor is attached to the patient and automatically records readings throughout the day and night. The test helps identify: White coat hypertension Masked hypertension Night-time hypertension Blood pressure fluctuations Treatment response ABPM provides detailed information regarding cardiovascular risk and blood pressure patterns.',
                'symptoms' => [
            ['value' => 'High blood pressure readings'],
            ['value' => 'Headaches or dizziness'],
            ['value' => 'Suspected hypertension'],
            ['value' => 'Fluctuating blood pressure'],
            ['value' => 'Unexplained cardiovascular symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild arm discomfort during cuff inflation'],
            ['value' => 'Sleep disturbance from night measurements'],
            ['value' => 'Temporary skin irritation'],
            ['value' => 'Minor inconvenience during daily activities'],
            ['value' => 'Anxiety related to frequent monitoring'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue regular medications during monitoring'],
            ['value' => 'Maintain normal daily activities if advised'],
            ['value' => 'Record symptoms and activities accurately'],
            ['value' => 'Return equipment as instructed'],
            ['value' => 'Attend follow-up consultation for interpretation'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild arm discomfort during cuff inflation'],
            ['value' => 'Sleep disturbance from night measurements'],
            ['value' => 'Temporary skin irritation'],
            ['value' => 'Minor inconvenience during daily activities'],
            ['value' => 'Anxiety related to frequent monitoring'],
        ],
                'long_term_outlook' => 'ABPM improves hypertension diagnosis and treatment accuracy, helping reduce long-term cardiovascular complications such as stroke and heart disease.',
                'conclusion' => '',
                'seo_title' => 'Ambulatory Blood Pressure Monitoring',
                'seo_description' => 'Ambulatory Blood Pressure Monitoring (ABPM) is a diagnostic method that measures blood pressure continuously over 24 hours during normal daily activities. It provides more accurate assessment compared to single clinic blood pressure readings. ABPM helps diagnose hypertension and monitor treatment effectiveness.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
