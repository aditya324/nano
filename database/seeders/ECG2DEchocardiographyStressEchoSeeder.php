<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ECG2DEchocardiographyStressEchoSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ECG / 2D Echocardiography / Stress Echo')],
            [
                'title' => 'ECG / 2D Echocardiography / Stress Echo',
                'slug' => Str::slug('ECG / 2D Echocardiography / Stress Echo'),
                'introduction' => 'ECG, 2D Echocardiography, and Stress Echocardiography are essential cardiac diagnostic tools used to evaluate heart rhythm, heart muscle function, valve abnormalities, and blood circulation within the heart. These investigations help cardiologists diagnose a wide range of cardiovascular conditions including arrhythmias, coronary artery disease, heart failure, and valvular disorders. They are non-invasive, safe, and widely used in both emergency and routine cardiac care.',
                'what_is' => 'An ECG records the electrical activity of the heart and helps detect rhythm disturbances, heart attacks, and conduction abnormalities. 2D Echocardiography uses ultrasound waves to visualize heart chambers, valves, pumping function, and blood flow patterns. Stress Echocardiography combines cardiac ultrasound with exercise or medication-induced stress to evaluate blood supply to the heart muscle during increased workload. These tests are commonly used for: Chest pain evaluation Breathlessness assessment Heart murmur investigation Heart failure monitoring Pre-operative cardiac evaluation The tests provide valuable real-time information and assist in early diagnosis and treatment planning.',
                'symptoms' => [
            ['value' => 'Chest pain or discomfort'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Dizziness or fainting episodes'],
            ['value' => 'Fatigue or reduced exercise tolerance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild discomfort during stress testing'],
            ['value' => 'Temporary fatigue after exercise stress test'],
            ['value' => 'Rare arrhythmias during stress evaluation'],
            ['value' => 'Anxiety during testing procedures'],
            ['value' => 'Rare allergic reaction to stress-inducing medications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow cardiologist recommendations carefully'],
            ['value' => 'Continue prescribed cardiac medications regularly'],
            ['value' => 'Attend scheduled follow-up evaluations'],
            ['value' => 'Report worsening symptoms immediately'],
            ['value' => 'Maintain healthy lifestyle modifications'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during stress testing'],
            ['value' => 'Temporary fatigue after exercise stress test'],
            ['value' => 'Rare arrhythmias during stress evaluation'],
            ['value' => 'Anxiety during testing procedures'],
            ['value' => 'Rare allergic reaction to stress-inducing medications'],
        ],
                'long_term_outlook' => 'Regular cardiac imaging and monitoring help detect heart disease early, improve treatment outcomes, reduce cardiovascular complications, and support long-term heart health and survival.',
                'conclusion' => '',
                'seo_title' => 'ECG / 2D Echocardiography / Stress Echo',
                'seo_description' => 'ECG, 2D Echocardiography, and Stress Echocardiography are essential cardiac diagnostic tools used to evaluate heart rhythm, heart muscle function, valve abnormalities, and blood circulation within the heart. These investigations help cardiologists diagnose a wide range of cardiovascular conditions including arrhythmias, coronary artery disease, heart failure, and valvular disorders. They are non-invasive, safe, and widely used in both emergency and routine cardiac care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
