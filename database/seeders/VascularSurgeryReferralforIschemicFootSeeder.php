<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VascularSurgeryReferralforIschemicFootSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vascular Surgery Referral for Ischemic Foot')],
            [
                'title' => 'Vascular Surgery Referral for Ischemic Foot',
                'slug' => Str::slug('Vascular Surgery Referral for Ischemic Foot'),
                'introduction' => 'Vascular surgery referral is essential for diabetic patients with poor blood circulation causing ischemic foot complications.',
                'what_is' => 'Reduced blood supply delays wound healing and increases the risk of gangrene and limb loss.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Non-healing ulcers'],
            ['value' => 'Gangrene'],
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Severe diabetic foot infections'],
            ['value' => 'Treatments'],
            ['value' => 'Vascular specialists may perform angioplasty, stenting, bypass surgery, thrombectomy, or other circulation-restoring procedures.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved blood flow'],
            ['value' => 'Faster wound healing'],
            ['value' => 'Reduced amputation risk'],
            ['value' => 'Better pain relief'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Procedure-related bleeding'],
            ['value' => 'Restenosis'],
            ['value' => 'Need for repeat interventions'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Vascular imaging follow-up'],
            ['value' => 'Medication adherence'],
            ['value' => 'Smoking cessation'],
            ['value' => 'Continued diabetic management'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Timely vascular intervention improves limb salvage and long-term diabetic foot recovery.',
                'conclusion' => '',
                'seo_title' => 'Vascular Surgery Referral for Ischemic Foot',
                'seo_description' => 'Vascular surgery referral is essential for diabetic patients with poor blood circulation causing ischemic foot complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
