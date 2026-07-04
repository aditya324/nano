<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VascularSurgicalInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vascular Surgical Instruments')],
            [
                'title' => 'Vascular Surgical Instruments',
                'slug' => Str::slug('Vascular Surgical Instruments'),
                'introduction' => 'Vascular surgical instruments are specialized tools used during open and minimally invasive vascular procedures.',
                'what_is' => 'These instruments help surgeons safely handle delicate blood vessels during repair, bypass, and reconstructive surgeries.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Arterial bypass surgery'],
            ['value' => 'Aneurysm repair'],
            ['value' => 'Thrombectomy procedures'],
            ['value' => 'Vascular trauma repair'],
            ['value' => 'AV fistula creation'],
            ['value' => 'Treatments'],
            ['value' => 'These instruments support procedures such as vascular bypass surgery, aneurysm repair, vessel reconstruction, clot removal, dialysis access surgery, and emergency vascular trauma management.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved surgical precision'],
            ['value' => 'Better bleeding control'],
            ['value' => 'Enhanced vessel repair quality'],
            ['value' => 'Reduced tissue injury'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Requires expert handling'],
            ['value' => 'Strict sterilization necessary'],
            ['value' => 'Instrument wear over time'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Proper sterilization and maintenance'],
            ['value' => 'Regular equipment inspection'],
            ['value' => 'Infection control compliance'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'High-quality vascular instruments contribute to safer surgeries and improved long-term patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Vascular Surgical Instruments',
                'seo_description' => 'Vascular surgical instruments are specialized tools used during open and minimally invasive vascular procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
