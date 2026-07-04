<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StressCardiomyopathyTakotsuboSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Stress Cardiomyopathy (Takotsubo)')],
            [
                'title' => 'Stress Cardiomyopathy (Takotsubo)',
                'slug' => Str::slug('Stress Cardiomyopathy (Takotsubo)'),
                'introduction' => 'Stress cardiomyopathy, also called Takotsubo cardiomyopathy, is a temporary heart muscle weakness often triggered by severe emotional or physical stress. The condition mimics a heart attack but usually occurs without significant coronary artery blockage. Most patients recover heart function completely with proper care.',
                'what_is' => 'Common triggers include: Emotional trauma Severe illness Surgery Sudden stress events Diagnosis may involve: ECG Echocardiography Coronary angiography Cardiac MRI Blood tests Treatment focuses on supportive cardiac care and management of complications. The condition is more common in postmenopausal women.',
                'symptoms' => [
            ['value' => 'Sudden chest pain'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Palpitations'],
            ['value' => 'Dizziness'],
            ['value' => 'Symptoms similar to heart attack'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Cardiogenic shock in severe cases'],
            ['value' => 'Recurrence in some patients'],
            ['value' => 'Temporary reduction in heart pumping function'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular cardiac follow-up appointments'],
            ['value' => 'Manage emotional stress effectively'],
            ['value' => 'Take prescribed heart medications consistently'],
            ['value' => 'Maintain healthy lifestyle habits'],
            ['value' => 'Seek medical care for recurrent chest symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Cardiogenic shock in severe cases'],
            ['value' => 'Recurrence in some patients'],
            ['value' => 'Temporary reduction in heart pumping function'],
        ],
                'long_term_outlook' => 'Most patients recover normal heart function within weeks to months, although long-term monitoring may be recommended to detect recurrence or complications.',
                'conclusion' => '',
                'seo_title' => 'Stress Cardiomyopathy (Takotsubo)',
                'seo_description' => 'Stress cardiomyopathy, also called Takotsubo cardiomyopathy, is a temporary heart muscle weakness often triggered by severe emotional or physical stress. The condition mimics a heart attack but usually occurs without significant coronary artery blockage. Most patients recover heart function completely with proper care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
