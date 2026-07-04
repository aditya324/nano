<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodPressureMonitorsCentralMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Pressure Monitors / Central Monitoring')],
            [
                'title' => 'Blood Pressure Monitors / Central Monitoring',
                'slug' => Str::slug('Blood Pressure Monitors / Central Monitoring'),
                'introduction' => 'Blood pressure monitors and central monitoring systems are advanced medical devices used to continuously assess vital signs such as blood pressure, heart rate, oxygen saturation, respiratory rate, and other critical health parameters. These monitoring systems help healthcare providers detect early changes in a patient’s condition, support timely medical intervention, and improve patient safety in both acute and chronic healthcare settings.',
                'what_is' => 'Blood pressure monitoring devices are commonly used in outpatient clinics, hospital wards, intensive care units (ICUs), emergency departments, operation theaters, and home healthcare settings. Central monitoring systems allow healthcare teams to observe and track multiple patients simultaneously through interconnected bedside monitoring equipment. These systems are essential in the management of hypertension, heart disease, respiratory disorders, critical illnesses, post-operative recovery, and patients requiring continuous observation. Real-time monitoring helps clinicians identify abnormalities early, optimize treatment plans, and provide rapid medical response when necessary.',
                'symptoms' => [
            ['value' => 'High or fluctuating blood pressure'],
            ['value' => 'Chest pain or irregular heartbeat'],
            ['value' => 'Shortness of breath or reduced oxygen levels'],
            ['value' => 'Dizziness, fainting, or generalized weakness'],
            ['value' => 'Critical illness requiring continuous monitoring and observation'],
        ],
                'causes' => [
            ['value' => 'Hypertension or fluctuating blood pressure levels'],
            ['value' => 'Heart disease or cardiovascular instability'],
            ['value' => 'Critical illness requiring continuous monitoring'],
            ['value' => 'Post-surgical recovery or intensive care management'],
            ['value' => 'Respiratory disorders or chronic medical conditions needing close observation'],
        ],
                'condition_risks' => [
            ['value' => 'Undetected blood pressure abnormalities or cardiovascular instability'],
            ['value' => 'Delayed recognition of cardiac or respiratory emergencies'],
            ['value' => 'Increased risk of stroke, heart attack, or organ complications'],
            ['value' => 'Reduced monitoring of critically ill or high-risk patients'],
            ['value' => 'Delayed medical response to sudden health deterioration'],
            ['value' => 'Treatment Options'],
            ['value' => 'Blood pressure monitors and central monitoring systems support accurate patient assessment, continuous observation, early diagnosis, and timely medical management. These monitoring systems help guide treatment for hypertension, arrhythmias, respiratory disorders, heart failure, post-surgical recovery, and critical care conditions. Management may include medication adjustment, oxygen therapy, fluid management, cardiac monitoring, respiratory support, ICU care, and long-term chronic disease management. Patients may also benefit from preventive cardiovascular care, telemonitoring support, lifestyle counseling, rehabilitation programs, and regular specialist follow-up to maintain long-term health stability and overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of vital signs and cardiovascular status'],
            ['value' => 'Regular assessment of blood pressure, heart rate, and oxygen levels'],
            ['value' => 'Early detection of complications or clinical deterioration'],
            ['value' => 'Medication adjustments based on monitoring findings'],
            ['value' => 'Ongoing medical supervision and follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Undetected blood pressure abnormalities or cardiovascular instability'],
            ['value' => 'Delayed recognition of cardiac or respiratory emergencies'],
            ['value' => 'Increased risk of stroke, heart attack, or organ complications'],
            ['value' => 'Reduced monitoring of critically ill or high-risk patients'],
            ['value' => 'Delayed medical response to sudden health deterioration'],
            ['value' => 'Treatment Options'],
            ['value' => 'Blood pressure monitors and central monitoring systems support accurate patient assessment, continuous observation, early diagnosis, and timely medical management. These monitoring systems help guide treatment for hypertension, arrhythmias, respiratory disorders, heart failure, post-surgical recovery, and critical care conditions. Management may include medication adjustment, oxygen therapy, fluid management, cardiac monitoring, respiratory support, ICU care, and long-term chronic disease management. Patients may also benefit from preventive cardiovascular care, telemonitoring support, lifestyle counseling, rehabilitation programs, and regular specialist follow-up to maintain long-term health stability and overall well-being.'],
        ],
                'long_term_outlook' => 'Blood pressure monitors and central monitoring systems play a vital role in improving patient safety, early diagnosis, and continuous medical care. Regular monitoring, timely intervention, medication adherence, preventive healthcare, healthy lifestyle habits, and continuous medical follow-up significantly help reduce complications, improve cardiovascular stability, support faster recovery, preserve organ function, and enhance overall long-term health outcomes and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Blood Pressure Monitors / Central Monitoring',
                'seo_description' => 'Blood pressure monitors and central monitoring systems are advanced medical devices used to continuously assess vital signs such as blood pressure, heart rate, oxygen saturation, respiratory rate, and other critical health parameters. These monitoring systems help healthcare providers detect early changes in a patient’s condition, support timely medical intervention, and improve patient safety in both acute and chronic healthcare settings.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
