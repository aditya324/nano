<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DopplerUltrasoundforPeripheralCirculationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Doppler Ultrasound for Peripheral Circulation')],
            [
                'title' => 'Doppler Ultrasound for Peripheral Circulation',
                'slug' => Str::slug('Doppler Ultrasound for Peripheral Circulation'),
                'introduction' => 'Doppler ultrasound is a non-invasive imaging test used to evaluate blood flow in the arteries and veins of the legs and feet.',
                'what_is' => 'This test helps identify poor circulation, arterial blockage, and vascular complications commonly associated with diabetic foot disease.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Peripheral arterial disease assessment'],
            ['value' => 'Critical limb ischemia evaluation'],
            ['value' => 'Non-healing diabetic ulcers'],
            ['value' => 'Blood flow monitoring after vascular procedures'],
            ['value' => 'Screening for circulation problems'],
            ['value' => 'Treatments'],
            ['value' => 'Doppler findings help guide treatments such as angioplasty, bypass surgery, wound care planning, vascular medications, and limb salvage procedures.'],
            ['value' => 'Benefits'],
            ['value' => 'Non-invasive and painless'],
            ['value' => 'Real-time blood flow assessment'],
            ['value' => 'Early detection of circulation problems'],
            ['value' => 'Supports treatment planning'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Operator-dependent accuracy'],
            ['value' => 'Limited visualization in severe swelling'],
            ['value' => 'Additional imaging may sometimes be required'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Usually no recovery time required'],
            ['value' => 'Continue diabetic and vascular medications'],
            ['value' => 'Follow vascular specialist recommendations'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Regular circulation assessment helps improve wound healing and reduces the risk of diabetic foot complications and amputations.',
                'conclusion' => '',
                'seo_title' => 'Doppler Ultrasound for Peripheral Circulation',
                'seo_description' => 'Doppler ultrasound is a non-invasive imaging test used to evaluate blood flow in the arteries and veins of the legs and feet.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
