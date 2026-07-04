<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreadmillTestTMTExerciseECGSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Treadmill Test (TMT) / Exercise ECG')],
            [
                'title' => 'Treadmill Test (TMT) / Exercise ECG',
                'slug' => Str::slug('Treadmill Test (TMT) / Exercise ECG'),
                'introduction' => 'The Treadmill Test (TMT), also called Exercise ECG, is a cardiac stress test used to evaluate how the heart responds to physical exertion. It helps identify reduced blood supply to the heart muscle, exercise-induced arrhythmias, and exercise tolerance. The test is commonly used in patients with suspected coronary artery disease.',
                'what_is' => 'During the procedure, the patient walks on a treadmill while ECG, blood pressure, and heart rate are continuously monitored. The exercise intensity gradually increases according to standardized protocols. The test helps assess: Coronary artery disease Exercise-induced chest pain Heart rhythm abnormalities Physical fitness and endurance Recovery after cardiac procedures TMT is often combined with imaging studies when additional information is required.',
                'symptoms' => [
            ['value' => 'Chest pain during exertion'],
            ['value' => 'Breathlessness on activity'],
            ['value' => 'Palpitations during exercise'],
            ['value' => 'Dizziness during exertion'],
            ['value' => 'Reduced physical stamina'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary fatigue or muscle soreness'],
            ['value' => 'Rare arrhythmias during testing'],
            ['value' => 'Chest discomfort during exercise'],
            ['value' => 'Blood pressure fluctuations'],
            ['value' => 'Very rare cardiac emergencies in high-risk patients'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest briefly after the test if advised'],
            ['value' => 'Drink adequate fluids after exercise'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Discuss results with the cardiologist thoroughly'],
            ['value' => 'Follow exercise recommendations carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary fatigue or muscle soreness'],
            ['value' => 'Rare arrhythmias during testing'],
            ['value' => 'Chest discomfort during exercise'],
            ['value' => 'Blood pressure fluctuations'],
            ['value' => 'Very rare cardiac emergencies in high-risk patients'],
        ],
                'long_term_outlook' => 'Exercise ECG testing supports early diagnosis of coronary artery disease and helps guide preventive and therapeutic cardiac management for better long-term outcomes.',
                'conclusion' => '',
                'seo_title' => 'Treadmill Test (TMT) / Exercise ECG',
                'seo_description' => 'The Treadmill Test (TMT), also called Exercise ECG, is a cardiac stress test used to evaluate how the heart responds to physical exertion. It helps identify reduced blood supply to the heart muscle, exercise-induced arrhythmias, and exercise tolerance. The test is commonly used in patients with suspected coronary artery disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
