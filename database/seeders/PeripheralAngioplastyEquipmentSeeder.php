<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralAngioplastyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peripheral Angioplasty Equipment')],
            [
                'title' => 'Peripheral Angioplasty Equipment',
                'slug' => Str::slug('Peripheral Angioplasty Equipment'),
                'introduction' => 'Peripheral angioplasty equipment is used to treat narrowed or blocked arteries in the limbs using minimally invasive techniques.',
                'what_is' => 'The equipment supports catheter-based procedures that improve blood flow and reduce limb ischemia.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Arterial stenosis'],
            ['value' => 'Acute limb ischemia'],
            ['value' => 'Dialysis access stenosis'],
            ['value' => 'Treatments'],
            ['value' => 'The equipment is used during balloon angioplasty, stent placement, thrombectomy, and revascularization procedures to restore circulation in blocked arteries.'],
            ['value' => 'Benefits'],
            ['value' => 'Minimally invasive treatment'],
            ['value' => 'Faster recovery'],
            ['value' => 'Improved limb circulation'],
            ['value' => 'Reduced surgical trauma'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Restenosis'],
            ['value' => 'Vessel injury'],
            ['value' => 'Bleeding'],
            ['value' => 'Contrast-related complications'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Antiplatelet medications'],
            ['value' => 'Hydration after procedure'],
            ['value' => 'Puncture site monitoring'],
            ['value' => 'Follow-up Doppler scans'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Peripheral angioplasty improves circulation, mobility, and limb preservation in vascular patients.',
                'conclusion' => '',
                'seo_title' => 'Peripheral Angioplasty Equipment',
                'seo_description' => 'Peripheral angioplasty equipment is used to treat narrowed or blocked arteries in the limbs using minimally invasive techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
