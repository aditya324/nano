<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralAneurysmResectionGraftingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peripheral Aneurysm Resection & Grafting')],
            [
                'title' => 'Peripheral Aneurysm Resection & Grafting',
                'slug' => Str::slug('Peripheral Aneurysm Resection & Grafting'),
                'introduction' => 'Peripheral aneurysm resection and grafting is a vascular surgical procedure performed to remove an abnormal ballooning segment of an artery and restore blood flow using a graft.',
                'what_is' => 'Peripheral aneurysms commonly affect arteries in the legs, groin, or visceral circulation. Large aneurysms may rupture, clot, or block circulation, requiring surgical correction.',
                'symptoms' => [
            ['value' => 'Pulsating swelling'],
            ['value' => 'Limb pain'],
            ['value' => 'Swelling behind the knee'],
            ['value' => 'Reduced blood flow'],
            ['value' => 'Sudden severe pain if rupture occurs'],
            ['value' => 'Cold extremities'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Hypertension'],
            ['value' => 'Smoking'],
            ['value' => 'Trauma'],
            ['value' => 'Connective tissue disorders'],
            ['value' => 'Infection-related aneurysms'],
            ['value' => 'Genetic vascular disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Aneurysm rupture'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Bleeding'],
            ['value' => 'Graft blockage'],
            ['value' => 'Infection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment involves surgical removal of the aneurysmal artery segment followed by reconstruction using a synthetic graft or the patient’s own vein. In selected cases, endovascular stent grafting may also be used to exclude the aneurysm and maintain circulation.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor limb circulation'],
            ['value' => 'Blood pressure control'],
            ['value' => 'Antiplatelet medication adherence'],
            ['value' => 'Wound care'],
            ['value' => 'Regular vascular imaging follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Aneurysm rupture'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Bleeding'],
            ['value' => 'Graft blockage'],
            ['value' => 'Infection'],
        ],
                'long_term_outlook' => 'Successful aneurysm repair improves circulation and significantly reduces the risk of rupture and limb-threatening complications.',
                'conclusion' => '',
                'seo_title' => 'Peripheral Aneurysm Resection & Grafting',
                'seo_description' => 'Peripheral aneurysm resection and grafting is a vascular surgical procedure performed to remove an abnormal ballooning segment of an artery and restore blood flow using a graft.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
