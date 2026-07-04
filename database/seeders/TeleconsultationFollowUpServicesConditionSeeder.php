<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleconsultationFollowUpServicesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Teleconsultation & Follow-Up Services')],
            [
                'name' => 'Teleconsultation & Follow-Up Services',
                'slug' => Str::slug('Teleconsultation & Follow-Up Services'),
                'h1' => 'Teleconsultation & Follow-Up Services',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Teleconsultation and follow-up services provide remote healthcare support through secure digital communication platforms, allowing patients to consult specialists, receive postoperative guidance, monitor recovery, and continue long-term treatment without frequent hospital visits. These services improve accessibility, continuity of care, patient convenience, and timely medical support.',
                'about_more' => '',
                'overview' => 'Teleconsultation services are widely used in oral and maxillofacial surgery, cosmetic and reconstructive care, postoperative rehabilitation, wound management, orthodontic follow-up, and chronic condition monitoring. Through video consultations, digital imaging review, electronic medical records, and remote communication systems, healthcare professionals can assess recovery progress, guide rehabilitation, review symptoms, provide medication advice, and coordinate multidisciplinary care when required. Common Services Remote consultation with oral and maxillofacial specialists Postoperative wound and recovery monitoring Virtual rehabilitation and physiotherapy guidance Medication review and symptom management support Long-term follow-up for reconstructive, orthodontic, and surgical care Key Features Secure video consultation and telemedicine platforms Digital sharing of reports, scans, and imaging records Remote monitoring of surgical healing and oral function Online patient counseling and treatment guidance Multidisciplinary coordination with specialists when required',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Limited physical examination during remote consultations'],
            ['value' => 'Technical or internet connectivity issues'],
            ['value' => 'Delayed recognition of complications in complex cases'],
            ['value' => 'Need for in-person evaluation in emergencies or advanced conditions'],
            ['value' => 'Data privacy and cybersecurity considerations'],
            ['value' => 'Treatment Support'],
            ['value' => 'Follow-up after oral, maxillofacial, and reconstructive surgeries'],
            ['value' => 'Monitoring of jaw rehabilitation and physiotherapy progress'],
            ['value' => 'Oral hygiene, wound care, and scar management counseling'],
            ['value' => 'Nutritional guidance and postoperative recovery support'],
            ['value' => 'Continuous communication for long-term treatment planning and care coordination'],
        ],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => 'The long-term outlook for teleconsultation and follow-up services is highly positive because digital healthcare systems improve accessibility to specialized care, support timely medical intervention, and enhance continuity of treatment and rehabilitation. Advances in telemedicine technology and remote patient monitoring continue to improve healthcare efficiency, patient satisfaction, and long-term treatment outcomes. _____________________',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Teleconsultation & Follow-Up Services',
                'meta_description' => 'Teleconsultation and follow-up services provide remote healthcare support through secure digital communication platforms, allowing patients to consult specialis',
                'meta_keywords' => '',
            ]
        );
    }
}
