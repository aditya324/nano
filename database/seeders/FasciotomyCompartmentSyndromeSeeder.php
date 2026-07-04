<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FasciotomyCompartmentSyndromeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Fasciotomy (Compartment Syndrome)')],
            [
                'title' => 'Fasciotomy (Compartment Syndrome)',
                'slug' => Str::slug('Fasciotomy (Compartment Syndrome)'),
                'introduction' => 'Fasciotomy is an emergency surgical procedure performed to relieve dangerously increased pressure within muscle compartments, commonly in the arms or legs.',
                'what_is' => 'Compartment syndrome occurs when swelling or bleeding inside a closed muscle compartment reduces blood flow and damages muscles, nerves, and tissues. Immediate treatment is necessary to prevent permanent disability or limb loss.',
                'symptoms' => [
            ['value' => 'Severe limb pain'],
            ['value' => 'Swelling and tightness'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Weakness'],
            ['value' => 'Reduced pulses in severe cases'],
            ['value' => 'Pain worsening with movement'],
        ],
                'causes' => [
            ['value' => 'Severe trauma or fractures'],
            ['value' => 'Crush injuries'],
            ['value' => 'Vascular injuries'],
            ['value' => 'Burns'],
            ['value' => 'Tight casts or bandages'],
            ['value' => 'Reperfusion injury after restoring blood flow'],
        ],
                'condition_risks' => [
            ['value' => 'Muscle damage'],
            ['value' => 'Nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Permanent disability'],
            ['value' => 'Limb amputation if untreated'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment involves surgically opening the skin and fascia to relieve pressure and restore circulation. The wound may be temporarily left open and later closed with sutures, skin grafts, or reconstructive procedures once swelling decreases.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wound dressing and monitoring'],
            ['value' => 'Pain management'],
            ['value' => 'Physiotherapy'],
            ['value' => 'Infection prevention'],
            ['value' => 'Limb elevation when advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Muscle damage'],
            ['value' => 'Nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Permanent disability'],
            ['value' => 'Limb amputation if untreated'],
        ],
                'long_term_outlook' => 'Early fasciotomy usually preserves limb function and prevents major tissue damage. Delayed treatment may lead to permanent complications.',
                'conclusion' => '',
                'seo_title' => 'Fasciotomy (Compartment Syndrome)',
                'seo_description' => 'Fasciotomy is an emergency surgical procedure performed to relieve dangerously increased pressure within muscle compartments, commonly in the arms or legs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
