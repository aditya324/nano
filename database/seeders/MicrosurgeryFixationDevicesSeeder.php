<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrosurgeryFixationDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microsurgery & Fixation Devices')],
            [
                'title' => 'Microsurgery & Fixation Devices',
                'slug' => Str::slug('Microsurgery & Fixation Devices'),
                'introduction' => 'Microsurgery and fixation devices are advanced surgical instruments and implant systems used in oral, maxillofacial, reconstructive, trauma, and craniofacial surgeries to repair delicate tissues, stabilize bones, restore function, and support precise surgical reconstruction. These devices are essential for complex procedures involving nerves, blood vessels, bones, and soft tissue structures.',
                'what_is' => 'Microsurgical procedures involve the use of high-precision instruments, operating microscopes, and specialized suturing techniques to repair small blood vessels, nerves, and soft tissues. Fixation devices such as plates, screws, meshes, wires, and external fixation systems are used to stabilize fractured or reconstructed bones of the jaw, face, and craniofacial skeleton. These technologies are widely used in facial trauma reconstruction, orthognathic surgery, free flap reconstruction, tumor surgery, cleft correction, and limb salvage procedures. Modern fixation systems improve bone healing, structural stability, and long-term functional outcomes. Titanium plates, screws, and bone fixation systems Microsurgical instruments and precision suturing tools Operating microscopes and magnification systems External fixation devices and reconstruction plates Microvascular clamps, forceps, and nerve repair instruments',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Facial fracture fixation and jaw stabilization procedures'],
            ['value' => 'Microsurgical free flap and tissue reconstruction surgeries'],
            ['value' => 'Nerve and vascular repair procedures'],
            ['value' => 'Orthognathic and craniofacial reconstructive surgeries'],
            ['value' => 'Tumor reconstruction and complex trauma management'],
        ],
                'condition_risks' => [
            ['value' => 'Infection or implant-related complications after surgery'],
            ['value' => 'Hardware loosening, exposure, or fixation failure'],
            ['value' => 'Nerve or vascular injury during microsurgical procedures'],
            ['value' => 'Requirement for precise surgical expertise and advanced training'],
            ['value' => 'Need for long-term monitoring of reconstructive and fixation outcomes'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Microsurgery and fixation devices support maxillofacial trauma repair, facial reconstruction, orthognathic surgery, craniofacial surgery, free flap reconstruction, TMJ surgery, tumor resection reconstruction, nerve repair, and complex reconstructive procedures. These technologies significantly improve surgical precision, structural stability, tissue healing, and long-term functional and cosmetic outcomes.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring healing, bone stability, and tissue circulation after surgery'],
            ['value' => 'Infection prevention and wound care management'],
            ['value' => 'Physiotherapy and rehabilitation support for functional recovery'],
            ['value' => 'Follow-up imaging and fixation assessment when required'],
            ['value' => 'Regular evaluation for implant stability and long-term reconstructive success'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or implant-related complications after surgery'],
            ['value' => 'Hardware loosening, exposure, or fixation failure'],
            ['value' => 'Nerve or vascular injury during microsurgical procedures'],
            ['value' => 'Requirement for precise surgical expertise and advanced training'],
            ['value' => 'Need for long-term monitoring of reconstructive and fixation outcomes'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced microsurgery and fixation devices is highly positive because modern reconstructive and fixation technologies significantly improve surgical precision, bone healing, tissue viability, facial function, and cosmetic outcomes. Continuous advancements in biomaterials, microvascular surgery, 3D fixation systems, and minimally invasive techniques continue to enhance patient recovery, surgical safety, and long-term reconstructive success.',
                'conclusion' => '',
                'seo_title' => 'Microsurgery & Fixation Devices',
                'seo_description' => 'Microsurgery and fixation devices are advanced surgical instruments and implant systems used in oral, maxillofacial, reconstructive, trauma, and craniofacial surgeries to repair delicate tissues, stabilize bones, restore function, and support precise surgical reconstruction. These devices are essential for complex procedures involving nerves, blood vessels, bones, and soft tissue structures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
