<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DefibrillatorsExternalCardioverterSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Defibrillators / External Cardioverter')],
            [
                'title' => 'Defibrillators / External Cardioverter',
                'slug' => Str::slug('Defibrillators / External Cardioverter'),
                'introduction' => 'Defibrillators and external cardioverters are life-saving cardiac devices used to restore normal heart rhythm during dangerous arrhythmias or cardiac arrest. These devices deliver controlled electrical shocks to stabilize the heart. They are essential components of emergency cardiac care systems.',
                'what_is' => 'Defibrillators are used in: Cardiac arrest Ventricular fibrillation Ventricular tachycardia Emergency arrhythmia treatment External cardioverters may also be used for planned rhythm correction in atrial fibrillation. The equipment is available in: Emergency rooms ICUs Cath Labs Ambulances Public emergency locations Rapid access to defibrillation significantly improves survival rates.',
                'symptoms' => [
            ['value' => 'Sudden collapse'],
            ['value' => 'Unconsciousness'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Severe palpitations'],
            ['value' => 'Cardiac arrest symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Skin burns from shock pads'],
            ['value' => 'Temporary arrhythmias after shock'],
            ['value' => 'Sedation-related risks during cardioversion'],
            ['value' => 'Rare clot-related complications'],
            ['value' => 'Chest discomfort after procedure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor heart rhythm continuously after procedure'],
            ['value' => 'Continue prescribed cardiac medications'],
            ['value' => 'Attend follow-up cardiac evaluations'],
            ['value' => 'Report recurrent palpitations promptly'],
            ['value' => 'Maintain regular cardiac monitoring schedules'],
        ],
                'surgery_risks' => [
            ['value' => 'Skin burns from shock pads'],
            ['value' => 'Temporary arrhythmias after shock'],
            ['value' => 'Sedation-related risks during cardioversion'],
            ['value' => 'Rare clot-related complications'],
            ['value' => 'Chest discomfort after procedure'],
        ],
                'long_term_outlook' => 'Rapid defibrillation and cardioversion improve survival from life-threatening arrhythmias and support better long-term cardiac recovery and rhythm stability.',
                'conclusion' => '',
                'seo_title' => 'Defibrillators / External Cardioverter',
                'seo_description' => 'Defibrillators and external cardioverters are life-saving cardiac devices used to restore normal heart rhythm during dangerous arrhythmias or cardiac arrest. These devices deliver controlled electrical shocks to stabilize the heart. They are essential components of emergency cardiac care systems.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
