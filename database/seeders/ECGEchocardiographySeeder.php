<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ECGEchocardiographySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ECG / Echocardiography')],
            [
                'title' => 'ECG / Echocardiography',
                'slug' => Str::slug('ECG / Echocardiography'),
                'introduction' => 'ECG (Electrocardiogram) and echocardiography are commonly used cardiac diagnostic procedures that help evaluate the electrical activity, structure, and overall function of the heart. These tests assist healthcare providers in diagnosing heart-related conditions, monitoring cardiovascular health, assessing heart performance, and planning appropriate treatment strategies. They are widely used for both emergency cardiac assessment and routine preventive heart care.',
                'what_is' => 'An ECG records the electrical signals of the heart to detect abnormal heart rhythms, heart attacks, conduction abnormalities, and other cardiac conditions. Echocardiography, also known as an Echo, uses ultrasound technology to create real-time images of the heart, helping evaluate heart chambers, valves, blood flow, pumping function, and structural abnormalities. These non-invasive diagnostic procedures are commonly performed in hospitals, cardiology clinics, emergency departments, intensive care units, and preventive healthcare settings for rapid and accurate cardiovascular assessment.',
                'symptoms' => [
            ['value' => 'Chest pain or chest discomfort'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Shortness of breath or unexplained fatigue'],
            ['value' => 'Dizziness, fainting, or weakness'],
            ['value' => 'High blood pressure or suspected heart disease symptoms'],
        ],
                'causes' => [
            ['value' => 'Chest pain or suspected heart disease'],
            ['value' => 'High blood pressure or uncontrolled cardiovascular risk factors'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Shortness of breath, fatigue, or dizziness'],
            ['value' => 'Family history of heart disease or abnormal cardiac findings'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of underlying heart disease'],
            ['value' => 'Undetected arrhythmias or conduction abnormalities'],
            ['value' => 'Progression of heart failure or valve-related disorders'],
            ['value' => 'Increased risk of cardiac complications if conditions remain untreated'],
            ['value' => 'Reduced heart function due to delayed medical intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'ECG and echocardiography support accurate diagnosis, treatment planning, and long-term monitoring of cardiovascular conditions. These procedures help guide management for arrhythmias, coronary artery disease, heart failure, valve disorders, hypertension, congenital heart disease, and other cardiac abnormalities. Treatment planning may include medications, lifestyle modification, blood pressure and cholesterol management, cardiac rehabilitation, advanced cardiac procedures, or surgical intervention depending on the diagnostic findings. Patients may also benefit from preventive cardiac screening, nutritional counseling, stress management, exercise programs, and regular cardiology follow-up to maintain optimal heart health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Review and interpretation of cardiac test results'],
            ['value' => 'Monitoring heart rhythm and cardiovascular status'],
            ['value' => 'Follow-up cardiac imaging or additional investigations when required'],
            ['value' => 'Medication adjustment and individualized treatment planning'],
            ['value' => 'Long-term cardiology follow-up and preventive heart care'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of underlying heart disease'],
            ['value' => 'Undetected arrhythmias or conduction abnormalities'],
            ['value' => 'Progression of heart failure or valve-related disorders'],
            ['value' => 'Increased risk of cardiac complications if conditions remain untreated'],
            ['value' => 'Reduced heart function due to delayed medical intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'ECG and echocardiography support accurate diagnosis, treatment planning, and long-term monitoring of cardiovascular conditions. These procedures help guide management for arrhythmias, coronary artery disease, heart failure, valve disorders, hypertension, congenital heart disease, and other cardiac abnormalities. Treatment planning may include medications, lifestyle modification, blood pressure and cholesterol management, cardiac rehabilitation, advanced cardiac procedures, or surgical intervention depending on the diagnostic findings. Patients may also benefit from preventive cardiac screening, nutritional counseling, stress management, exercise programs, and regular cardiology follow-up to maintain optimal heart health.'],
        ],
                'long_term_outlook' => 'ECG and echocardiography are safe, non-invasive diagnostic procedures that play a vital role in the early detection, monitoring, and prevention of heart disease. Timely cardiac evaluation, routine cardiovascular screening, healthy lifestyle habits, medication adherence, regular exercise, stress management, and continuous medical follow-up significantly help improve treatment outcomes, reduce complications, preserve heart function, and support long-term cardiovascular health and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'ECG / Echocardiography',
                'seo_description' => 'ECG (Electrocardiogram) and echocardiography are commonly used cardiac diagnostic procedures that help evaluate the electrical activity, structure, and overall function of the heart. These tests assist healthcare providers in diagnosing heart-related conditions, monitoring cardiovascular health, assessing heart performance, and planning appropriate treatment strategies. They are widely used for both emergency cardiac assessment and routine preventive heart care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
