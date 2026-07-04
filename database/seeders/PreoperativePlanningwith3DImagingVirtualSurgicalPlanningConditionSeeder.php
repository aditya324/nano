<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreoperativePlanningwith3DImagingVirtualSurgicalPlanningConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Preoperative Planning with 3D Imaging / Virtual Surgical Planning')],
            [
                'name' => 'Preoperative Planning with 3D Imaging / Virtual Surgical Planning',
                'slug' => Str::slug('Preoperative Planning with 3D Imaging / Virtual Surgical Planning'),
                'h1' => 'Preoperative Planning with 3D Imaging / Virtual Surgical Planning',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Preoperative planning with 3D imaging and virtual surgical planning (VSP) is an advanced technology-driven approach used in oral, maxillofacial, craniofacial, reconstructive, and implant surgeries to improve surgical precision, safety, and treatment outcomes. These techniques help surgeons visualize anatomical structures in detail, simulate procedures digitally, and create accurate surgical plans before the actual operation.',
                'about_more' => '',
                'overview' => '3D imaging technologies such as CT scans, CBCT (Cone Beam Computed Tomography), MRI, and digital facial scanning are used to generate detailed three-dimensional models of the patient’s facial bones, jaws, teeth, airway, and soft tissues. Virtual surgical planning allows surgeons to digitally simulate jaw movements, fracture correction, implant placement, tumor reconstruction, and craniofacial procedures before surgery. Customized surgical guides, splints, and patient-specific implants may also be created to improve accuracy and reduce operative time. 3D CT scan and CBCT imaging systems Digital facial scanning and modeling software Virtual surgical planning and simulation platforms Patient-specific surgical guides and templates 3D printing technology for anatomical models and implants',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Orthognathic surgery and jaw realignment procedures'],
            ['value' => 'Facial trauma reconstruction and fracture management'],
            ['value' => 'Dental implant planning and bone reconstruction surgeries'],
            ['value' => 'Craniofacial and cleft-related corrective procedures'],
            ['value' => 'Tumor resection and reconstructive flap surgery planning'],
        ],
                'risks' => [
            ['value' => 'Requirement for advanced imaging and specialized software systems'],
            ['value' => 'Additional planning time before complex surgeries'],
            ['value' => 'Dependence on accurate imaging data and digital measurements'],
            ['value' => 'Higher technical and equipment costs in specialized procedures'],
            ['value' => 'Need for multidisciplinary coordination and technical expertise'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Preoperative planning with 3D imaging and VSP supports orthognathic surgery, facial trauma reconstruction, dental implantology, craniofacial surgery, TMJ surgery, tumor reconstruction, and complex maxillofacial procedures. These technologies improve surgical precision, reduce intraoperative complications, enhance cosmetic outcomes, and support better functional rehabilitation.'],
            ['value' => 'Monitoring healing and surgical alignment after procedures'],
            ['value' => 'Follow-up imaging and postoperative evaluation when required'],
            ['value' => 'Physiotherapy and rehabilitation support for functional recovery'],
            ['value' => 'Oral hygiene maintenance and wound care management'],
            ['value' => 'Long-term follow-up for reconstructive and implant outcomes'],
        ],
                'recovery' => 'The long-term outlook with preoperative 3D imaging and virtual surgical planning is highly positive because these advanced technologies significantly improve surgical accuracy, reduce complications, shorten operative time, and enhance functional and cosmetic outcomes. Continuous advancements in digital planning, imaging precision, and 3D printing technologies continue to improve patient safety, recovery, and overall surgical success. ___________________ 24. Postoperative Rehabilitation & Physiotherapy for Jaw Function Postoperative Rehabilitation & Physiotherapy for Jaw Function Procedures',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Preoperative Planning with 3D Imaging / Virtual Surgical Planning',
                'meta_description' => 'Preoperative planning with 3D imaging and virtual surgical planning (VSP) is an advanced technology-driven approach used in oral, maxillofacial, craniofacial, r',
                'meta_keywords' => '',
            ]
        );
    }
}
