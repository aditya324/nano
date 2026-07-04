<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndovascularAngioplastyStentingPeripheralCarotidRenalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endovascular Angioplasty / Stenting (Peripheral, Carotid, Renal)')],
            [
                'title' => 'Endovascular Angioplasty / Stenting (Peripheral, Carotid, Renal)',
                'slug' => Str::slug('Endovascular Angioplasty / Stenting (Peripheral, Carotid, Renal)'),
                'introduction' => 'Endovascular angioplasty and stenting are minimally invasive vascular procedures used to open narrowed or blocked arteries.',
                'what_is' => 'A balloon catheter widens the artery, and a stent may be placed to maintain blood flow.',
                'symptoms' => [
            ['value' => 'Leg pain while walking'],
            ['value' => 'Stroke symptoms'],
            ['value' => 'High blood pressure from renal artery disease'],
            ['value' => 'Poor circulation'],
            ['value' => 'Limb ulcers'],
        ],
                'causes' => [
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Carotid artery stenosis'],
            ['value' => 'Renal artery stenosis'],
            ['value' => 'Atherosclerosis'],
            ['value' => 'Diabetes-related vascular disease'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Vessel injury'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clots'],
            ['value' => 'Contrast-related kidney injury'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment involves catheter-based vascular intervention performed under imaging guidance. Balloon angioplasty improves blood flow, while stents help keep arteries open long-term.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Antiplatelet therapy'],
            ['value' => 'Monitor puncture site'],
            ['value' => 'Hydration after contrast use'],
            ['value' => 'Routine vascular imaging'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Vessel injury'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clots'],
            ['value' => 'Contrast-related kidney injury'],
        ],
                'long_term_outlook' => 'Most patients experience improved circulation and symptom relief with minimally invasive recovery.',
                'conclusion' => '',
                'seo_title' => 'Endovascular Angioplasty / Stenting (Peripheral, Carotid, Renal)',
                'seo_description' => 'Endovascular angioplasty and stenting are minimally invasive vascular procedures used to open narrowed or blocked arteries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
