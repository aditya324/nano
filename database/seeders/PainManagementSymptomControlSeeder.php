<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PainManagementSymptomControlSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pain Management & Symptom Control')],
            [
                'title' => 'Pain Management & Symptom Control',
                'slug' => Str::slug('Pain Management & Symptom Control'),
                'introduction' => 'Pain management and symptom control involve medical treatments and supportive therapies aimed at reducing pain, discomfort, and distress caused by acute or chronic illnesses. These approaches help improve physical comfort, daily functioning, emotional well-being, and overall quality of life in patients with various medical conditions.',
                'what_is' => 'Pain management and symptom control are important components of internal medicine, critical care, cancer care, post-operative recovery, palliative care, and chronic disease management. Treatment plans may include medications, physical therapy, lifestyle modifications, psychological support, and other supportive interventions tailored to the patient’s condition and symptom severity. The goal is to relieve symptoms while improving mobility, comfort, and functional independence.',
                'symptoms' => [
            ['value' => 'Acute or chronic pain'],
            ['value' => 'Fatigue or physical discomfort'],
            ['value' => 'Breathing difficulty or chest discomfort'],
            ['value' => 'Nausea, weakness, or reduced appetite'],
            ['value' => 'Anxiety, stress, or sleep disturbances related to illness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Reduced mobility and physical function'],
            ['value' => 'Emotional stress, anxiety, or depression'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Reduced quality of life due to uncontrolled symptoms'],
            ['value' => 'Increased complications from untreated pain or discomfort'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular assessment of pain levels and symptom severity'],
            ['value' => 'Medication management and dosage adjustment when required'],
            ['value' => 'Physical therapy and rehabilitation support'],
            ['value' => 'Monitoring for medication side effects or complications'],
            ['value' => 'Ongoing supportive care and multidisciplinary follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Reduced mobility and physical function'],
            ['value' => 'Emotional stress, anxiety, or depression'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Reduced quality of life due to uncontrolled symptoms'],
            ['value' => 'Increased complications from untreated pain or discomfort'],
        ],
                'long_term_outlook' => 'The long-term outlook with effective pain management and symptom control is generally positive when symptoms are identified early and treated appropriately. Proper medical care, rehabilitation, supportive therapies, and lifestyle modifications can significantly improve comfort, physical function, emotional well-being, and overall quality of life. Continuous monitoring and individualized treatment planning are important for achieving long-term symptom relief and patient-centered care.',
                'conclusion' => '',
                'seo_title' => 'Pain Management & Symptom Control',
                'seo_description' => 'Pain management and symptom control involve medical treatments and supportive therapies aimed at reducing pain, discomfort, and distress caused by acute or chronic illnesses. These approaches help improve physical comfort, daily functioning, emotional well-being, and overall quality of life in patients with various medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
