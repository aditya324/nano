<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReconstructionwithLocalRegionalFreeFlapsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Reconstruction with Local / Regional / Free Flaps')],
            [
                'name' => 'Reconstruction with Local / Regional / Free Flaps',
                'slug' => Str::slug('Reconstruction with Local / Regional / Free Flaps'),
                'h1' => 'Reconstruction with Local / Regional / Free Flaps',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Reconstruction with local, regional, and free flaps is an advanced reconstructive surgical procedure used to repair complex tissue defects caused by trauma, burns, cancer surgery, infections, congenital abnormalities, or chronic wounds. These procedures involve transferring healthy tissue such as skin, muscle, fat, bone, or blood vessels from one part of the body to another to restore function, coverage, and appearance.',
                'about_more' => '',
                'overview' => 'Local flaps use tissue adjacent to the defect while maintaining its original blood supply. Regional flaps transfer tissue from a nearby area with an intact vascular connection. Free flaps involve microsurgical transfer of tissue from a distant body site along with reconnection of blood vessels using microsurgery techniques. These reconstructive methods are commonly used in oral and maxillofacial surgery, trauma reconstruction, burn care, limb salvage, head and neck cancer reconstruction, and chronic wound management.',
                'symptoms' => [
            ['value' => 'Tissue loss or exposed bone, tendons, or vital structures'],
            ['value' => 'Non-healing wounds or severe soft tissue defects'],
            ['value' => 'Facial or limb deformity after trauma or surgery'],
            ['value' => 'Functional impairment affecting speech, chewing, movement, or appearance'],
            ['value' => 'Chronic wounds, burns, or post-tumor surgical defects'],
        ],
                'causes' => [
            ['value' => 'Trauma, crush injuries, or severe soft tissue damage'],
            ['value' => 'Surgical removal of tumors or infected tissue'],
            ['value' => 'Burns, chronic wounds, or radiation-related tissue loss'],
            ['value' => 'Congenital deformities requiring tissue reconstruction'],
            ['value' => 'Vascular compromise or complex reconstructive needs'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Flap failure due to compromised blood circulation'],
            ['value' => 'Bleeding, swelling, or tissue necrosis'],
            ['value' => 'Donor site complications or scarring'],
            ['value' => 'Need for revision surgery or prolonged rehabilitation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical assessment and reconstructive surgical planning'],
            ['value' => 'Local flap reconstruction for smaller nearby defects'],
            ['value' => 'Regional flap transfer for moderate tissue coverage needs'],
            ['value' => 'Free flap microsurgical reconstruction for complex large defects'],
            ['value' => 'Long-term wound care, physiotherapy, rehabilitation, and reconstructive follow-up support'],
        ],
                'recovery' => 'The long-term outlook for flap reconstruction procedures is generally very positive because modern reconstructive and microsurgical techniques significantly improve tissue healing, functional recovery, cosmetic appearance, and quality of life. Early intervention, careful postoperative monitoring, physiotherapy, rehabilitation, and continuous follow-up are important for maintaining successful long-term reconstructive outcomes. _____________________ 10. Treatment of Osteomyelitis & Jaw Infections Treatment of Osteomyelitis & Jaw Infections Procedures',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Reconstruction with Local / Regional / Free Flaps',
                'meta_description' => 'Reconstruction with local, regional, and free flaps is an advanced reconstructive surgical procedure used to repair complex tissue defects caused by trauma, bur',
                'meta_keywords' => '',
            ]
        );
    }
}
