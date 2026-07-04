<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryHypertensionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Hypertension')],
            [
                'title' => 'Pulmonary Hypertension',
                'slug' => Str::slug('Pulmonary Hypertension'),
                'introduction' => 'Pulmonary hypertension is a condition characterized by elevated blood pressure within the arteries supplying the lungs. The increased pressure places strain on the right side of the heart and can eventually lead to heart failure if untreated. Early diagnosis and specialized treatment improve outcomes and quality of life.',
                'what_is' => 'Pulmonary hypertension may occur due to: Heart disease Lung disease Blood clots Connective tissue disorders Idiopathic causes Diagnostic evaluation may include: Echocardiography Right heart catheterization CT scans Pulmonary function tests Blood investigations Treatment options include: Oxygen therapy Diuretics Vasodilator medications Anticoagulation Advanced pulmonary hypertension therapies Specialized cardiology and pulmonology care are often required.',
                'symptoms' => [
            ['value' => 'Shortness of breath'],
            ['value' => 'Fatigue'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Swelling of legs'],
            ['value' => 'Dizziness or fainting episodes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Right heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Blood clots'],
            ['value' => 'Reduced oxygen levels'],
            ['value' => 'Progressive exercise intolerance'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications consistently as prescribed'],
            ['value' => 'Avoid excessive physical exertion'],
            ['value' => 'Monitor oxygen saturation if advised'],
            ['value' => 'Attend regular cardiac and pulmonary reviews'],
            ['value' => 'Maintain vaccination and infection prevention measures'],
        ],
                'surgery_risks' => [
            ['value' => 'Right heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Blood clots'],
            ['value' => 'Reduced oxygen levels'],
            ['value' => 'Progressive exercise intolerance'],
        ],
                'long_term_outlook' => 'Long-term treatment can improve symptoms, exercise capacity, and survival, although ongoing specialist monitoring is often necessary.',
                'conclusion' => '',
                'seo_title' => 'Pulmonary Hypertension',
                'seo_description' => 'Pulmonary hypertension is a condition characterized by elevated blood pressure within the arteries supplying the lungs. The increased pressure places strain on the right side of the heart and can eventually lead to heart failure if untreated. Early diagnosis and specialized treatment improve outcomes and quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
