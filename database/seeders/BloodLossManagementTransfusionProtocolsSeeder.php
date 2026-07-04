<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodLossManagementTransfusionProtocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Loss Management & Transfusion Protocols')],
            [
                'title' => 'Blood Loss Management & Transfusion Protocols',
                'slug' => Str::slug('Blood Loss Management & Transfusion Protocols'),
                'introduction' => 'Blood loss management and transfusion protocols are medical strategies used to control bleeding, maintain blood circulation, and safely replace blood loss during and after surgery. These protocols are critical in major surgeries and trauma care.',
                'what_is' => 'Management includes: Careful surgical bleeding control Blood component transfusion Hemoglobin monitoring Use of clotting agents Cell salvage techniques Fluid resuscitation Blood transfusions may include: Packed red blood cells Platelets Plasma products The protocols help maintain oxygen delivery and organ function during significant blood loss.',
                'symptoms' => [
            ['value' => 'Severe bleeding during surgery or trauma'],
            ['value' => 'Low blood pressure or shock'],
            ['value' => 'Weakness or dizziness'],
            ['value' => 'Low hemoglobin levels'],
            ['value' => 'Pale skin or rapid heartbeat'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Transfusion reactions'],
            ['value' => 'Infection transmission risk'],
            ['value' => 'Fluid overload'],
            ['value' => 'Electrolyte disturbances'],
            ['value' => 'Clotting abnormalities'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor for fever or transfusion reactions'],
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Attend follow-up blood investigations'],
            ['value' => 'Take iron or supplements if prescribed'],
            ['value' => 'Report excessive bleeding immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Transfusion reactions'],
            ['value' => 'Infection transmission risk'],
            ['value' => 'Fluid overload'],
            ['value' => 'Electrolyte disturbances'],
            ['value' => 'Clotting abnormalities'],
        ],
                'long_term_outlook' => 'Proper blood management improves surgical safety, reduces complications, supports organ function, and promotes better long-term recovery.',
                'conclusion' => '',
                'seo_title' => 'Blood Loss Management & Transfusion Protocols',
                'seo_description' => 'Blood loss management and transfusion protocols are medical strategies used to control bleeding, maintain blood circulation, and safely replace blood loss during and after surgery. These protocols are critical in major surgeries and trauma care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
