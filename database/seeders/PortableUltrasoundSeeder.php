<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortableUltrasoundSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Portable Ultrasound')],
            [
                'title' => 'Portable Ultrasound',
                'slug' => Str::slug('Portable Ultrasound'),
                'introduction' => 'Portable ultrasound is a compact and mobile imaging technology that uses high-frequency sound waves to create real-time images of internal organs, tissues, blood vessels, and body structures. It allows healthcare providers to perform rapid bedside diagnostic evaluations safely and efficiently in various clinical settings without exposing patients to radiation.',
                'what_is' => 'Portable ultrasound systems are widely used in emergency departments, intensive care units (ICUs), outpatient clinics, hospital wards, ambulances, operation theaters, and critical care settings. These devices help evaluate abdominal organs, heart function, fluid accumulation, blood flow, pregnancy-related conditions, vascular abnormalities, and soft tissue disorders. Portable ultrasound enables fast bedside assessment, quicker clinical decision-making, improved patient monitoring, and immediate support in critically ill or immobile patients. The procedure is non-invasive, painless, and highly effective for emergency and routine medical evaluations.',
                'symptoms' => [
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Shortness of breath or suspected fluid accumulation'],
            ['value' => 'Suspected organ or vascular abnormalities'],
            ['value' => 'Pregnancy-related evaluation and fetal monitoring needs'],
            ['value' => 'Critical illness requiring bedside imaging assessment'],
        ],
                'causes' => [
            ['value' => 'Liver, kidney, gallbladder, or abdominal disorders'],
            ['value' => 'Heart disease or fluid accumulation around the lungs or heart'],
            ['value' => 'Blood vessel abnormalities or circulation-related conditions'],
            ['value' => 'Pregnancy-related complications or fetal assessment requirements'],
            ['value' => 'Trauma, infection, or critical illness requiring rapid bedside diagnosis'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis without timely imaging evaluation'],
            ['value' => 'Missed detection of internal abnormalities or fluid collections'],
            ['value' => 'Reduced bedside diagnostic capability in critically ill patients'],
            ['value' => 'Delayed emergency treatment decisions'],
            ['value' => 'Increased complications due to lack of rapid assessment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Portable ultrasound supports accurate diagnosis, bedside monitoring, emergency assessment, and treatment planning across a wide range of medical conditions. Findings from portable ultrasound help guide fluid management, cardiac care, abdominal evaluation, vascular assessment, pregnancy monitoring, and emergency medical intervention. Depending on the results, treatment may include medications, drainage procedures, surgical evaluation, specialist referral, intensive care support, rehabilitation, or additional imaging studies. Patients may also benefit from preventive health screening, chronic disease monitoring, and long-term medical follow-up to optimize overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Review and interpretation of ultrasound findings'],
            ['value' => 'Repeat imaging and bedside monitoring when required'],
            ['value' => 'Further diagnostic testing if abnormalities are detected'],
            ['value' => 'Coordination with specialist care and treatment planning'],
            ['value' => 'Ongoing patient monitoring and follow-up evaluation'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis without timely imaging evaluation'],
            ['value' => 'Missed detection of internal abnormalities or fluid collections'],
            ['value' => 'Reduced bedside diagnostic capability in critically ill patients'],
            ['value' => 'Delayed emergency treatment decisions'],
            ['value' => 'Increased complications due to lack of rapid assessment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Portable ultrasound supports accurate diagnosis, bedside monitoring, emergency assessment, and treatment planning across a wide range of medical conditions. Findings from portable ultrasound help guide fluid management, cardiac care, abdominal evaluation, vascular assessment, pregnancy monitoring, and emergency medical intervention. Depending on the results, treatment may include medications, drainage procedures, surgical evaluation, specialist referral, intensive care support, rehabilitation, or additional imaging studies. Patients may also benefit from preventive health screening, chronic disease monitoring, and long-term medical follow-up to optimize overall health outcomes.'],
        ],
                'long_term_outlook' => 'Portable ultrasound plays an important role in modern bedside diagnostics, emergency medicine, and critical care management. Rapid access to imaging significantly improves diagnostic accuracy, treatment planning, patient safety, and emergency response. Timely bedside assessment, continuous monitoring, preventive healthcare, and appropriate medical follow-up help support faster clinical decision-making, reduce complications, preserve organ function, and improve overall healthcare outcomes and patient well-being.',
                'conclusion' => '',
                'seo_title' => 'Portable Ultrasound',
                'seo_description' => 'Portable ultrasound is a compact and mobile imaging technology that uses high-frequency sound waves to create real-time images of internal organs, tissues, blood vessels, and body structures. It allows healthcare providers to perform rapid bedside diagnostic evaluations safely and efficiently in various clinical settings without exposing patients to radiation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
