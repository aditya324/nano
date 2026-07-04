<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExtremityLimbSalvageReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Extremity Limb Salvage & Reconstruction')],
            [
                'name' => 'Extremity Limb Salvage & Reconstruction',
                'slug' => Str::slug('Extremity Limb Salvage & Reconstruction'),
                'h1' => 'Extremity Limb Salvage & Reconstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Extremity limb salvage and reconstruction are advanced surgical and reconstructive procedures performed to preserve and restore severely injured or damaged arms and legs affected by trauma, infection, burns, vascular compromise, tumors, or complex soft tissue and bone defects. These procedures aim to maintain limb function, improve mobility, and avoid amputation whenever possible.',
                'about_more' => '',
                'overview' => 'Limb salvage and reconstruction involve a multidisciplinary approach combining orthopedic surgery, plastic and reconstructive surgery, microsurgery, vascular repair, fracture stabilization, soft tissue reconstruction, and rehabilitation. Procedures may include bone fixation, tendon and nerve repair, skin grafting, flap reconstruction, microsurgical tissue transfer, and vascular reconstruction. These treatments are commonly used in severe trauma, crush injuries, diabetic limb complications, chronic wounds, and post-tumor reconstruction cases.',
                'symptoms' => [
            ['value' => 'Severe limb pain, swelling, or deformity'],
            ['value' => 'Open fractures or extensive soft tissue damage'],
            ['value' => 'Reduced blood circulation or tissue viability'],
            ['value' => 'Loss of movement, sensation, or limb function'],
            ['value' => 'Non-healing wounds, infections, or exposed bones and tendons'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or high-impact trauma'],
            ['value' => 'Crush injuries or industrial accidents'],
            ['value' => 'Severe burns or blast injuries'],
            ['value' => 'Vascular injury or reduced blood supply to limbs'],
            ['value' => 'Chronic infection, tumors, or diabetic wound complications threatening limb survival'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Permanent functional impairment or reduced mobility'],
            ['value' => 'Nerve damage or chronic pain'],
            ['value' => 'Tissue necrosis or failure of reconstructive procedures'],
            ['value' => 'Risk of amputation in severe or untreated cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency trauma stabilization and vascular assessment'],
            ['value' => 'Bone fixation and orthopedic reconstructive procedures'],
            ['value' => 'Skin grafting, flap reconstruction, and microsurgical tissue transfer'],
            ['value' => 'Tendon, nerve, and blood vessel repair procedures'],
            ['value' => 'Long-term physiotherapy, rehabilitation, and limb function restoration support'],
        ],
                'recovery' => 'The long-term outlook for extremity limb salvage and reconstruction depends on the severity of injury, restoration of blood supply, timing of surgery, and rehabilitation support. Early surgical intervention, advanced reconstructive techniques, physiotherapy, and multidisciplinary care can significantly improve limb function, mobility, and quality of life. Continuous rehabilitation and long-term follow-up are important for maintaining independence and successful recovery. ________________________ 20. Aesthetic Surgery Procedures (Face, Body, Breasts) Aesthetic Surgery Procedures (Face, Body & Breasts) Procedures',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Extremity Limb Salvage & Reconstruction',
                'meta_description' => 'Extremity limb salvage and reconstruction are advanced surgical and reconstructive procedures performed to preserve and restore severely injured or damaged arms',
                'meta_keywords' => '',
            ]
        );
    }
}
