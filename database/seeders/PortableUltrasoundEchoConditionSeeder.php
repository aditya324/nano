<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortableUltrasoundEchoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Portable Ultrasound / Echo')],
            [
                'name' => 'Portable Ultrasound / Echo',
                'slug' => Str::slug('Portable Ultrasound / Echo'),
                'h1' => 'Portable Ultrasound / Echo',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Portable ultrasound and echocardiography (echo) systems are advanced diagnostic imaging devices used for rapid bedside assessment of internal organs, blood vessels, heart function, and fluid status in critically ill or emergency patients. These portable imaging systems provide real-time visualization without the need to transfer patients to radiology departments, making them essential tools in emergency medicine, intensive care, cardiology, trauma care, and point-of-care diagnostics.',
                'about_more' => '',
                'overview' => 'Portable ultrasound systems use high-frequency sound waves to generate real-time images of organs, tissues, blood flow, and fluid collections within the body. Portable echocardiography devices specifically assess heart structure, cardiac function, blood circulation, valve abnormalities, and hemodynamic status. These systems are widely used in intensive care units, emergency departments, ambulances, operation theaters, cardiac care units, and bedside critical care settings for rapid diagnosis, procedural guidance, and treatment monitoring. Portable imaging improves clinical decision-making and supports timely emergency intervention in unstable patients.',
                'symptoms' => [
            ['value' => 'Chest pain, shortness of breath, or suspected cardiac abnormalities'],
            ['value' => 'Shock, trauma, or circulatory instability'],
            ['value' => 'Abdominal pain, internal bleeding, or fluid accumulation'],
            ['value' => 'Respiratory distress or pleural effusion requiring bedside evaluation'],
            ['value' => 'Critical illness requiring rapid imaging assessment and monitoring'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Limited image quality in certain critically ill or obese patients'],
            ['value' => 'Operator-dependent interpretation variability'],
            ['value' => 'Difficulty visualizing deep structures in some emergency situations'],
            ['value' => 'Need for additional advanced imaging if findings are inconclusive'],
            ['value' => 'Delayed diagnosis if equipment maintenance or calibration is inadequate'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Portable ultrasound and echo systems support rapid diagnosis, bedside monitoring, and image-guided procedures in critically ill patients. These devices assist healthcare professionals in evaluating cardiac function, detecting internal bleeding, assessing fluid status, identifying pleural or abdominal fluid collections, guiding vascular access procedures, and monitoring respiratory or circulatory conditions. Portable imaging is commonly integrated into critical care protocols, trauma resuscitation, cardiac emergency management, and point-of-care interventions to improve patient safety and treatment accuracy.'],
            ['value' => 'Continuous monitoring and repeat imaging assessments when required'],
            ['value' => 'Regular equipment maintenance and image quality evaluation'],
            ['value' => 'Follow-up diagnostic testing or specialist consultation if necessary'],
            ['value' => 'Monitoring response to treatment based on imaging findings'],
            ['value' => 'Ongoing critical care observation and multidisciplinary follow-up'],
        ],
                'recovery' => 'The long-term outlook associated with portable ultrasound and echo systems is highly positive as rapid bedside imaging significantly improves early diagnosis, emergency response, procedural safety, and critical care management. Advancements in portable imaging technology, AI-assisted interpretation, wireless connectivity, and compact ultrasound systems continue to enhance diagnostic accuracy, treatment efficiency, patient monitoring, and overall healthcare outcomes across multiple medical specialties. _________________ 79. Dialysis / CRRT Machines Dialysis / CRRT Machines Equipment',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Portable Ultrasound / Echo',
                'meta_description' => 'Portable ultrasound and echocardiography (echo) systems are advanced diagnostic imaging devices used for rapid bedside assessment of internal organs, blood vess',
                'meta_keywords' => '',
            ]
        );
    }
}
