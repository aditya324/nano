<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FlapReconstructionProceduresConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Flap Reconstruction Procedures')],
            [
                'name' => 'Flap Reconstruction Procedures',
                'slug' => Str::slug('Flap Reconstruction Procedures'),
                'h1' => 'Flap Reconstruction Procedures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Local, regional, and free flap reconstruction are advanced reconstructive surgical procedures used to repair complex soft tissue defects caused by burns, trauma, cancer surgery, infections, congenital deformities, or chronic wounds. These procedures involve transferring healthy tissue with its blood supply to restore skin coverage, function, structure, and appearance.',
                'about_more' => '',
                'overview' => 'Local flap reconstruction uses nearby tissue to cover small or moderate defects, regional flap reconstruction transfers tissue from a nearby body region while maintaining its blood supply, and free flap reconstruction involves microsurgical transfer of tissue from a distant part of the body along with blood vessels. These procedures are commonly used in burn reconstruction, facial reconstruction, limb salvage, breast reconstruction, head and neck surgery, and complex wound management. Flap reconstruction helps improve healing, restore function, and achieve better cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Large soft tissue defects or tissue loss'],
            ['value' => 'Non-healing wounds or exposed underlying structures'],
            ['value' => 'Burn-related deformities or scar contractures'],
            ['value' => 'Tissue damage after trauma, infection, or tumor removal'],
            ['value' => 'Functional or cosmetic abnormalities requiring reconstruction'],
        ],
                'causes' => [
            ['value' => 'Severe burns or traumatic injuries'],
            ['value' => 'Cancer surgery resulting in tissue defects'],
            ['value' => 'Chronic wounds or infected tissue loss'],
            ['value' => 'Congenital deformities or reconstructive surgery needs'],
            ['value' => 'Poor wound healing requiring advanced tissue coverage'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Partial or complete flap failure due to reduced blood supply'],
            ['value' => 'Bleeding, swelling, or fluid collection after surgery'],
            ['value' => 'Scarring or cosmetic asymmetry'],
            ['value' => 'Need for additional reconstructive or revision procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Local flap reconstruction for smaller tissue defects'],
            ['value' => 'Regional flap procedures for moderate soft tissue coverage'],
            ['value' => 'Free flap microsurgical reconstruction for complex defects'],
            ['value' => 'Advanced wound care, physiotherapy, and rehabilitation support'],
            ['value' => 'Long-term reconstructive follow-up and scar management care'],
        ],
                'recovery' => 'The long-term outlook for flap reconstruction procedures depends on the severity of tissue loss, blood supply to the reconstructed area, and postoperative rehabilitation. Early reconstructive intervention, skilled microsurgical care, infection control, nutritional support, and regular follow-up significantly improve healing, function, and cosmetic outcomes. Continuous rehabilitation and multidisciplinary care are important for maintaining long-term recovery and quality of life. _____________________ 5. Scar Revision & Contracture Release Surgery Scar Revision & Contracture Release Surgery Procedures',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Flap Reconstruction Procedures',
                'meta_description' => 'Local, regional, and free flap reconstruction are advanced reconstructive surgical procedures used to repair complex soft tissue defects caused by burns, trauma',
                'meta_keywords' => '',
            ]
        );
    }
}
