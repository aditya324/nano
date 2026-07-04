<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleconsultationFollowUpforCosmeticReconstructiveCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care')],
            [
                'name' => 'Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care',
                'slug' => Str::slug('Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care'),
                'h1' => 'Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Teleconsultation and follow-up services for cosmetic and reconstructive care provide remote medical consultation, postoperative monitoring, treatment guidance, and rehabilitation support through secure digital communication platforms. These services help patients access specialized care conveniently while ensuring continuity of treatment, recovery monitoring, and long-term follow-up.',
                'about_more' => '',
                'overview' => 'Teleconsultation services are commonly used for cosmetic surgery planning, reconstructive surgery evaluation, postoperative wound assessment, scar monitoring, rehabilitation guidance, and long-term treatment follow-up. Through virtual consultations, healthcare professionals can review healing progress, discuss symptoms, provide medication and wound care instructions, evaluate aesthetic outcomes, and coordinate multidisciplinary rehabilitation when required. These services improve accessibility, reduce travel-related difficulties, and support timely medical care.',
                'symptoms' => [
            ['value' => 'Postoperative pain, swelling, or healing concerns'],
            ['value' => 'Scar-related symptoms or cosmetic appearance concerns'],
            ['value' => 'Wound care or dressing management questions'],
            ['value' => 'Reduced mobility or rehabilitation-related difficulties'],
            ['value' => 'Need for long-term reconstructive or cosmetic follow-up care'],
        ],
                'causes' => [
            ['value' => 'Recovery after cosmetic or reconstructive surgery'],
            ['value' => 'Long-term scar management and rehabilitation needs'],
            ['value' => 'Burn injuries, trauma, or chronic wound follow-up'],
            ['value' => 'Need for remote specialist consultation and monitoring'],
            ['value' => 'Ongoing evaluation of surgical or aesthetic outcomes'],
        ],
                'risks' => [
            ['value' => 'Delayed recognition of complications without timely follow-up'],
            ['value' => 'Communication limitations during remote assessment'],
            ['value' => 'Need for in-person evaluation in complex cases'],
            ['value' => 'Technical or connectivity-related consultation interruptions'],
            ['value' => 'Incomplete wound or physical examination through virtual platforms'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Virtual consultation for cosmetic and reconstructive evaluation'],
            ['value' => 'Remote postoperative monitoring and wound assessment'],
            ['value' => 'Scar management, physiotherapy, and rehabilitation guidance'],
            ['value' => 'Medication review and recovery-related counseling'],
            ['value' => 'Long-term follow-up planning and multidisciplinary care coordination'],
        ],
                'recovery' => 'The long-term outlook with teleconsultation and remote follow-up services is highly positive because these systems improve accessibility to specialized care, support timely postoperative monitoring, and enhance continuity of treatment and rehabilitation. Regular virtual follow-up, adherence to medical advice, proper wound care, and coordinated multidisciplinary support are important for maintaining successful long-term cosmetic and reconstructive outcomes. _______________________',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Teleconsultation & Follow-Up for Cosmetic & Reconstructive Care',
                'meta_description' => 'Teleconsultation and follow-up services for cosmetic and reconstructive care provide remote medical consultation, postoperative monitoring, treatment guidance, ',
                'meta_keywords' => '',
            ]
        );
    }
}
