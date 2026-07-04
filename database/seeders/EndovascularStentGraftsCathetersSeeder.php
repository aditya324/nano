<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndovascularStentGraftsCathetersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endovascular Stent Grafts & Catheters')],
            [
                'title' => 'Endovascular Stent Grafts & Catheters',
                'slug' => Str::slug('Endovascular Stent Grafts & Catheters'),
                'introduction' => 'Endovascular stent grafts and catheters are specialized devices used in minimally invasive vascular procedures.',
                'what_is' => 'These devices help treat aneurysms, arterial blockages, dissections, and vascular narrowing without large surgical incisions.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Endovascular aneurysm repair'],
            ['value' => 'Peripheral angioplasty and stenting'],
            ['value' => 'Carotid artery stenting'],
            ['value' => 'Trauma-related vascular repair'],
            ['value' => 'Revascularization procedures'],
            ['value' => 'Treatments'],
            ['value' => 'These devices are used during minimally invasive procedures to restore blood flow, repair damaged blood vessels, exclude aneurysms, and improve circulation in affected limbs or organs.'],
            ['value' => 'Benefits'],
            ['value' => 'Minimally invasive treatment'],
            ['value' => 'Reduced hospital stay'],
            ['value' => 'Faster recovery'],
            ['value' => 'Smaller incisions'],
            ['value' => 'Less surgical trauma'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Stent migration'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Bleeding at puncture site'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Antiplatelet therapy as prescribed'],
            ['value' => 'Monitor puncture site'],
            ['value' => 'Routine imaging surveillance'],
            ['value' => 'Blood pressure management'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Modern endovascular devices provide durable vascular repair with shorter recovery periods and improved patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Endovascular Stent Grafts & Catheters',
                'seo_description' => 'Endovascular stent grafts and catheters are specialized devices used in minimally invasive vascular procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
