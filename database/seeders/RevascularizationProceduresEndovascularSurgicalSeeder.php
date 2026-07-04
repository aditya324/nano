<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RevascularizationProceduresEndovascularSurgicalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Revascularization Procedures (Endovascular / Surgical)')],
            [
                'title' => 'Revascularization Procedures (Endovascular / Surgical)',
                'slug' => Str::slug('Revascularization Procedures (Endovascular / Surgical)'),
                'introduction' => 'Revascularization procedures restore blood flow to diabetic feet affected by poor circulation.',
                'what_is' => 'Poor blood supply delays healing and increases the risk of tissue death and amputation in diabetic patients.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Non-healing diabetic ulcers'],
            ['value' => 'Gangrene'],
            ['value' => 'Severe circulation problems'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include angioplasty, stenting, bypass surgery, thrombectomy, or other vascular procedures to improve blood circulation to the foot.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved blood flow'],
            ['value' => 'Faster wound healing'],
            ['value' => 'Limb salvage'],
            ['value' => 'Reduced pain'],
            ['value' => 'Lower amputation risk'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clots'],
            ['value' => 'Bleeding'],
            ['value' => 'Need for repeat procedures'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Antiplatelet medications'],
            ['value' => 'Foot protection'],
            ['value' => 'Wound monitoring'],
            ['value' => 'Vascular follow-up imaging'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Successful revascularization significantly improves limb preservation and diabetic wound healing outcomes.',
                'conclusion' => '',
                'seo_title' => 'Revascularization Procedures (Endovascular / Surgical)',
                'seo_description' => 'Revascularization procedures restore blood flow to diabetic feet affected by poor circulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
