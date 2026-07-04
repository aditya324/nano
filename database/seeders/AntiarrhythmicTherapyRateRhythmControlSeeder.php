<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiarrhythmicTherapyRateRhythmControlSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiarrhythmic Therapy & Rate/Rhythm Control')],
            [
                'title' => 'Antiarrhythmic Therapy & Rate/Rhythm Control',
                'slug' => Str::slug('Antiarrhythmic Therapy & Rate/Rhythm Control'),
                'introduction' => 'Antiarrhythmic therapy and rate/rhythm control are treatment approaches used to manage abnormal heart rhythms (arrhythmias). These therapies help regulate the heart’s electrical activity, maintain a stable heart rhythm, control heart rate, and reduce the risk of complications such as stroke, heart failure, or sudden cardiac arrest.',
                'what_is' => 'Arrhythmia management depends on the type and severity of the heart rhythm disorder. Treatment may involve medications to slow the heart rate, restore normal rhythm, or prevent irregular electrical signals in the heart. Commonly treated conditions include atrial fibrillation, atrial flutter, supraventricular tachycardia, and ventricular arrhythmias. In some cases, antiarrhythmic therapy may be combined with procedures such as cardioversion, catheter ablation, or pacemaker implantation.',
                'symptoms' => [
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Rapid or slow heart rate'],
            ['value' => 'Dizziness or lightheadedness'],
            ['value' => 'Chest discomfort or shortness of breath'],
            ['value' => 'Fatigue, fainting, or reduced exercise tolerance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stroke or blood clot formation'],
            ['value' => 'Heart failure or reduced heart function'],
            ['value' => 'Sudden cardiac arrest in severe arrhythmias'],
            ['value' => 'Reduced blood circulation and oxygen delivery'],
            ['value' => 'Medication-related side effects or recurrent arrhythmias'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular heart rhythm and ECG monitoring'],
            ['value' => 'Medication adherence and dosage adjustment when required'],
            ['value' => 'Blood pressure and heart rate monitoring'],
            ['value' => 'Lifestyle modifications including stress management and heart-healthy diet'],
            ['value' => 'Long-term cardiology follow-up and preventive care'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke or blood clot formation'],
            ['value' => 'Heart failure or reduced heart function'],
            ['value' => 'Sudden cardiac arrest in severe arrhythmias'],
            ['value' => 'Reduced blood circulation and oxygen delivery'],
            ['value' => 'Medication-related side effects or recurrent arrhythmias'],
        ],
                'long_term_outlook' => 'The long-term outlook with antiarrhythmic therapy and rate/rhythm control is generally positive when arrhythmias are diagnosed early and managed effectively. Proper treatment can reduce symptoms, improve heart function, lower stroke risk, and enhance overall quality of life. Continuous cardiac monitoring, medication adherence, and regular specialist follow-up are important for maintaining long-term heart rhythm stability and cardiovascular health.',
                'conclusion' => '',
                'seo_title' => 'Antiarrhythmic Therapy & Rate/Rhythm Control',
                'seo_description' => 'Antiarrhythmic therapy and rate/rhythm control are treatment approaches used to manage abnormal heart rhythms (arrhythmias). These therapies help regulate the heart’s electrical activity, maintain a stable heart rhythm, control heart rate, and reduce the risk of complications such as stroke, heart failure, or sudden cardiac arrest.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
