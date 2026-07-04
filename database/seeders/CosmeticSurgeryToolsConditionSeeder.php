<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CosmeticSurgeryToolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cosmetic Surgery Tools')],
            [
                'name' => 'Cosmetic Surgery Tools',
                'slug' => Str::slug('Cosmetic Surgery Tools'),
                'h1' => 'Cosmetic Surgery Tools',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cosmetic surgery tools are specialized surgical instruments and devices used in aesthetic and reconstructive procedures to improve facial appearance, body contour, skin texture, and overall cosmetic outcomes. These tools support precision, safety, tissue handling, and minimally invasive surgical techniques in modern cosmetic surgery practices.',
                'about_more' => '',
                'overview' => 'Cosmetic surgery procedures require advanced surgical instruments for cutting, dissection, tissue manipulation, contouring, suturing, liposuction, skin tightening, and microsurgical reconstruction. Commonly used tools include surgical scalpels, forceps, retractors, cannulas, electrosurgical devices, laser systems, endoscopic equipment, and specialized aesthetic surgical instruments. These tools are widely used in facial surgery, rhinoplasty, liposuction, breast surgery, body contouring, scar revision, and minimally invasive cosmetic procedures. Precision surgical scalpels and dissecting instruments Liposuction cannulas and fat harvesting devices Electrocautery and tissue coagulation systems Endoscopic and minimally invasive surgical equipment Laser, suturing, and microsurgical reconstruction instruments',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Facial cosmetic and reconstructive surgical procedures'],
            ['value' => 'Liposuction and body contouring treatments'],
            ['value' => 'Breast augmentation, reduction, and reconstruction surgeries'],
            ['value' => 'Scar revision and skin tightening procedures'],
            ['value' => 'Minimally invasive aesthetic and anti-aging treatments'],
        ],
                'risks' => [
            ['value' => 'Requirement for precise surgical handling and expertise'],
            ['value' => 'Risk of tissue trauma or cosmetic asymmetry during procedures'],
            ['value' => 'Need for strict sterile surgical environments and infection control'],
            ['value' => 'Prolonged operative time in complex reconstructive cases'],
            ['value' => 'Requirement for continuous maintenance and calibration of advanced equipment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cosmetic surgery tools support facial rejuvenation, body contouring, breast surgery, rhinoplasty, scar revision, burn reconstruction, fat transfer, minimally invasive aesthetic procedures, and reconstructive plastic surgery. These instruments help improve surgical precision, patient safety, healing outcomes, and cosmetic results.'],
            ['value' => 'Regular wound care and infection prevention measures'],
            ['value' => 'Monitoring for swelling, bruising, or postoperative discomfort'],
            ['value' => 'Use of compression garments or supportive dressings when required'],
            ['value' => 'Physiotherapy, scar management, and rehabilitation support if needed'],
            ['value' => 'Long-term follow-up and aesthetic outcome evaluation'],
        ],
                'recovery' => 'The long-term outlook with advanced cosmetic surgery tools is highly positive because modern surgical technologies significantly improve precision, safety, recovery time, and aesthetic outcomes. Continuous advancements in minimally invasive techniques, laser technologies, and reconstructive instrumentation help enhance patient satisfaction, functional recovery, and long-term cosmetic results. _______________________ 168. Dressing & Sterilization Equipment Dressing & Sterilization Equipment Equipment',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Cosmetic Surgery Tools',
                'meta_description' => 'Cosmetic surgery tools are specialized surgical instruments and devices used in aesthetic and reconstructive procedures to improve facial appearance, body conto',
                'meta_keywords' => '',
            ]
        );
    }
}
