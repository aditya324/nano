<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DopplerUltrasoundConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Doppler Ultrasound')],
            [
                'name' => 'Doppler Ultrasound',
                'slug' => Str::slug('Doppler Ultrasound'),
                'h1' => 'Doppler Ultrasound',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Doppler ultrasound is a specialized imaging procedure that uses sound waves to evaluate blood flow through arteries and veins. It helps healthcare professionals assess circulation, detect blockages, identify blood clots, and evaluate vascular disorders affecting peripheral and carotid blood vessels.',
                'about_more' => '',
                'overview' => 'Peripheral Doppler ultrasound is commonly used to assess blood flow in the arms and legs, while carotid Doppler ultrasound evaluates the carotid arteries supplying blood to the brain. This noninvasive procedure helps diagnose conditions such as peripheral vascular disease, arterial narrowing, thrombosis, carotid artery stenosis, and circulation-related complications. Doppler ultrasound provides real-time imaging of blood flow patterns without the use of radiation.',
                'symptoms' => [
            ['value' => 'Leg pain, swelling, or cramping'],
            ['value' => 'Numbness or coldness in the limbs'],
            ['value' => 'Dizziness, fainting, or stroke-like symptoms'],
            ['value' => 'Weak pulse or circulation problems'],
            ['value' => 'Skin discoloration or non-healing wounds'],
        ],
                'causes' => [
            ['value' => 'Detection of blood clots or thrombosis'],
            ['value' => 'Evaluation of carotid artery narrowing or blockage'],
            ['value' => 'Assessment of peripheral vascular disease'],
            ['value' => 'Monitoring blood flow after vascular surgery or procedures'],
            ['value' => 'Evaluation of circulation problems and vascular abnormalities'],
        ],
                'risks' => [
            ['value' => 'Minimal discomfort during the examination'],
            ['value' => 'Temporary pressure sensation from the ultrasound probe'],
            ['value' => 'Rare need for additional imaging if results are unclear'],
            ['value' => 'Limited evaluation in severe obesity or deep vessel conditions'],
            ['value' => 'No radiation exposure or major procedural risks'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Doppler ultrasound supports diagnosis, vascular treatment planning, circulation monitoring, and long-term follow-up care. It is commonly used in cardiology, vascular surgery, neurology, and emergency medicine to guide medical management and evaluate blood vessel health.'],
            ['value' => 'Most individuals can resume normal activities immediately'],
            ['value' => 'Follow-up vascular evaluation may be recommended if abnormalities are detected'],
            ['value' => 'Patients should discuss results with their healthcare provider'],
            ['value' => 'Lifestyle modification and medication may be advised for vascular disease'],
            ['value' => 'Regular monitoring may be required in chronic vascular conditions'],
        ],
                'recovery' => 'The long-term outlook with Doppler ultrasound evaluation is generally very positive because early detection of vascular abnormalities helps prevent serious complications such as stroke, blood clots, and circulation problems. Regular vascular monitoring, healthy lifestyle habits, and timely medical care are important for maintaining long-term vascular health and circulation. ____________________________ 7. Interventional Radiology Procedures (Biopsy, Drainage, Stenting) Interventional Radiology Procedures (Biopsy, Drainage & Stenting) Procedures',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Doppler Ultrasound',
                'meta_description' => 'Doppler ultrasound is a specialized imaging procedure that uses sound waves to evaluate blood flow through arteries and veins. It helps healthcare professionals',
                'meta_keywords' => '',
            ]
        );
    }
}
