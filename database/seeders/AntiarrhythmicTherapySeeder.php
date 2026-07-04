<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiarrhythmicTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiarrhythmic Therapy')],
            [
                'title' => 'Antiarrhythmic Therapy',
                'slug' => Str::slug('Antiarrhythmic Therapy'),
                'introduction' => 'Antiarrhythmic therapy is a specialized cardiac treatment procedure used to manage abnormal heart rhythms by restoring normal electrical activity and stabilizing heart function. This therapy involves the use of medications and supportive cardiac interventions to control rapid, slow, or irregular heartbeats associated with various arrhythmias. Antiarrhythmic therapy plays an important role in emergency cardiac care, intensive care management, and long-term rhythm control in patients with cardiovascular disorders.',
                'what_is' => 'Antiarrhythmic therapy is commonly used in patients with atrial fibrillation, ventricular tachycardia, supraventricular tachycardia, bradyarrhythmias, and other rhythm disturbances that may affect blood circulation and heart function. Treatment may involve intravenous or oral antiarrhythmic medications administered under continuous cardiac monitoring. In emergency settings, therapy may be combined with defibrillation, cardioversion, pacemaker support, or advanced cardiac life support protocols. These procedures are commonly performed in emergency departments, intensive care units, cardiac care units, and electrophysiology centers.',
                'symptoms' => [
            ['value' => 'Rapid, slow, or irregular heartbeat'],
            ['value' => 'Palpitations or fluttering sensation in the chest'],
            ['value' => 'Chest pain, dizziness, or fainting episodes'],
            ['value' => 'Shortness of breath or reduced exercise tolerance'],
            ['value' => 'Sudden weakness, fatigue, or circulatory instability'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Development of new or worsening arrhythmias'],
            ['value' => 'Low blood pressure or reduced cardiac output'],
            ['value' => 'Medication-related side effects affecting liver, lungs, or thyroid function'],
            ['value' => 'Electrolyte imbalance or cardiac conduction abnormalities'],
            ['value' => 'Increased risk of cardiac arrest in severe rhythm disturbances'],
            ['value' => 'Treatment Options'],
            ['value' => 'Antiarrhythmic therapy focuses on stabilizing heart rhythm, improving cardiac function, and preventing complications associated with arrhythmias. Management may include intravenous or oral antiarrhythmic medications, cardiac monitoring, electrolyte correction, oxygen therapy, anticoagulation therapy, cardioversion, pacemaker implantation, catheter ablation, or implantable cardioverter-defibrillator (ICD) placement when required. Patients may also receive treatment for underlying cardiac diseases, lifestyle modification guidance, stress management, cardiac rehabilitation, and long-term cardiology follow-up to optimize rhythm control and reduce recurrence risk.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous ECG and cardiac rhythm monitoring'],
            ['value' => 'Monitoring for medication side effects or arrhythmia recurrence'],
            ['value' => 'Regular blood pressure and electrolyte evaluation'],
            ['value' => 'Medication adjustment and cardiology follow-up consultations'],
            ['value' => 'Long-term cardiac rehabilitation and lifestyle modification support'],
        ],
                'surgery_risks' => [
            ['value' => 'Development of new or worsening arrhythmias'],
            ['value' => 'Low blood pressure or reduced cardiac output'],
            ['value' => 'Medication-related side effects affecting liver, lungs, or thyroid function'],
            ['value' => 'Electrolyte imbalance or cardiac conduction abnormalities'],
            ['value' => 'Increased risk of cardiac arrest in severe rhythm disturbances'],
            ['value' => 'Treatment Options'],
            ['value' => 'Antiarrhythmic therapy focuses on stabilizing heart rhythm, improving cardiac function, and preventing complications associated with arrhythmias. Management may include intravenous or oral antiarrhythmic medications, cardiac monitoring, electrolyte correction, oxygen therapy, anticoagulation therapy, cardioversion, pacemaker implantation, catheter ablation, or implantable cardioverter-defibrillator (ICD) placement when required. Patients may also receive treatment for underlying cardiac diseases, lifestyle modification guidance, stress management, cardiac rehabilitation, and long-term cardiology follow-up to optimize rhythm control and reduce recurrence risk.'],
        ],
                'long_term_outlook' => 'The long-term outlook following antiarrhythmic therapy depends on the underlying heart condition, severity of arrhythmia, response to treatment, and overall cardiovascular health. Early diagnosis, medication adherence, cardiac monitoring, healthy lifestyle habits, regular exercise, and ongoing cardiology follow-up significantly help improve heart rhythm stability, reduce complications, prevent recurrent arrhythmias, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Antiarrhythmic Therapy',
                'seo_description' => 'Antiarrhythmic therapy is a specialized cardiac treatment procedure used to manage abnormal heart rhythms by restoring normal electrical activity and stabilizing heart function. This therapy involves the use of medications and supportive cardiac interventions to control rapid, slow, or irregular heartbeats associated with various arrhythmias. Antiarrhythmic therapy plays an important role in emergency cardiac care, intensive care management, and long-term rhythm control in patients with cardiovascular disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
