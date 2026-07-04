<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodPressureControlinRenalDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Blood Pressure Control in Renal Disease')],
            [
                'name' => 'Blood Pressure Control in Renal Disease',
                'slug' => Str::slug('Blood Pressure Control in Renal Disease'),
                'h1' => 'Blood Pressure Control in Renal Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Blood pressure control in renal disease is a specialized nephrology treatment aimed at managing hypertension associated with kidney disorders.',
                'about_more' => 'High blood pressure both causes and worsens kidney disease, creating a cycle that can rapidly damage kidney function if not controlled properly. Careful blood pressure management is one of the most important strategies for protecting kidney health and preventing cardiovascular complications.',
                'overview' => 'The treatment plan includes: Regular blood pressure monitoring Kidney function assessment Medication management Salt restriction Lifestyle counseling Cardiovascular risk reduction Doctors may prescribe: ACE inhibitors ARBs Diuretics Calcium channel blockers Other antihypertensive medications Patients are also guided regarding: Weight control Physical activity Stress management Smoking cessation Healthy diet practices Frequent monitoring is important because uncontrolled hypertension can accelerate kidney damage.',
                'symptoms' => [
            ['value' => 'Persistent high blood pressure'],
            ['value' => 'Headache or dizziness'],
            ['value' => 'Swelling of legs'],
            ['value' => 'Fatigue'],
            ['value' => 'Kidney function abnormalities'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure progression'],
            ['value' => 'Heart disease'],
            ['value' => 'Stroke'],
            ['value' => 'Vision problems'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Monitor blood pressure daily if advised'],
            ['value' => 'Reduce salt intake significantly'],
            ['value' => 'Take medications regularly'],
            ['value' => 'Attend nephrology reviews consistently'],
            ['value' => 'Maintain healthy lifestyle habits'],
        ],
                'recovery' => 'Effective blood pressure control greatly slows kidney disease progression and reduces cardiovascular risks. Long-term management improves survival and helps preserve kidney function for many years.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Blood Pressure Control in Renal Disease',
                'meta_description' => 'Blood pressure control in renal disease is a specialized nephrology treatment aimed at managing hypertension associated with kidney disorders.',
                'meta_keywords' => '',
            ]
        );
    }
}
