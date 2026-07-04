<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScarManagementLaserDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Scar Management Laser Devices')],
            [
                'title' => 'Scar Management Laser Devices',
                'slug' => Str::slug('Scar Management Laser Devices'),
                'introduction' => 'Scar management laser devices are advanced medical laser systems used to improve the appearance, texture, color, flexibility, and thickness of scars caused by burns, surgery, trauma, acne, or chronic skin injuries. These devices help stimulate skin remodeling, collagen production, and tissue regeneration while reducing discomfort and cosmetic deformities associated with scarring.',
                'what_is' => 'Laser devices used for scar management commonly include CO2 lasers, fractional lasers, pulsed dye lasers (PDL), and other resurfacing technologies. These systems target scar tissue with controlled laser energy to improve skin texture, reduce redness, soften thickened scars, and restore skin elasticity. Scar management lasers are widely used in burn rehabilitation, cosmetic dermatology, reconstructive surgery, post-surgical scar treatment, and keloid management. Modern laser technologies provide minimally invasive treatment options with improved precision and faster recovery. Fractional laser systems for collagen remodeling CO2 laser devices for scar resurfacing and tissue remodeling Pulsed dye laser systems for vascular scar treatment and redness reduction Cooling and skin protection systems for patient safety Precision handpieces and adjustable laser energy controls',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Burn scar and post-traumatic scar treatment'],
            ['value' => 'Post-surgical scar revision and cosmetic improvement'],
            ['value' => 'Keloid and hypertrophic scar management'],
            ['value' => 'Acne scar reduction and skin resurfacing procedures'],
            ['value' => 'Improvement of scar texture, pigmentation, and flexibility'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, swelling, or skin sensitivity after treatment'],
            ['value' => 'Risk of pigmentation changes or skin irritation in sensitive individuals'],
            ['value' => 'Need for multiple treatment sessions for optimal results'],
            ['value' => 'Temporary discomfort or mild crusting during healing'],
            ['value' => 'Requirement for strict post-treatment sun protection and skincare'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Scar management laser devices support burn rehabilitation, reconstructive plastic surgery, cosmetic dermatology, post-surgical scar revision, skin resurfacing, and long-term scar reduction therapies. These systems help improve scar appearance, skin mobility, comfort, and overall patient confidence.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular moisturization and gentle skincare practices'],
            ['value' => 'Strict sun protection and avoidance of direct UV exposure'],
            ['value' => 'Use of prescribed topical creams or medications as advised'],
            ['value' => 'Monitoring for redness, irritation, or temporary skin changes'],
            ['value' => 'Follow-up laser sessions and scar assessment when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, swelling, or skin sensitivity after treatment'],
            ['value' => 'Risk of pigmentation changes or skin irritation in sensitive individuals'],
            ['value' => 'Need for multiple treatment sessions for optimal results'],
            ['value' => 'Temporary discomfort or mild crusting during healing'],
            ['value' => 'Requirement for strict post-treatment sun protection and skincare'],
        ],
                'long_term_outlook' => 'The long-term outlook with scar management laser devices is highly positive because modern laser technologies significantly improve scar appearance, skin texture, flexibility, and overall cosmetic outcomes. Continuous advancements in laser precision, safety systems, and skin regeneration techniques help enhance recovery, reduce downtime, and support long-term skin health and patient satisfaction.',
                'conclusion' => '',
                'seo_title' => 'Scar Management Laser Devices',
                'seo_description' => 'Scar management laser devices are advanced medical laser systems used to improve the appearance, texture, color, flexibility, and thickness of scars caused by burns, surgery, trauma, acne, or chronic skin injuries. These devices help stimulate skin remodeling, collagen production, and tissue regeneration while reducing discomfort and cosmetic deformities associated with scarring.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
