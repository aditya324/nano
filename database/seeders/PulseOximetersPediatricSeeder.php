<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulseOximetersPediatricSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pulse Oximeters (Pediatric)')],
            [
                'title' => 'Pulse Oximeters (Pediatric)',
                'slug' => Str::slug('Pulse Oximeters (Pediatric)'),
                'introduction' => 'Pediatric pulse oximeters are monitoring devices used to measure oxygen saturation levels and pulse rate in infants and children.',
                'what_is' => 'These devices provide quick, non-invasive assessment of blood oxygen levels and help detect respiratory distress, heart disease, or oxygen deficiency. Pediatric pulse oximeters are specially designed with child-friendly sensors suitable for newborns, infants, and children.',
                'symptoms' => [
            ['value' => 'Shortness of breath or rapid breathing'],
            ['value' => 'Low oxygen saturation levels'],
            ['value' => 'Bluish discoloration of lips or fingers'],
            ['value' => 'Respiratory infections or asthma symptoms'],
            ['value' => 'Monitoring needs during surgery or intensive care'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed detection of oxygen deficiency without monitoring'],
            ['value' => 'Inaccurate readings due to poor sensor placement'],
            ['value' => 'Anxiety during continuous monitoring'],
            ['value' => 'Temporary skin irritation from sensors'],
            ['value' => 'Overdependence on device readings without clinical evaluation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Ensure proper sensor placement and calibration'],
            ['value' => 'Monitor oxygen levels regularly in sick children'],
            ['value' => 'Maintain device cleanliness and functionality'],
            ['value' => 'Report abnormal oxygen readings promptly'],
            ['value' => 'Use under trained medical supervision when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed detection of oxygen deficiency without monitoring'],
            ['value' => 'Inaccurate readings due to poor sensor placement'],
            ['value' => 'Anxiety during continuous monitoring'],
            ['value' => 'Temporary skin irritation from sensors'],
            ['value' => 'Overdependence on device readings without clinical evaluation'],
        ],
                'long_term_outlook' => 'Pediatric pulse oximeters support early detection of respiratory compromise and improve safety during emergency, inpatient, and neonatal care.',
                'conclusion' => '',
                'seo_title' => 'Pulse Oximeters (Pediatric)',
                'seo_description' => 'Pediatric pulse oximeters are monitoring devices used to measure oxygen saturation levels and pulse rate in infants and children.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
