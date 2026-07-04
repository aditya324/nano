<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaImagingProtocolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trauma Imaging Protocols')],
            [
                'name' => 'Trauma Imaging Protocols',
                'slug' => Str::slug('Trauma Imaging Protocols'),
                'h1' => 'Trauma Imaging Protocols',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trauma imaging protocols are specialized emergency diagnostic procedures used to rapidly evaluate injuries affecting the head, chest, abdomen, spine, blood vessels, bones, and internal organs after trauma or accidents. Imaging techniques such as Whole Body CT and FAST (Focused Assessment with Sonography for Trauma) scans help healthcare professionals quickly identify life-threatening injuries and guide emergency treatment.',
                'about_more' => '',
                'overview' => 'Whole Body CT scanning provides detailed cross-sectional imaging of multiple body regions in trauma patients, allowing rapid detection of fractures, internal bleeding, organ injury, and vascular damage. FAST scan is a rapid bedside ultrasound procedure used in emergency settings to detect internal bleeding or fluid accumulation in the abdomen, chest, or around the heart. These imaging protocols are widely used in trauma centers and emergency departments for quick assessment and stabilization of critically injured patients.',
                'symptoms' => [
            ['value' => 'Severe pain or multiple injuries after trauma'],
            ['value' => 'Loss of consciousness or neurological symptoms'],
            ['value' => 'Chest pain, breathing difficulty, or abdominal pain'],
            ['value' => 'Swelling, bleeding, or suspected fractures'],
            ['value' => 'Signs of shock, dizziness, or internal injury'],
        ],
                'causes' => [
            ['value' => 'Detection of internal bleeding and organ injuries'],
            ['value' => 'Evaluation of fractures, spinal injuries, and trauma-related complications'],
            ['value' => 'Rapid assessment of head, chest, abdominal, and pelvic injuries'],
            ['value' => 'Emergency evaluation after road traffic accidents or falls'],
            ['value' => 'Monitoring trauma severity and guiding emergency treatment decisions'],
        ],
                'risks' => [
            ['value' => 'Exposure to radiation during CT imaging'],
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Temporary discomfort during emergency imaging procedures'],
            ['value' => 'Need for additional imaging or surgical evaluation in severe trauma'],
            ['value' => 'Rare complications related to contrast use or patient instability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Trauma imaging protocols support rapid diagnosis, emergency stabilization, surgical planning, and critical care management in trauma patients. These procedures help healthcare professionals identify life-threatening conditions quickly, prioritize treatment, and improve survival and recovery outcomes.'],
            ['value' => 'Continuous monitoring in emergency or critical care settings'],
            ['value' => 'Follow-up imaging or surgical evaluation when required'],
            ['value' => 'Hydration may be advised after contrast-enhanced CT scans'],
            ['value' => 'Ongoing trauma care, rehabilitation, and specialist follow-up may be needed'],
            ['value' => 'Patients should report worsening pain, breathing difficulty, or neurological symptoms promptly'],
        ],
                'recovery' => 'The long-term outlook with trauma imaging protocols is generally very positive because rapid and accurate imaging evaluation supports early diagnosis and timely emergency treatment. Prompt trauma assessment, appropriate medical care, rehabilitation, and long-term follow-up can significantly improve recovery outcomes and reduce the risk of serious complications. _________________________ 18. Follow-Up & Monitoring Imaging in Oncology Follow-Up & Monitoring Imaging in Oncology Procedures',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Trauma Imaging Protocols',
                'meta_description' => 'Trauma imaging protocols are specialized emergency diagnostic procedures used to rapidly evaluate injuries affecting the head, chest, abdomen, spine, blood vess',
                'meta_keywords' => '',
            ]
        );
    }
}
