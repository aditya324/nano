<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteInducedCardiacDysfunctionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrolyte-Induced Cardiac Dysfunction')],
            [
                'title' => 'Electrolyte-Induced Cardiac Dysfunction',
                'slug' => Str::slug('Electrolyte-Induced Cardiac Dysfunction'),
                'introduction' => 'Electrolyte-induced cardiac dysfunction refers to abnormalities in heart function caused by imbalances in important body minerals such as potassium, sodium, calcium, and magnesium. These electrolytes are essential for proper electrical conduction and muscle contraction of the heart. Significant electrolyte disturbances can lead to dangerous arrhythmias, heart failure symptoms, and even cardiac arrest if not corrected promptly.',
                'what_is' => 'Electrolyte disturbances may occur due to: Kidney disease Severe dehydration Vomiting or diarrhea Certain medications Hormonal disorders Critical illness Common electrolyte abnormalities affecting the heart include: Hyperkalemia Hypokalemia Hyponatremia Hypercalcemia Hypomagnesemia Diagnostic evaluation may involve: Blood electrolyte testing ECG monitoring Kidney function tests Cardiac monitoring Treatment focuses on correcting the electrolyte imbalance and managing associated cardiac complications. Severe cases may require emergency cardiac care and intensive monitoring.',
                'symptoms' => [
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Muscle weakness or cramps'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Shortness of breath or fatigue'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Heart failure worsening'],
            ['value' => 'Seizures in severe electrolyte imbalance'],
            ['value' => 'Multi-organ complications in critical illness'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor electrolyte levels regularly'],
            ['value' => 'Maintain proper hydration and nutrition'],
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Attend regular cardiac and medical follow-up visits'],
            ['value' => 'Seek urgent medical care for palpitations or weakness'],
        ],
                'surgery_risks' => [
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Heart failure worsening'],
            ['value' => 'Seizures in severe electrolyte imbalance'],
            ['value' => 'Multi-organ complications in critical illness'],
        ],
                'long_term_outlook' => 'With timely diagnosis and correction of electrolyte imbalance, most patients recover well. Long-term outcomes improve significantly with proper monitoring and management of underlying medical conditions.',
                'conclusion' => '',
                'seo_title' => 'Electrolyte-Induced Cardiac Dysfunction',
                'seo_description' => 'Electrolyte-induced cardiac dysfunction refers to abnormalities in heart function caused by imbalances in important body minerals such as potassium, sodium, calcium, and magnesium. These electrolytes are essential for proper electrical conduction and muscle contraction of the heart. Significant electrolyte disturbances can lead to dangerous arrhythmias, heart failure symptoms, and even cardiac arrest if not corrected promptly.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
