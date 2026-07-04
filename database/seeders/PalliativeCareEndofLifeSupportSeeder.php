<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PalliativeCareEndofLifeSupportSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Palliative Care & End-of-Life Support')],
            [
                'title' => 'Palliative Care & End-of-Life Support',
                'slug' => Str::slug('Palliative Care & End-of-Life Support'),
                'introduction' => 'Palliative care and end-of-life support focus on improving comfort, quality of life, and emotional well-being for individuals living with serious, chronic, or life-limiting illnesses. This specialized care approach helps manage pain, symptoms, emotional distress, and supportive needs for both patients and their families throughout advanced illness and end-of-life care.',
                'what_is' => 'Palliative care is commonly provided for patients with advanced cancer, heart failure, chronic lung disease, kidney failure, neurological disorders, and other serious medical conditions. Care plans are individualized and may include pain management, symptom control, psychological support, nutritional care, spiritual counseling, and coordination with multidisciplinary healthcare teams. End-of-life support emphasizes dignity, comfort, compassionate care, and support for patients and caregivers during advanced stages of illness.',
                'symptoms' => [
            ['value' => 'Chronic pain or severe discomfort'],
            ['value' => 'Fatigue, weakness, or reduced physical function'],
            ['value' => 'Breathing difficulty or persistent symptoms from advanced illness'],
            ['value' => 'Anxiety, depression, or emotional distress'],
            ['value' => 'Difficulty performing daily activities or reduced quality of life'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Progressive decline in physical and emotional health'],
            ['value' => 'Uncontrolled pain and distressing symptoms'],
            ['value' => 'Nutritional problems and severe weakness'],
            ['value' => 'Increased hospitalization and healthcare burden'],
            ['value' => 'Emotional stress affecting patients and family members'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous symptom assessment and comfort-focused care'],
            ['value' => 'Pain management and medication support'],
            ['value' => 'Emotional, psychological, and spiritual counseling'],
            ['value' => 'Family support and caregiver guidance'],
            ['value' => 'Ongoing multidisciplinary follow-up and hospice support when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Progressive decline in physical and emotional health'],
            ['value' => 'Uncontrolled pain and distressing symptoms'],
            ['value' => 'Nutritional problems and severe weakness'],
            ['value' => 'Increased hospitalization and healthcare burden'],
            ['value' => 'Emotional stress affecting patients and family members'],
        ],
                'long_term_outlook' => 'The long-term outlook with palliative care focuses on maximizing comfort, maintaining dignity, and improving quality of life throughout serious illness. Comprehensive supportive care can significantly reduce suffering, improve emotional well-being, and help patients and families cope with complex medical conditions. Continuous compassionate care and individualized support remain central to long-term patient-centered care.',
                'conclusion' => '',
                'seo_title' => 'Palliative Care & End-of-Life Support',
                'seo_description' => 'Palliative care and end-of-life support focus on improving comfort, quality of life, and emotional well-being for individuals living with serious, chronic, or life-limiting illnesses. This specialized care approach helps manage pain, symptoms, emotional distress, and supportive needs for both patients and their families throughout advanced illness and end-of-life care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
