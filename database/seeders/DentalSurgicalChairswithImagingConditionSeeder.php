<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DentalSurgicalChairswithImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dental / Surgical Chairs with Imaging')],
            [
                'name' => 'Dental / Surgical Chairs with Imaging',
                'slug' => Str::slug('Dental / Surgical Chairs with Imaging'),
                'h1' => 'Dental / Surgical Chairs with Imaging',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dental and surgical chairs with integrated imaging are advanced treatment units designed to support dental, oral, and maxillofacial procedures by combining patient positioning systems with diagnostic imaging and digital visualization technologies. These systems improve surgical precision, workflow efficiency, patient comfort, and real-time clinical assessment during procedures.',
                'about_more' => '',
                'overview' => 'Modern dental and surgical chairs are equipped with integrated imaging technologies such as intraoral cameras, digital radiography, CBCT compatibility, patient monitors, and surgical visualization systems. These integrated setups allow clinicians to access real-time diagnostic images, treatment planning tools, and patient records directly at the chairside. Advanced ergonomic designs also support better posture, infection control, and procedural efficiency during oral surgery, implantology, orthodontics, and maxillofacial reconstruction procedures. Adjustable dental or surgical chair with ergonomic positioning systems Integrated intraoral cameras and digital imaging displays CBCT, digital radiography, or imaging connectivity systems Surgical lighting, suction, and instrument delivery units Chairside monitors and digital treatment planning software integration',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Oral and maxillofacial surgical procedures'],
            ['value' => 'Dental implant placement and guided surgery'],
            ['value' => 'Orthodontic and restorative dental treatments'],
            ['value' => 'Real-time intraoral imaging and diagnostics'],
            ['value' => 'Surgical planning and patient education support'],
        ],
                'risks' => [
            ['value' => 'High installation and maintenance costs for advanced imaging systems'],
            ['value' => 'Requirement for regular calibration and technical servicing'],
            ['value' => 'Dependence on digital workflow and imaging software compatibility'],
            ['value' => 'Radiation safety considerations for imaging integration'],
            ['value' => 'Need for trained personnel to operate advanced chairside technologies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Dental and surgical chairs with imaging are widely used in oral surgery, implant dentistry, orthodontics, endodontics, facial trauma reconstruction, TMJ surgery, prosthodontics, and craniofacial procedures. Integrated imaging systems improve diagnostic accuracy, surgical precision, workflow coordination, and patient communication during treatment planning and procedures.'],
            ['value' => 'Regular cleaning and sterilization of chair surfaces and imaging accessories'],
            ['value' => 'Routine calibration and maintenance of digital imaging systems'],
            ['value' => 'Monitoring patient positioning and ergonomic support during recovery'],
            ['value' => 'Data storage, imaging backup, and digital record management'],
            ['value' => 'Continuous equipment quality checks and infection control monitoring'],
        ],
                'recovery' => 'The long-term outlook for dental and surgical chairs with integrated imaging is highly positive because advanced digital technologies significantly improve clinical efficiency, patient comfort, diagnostic precision, and surgical outcomes. Continuous advancements in chair ergonomics, AI-assisted imaging, IoT connectivity, and digital dentistry systems continue to enhance patient care, workflow integration, and long-term healthcare delivery. ____________________ 172. Intraoral & Panoramic X-ray / CBCT Intraoral & Panoramic X-ray / CBCT Equipment',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Dental / Surgical Chairs with Imaging',
                'meta_description' => 'Dental and surgical chairs with integrated imaging are advanced treatment units designed to support dental, oral, and maxillofacial procedures by combining pati',
                'meta_keywords' => '',
            ]
        );
    }
}
