<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntraoralPanoramicXrayCBCTConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intraoral & Panoramic X-ray / CBCT')],
            [
                'name' => 'Intraoral & Panoramic X-ray / CBCT',
                'slug' => Str::slug('Intraoral & Panoramic X-ray / CBCT'),
                'h1' => 'Intraoral & Panoramic X-ray / CBCT',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intraoral X-ray, panoramic X-ray, and Cone Beam Computed Tomography (CBCT) systems are advanced dental and maxillofacial imaging technologies used for detailed evaluation of teeth, jaws, facial bones, temporomandibular joints, sinuses, and surrounding oral structures. These imaging systems help improve diagnosis, treatment planning, surgical precision, and long-term patient care.',
                'about_more' => '',
                'overview' => 'Intraoral X-rays provide high-resolution images of individual teeth and surrounding bone structures for diagnosing cavities, infections, fractures, and periodontal disease. Panoramic X-rays capture a wide view of the entire mouth, jaws, teeth, and facial structures in a single image, commonly used for orthodontic and surgical assessment. CBCT systems generate detailed three-dimensional images of oral and maxillofacial anatomy, allowing precise evaluation for dental implants, jaw surgery, TMJ disorders, facial trauma, and complex reconstructive procedures. Digital intraoral X-ray imaging sensors and units Panoramic radiography systems for full-mouth imaging Cone Beam Computed Tomography (CBCT) scanners Digital image processing and diagnostic software Radiation protection and patient positioning systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diagnosis of dental decay, infections, and periodontal disease'],
            ['value' => 'Evaluation of impacted teeth and jaw abnormalities'],
            ['value' => 'Dental implant planning and guided surgery assessment'],
            ['value' => 'Facial trauma, jaw fracture, and TMJ evaluation'],
            ['value' => 'Orthodontic, craniofacial, and reconstructive surgical planning'],
        ],
                'risks' => [
            ['value' => 'Radiation exposure requiring strict safety protocols'],
            ['value' => 'Need for proper patient positioning for accurate imaging'],
            ['value' => 'High equipment installation and maintenance costs'],
            ['value' => 'Requirement for trained personnel and imaging interpretation expertise'],
            ['value' => 'Motion artifacts or image distortion affecting diagnostic quality'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Intraoral X-ray, panoramic X-ray, and CBCT systems support oral surgery, implant dentistry, orthodontics, endodontics, facial trauma management, TMJ assessment, craniofacial surgery, pathology evaluation, and reconstructive maxillofacial procedures. These imaging technologies improve diagnostic precision, surgical planning, and treatment outcomes across dental and maxillofacial specialties.'],
            ['value' => 'Monitoring healing and bone integration after surgery or implants'],
            ['value' => 'Follow-up imaging evaluation for reconstructive procedures'],
            ['value' => 'Regular calibration and maintenance of imaging systems'],
            ['value' => 'Radiation safety monitoring and protective equipment use'],
            ['value' => 'Secure digital storage and management of imaging records'],
        ],
                'recovery' => 'The long-term outlook with advanced intraoral, panoramic, and CBCT imaging systems is highly positive because modern digital imaging technologies significantly improve diagnostic accuracy, treatment planning, surgical precision, and patient outcomes. Continuous advancements in 3D imaging, AI-assisted diagnostics, and low-dose radiation technology continue to enhance safety, workflow efficiency, and long-term oral healthcare delivery. _________________________ 173. Surgical Instruments for Jaw / Tooth Extraction Surgical Instruments for Jaw / Tooth Extraction Equipment',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Intraoral & Panoramic X-ray / CBCT',
                'meta_description' => 'Intraoral X-ray, panoramic X-ray, and Cone Beam Computed Tomography (CBCT) systems are advanced dental and maxillofacial imaging technologies used for detailed ',
                'meta_keywords' => '',
            ]
        );
    }
}
