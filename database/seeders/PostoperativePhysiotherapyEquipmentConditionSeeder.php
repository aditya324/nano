<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativePhysiotherapyEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Postoperative Physiotherapy Equipment')],
            [
                'name' => 'Postoperative Physiotherapy Equipment',
                'slug' => Str::slug('Postoperative Physiotherapy Equipment'),
                'h1' => 'Postoperative Physiotherapy Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Postoperative physiotherapy equipment includes specialized rehabilitation devices and therapeutic systems used to restore mobility, muscle strength, joint function, coordination, and physical independence after surgery, trauma, reconstructive procedures, or prolonged illness. These systems support faster recovery, pain reduction, and improved long-term functional outcomes.',
                'about_more' => '',
                'overview' => 'Physiotherapy equipment is widely used in oral and maxillofacial rehabilitation, orthopedic recovery, burn care, neurological rehabilitation, postoperative jaw therapy, limb reconstruction, and general surgical recovery programs. These devices assist with muscle strengthening, mobility training, range-of-motion exercises, pain management, gait rehabilitation, and functional recovery. Modern rehabilitation equipment helps improve patient comfort, reduce stiffness, prevent complications, and enhance quality of life after surgery. Exercise therapy and resistance training equipment Jaw rehabilitation and mouth-opening exercise devices Electrotherapy, ultrasound therapy, and pain relief systems Parallel bars, walkers, balance boards, and gait training equipment Stretching, mobility, and range-of-motion rehabilitation devices',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Rehabilitation after jaw, facial, and reconstructive surgeries'],
            ['value' => 'Post-trauma and orthopedic recovery programs'],
            ['value' => 'Muscle strengthening and mobility restoration'],
            ['value' => 'Pain management and joint movement rehabilitation'],
            ['value' => 'Functional recovery after burns, fractures, or prolonged immobilization'],
        ],
                'risks' => [
            ['value' => 'Incorrect use leading to strain or delayed recovery'],
            ['value' => 'Need for supervised rehabilitation and patient compliance'],
            ['value' => 'Equipment maintenance and calibration requirements'],
            ['value' => 'Risk of falls or reinjury during mobility training'],
            ['value' => 'Requirement for individualized rehabilitation planning and monitoring'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Postoperative physiotherapy equipment supports rehabilitation after oral and maxillofacial surgery, TMJ procedures, orthognathic surgery, facial trauma reconstruction, orthopedic surgery, burn reconstruction, neurological recovery, and long-term mobility rehabilitation. These systems improve flexibility, muscle coordination, pain control, and overall physical recovery outcomes.'],
            ['value' => 'Regular monitoring of mobility, strength, and rehabilitation progress'],
            ['value' => 'Gradual increase in exercise intensity based on recovery status'],
            ['value' => 'Cleaning and maintenance of physiotherapy equipment'],
            ['value' => 'Pain management and supervised rehabilitation support'],
            ['value' => 'Long-term physiotherapy follow-up and functional assessment'],
        ],
                'recovery' => 'The long-term outlook with advanced postoperative physiotherapy equipment is highly positive because structured rehabilitation significantly improves mobility, muscle strength, flexibility, joint function, and overall quality of life after surgery or injury. Continuous advancements in rehabilitation technology, digital monitoring systems, and physiotherapy techniques continue to enhance patient recovery, independence, and long-term functional outcomes. ______________ 180. Teleconsultation / Virtual Planning Systems Teleconsultation / Virtual Planning Systems Equipment',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Postoperative Physiotherapy Equipment',
                'meta_description' => 'Postoperative physiotherapy equipment includes specialized rehabilitation devices and therapeutic systems used to restore mobility, muscle strength, joint funct',
                'meta_keywords' => '',
            ]
        );
    }
}
