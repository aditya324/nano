<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativeRehabilitationWoundCareSurveillanceSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Postoperative Rehabilitation, Wound Care & Surveillance')],
            [
                'title' => 'Postoperative Rehabilitation, Wound Care & Surveillance',
                'slug' => Str::slug('Postoperative Rehabilitation, Wound Care & Surveillance'),
                'introduction' => 'Postoperative rehabilitation, wound care, and surveillance are essential parts of recovery after vascular surgery or vascular interventions.',
                'what_is' => 'Proper rehabilitation and follow-up help improve healing, restore mobility, maintain blood flow, and detect complications early.',
                'symptoms' => [
            ['value' => 'Post-surgical pain'],
            ['value' => 'Swelling'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Healing wounds'],
            ['value' => 'Fatigue during recovery'],
        ],
                'causes' => [
            ['value' => 'Recovery after vascular bypass surgery'],
            ['value' => 'Endovascular procedures'],
            ['value' => 'Aneurysm repair'],
            ['value' => 'Limb salvage surgery'],
            ['value' => 'Chronic wound treatment'],
            ['value' => 'Dialysis access surgery'],
        ],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Graft blockage'],
            ['value' => 'Recurrent vascular disease'],
            ['value' => 'Reduced limb function'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Management includes physiotherapy, supervised walking programs, wound dressing care, infection prevention, vascular imaging surveillance, medication management, nutritional support, and long-term monitoring of grafts or stents.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound inspection'],
            ['value' => 'Compression therapy when advised'],
            ['value' => 'Exercise rehabilitation'],
            ['value' => 'Medication adherence'],
            ['value' => 'Routine Doppler or vascular imaging'],
            ['value' => 'Lifestyle modification and smoking cessation'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Graft blockage'],
            ['value' => 'Recurrent vascular disease'],
            ['value' => 'Reduced limb function'],
        ],
                'long_term_outlook' => 'Comprehensive postoperative rehabilitation improves circulation, functional recovery, wound healing, and long-term vascular health while reducing recurrence and complications.',
                'conclusion' => '',
                'seo_title' => 'Postoperative Rehabilitation, Wound Care & Surveillance',
                'seo_description' => 'Postoperative rehabilitation, wound care, and surveillance are essential parts of recovery after vascular surgery or vascular interventions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
