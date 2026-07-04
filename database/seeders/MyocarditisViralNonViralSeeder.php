<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MyocarditisViralNonViralSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Myocarditis (Viral / Non-Viral)')],
            [
                'title' => 'Myocarditis (Viral / Non-Viral)',
                'slug' => Str::slug('Myocarditis (Viral / Non-Viral)'),
                'introduction' => 'Myocarditis is inflammation of the heart muscle caused by viral infections, autoimmune diseases, toxins, medications, or other inflammatory conditions. The inflammation can weaken the heart muscle and interfere with normal electrical conduction and pumping function. The severity ranges from mild illness to life-threatening heart failure.',
                'what_is' => 'Common causes include: Viral infections Autoimmune disorders Bacterial infections Drug reactions Toxin exposure Diagnosis may involve: ECG Echocardiography Cardiac MRI Blood tests Endomyocardial biopsy in selected cases Treatment depends on the underlying cause and severity. Management may include: Rest and activity restriction Heart failure medications Anti-inflammatory therapy Arrhythmia management Intensive cardiac care in severe cases Long-term monitoring is important because some patients develop chronic cardiomyopathy.',
                'symptoms' => [
            ['value' => 'Chest pain'],
            ['value' => 'Breathlessness'],
            ['value' => 'Palpitations'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Fever or flu-like symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Dilated cardiomyopathy'],
            ['value' => 'Cardiogenic shock'],
            ['value' => 'Sudden cardiac death'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid strenuous physical activity during recovery'],
            ['value' => 'Attend regular cardiology follow-up visits'],
            ['value' => 'Take medications consistently as prescribed'],
            ['value' => 'Monitor symptoms such as breathlessness or palpitations'],
            ['value' => 'Maintain adequate rest and hydration'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Dilated cardiomyopathy'],
            ['value' => 'Cardiogenic shock'],
            ['value' => 'Sudden cardiac death'],
        ],
                'long_term_outlook' => 'Many patients recover completely, while some may develop chronic heart muscle weakness requiring long-term cardiac care and monitoring.',
                'conclusion' => '',
                'seo_title' => 'Myocarditis (Viral / Non-Viral)',
                'seo_description' => 'Myocarditis is inflammation of the heart muscle caused by viral infections, autoimmune diseases, toxins, medications, or other inflammatory conditions. The inflammation can weaken the heart muscle and interfere with normal electrical conduction and pumping function. The severity ranges from mild illness to life-threatening heart failure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
