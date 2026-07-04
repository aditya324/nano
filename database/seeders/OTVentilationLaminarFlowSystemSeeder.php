<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OTVentilationLaminarFlowSystemSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('OT Ventilation & Laminar Flow System')],
            [
                'title' => 'OT Ventilation & Laminar Flow System',
                'slug' => Str::slug('OT Ventilation & Laminar Flow System'),
                'introduction' => 'Operating theater (OT) ventilation and laminar flow systems are specialized air purification systems designed to maintain sterile surgical environments and reduce airborne contamination.',
                'what_is' => 'These systems provide: Filtered airflow Controlled air pressure Temperature regulation Airborne particle reduction Laminar flow technology creates continuous unidirectional airflow that minimizes bacterial contamination during surgery. These systems are especially important in: Joint replacement surgery Neurosurgery Organ transplant surgery Major abdominal procedures They significantly improve infection control standards in modern operating rooms.',
                'symptoms' => [
            ['value' => 'Patients undergoing major surgery'],
            ['value' => 'High infection-risk procedures'],
            ['value' => 'Implant or prosthetic surgeries'],
            ['value' => 'Long-duration operations'],
            ['value' => 'Critical care surgical procedures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Equipment malfunction affecting air quality'],
            ['value' => 'Air contamination if maintenance is poor'],
            ['value' => 'Increased infection risk without proper airflow'],
            ['value' => 'Technical maintenance requirements'],
            ['value' => 'Rare ventilation-related disruptions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain wound hygiene carefully'],
            ['value' => 'Monitor for signs of infection'],
            ['value' => 'Attend regular postoperative follow-up visits'],
            ['value' => 'Follow antibiotic recommendations if prescribed'],
            ['value' => 'Report fever or wound redness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Equipment malfunction affecting air quality'],
            ['value' => 'Air contamination if maintenance is poor'],
            ['value' => 'Increased infection risk without proper airflow'],
            ['value' => 'Technical maintenance requirements'],
            ['value' => 'Rare ventilation-related disruptions'],
        ],
                'long_term_outlook' => 'Advanced OT ventilation systems improve surgical safety, reduce infection rates, and enhance overall postoperative recovery and outcomes.',
                'conclusion' => '',
                'seo_title' => 'OT Ventilation & Laminar Flow System',
                'seo_description' => 'Operating theater (OT) ventilation and laminar flow systems are specialized air purification systems designed to maintain sterile surgical environments and reduce airborne contamination.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
