<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperbaricOxygenTherapyHBOTSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hyperbaric Oxygen Therapy (HBOT)')],
            [
                'title' => 'Hyperbaric Oxygen Therapy (HBOT)',
                'slug' => Str::slug('Hyperbaric Oxygen Therapy (HBOT)'),
                'introduction' => 'Hyperbaric Oxygen Therapy (HBOT) delivers high concentrations of oxygen in a pressurized chamber to support healing of diabetic foot wounds.',
                'what_is' => 'HBOT increases oxygen delivery to damaged tissues, helping improve wound healing and infection control in selected diabetic foot cases.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Chronic diabetic foot ulcers'],
            ['value' => 'Poor wound healing'],
            ['value' => 'Osteomyelitis'],
            ['value' => 'Ischemic diabetic wounds'],
            ['value' => 'Post-surgical wound recovery'],
            ['value' => 'Treatments'],
            ['value' => 'Patients receive oxygen therapy inside a specialized chamber where increased atmospheric pressure enhances oxygen absorption into tissues and promotes healing.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved wound healing'],
            ['value' => 'Better oxygen supply to tissues'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Enhanced tissue repair'],
            ['value' => 'Support for limb salvage'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Ear discomfort from pressure changes'],
            ['value' => 'Claustrophobia'],
            ['value' => 'Temporary vision changes'],
            ['value' => 'Requires multiple treatment sessions'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue wound care and dressings'],
            ['value' => 'Monitor blood sugar levels'],
            ['value' => 'Follow specialist advice'],
            ['value' => 'Regular wound evaluation'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'HBOT may improve healing in selected severe diabetic foot ulcers and reduce long-term complications.',
                'conclusion' => '',
                'seo_title' => 'Hyperbaric Oxygen Therapy (HBOT)',
                'seo_description' => 'Hyperbaric Oxygen Therapy (HBOT) delivers high concentrations of oxygen in a pressurized chamber to support healing of diabetic foot wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
