<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnticoagulationTherapyHeparinWarfarinNOACsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anticoagulation Therapy (Heparin, Warfarin, NOACs)')],
            [
                'title' => 'Anticoagulation Therapy (Heparin, Warfarin, NOACs)',
                'slug' => Str::slug('Anticoagulation Therapy (Heparin, Warfarin, NOACs)'),
                'introduction' => 'Anticoagulation therapy prevents formation and growth of blood clots within arteries and veins.',
                'what_is' => 'These medications are vital in treating deep vein thrombosis, pulmonary embolism, atrial fibrillation, and vascular thrombosis.',
                'symptoms' => [
            ['value' => 'Leg swelling'],
            ['value' => 'Pain due to blood clots'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Stroke symptoms'],
            ['value' => 'Recurrent thrombosis'],
        ],
                'causes' => [
            ['value' => 'Deep vein thrombosis'],
            ['value' => 'Pulmonary embolism'],
            ['value' => 'Atrial fibrillation'],
            ['value' => 'Hypercoagulable disorders'],
            ['value' => 'Arterial thrombosis'],
            ['value' => 'Post-surgical clot risk'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Internal hemorrhage'],
            ['value' => 'Drug interactions'],
            ['value' => 'Bruising'],
            ['value' => 'Rare clot recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes injectable heparin, oral warfarin, or newer oral anticoagulants (NOACs). Duration of therapy depends on the clotting condition and patient risk profile.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular INR monitoring for warfarin'],
            ['value' => 'Avoid injury-prone activities'],
            ['value' => 'Medication adherence'],
            ['value' => 'Routine blood tests'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Internal hemorrhage'],
            ['value' => 'Drug interactions'],
            ['value' => 'Bruising'],
            ['value' => 'Rare clot recurrence'],
        ],
                'long_term_outlook' => 'Proper anticoagulation therapy effectively prevents life-threatening clot complications and improves vascular outcomes.',
                'conclusion' => '',
                'seo_title' => 'Anticoagulation Therapy (Heparin, Warfarin, NOACs)',
                'seo_description' => 'Anticoagulation therapy prevents formation and growth of blood clots within arteries and veins.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
