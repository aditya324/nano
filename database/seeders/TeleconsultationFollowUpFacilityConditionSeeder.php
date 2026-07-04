<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleconsultationFollowUpFacilityConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Teleconsultation / Follow-Up Facility')],
            [
                'name' => 'Teleconsultation / Follow-Up Facility',
                'slug' => Str::slug('Teleconsultation / Follow-Up Facility'),
                'h1' => 'Teleconsultation / Follow-Up Facility',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A teleconsultation and follow-up facility is a digital healthcare infrastructure setup designed to provide remote medical consultations, postoperative monitoring, rehabilitation guidance, and long-term patient follow-up through secure virtual communication platforms. These facilities improve accessibility to healthcare services, continuity of treatment, and patient convenience while supporting timely medical care and recovery monitoring.',
                'about_more' => '',
                'overview' => 'Teleconsultation facilities use secure video conferencing systems, electronic medical records, digital imaging access, remote monitoring tools, and communication platforms to connect patients with healthcare professionals. These services are widely used for cosmetic and reconstructive surgery follow-up, burn care, chronic wound management, rehabilitation support, postoperative monitoring, and multidisciplinary specialist consultations. Remote healthcare systems help reduce travel burden, improve follow-up compliance, and enable continuous medical supervision for patients recovering at home. High-quality video conferencing and telemedicine platforms Electronic medical records and digital reporting systems Secure image sharing and remote diagnostic review tools Remote patient monitoring and follow-up management software Data security, privacy protection, and communication infrastructure',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Secure video consultation and communication systems'],
            ['value' => 'Digital patient record and electronic medical documentation access'],
            ['value' => 'Remote wound assessment and postoperative monitoring support'],
            ['value' => 'Tele-rehabilitation and physiotherapy guidance facilities'],
            ['value' => 'Multidisciplinary virtual consultation coordination systems'],
        ],
                'risks' => [
            ['value' => 'Limited physical examination during remote consultations'],
            ['value' => 'Technical or internet connectivity interruptions'],
            ['value' => 'Delayed identification of complications in complex cases'],
            ['value' => 'Data privacy and cybersecurity concerns'],
            ['value' => 'Requirement for in-person evaluation when necessary'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Remote postoperative follow-up and recovery monitoring'],
            ['value' => 'Virtual wound care guidance and rehabilitation support'],
            ['value' => 'Tele-physiotherapy and scar management counseling'],
            ['value' => 'Medication review and symptom evaluation consultations'],
            ['value' => 'Long-term multidisciplinary follow-up and patient education services'],
        ],
                'recovery' => 'A well-established teleconsultation and follow-up facility significantly improves access to specialized healthcare, continuity of treatment, patient convenience, and long-term recovery outcomes. Advances in telemedicine technology, secure digital healthcare systems, and remote monitoring tools continue to enhance patient care quality, follow-up efficiency, and overall healthcare accessibility.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Teleconsultation / Follow-Up Facility',
                'meta_description' => 'A teleconsultation and follow-up facility is a digital healthcare infrastructure setup designed to provide remote medical consultations, postoperative monitorin',
                'meta_keywords' => '',
            ]
        );
    }
}
