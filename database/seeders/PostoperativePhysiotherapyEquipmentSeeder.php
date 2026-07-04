<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativePhysiotherapyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Postoperative Physiotherapy Equipment')],
            [
                'title' => 'Postoperative Physiotherapy Equipment',
                'slug' => Str::slug('Postoperative Physiotherapy Equipment'),
                'introduction' => 'Postoperative physiotherapy equipment includes specialized rehabilitation devices and therapeutic systems used to restore mobility, muscle strength, joint function, coordination, and physical independence after surgery, trauma, reconstructive procedures, or prolonged illness. These systems support faster recovery, pain reduction, and improved long-term functional outcomes.',
                'what_is' => 'Physiotherapy equipment is widely used in oral and maxillofacial rehabilitation, orthopedic recovery, burn care, neurological rehabilitation, postoperative jaw therapy, limb reconstruction, and general surgical recovery programs. These devices assist with muscle strengthening, mobility training, range-of-motion exercises, pain management, gait rehabilitation, and functional recovery. Modern rehabilitation equipment helps improve patient comfort, reduce stiffness, prevent complications, and enhance quality of life after surgery. Exercise therapy and resistance training equipment Jaw rehabilitation and mouth-opening exercise devices Electrotherapy, ultrasound therapy, and pain relief systems Parallel bars, walkers, balance boards, and gait training equipment Stretching, mobility, and range-of-motion rehabilitation devices',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Rehabilitation after jaw, facial, and reconstructive surgeries'],
            ['value' => 'Post-trauma and orthopedic recovery programs'],
            ['value' => 'Muscle strengthening and mobility restoration'],
            ['value' => 'Pain management and joint movement rehabilitation'],
            ['value' => 'Functional recovery after burns, fractures, or prolonged immobilization'],
        ],
                'condition_risks' => [
            ['value' => 'Incorrect use leading to strain or delayed recovery'],
            ['value' => 'Need for supervised rehabilitation and patient compliance'],
            ['value' => 'Equipment maintenance and calibration requirements'],
            ['value' => 'Risk of falls or reinjury during mobility training'],
            ['value' => 'Requirement for individualized rehabilitation planning and monitoring'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Postoperative physiotherapy equipment supports rehabilitation after oral and maxillofacial surgery, TMJ procedures, orthognathic surgery, facial trauma reconstruction, orthopedic surgery, burn reconstruction, neurological recovery, and long-term mobility rehabilitation. These systems improve flexibility, muscle coordination, pain control, and overall physical recovery outcomes.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of mobility, strength, and rehabilitation progress'],
            ['value' => 'Gradual increase in exercise intensity based on recovery status'],
            ['value' => 'Cleaning and maintenance of physiotherapy equipment'],
            ['value' => 'Pain management and supervised rehabilitation support'],
            ['value' => 'Long-term physiotherapy follow-up and functional assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Incorrect use leading to strain or delayed recovery'],
            ['value' => 'Need for supervised rehabilitation and patient compliance'],
            ['value' => 'Equipment maintenance and calibration requirements'],
            ['value' => 'Risk of falls or reinjury during mobility training'],
            ['value' => 'Requirement for individualized rehabilitation planning and monitoring'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced postoperative physiotherapy equipment is highly positive because structured rehabilitation significantly improves mobility, muscle strength, flexibility, joint function, and overall quality of life after surgery or injury. Continuous advancements in rehabilitation technology, digital monitoring systems, and physiotherapy techniques continue to enhance patient recovery, independence, and long-term functional outcomes.',
                'conclusion' => '',
                'seo_title' => 'Postoperative Physiotherapy Equipment',
                'seo_description' => 'Postoperative physiotherapy equipment includes specialized rehabilitation devices and therapeutic systems used to restore mobility, muscle strength, joint function, coordination, and physical independence after surgery, trauma, reconstructive procedures, or prolonged illness. These systems support faster recovery, pain reduction, and improved long-term functional outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
