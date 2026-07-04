<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinGraftingFlapSurgeryInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Grafting / Flap Surgery Instruments')],
            [
                'title' => 'Skin Grafting / Flap Surgery Instruments',
                'slug' => Str::slug('Skin Grafting / Flap Surgery Instruments'),
                'introduction' => 'Skin grafting and flap surgery instruments are specialized surgical tools and equipment used in reconstructive procedures to repair skin loss, soft tissue defects, burns, traumatic injuries, chronic wounds, and post-surgical tissue damage. These instruments help surgeons perform precise tissue handling, graft harvesting, flap elevation, microsurgical repair, and wound reconstruction safely and effectively.',
                'what_is' => 'Skin grafting and flap reconstruction procedures require advanced surgical instruments for tissue preparation, graft harvesting, flap transfer, wound closure, and microsurgical reconstruction. Commonly used equipment includes dermatomes, skin graft meshers, microsurgical instruments, flap retractors, electrosurgical devices, suction systems, and specialized wound closure tools. These instruments support reconstructive procedures such as split-thickness grafts, full-thickness grafts, local flaps, regional flaps, and free flap microsurgery. Dermatomes for harvesting skin grafts Skin graft meshers and graft expansion devices Microsurgical instruments for flap and vascular repair Electrocautery and precision tissue handling instruments Specialized retractors, suturing, and wound closure tools',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Burn wound reconstruction and skin coverage procedures'],
            ['value' => 'Chronic wound and ulcer reconstruction surgeries'],
            ['value' => 'Trauma-related soft tissue repair and reconstruction'],
            ['value' => 'Free flap and microsurgical tissue transfer procedures'],
            ['value' => 'Reconstructive surgery after tumor removal or tissue loss'],
        ],
                'condition_risks' => [
            ['value' => 'Need for precise tissue handling during reconstructive surgery'],
            ['value' => 'Risk of graft or flap damage during harvesting and transfer'],
            ['value' => 'Prolonged operative time in complex reconstructions'],
            ['value' => 'Requirement for sterile operating conditions and infection control'],
            ['value' => 'Risk of bleeding, tissue necrosis, or flap failure in advanced cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Skin grafting and flap surgery instruments support reconstructive plastic surgery, burn management, trauma reconstruction, limb salvage, chronic wound closure, scar revision, and microsurgical tissue transfer procedures. These instruments help improve wound healing, restore tissue function, and enhance cosmetic outcomes.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring graft or flap viability and blood circulation'],
            ['value' => 'Regular wound dressing changes and infection prevention'],
            ['value' => 'Pain management and fluid balance monitoring'],
            ['value' => 'Physiotherapy and rehabilitation to improve mobility and function'],
            ['value' => 'Long-term scar management and follow-up care support'],
        ],
                'surgery_risks' => [
            ['value' => 'Need for precise tissue handling during reconstructive surgery'],
            ['value' => 'Risk of graft or flap damage during harvesting and transfer'],
            ['value' => 'Prolonged operative time in complex reconstructions'],
            ['value' => 'Requirement for sterile operating conditions and infection control'],
            ['value' => 'Risk of bleeding, tissue necrosis, or flap failure in advanced cases'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced skin grafting and flap surgery instruments is highly positive because these specialized tools improve surgical precision, graft survival, wound healing, and reconstructive outcomes. Continuous advancements in reconstructive surgical technology and microsurgical techniques significantly improve patient recovery, functional restoration, and long-term cosmetic results.',
                'conclusion' => '',
                'seo_title' => 'Skin Grafting / Flap Surgery Instruments',
                'seo_description' => 'Skin grafting and flap surgery instruments are specialized surgical tools and equipment used in reconstructive procedures to repair skin loss, soft tissue defects, burns, traumatic injuries, chronic wounds, and post-surgical tissue damage. These instruments help surgeons perform precise tissue handling, graft harvesting, flap elevation, microsurgical repair, and wound reconstruction safely and effectively.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
