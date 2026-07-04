<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RadiologySafetyRadiationDoseMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Radiology Safety & Radiation Dose Monitoring')],
            [
                'name' => 'Radiology Safety & Radiation Dose Monitoring',
                'slug' => Str::slug('Radiology Safety & Radiation Dose Monitoring'),
                'h1' => 'Radiology Safety & Radiation Dose Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Radiology safety and radiation dose monitoring involve specialized protocols and protective measures designed to minimize radiation exposure during diagnostic and interventional imaging procedures. These practices help ensure patient safety while maintaining high-quality imaging for accurate diagnosis and treatment planning.',
                'about_more' => '',
                'overview' => 'Radiology safety protocols are followed during imaging procedures such as X-rays, CT scans, fluoroscopy, mammography, and nuclear medicine studies. Radiation dose monitoring systems track and optimize radiation exposure according to the patient’s age, body size, medical condition, and imaging requirements. Protective measures such as shielding, low-dose imaging protocols, equipment calibration, and radiation safety guidelines are used to reduce unnecessary exposure while maintaining diagnostic accuracy.',
                'symptoms' => [
            ['value' => 'Conditions requiring repeated imaging evaluations'],
            ['value' => 'Trauma, cancer, or chronic diseases needing long-term monitoring'],
            ['value' => 'Pediatric or high-risk patients requiring radiation-sensitive care'],
            ['value' => 'Need for interventional radiology or fluoroscopic procedures'],
            ['value' => 'Situations requiring radiation exposure assessment and monitoring'],
        ],
                'causes' => [
            ['value' => 'Monitoring radiation exposure during imaging procedures'],
            ['value' => 'Implementing low-dose imaging protocols for patient safety'],
            ['value' => 'Radiation protection in pediatric and high-risk populations'],
            ['value' => 'Safety management during interventional radiology procedures'],
            ['value' => 'Quality assurance and imaging equipment performance monitoring'],
        ],
                'risks' => [
            ['value' => 'Cumulative radiation exposure from repeated imaging studies'],
            ['value' => 'Potential tissue damage with excessive radiation exposure'],
            ['value' => 'Increased sensitivity in children and pregnant individuals'],
            ['value' => 'Need for strict radiation safety protocols during complex procedures'],
            ['value' => 'Rare imaging-related complications associated with high-dose exposure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Radiology safety and dose monitoring support safe diagnostic imaging, treatment planning, interventional procedures, and long-term disease monitoring across multiple medical specialties. These protocols help healthcare professionals optimize imaging quality while reducing unnecessary radiation exposure and maintaining patient safety.'],
            ['value' => 'Following recommended imaging schedules appropriately'],
            ['value' => 'Informing healthcare providers about previous imaging history'],
            ['value' => 'Monitoring for unusual symptoms after contrast or interventional procedures'],
            ['value' => 'Maintaining regular medical follow-up when repeated imaging is required'],
            ['value' => 'Discussing radiation safety concerns with healthcare professionals when needed'],
        ],
                'recovery' => 'The long-term outlook with radiology safety and radiation dose monitoring is highly positive because modern imaging technologies and safety protocols significantly reduce unnecessary radiation exposure while maintaining diagnostic effectiveness. Continuous safety monitoring, optimized imaging techniques, and adherence to radiation protection guidelines help support safe long-term medical imaging and patient care. ______________________________ 24. Preoperative Planning & Postoperative Assessment Preoperative Planning & Postoperative Assessment Procedures',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Radiology Safety & Radiation Dose Monitoring',
                'meta_description' => 'Radiology safety and radiation dose monitoring involve specialized protocols and protective measures designed to minimize radiation exposure during diagnostic a',
                'meta_keywords' => '',
            ]
        );
    }
}
