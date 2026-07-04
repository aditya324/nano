<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleconsultationVirtualPlanningSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Teleconsultation / Virtual Planning Systems')],
            [
                'title' => 'Teleconsultation / Virtual Planning Systems',
                'slug' => Str::slug('Teleconsultation / Virtual Planning Systems'),
                'introduction' => 'Teleconsultation and virtual planning systems are advanced digital healthcare technologies used to support remote patient consultations, treatment planning, surgical simulation, interdisciplinary collaboration, and long-term follow-up care in oral, maxillofacial, reconstructive, and craniofacial specialties. These systems improve accessibility, communication, surgical precision, and continuity of patient care.',
                'what_is' => 'Teleconsultation systems enable secure remote communication between patients and healthcare professionals through video conferencing, digital imaging, electronic medical records, and cloud-based healthcare platforms. Virtual planning systems use advanced 3D imaging, digital modeling, and surgical simulation software to assist clinicians in planning complex reconstructive, orthognathic, implant, and craniofacial procedures. These technologies improve treatment coordination, reduce planning errors, and support more accurate and predictable surgical outcomes. Secure telemedicine and video consultation platforms 3D imaging, CBCT integration, and digital planning software Virtual surgical simulation and treatment planning systems Cloud-based patient records and digital communication tools Real-time collaboration and data-sharing infrastructure',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Remote specialist consultations and postoperative follow-up care'],
            ['value' => 'Virtual surgical planning for jaw and facial reconstruction procedures'],
            ['value' => 'Orthognathic surgery and dental implant planning'],
            ['value' => 'Multidisciplinary treatment coordination and case discussions'],
            ['value' => 'Digital patient education and treatment simulation support'],
        ],
                'condition_risks' => [
            ['value' => 'Dependence on stable internet and digital infrastructure'],
            ['value' => 'Data privacy and cybersecurity concerns'],
            ['value' => 'Limited physical examination during remote consultations'],
            ['value' => 'Requirement for trained personnel and software expertise'],
            ['value' => 'High setup and maintenance costs for advanced digital systems'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Teleconsultation and virtual planning systems support oral surgery, maxillofacial reconstruction, orthognathic surgery, dental implantology, TMJ surgery, craniofacial correction, postoperative rehabilitation, and long-term multidisciplinary care. These technologies improve diagnostic accuracy, treatment coordination, surgical precision, patient accessibility, and overall clinical efficiency.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Remote monitoring of healing and rehabilitation progress'],
            ['value' => 'Virtual review of imaging, scans, and surgical outcomes'],
            ['value' => 'Online physiotherapy and postoperative guidance sessions'],
            ['value' => 'Secure digital storage and follow-up documentation management'],
            ['value' => 'Continuous communication between patients and multidisciplinary teams'],
        ],
                'surgery_risks' => [
            ['value' => 'Dependence on stable internet and digital infrastructure'],
            ['value' => 'Data privacy and cybersecurity concerns'],
            ['value' => 'Limited physical examination during remote consultations'],
            ['value' => 'Requirement for trained personnel and software expertise'],
            ['value' => 'High setup and maintenance costs for advanced digital systems'],
        ],
                'long_term_outlook' => 'The long-term outlook with teleconsultation and virtual planning systems is highly positive because modern digital healthcare technologies significantly improve accessibility, treatment planning accuracy, workflow efficiency, and patient-centered care. Continuous advancements in AI-assisted planning, cloud-based healthcare systems, virtual simulation, and telemedicine platforms continue to enhance surgical outcomes, patient satisfaction, and long-term healthcare delivery.',
                'conclusion' => '',
                'seo_title' => 'Teleconsultation / Virtual Planning Systems',
                'seo_description' => 'Teleconsultation and virtual planning systems are advanced digital healthcare technologies used to support remote patient consultations, treatment planning, surgical simulation, interdisciplinary collaboration, and long-term follow-up care in oral, maxillofacial, reconstructive, and craniofacial specialties. These systems improve accessibility, communication, surgical precision, and continuity of patient care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
