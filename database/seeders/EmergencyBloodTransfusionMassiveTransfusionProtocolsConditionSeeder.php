<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyBloodTransfusionMassiveTransfusionProtocolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Emergency Blood Transfusion & Massive Transfusion Protocols')],
            [
                'name' => 'Emergency Blood Transfusion & Massive Transfusion Protocols',
                'slug' => Str::slug('Emergency Blood Transfusion & Massive Transfusion Protocols'),
                'h1' => 'Emergency Blood Transfusion & Massive Transfusion Protocols',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Emergency blood transfusion and massive transfusion protocols are critical care procedures used to rapidly replace blood and blood components in patients experiencing severe blood loss, hemorrhagic shock, trauma, major surgery complications, or life-threatening bleeding disorders. These procedures help restore blood volume, improve oxygen delivery, stabilize circulation, and prevent organ failure during medical emergencies.',
                'about_more' => '',
                'overview' => 'Emergency blood transfusion involves the administration of packed red blood cells, plasma, platelets, and other blood products to replace lost blood and maintain hemodynamic stability. Massive transfusion protocols are specialized emergency protocols activated in cases of severe or uncontrolled bleeding requiring rapid and coordinated transfusion of large volumes of blood products. These procedures are commonly performed in trauma centers, emergency departments, operating rooms, obstetric emergencies, and intensive care units under close monitoring by multidisciplinary critical care teams.',
                'symptoms' => [
            ['value' => 'Severe bleeding or hemorrhage'],
            ['value' => 'Low blood pressure or signs of shock'],
            ['value' => 'Rapid heartbeat, weakness, or dizziness'],
            ['value' => 'Pale skin, confusion, or reduced consciousness'],
            ['value' => 'Organ dysfunction due to inadequate blood circulation and oxygen delivery'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Allergic or transfusion-related reactions'],
            ['value' => 'Blood clotting abnormalities or electrolyte imbalance'],
            ['value' => 'Infection risk associated with blood product administration'],
            ['value' => 'Fluid overload or respiratory complications'],
            ['value' => 'Multi-organ dysfunction in severe hemorrhagic emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency blood transfusion and massive transfusion protocols focus on restoring blood volume, improving tissue oxygenation, stabilizing circulation, and controlling bleeding. Management may include transfusion of red blood cells, plasma, platelets, cryoprecipitate, intravenous fluids, hemorrhage control procedures, oxygen therapy, vasopressor support, surgical intervention, and intensive care monitoring. Patients may also require trauma surgery, obstetric intervention, vascular procedures, coagulation management, and rehabilitation support depending on the underlying cause of blood loss. Multidisciplinary critical care management is essential to improve survival and recovery outcomes.'],
            ['value' => 'Continuous monitoring of vital signs and blood parameters'],
            ['value' => 'Observation for transfusion-related reactions or complications'],
            ['value' => 'Laboratory evaluation of hemoglobin, coagulation, and electrolyte status'],
            ['value' => 'Ongoing bleeding control and supportive critical care management'],
            ['value' => 'Long-term medical follow-up and rehabilitation when required'],
        ],
                'recovery' => 'The long-term outlook following emergency blood transfusion and massive transfusion protocols depends on the severity of blood loss, speed of treatment, underlying medical condition, and overall patient health. Early intervention, effective hemorrhage control, critical care support, rehabilitation, nutritional therapy, and regular medical follow-up significantly help improve survival, restore organ function, reduce complications, and enhance overall quality of life. ___________________ 12. Defibrillation / Cardioversion Defibrillation / Cardioversion Procedures',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Emergency Blood Transfusion & Massive Transfusion Protocols',
                'meta_description' => 'Emergency blood transfusion and massive transfusion protocols are critical care procedures used to rapidly replace blood and blood components in patients experi',
                'meta_keywords' => '',
            ]
        );
    }
}
