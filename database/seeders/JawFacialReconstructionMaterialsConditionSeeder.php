<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JawFacialReconstructionMaterialsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Jaw / Facial Reconstruction Materials')],
            [
                'name' => 'Jaw / Facial Reconstruction Materials',
                'slug' => Str::slug('Jaw / Facial Reconstruction Materials'),
                'h1' => 'Jaw / Facial Reconstruction Materials',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Jaw and facial reconstruction materials are specialized biomaterials, implants, grafts, and fixation systems used in oral, maxillofacial, craniofacial, and reconstructive surgeries to restore facial structure, jaw stability, bone continuity, and soft tissue support after trauma, tumor removal, congenital deformities, or severe tissue loss.',
                'about_more' => '',
                'overview' => 'Reconstruction materials are essential for repairing defects involving the jaws, facial bones, orbital structures, and surrounding soft tissues. Commonly used materials include titanium plates and meshes, bone grafts, biocompatible implants, resorbable fixation systems, alloplastic materials, and patient-specific 3D-printed implants. These materials help restore facial symmetry, chewing function, speech, airway support, and overall cosmetic appearance while promoting long-term structural stability and healing. Titanium plates, screws, and reconstruction meshes Bone graft materials and bone substitutes Resorbable fixation systems and surgical implants Patient-specific custom implants and 3D-printed reconstruction materials Soft tissue support materials and reconstructive membranes',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Reconstruction after facial trauma or jaw fractures'],
            ['value' => 'Jaw and facial defect repair after tumor removal'],
            ['value' => 'Craniofacial and congenital deformity correction procedures'],
            ['value' => 'Bone grafting and dental implant reconstruction surgeries'],
            ['value' => 'Orthognathic and facial contour reconstruction procedures'],
        ],
                'risks' => [
            ['value' => 'Infection or implant-related complications after surgery'],
            ['value' => 'Implant loosening, exposure, or hardware failure'],
            ['value' => 'Delayed bone healing or graft rejection in certain cases'],
            ['value' => 'Need for precise surgical planning and fixation accuracy'],
            ['value' => 'Requirement for long-term monitoring of reconstructive outcomes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Jaw and facial reconstruction materials support facial trauma repair, orthognathic surgery, craniofacial reconstruction, tumor defect management, TMJ surgery, dental implant rehabilitation, cleft reconstruction, and complex maxillofacial reconstructive procedures. These materials significantly improve structural support, facial aesthetics, oral function, and long-term surgical outcomes.'],
            ['value' => 'Monitoring bone healing and implant stability after surgery'],
            ['value' => 'Infection prevention and wound care management'],
            ['value' => 'Follow-up imaging and reconstructive assessment when required'],
            ['value' => 'Physiotherapy and rehabilitation support for functional recovery'],
            ['value' => 'Long-term evaluation of graft integration and reconstructive success'],
        ],
                'recovery' => 'The long-term outlook with advanced jaw and facial reconstruction materials is highly positive because modern biomaterials and reconstructive technologies significantly improve surgical precision, bone healing, facial symmetry, functional recovery, and cosmetic outcomes. Continuous advancements in biocompatible materials, regenerative medicine, and 3D-printed patient-specific implants continue to enhance reconstructive success, patient safety, and long-term quality of life. __________________ 178. Sterilization & Infection Control Setup Sterilization & Infection Control Setup Infrastructure & Facilities',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Jaw / Facial Reconstruction Materials',
                'meta_description' => 'Jaw and facial reconstruction materials are specialized biomaterials, implants, grafts, and fixation systems used in oral, maxillofacial, craniofacial, and reco',
                'meta_keywords' => '',
            ]
        );
    }
}
