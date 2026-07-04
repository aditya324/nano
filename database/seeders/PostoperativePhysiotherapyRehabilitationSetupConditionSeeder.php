<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativePhysiotherapyRehabilitationSetupConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Postoperative Physiotherapy & Rehabilitation Setup')],
            [
                'name' => 'Postoperative Physiotherapy & Rehabilitation Setup',
                'slug' => Str::slug('Postoperative Physiotherapy & Rehabilitation Setup'),
                'h1' => 'Postoperative Physiotherapy & Rehabilitation Setup',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Postoperative physiotherapy and rehabilitation setup refers to the specialized infrastructure, equipment, therapy spaces, and multidisciplinary support systems designed to help patients recover after surgery, trauma, burns, reconstructive procedures, or prolonged illness. These setups focus on restoring movement, strength, flexibility, mobility, independence, and overall functional recovery.',
                'about_more' => '',
                'overview' => 'A comprehensive rehabilitation setup includes physiotherapy treatment areas, exercise therapy units, mobility training spaces, occupational therapy support, pain management systems, and rehabilitation monitoring facilities. These centers are commonly used for recovery after orthopedic surgery, plastic and reconstructive surgery, burn treatment, neurological conditions, trauma care, hand surgery, and limb salvage procedures. Rehabilitation programs are tailored to improve physical function, prevent complications, reduce stiffness, and support long-term healing and independence. Exercise therapy and strengthening equipment Electrotherapy, ultrasound therapy, and pain management devices Parallel bars, walkers, mobility aids, and gait training systems Hand therapy and joint mobilization equipment Rehabilitation monitoring, patient assessment, and recovery tracking systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Dedicated physiotherapy and rehabilitation treatment areas'],
            ['value' => 'Mobility training and functional exercise spaces'],
            ['value' => 'Pain management and postoperative recovery support systems'],
            ['value' => 'Occupational therapy and hand rehabilitation facilities'],
            ['value' => 'Multidisciplinary rehabilitation coordination and monitoring setup'],
        ],
                'risks' => [
            ['value' => 'Delayed recovery without structured rehabilitation support'],
            ['value' => 'Joint stiffness, muscle weakness, or reduced mobility after surgery'],
            ['value' => 'Pain and limited functional recovery during rehabilitation'],
            ['value' => 'Risk of falls or reinjury during mobility training'],
            ['value' => 'Requirement for long-term therapy and patient compliance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Postoperative physiotherapy and mobility rehabilitation programs'],
            ['value' => 'Strengthening, stretching, and range-of-motion exercises'],
            ['value' => 'Pain management and functional recovery support'],
            ['value' => 'Occupational therapy and activities-of-daily-living training'],
            ['value' => 'Long-term rehabilitation monitoring and multidisciplinary follow-up care'],
        ],
                'recovery' => 'A well-equipped postoperative physiotherapy and rehabilitation setup significantly improves recovery outcomes, mobility, muscle strength, flexibility, and overall quality of life after surgery or injury. Early rehabilitation, continuous physiotherapy, patient education, and multidisciplinary support play a vital role in restoring independence and achieving successful long-term functional recovery. __________________________ 170. Teleconsultation / Follow-Up Facility Teleconsultation / Follow-Up Facility Infrastructure & Facilities',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Postoperative Physiotherapy & Rehabilitation Setup',
                'meta_description' => 'Postoperative physiotherapy and rehabilitation setup refers to the specialized infrastructure, equipment, therapy spaces, and multidisciplinary support systems ',
                'meta_keywords' => '',
            ]
        );
    }
}
