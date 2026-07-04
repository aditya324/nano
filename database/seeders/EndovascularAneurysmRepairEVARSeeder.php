<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndovascularAneurysmRepairEVARSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endovascular Aneurysm Repair (EVAR)')],
            [
                'title' => 'Endovascular Aneurysm Repair (EVAR)',
                'slug' => Str::slug('Endovascular Aneurysm Repair (EVAR)'),
                'introduction' => 'EVAR is a minimally invasive procedure used to repair abdominal aortic aneurysms using a stent graft.',
                'what_is' => 'The procedure avoids large open surgery and reduces aneurysm rupture risk.',
                'symptoms' => [
            ['value' => 'Pulsating abdominal swelling'],
            ['value' => 'Back pain'],
            ['value' => 'Abdominal discomfort'],
            ['value' => 'Often asymptomatic'],
        ],
                'causes' => [
            ['value' => 'Abdominal aortic aneurysm'],
            ['value' => 'Atherosclerosis'],
            ['value' => 'Smoking'],
            ['value' => 'Hypertension'],
            ['value' => 'Aging'],
        ],
                'condition_risks' => [
            ['value' => 'Endoleak'],
            ['value' => 'Graft migration'],
            ['value' => 'Bleeding'],
            ['value' => 'Kidney complications'],
            ['value' => 'Need for reintervention'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'A stent graft is inserted through groin arteries and positioned inside the aneurysm to reinforce the vessel wall and prevent rupture.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Imaging surveillance'],
            ['value' => 'Blood pressure control'],
            ['value' => 'Avoid heavy lifting'],
            ['value' => 'Smoking cessation'],
        ],
                'surgery_risks' => [
            ['value' => 'Endoleak'],
            ['value' => 'Graft migration'],
            ['value' => 'Bleeding'],
            ['value' => 'Kidney complications'],
            ['value' => 'Need for reintervention'],
        ],
                'long_term_outlook' => 'EVAR provides effective aneurysm protection with faster recovery compared to open surgery.',
                'conclusion' => '',
                'seo_title' => 'Endovascular Aneurysm Repair (EVAR)',
                'seo_description' => 'EVAR is a minimally invasive procedure used to repair abdominal aortic aneurysms using a stent graft.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
