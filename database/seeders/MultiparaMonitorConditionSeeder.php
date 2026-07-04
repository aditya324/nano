<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultiparaMonitorConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multipara Monitor')],
            [
                'name' => 'Multipara Monitor',
                'slug' => Str::slug('Multipara Monitor'),
                'h1' => 'Multipara Monitor',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A multipara monitor is an advanced medical device used to continuously monitor multiple vital signs of a patient in real time. It helps healthcare professionals track important body functions such as heart activity (ECG), oxygen saturation (SpO2), pulse rate, blood pressure (NIBP), temperature, respiratory rate, and sometimes carbon dioxide levels (ETCO2). Multipara monitors are commonly used in intensive care units, emergency departments, operation theatres, and critical care settings.',
                'about_more' => '',
                'overview' => 'Multipara monitors play a vital role in patient monitoring by providing continuous and accurate information about a patient’s physiological condition. These devices help doctors and nurses quickly identify changes in vital signs, allowing timely medical intervention during emergencies or critical illness. The monitor displays real-time readings and alerts healthcare teams if any parameter moves outside the normal range, improving patient safety and critical care management.',
                'symptoms' => [
            ['value' => 'Unstable blood pressure or irregular heartbeat'],
            ['value' => 'Difficulty breathing or low oxygen levels'],
            ['value' => 'Sudden changes in pulse rate or consciousness'],
            ['value' => 'Fever, weakness, or signs of critical illness'],
            ['value' => 'Conditions requiring continuous vital sign monitoring'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe infections or critical illness'],
            ['value' => 'Heart disease or respiratory complications'],
            ['value' => 'Major surgery or trauma requiring intensive monitoring'],
            ['value' => 'Organ dysfunction or unstable medical conditions'],
            ['value' => 'Emergency situations needing rapid medical response'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continuous monitoring of vital signs during recovery'],
            ['value' => 'Immediate medical attention for abnormal monitor readings'],
            ['value' => 'Regular assessment of oxygen levels, heart rhythm, and blood pressure'],
            ['value' => 'Supportive critical care management and patient observation'],
            ['value' => 'Ongoing monitoring until the patient’s condition stabilizes'],
        ],
                'recovery' => 'The long-term outlook associated with multipara monitoring depends on the patient’s underlying medical condition and response to treatment. Continuous monitoring helps improve patient safety, supports early detection of complications, and allows faster medical intervention during critical situations. Proper monitoring and timely care significantly contribute to improved recovery and overall treatment outcomes. __________________ 73. Defibrillators / Crash Carts Defibrillators / Crash Carts Equipment',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Multipara Monitor',
                'meta_description' => 'A multipara monitor is an advanced medical device used to continuously monitor multiple vital signs of a patient in real time. It helps healthcare professionals',
                'meta_keywords' => '',
            ]
        );
    }
}
