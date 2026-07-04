<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntraoralPanoramicXrayCBCTSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Intraoral & Panoramic X-ray / CBCT')],
            [
                'title' => 'Intraoral & Panoramic X-ray / CBCT',
                'slug' => Str::slug('Intraoral & Panoramic X-ray / CBCT'),
                'introduction' => 'Intraoral X-ray, panoramic X-ray, and Cone Beam Computed Tomography (CBCT) systems are advanced dental and maxillofacial imaging technologies used for detailed evaluation of teeth, jaws, facial bones, temporomandibular joints, sinuses, and surrounding oral structures. These imaging systems help improve diagnosis, treatment planning, surgical precision, and long-term patient care.',
                'what_is' => 'Intraoral X-rays provide high-resolution images of individual teeth and surrounding bone structures for diagnosing cavities, infections, fractures, and periodontal disease. Panoramic X-rays capture a wide view of the entire mouth, jaws, teeth, and facial structures in a single image, commonly used for orthodontic and surgical assessment. CBCT systems generate detailed three-dimensional images of oral and maxillofacial anatomy, allowing precise evaluation for dental implants, jaw surgery, TMJ disorders, facial trauma, and complex reconstructive procedures. Digital intraoral X-ray imaging sensors and units Panoramic radiography systems for full-mouth imaging Cone Beam Computed Tomography (CBCT) scanners Digital image processing and diagnostic software Radiation protection and patient positioning systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diagnosis of dental decay, infections, and periodontal disease'],
            ['value' => 'Evaluation of impacted teeth and jaw abnormalities'],
            ['value' => 'Dental implant planning and guided surgery assessment'],
            ['value' => 'Facial trauma, jaw fracture, and TMJ evaluation'],
            ['value' => 'Orthodontic, craniofacial, and reconstructive surgical planning'],
        ],
                'condition_risks' => [
            ['value' => 'Radiation exposure requiring strict safety protocols'],
            ['value' => 'Need for proper patient positioning for accurate imaging'],
            ['value' => 'High equipment installation and maintenance costs'],
            ['value' => 'Requirement for trained personnel and imaging interpretation expertise'],
            ['value' => 'Motion artifacts or image distortion affecting diagnostic quality'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Intraoral X-ray, panoramic X-ray, and CBCT systems support oral surgery, implant dentistry, orthodontics, endodontics, facial trauma management, TMJ assessment, craniofacial surgery, pathology evaluation, and reconstructive maxillofacial procedures. These imaging technologies improve diagnostic precision, surgical planning, and treatment outcomes across dental and maxillofacial specialties.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring healing and bone integration after surgery or implants'],
            ['value' => 'Follow-up imaging evaluation for reconstructive procedures'],
            ['value' => 'Regular calibration and maintenance of imaging systems'],
            ['value' => 'Radiation safety monitoring and protective equipment use'],
            ['value' => 'Secure digital storage and management of imaging records'],
        ],
                'surgery_risks' => [
            ['value' => 'Radiation exposure requiring strict safety protocols'],
            ['value' => 'Need for proper patient positioning for accurate imaging'],
            ['value' => 'High equipment installation and maintenance costs'],
            ['value' => 'Requirement for trained personnel and imaging interpretation expertise'],
            ['value' => 'Motion artifacts or image distortion affecting diagnostic quality'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced intraoral, panoramic, and CBCT imaging systems is highly positive because modern digital imaging technologies significantly improve diagnostic accuracy, treatment planning, surgical precision, and patient outcomes. Continuous advancements in 3D imaging, AI-assisted diagnostics, and low-dose radiation technology continue to enhance safety, workflow efficiency, and long-term oral healthcare delivery.',
                'conclusion' => '',
                'seo_title' => 'Intraoral & Panoramic X-ray / CBCT',
                'seo_description' => 'Intraoral X-ray, panoramic X-ray, and Cone Beam Computed Tomography (CBCT) systems are advanced dental and maxillofacial imaging technologies used for detailed evaluation of teeth, jaws, facial bones, temporomandibular joints, sinuses, and surrounding oral structures. These imaging systems help improve diagnosis, treatment planning, surgical precision, and long-term patient care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
