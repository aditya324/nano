<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VascularSurgeryInterventionsforPADBypassPTASeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vascular Surgery Interventions for PAD (Bypass / PTA)')],
            [
                'title' => 'Vascular Surgery Interventions for PAD (Bypass / PTA)',
                'slug' => Str::slug('Vascular Surgery Interventions for PAD (Bypass / PTA)'),
                'introduction' => 'Vascular surgery interventions for Peripheral Arterial Disease (PAD) are procedures performed to restore blood flow in blocked or narrowed arteries supplying the limbs. These procedures help relieve pain and prevent limb loss.',
                'what_is' => 'Common interventions include: Bypass surgery Percutaneous transluminal angioplasty (PTA) Stent placement The procedures improve circulation and are recommended for: Severe limb pain Non-healing ulcers Gangrene Critical limb ischemia Early treatment significantly improves limb preservation and mobility.',
                'symptoms' => [
            ['value' => 'Leg pain while walking'],
            ['value' => 'Cold or pale limbs'],
            ['value' => 'Non-healing foot ulcers'],
            ['value' => 'Numbness or weakness in legs'],
            ['value' => 'Gangrene or tissue damage'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Re-blockage of arteries'],
            ['value' => 'Limb swelling or pain'],
            ['value' => 'Rare limb loss complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Stop smoking completely'],
            ['value' => 'Walk regularly as advised'],
            ['value' => 'Take blood-thinning medications consistently'],
            ['value' => 'Monitor wounds and foot care carefully'],
            ['value' => 'Attend vascular follow-up evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Re-blockage of arteries'],
            ['value' => 'Limb swelling or pain'],
            ['value' => 'Rare limb loss complications'],
        ],
                'long_term_outlook' => 'Successful vascular intervention improves blood flow, reduces pain, preserves limb function, and lowers the risk of amputation.',
                'conclusion' => '',
                'seo_title' => 'Vascular Surgery Interventions for PAD (Bypass / PTA)',
                'seo_description' => 'Vascular surgery interventions for Peripheral Arterial Disease (PAD) are procedures performed to restore blood flow in blocked or narrowed arteries supplying the limbs. These procedures help relieve pain and prevent limb loss.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
