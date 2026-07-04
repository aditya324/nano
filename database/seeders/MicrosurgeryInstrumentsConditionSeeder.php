<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrosurgeryInstrumentsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Microsurgery Instruments')],
            [
                'name' => 'Microsurgery Instruments',
                'slug' => Str::slug('Microsurgery Instruments'),
                'h1' => 'Microsurgery Instruments',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Microsurgery instruments are specialized surgical tools designed for highly precise procedures involving small blood vessels, nerves, tissues, and delicate anatomical structures. These instruments are commonly used in reconstructive surgery, hand surgery, plastic surgery, vascular surgery, nerve repair, replantation, and free flap reconstruction to achieve accurate tissue handling and improved surgical outcomes.',
                'about_more' => '',
                'overview' => 'Microsurgical procedures require advanced precision and magnification to repair structures that are often only a few millimeters in size. Microsurgery instruments include microsurgical forceps, needle holders, scissors, vessel clamps, microvascular instruments, nerve repair tools, and operating microscopes. These instruments are used in procedures such as limb salvage, finger replantation, free flap tissue transfer, facial reconstruction, and complex nerve and vascular repair. Modern microsurgical equipment improves surgical accuracy, tissue preservation, and functional recovery. Microsurgical forceps and fine precision scissors Microvascular clamps and vessel dilators Microsurgical needle holders and suturing instruments Operating microscope and magnification systems Specialized instruments for nerve and tissue reconstruction',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Microvascular and nerve repair procedures'],
            ['value' => 'Hand surgery and finger replantation'],
            ['value' => 'Free flap and reconstructive tissue transfer surgery'],
            ['value' => 'Facial and craniofacial reconstructive procedures'],
            ['value' => 'Limb salvage and complex trauma reconstruction'],
        ],
                'risks' => [
            ['value' => 'Need for high surgical precision and specialized expertise'],
            ['value' => 'Risk of vessel or nerve damage during delicate procedures'],
            ['value' => 'Prolonged surgical duration in complex reconstructions'],
            ['value' => 'Requirement for sterile microsurgical operating environments'],
            ['value' => 'Risk of flap or tissue failure if blood circulation is compromised'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Microsurgery instruments support reconstructive surgery, trauma repair, burn reconstruction, free flap transfer, vascular surgery, nerve reconstruction, and organ or tissue preservation procedures. These tools help surgeons restore movement, sensation, circulation, and cosmetic appearance in complex surgical cases.'],
            ['value' => 'Intensive postoperative monitoring of blood circulation and tissue viability'],
            ['value' => 'Physiotherapy and rehabilitation for functional recovery'],
            ['value' => 'Wound care and infection prevention management'],
            ['value' => 'Long-term reconstructive follow-up and scar management'],
            ['value' => 'Continuous monitoring for nerve and vascular healing progress'],
        ],
                'recovery' => 'The long-term outlook with advanced microsurgery instruments is highly positive because these specialized tools enable precise reconstructive procedures with improved functional and cosmetic outcomes. Continuous advancements in microsurgical technology, magnification systems, and reconstructive techniques significantly improve surgical success rates, tissue preservation, and long-term patient recovery. _________________________________ 163. Skin Grafting / Flap Surgery Instruments Skin Grafting / Flap Surgery Instruments Equipment',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Microsurgery Instruments',
                'meta_description' => 'Microsurgery instruments are specialized surgical tools designed for highly precise procedures involving small blood vessels, nerves, tissues, and delicate anat',
                'meta_keywords' => '',
            ]
        );
    }
}
