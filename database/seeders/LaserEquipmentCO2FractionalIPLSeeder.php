<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaserEquipmentCO2FractionalIPLSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laser Equipment (CO2, Fractional & IPL)')],
            [
                'title' => 'Laser Equipment (CO2, Fractional & IPL)',
                'slug' => Str::slug('Laser Equipment (CO2, Fractional & IPL)'),
                'introduction' => 'Laser equipment such as CO2 lasers, fractional lasers, and IPL (Intense Pulsed Light) systems are advanced medical and aesthetic technologies used for skin resurfacing, scar management, pigmentation treatment, hair reduction, and cosmetic skin rejuvenation. These systems help improve skin texture, tone, elasticity, and overall appearance while supporting reconstructive and dermatologic care.',
                'what_is' => 'CO2 lasers are commonly used for skin resurfacing, scar revision, burn scar management, and wrinkle reduction through controlled removal of damaged skin layers. Fractional laser systems deliver targeted microscopic treatment zones to stimulate collagen production and skin regeneration with reduced recovery time. IPL systems use broad-spectrum light energy for pigmentation correction, vascular lesion treatment, acne management, and long-term hair reduction. These technologies are widely used in cosmetic dermatology, plastic surgery, burn rehabilitation, and aesthetic medicine. CO2 laser systems for resurfacing and scar treatment Fractional laser devices for collagen stimulation and skin repair IPL systems for pigmentation and hair reduction treatments Cooling and skin protection systems for patient safety Precision delivery handpieces and treatment control interfaces',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Scar revision and burn scar management'],
            ['value' => 'Skin resurfacing and wrinkle reduction procedures'],
            ['value' => 'Pigmentation correction and skin tone improvement'],
            ['value' => 'Hair reduction and aesthetic skin treatments'],
            ['value' => 'Acne scars, vascular lesions, and skin rejuvenation procedures'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, swelling, or skin sensitivity after treatment'],
            ['value' => 'Risk of burns, pigmentation changes, or scarring if improperly used'],
            ['value' => 'Need for protective eyewear and strict laser safety protocols'],
            ['value' => 'Multiple sessions may be required for optimal outcomes'],
            ['value' => 'Post-treatment sun sensitivity and skin care requirements'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Laser equipment supports aesthetic dermatology, scar management, burn rehabilitation, anti-aging treatment, reconstructive cosmetic procedures, pigmentation correction, and minimally invasive skin rejuvenation therapies. These technologies help improve skin appearance, texture, elasticity, and overall patient confidence.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular skin moisturization and hydration support'],
            ['value' => 'Sun protection and avoidance of excessive UV exposure'],
            ['value' => 'Use of prescribed creams or topical medications as advised'],
            ['value' => 'Monitoring for redness, swelling, or temporary skin irritation'],
            ['value' => 'Follow-up treatments and skincare maintenance when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, swelling, or skin sensitivity after treatment'],
            ['value' => 'Risk of burns, pigmentation changes, or scarring if improperly used'],
            ['value' => 'Need for protective eyewear and strict laser safety protocols'],
            ['value' => 'Multiple sessions may be required for optimal outcomes'],
            ['value' => 'Post-treatment sun sensitivity and skin care requirements'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced laser equipment is highly positive because modern laser and light-based technologies provide effective, minimally invasive treatment for cosmetic, reconstructive, and dermatologic conditions. Continuous advancements in laser precision, safety systems, and skin rejuvenation techniques significantly improve treatment outcomes, recovery time, and long-term skin health.',
                'conclusion' => '',
                'seo_title' => 'Laser Equipment (CO2, Fractional & IPL)',
                'seo_description' => 'Laser equipment such as CO2 lasers, fractional lasers, and IPL (Intense Pulsed Light) systems are advanced medical and aesthetic technologies used for skin resurfacing, scar management, pigmentation treatment, hair reduction, and cosmetic skin rejuvenation. These systems help improve skin texture, tone, elasticity, and overall appearance while supporting reconstructive and dermatologic care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
