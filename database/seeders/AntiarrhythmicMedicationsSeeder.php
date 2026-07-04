<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiarrhythmicMedicationsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anti-arrhythmic Medications')],
            [
                'title' => 'Anti-arrhythmic Medications',
                'slug' => Str::slug('Anti-arrhythmic Medications'),
                'introduction' => 'Anti-arrhythmic medications are drugs used to control abnormal heart rhythms and stabilize electrical activity within the heart. These medications help manage fast, slow, or irregular heartbeats and reduce arrhythmia-related complications. They play an important role in both emergency and long-term cardiology care.',
                'what_is' => 'Common anti-arrhythmic medications include: Amiodarone Sotalol Flecainide Digoxin Lidocaine These medications are used for: Atrial fibrillation Ventricular arrhythmias Supraventricular tachycardia Palpitations Rhythm stabilization after cardiac events Careful monitoring is often necessary due to potential side effects and rhythm-related risks.',
                'symptoms' => [
            ['value' => 'Palpitations'],
            ['value' => 'Irregular heartbeat'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Rapid heart rate'],
            ['value' => 'Shortness of breath related to arrhythmias'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Slow or excessively fast heart rhythms'],
            ['value' => 'Medication-related toxicity'],
            ['value' => 'Dizziness or low blood pressure'],
            ['value' => 'Organ-related side effects with long-term use'],
            ['value' => 'Drug interactions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Attend ECG and rhythm monitoring appointments'],
            ['value' => 'Avoid self-adjusting medication doses'],
            ['value' => 'Report fainting or worsening palpitations immediately'],
            ['value' => 'Maintain regular cardiology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Slow or excessively fast heart rhythms'],
            ['value' => 'Medication-related toxicity'],
            ['value' => 'Dizziness or low blood pressure'],
            ['value' => 'Organ-related side effects with long-term use'],
            ['value' => 'Drug interactions'],
        ],
                'long_term_outlook' => 'Anti-arrhythmic therapy helps control heart rhythm disorders, reduces symptoms, and improves long-term cardiac stability and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Anti-arrhythmic Medications',
                'seo_description' => 'Anti-arrhythmic medications are drugs used to control abnormal heart rhythms and stabilize electrical activity within the heart. These medications help manage fast, slow, or irregular heartbeats and reduce arrhythmia-related complications. They play an important role in both emergency and long-term cardiology care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
