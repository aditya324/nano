<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VascularTraumaRepairArterialVenousSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vascular Trauma Repair (Arterial / Venous)')],
            [
                'title' => 'Vascular Trauma Repair (Arterial / Venous)',
                'slug' => Str::slug('Vascular Trauma Repair (Arterial / Venous)'),
                'introduction' => 'Vascular trauma repair restores damaged arteries or veins after injury.',
                'what_is' => 'Rapid vascular repair is essential to control bleeding and preserve blood supply to organs and limbs.',
                'symptoms' => [
            ['value' => 'Severe bleeding'],
            ['value' => 'Swelling'],
            ['value' => 'Loss of pulses'],
            ['value' => 'Pale or cold limb'],
            ['value' => 'Severe pain'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Penetrating injuries'],
            ['value' => 'Fractures'],
            ['value' => 'Crush injuries'],
            ['value' => 'Surgical trauma'],
        ],
                'condition_risks' => [
            ['value' => 'Limb loss'],
            ['value' => 'Shock'],
            ['value' => 'Infection'],
            ['value' => 'Blood clots'],
            ['value' => 'Organ damage'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment may involve direct vessel repair, graft placement, bypass surgery, vascular suturing, or endovascular stenting depending on injury severity.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Circulation monitoring'],
            ['value' => 'Wound care'],
            ['value' => 'Pain management'],
            ['value' => 'Physiotherapy'],
            ['value' => 'Infection prevention'],
        ],
                'surgery_risks' => [
            ['value' => 'Limb loss'],
            ['value' => 'Shock'],
            ['value' => 'Infection'],
            ['value' => 'Blood clots'],
            ['value' => 'Organ damage'],
        ],
                'long_term_outlook' => 'Successful vascular repair improves survival and limb preservation outcomes after trauma.',
                'conclusion' => '',
                'seo_title' => 'Vascular Trauma Repair (Arterial / Venous)',
                'seo_description' => 'Vascular trauma repair restores damaged arteries or veins after injury.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
