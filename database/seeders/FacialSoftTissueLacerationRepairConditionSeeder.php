<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialSoftTissueLacerationRepairConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Facial Soft Tissue Laceration Repair')],
            [
                'name' => 'Facial Soft Tissue Laceration Repair',
                'slug' => Str::slug('Facial Soft Tissue Laceration Repair'),
                'h1' => 'Facial Soft Tissue Laceration Repair',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Facial soft tissue laceration repair is a specialized surgical procedure performed to treat cuts, tears, or injuries involving the skin, muscles, nerves, blood vessels, and soft tissues of the face. The procedure focuses on restoring facial structure, function, and appearance while minimizing scarring and preventing complications.',
                'about_more' => '',
                'overview' => 'Facial lacerations may occur due to trauma, accidents, falls, sports injuries, burns, or sharp object injuries. Repair procedures involve careful cleaning of the wound, bleeding control, removal of damaged tissue when required, and precise closure using sutures or reconstructive techniques. In complex injuries, repair may also include nerve, muscle, or blood vessel reconstruction to restore facial movement and sensation. Early treatment is important to reduce infection risk and improve cosmetic and functional outcomes.',
                'symptoms' => [
            ['value' => 'Open cuts or tears involving facial soft tissues'],
            ['value' => 'Pain, swelling, or bleeding from facial wounds'],
            ['value' => 'Facial bruising or tissue loss after trauma'],
            ['value' => 'Difficulty with facial movement or expression in severe injuries'],
            ['value' => 'Visible scarring or deformity concerns'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or blunt facial trauma'],
            ['value' => 'Falls, sports injuries, or workplace accidents'],
            ['value' => 'Sharp object injuries or penetrating trauma'],
            ['value' => 'Burns or crush injuries affecting facial tissues'],
            ['value' => 'Animal bites or physical assault-related injuries'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Permanent scarring or cosmetic deformity'],
            ['value' => 'Nerve injury causing numbness or facial weakness'],
            ['value' => 'Bleeding, hematoma formation, or wound breakdown'],
            ['value' => 'Functional impairment affecting speech, eating, or facial expression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency wound cleaning and bleeding control'],
            ['value' => 'Precise suturing and layered facial soft tissue repair'],
            ['value' => 'Nerve, muscle, or vascular reconstruction procedures when required'],
            ['value' => 'Scar management and reconstructive plastic surgery support'],
            ['value' => 'Long-term wound care, rehabilitation, and cosmetic follow-up care'],
        ],
                'recovery' => 'The long-term outlook for facial soft tissue laceration repair is generally very positive with early treatment and proper wound care. Timely surgical repair, infection prevention, scar management, and regular follow-up significantly improve healing, facial appearance, and functional recovery. Continuous rehabilitation and cosmetic support may be required in complex facial injuries. _________________________ 4. Orthognathic Surgery for Jaw Realignment Orthognathic Surgery for Jaw Realignment Procedures',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Facial Soft Tissue Laceration Repair',
                'meta_description' => 'Facial soft tissue laceration repair is a specialized surgical procedure performed to treat cuts, tears, or injuries involving the skin, muscles, nerves, blood ',
                'meta_keywords' => '',
            ]
        );
    }
}
