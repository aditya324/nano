<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OpenSurgicalRepairAAAPeripheralArteryBypassSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Open Surgical Repair (AAA, Peripheral Artery Bypass)')],
            [
                'title' => 'Open Surgical Repair (AAA, Peripheral Artery Bypass)',
                'slug' => Str::slug('Open Surgical Repair (AAA, Peripheral Artery Bypass)'),
                'introduction' => 'Open vascular surgery repairs damaged or blocked blood vessels through direct surgical intervention.',
                'what_is' => 'It is commonly performed for aneurysms and severe arterial blockages not suitable for endovascular procedures.',
                'symptoms' => [
            ['value' => 'Severe limb ischemia'],
            ['value' => 'Non-healing ulcers'],
            ['value' => 'Pulsating aneurysm'],
            ['value' => 'Severe pain'],
        ],
                'causes' => [
            ['value' => 'Aortic aneurysm'],
            ['value' => 'Severe PAD'],
            ['value' => 'Arterial occlusion'],
            ['value' => 'Failed endovascular treatment'],
            ['value' => 'Trauma-related vascular disease'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Cardiac complications'],
            ['value' => 'Graft blockage'],
            ['value' => 'Longer recovery time'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'The procedure may involve replacing diseased vessels with grafts or bypassing blocked arteries to restore circulation.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'ICU monitoring'],
            ['value' => 'Pain control'],
            ['value' => 'Wound care'],
            ['value' => 'Physiotherapy'],
            ['value' => 'Regular vascular imaging'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Cardiac complications'],
            ['value' => 'Graft blockage'],
            ['value' => 'Longer recovery time'],
        ],
                'long_term_outlook' => 'Successful surgery significantly improves blood flow, limb preservation, and survival in severe vascular disease.',
                'conclusion' => '',
                'seo_title' => 'Open Surgical Repair (AAA, Peripheral Artery Bypass)',
                'seo_description' => 'Open vascular surgery repairs damaged or blocked blood vessels through direct surgical intervention.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
