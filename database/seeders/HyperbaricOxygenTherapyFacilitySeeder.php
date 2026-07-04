<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperbaricOxygenTherapyFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hyperbaric Oxygen Therapy Facility')],
            [
                'title' => 'Hyperbaric Oxygen Therapy Facility',
                'slug' => Str::slug('Hyperbaric Oxygen Therapy Facility'),
                'introduction' => 'A Hyperbaric Oxygen Therapy (HBOT) facility provides specialized oxygen treatment for selected diabetic foot wounds.',
                'what_is' => 'HBOT improves oxygen delivery to damaged tissues and supports healing in severe or non-healing diabetic ulcers.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Chronic diabetic foot ulcers'],
            ['value' => 'Ischemic wounds'],
            ['value' => 'Osteomyelitis'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Post-surgical wound recovery'],
            ['value' => 'Treatments'],
            ['value' => 'Patients receive oxygen therapy inside a pressurized chamber to enhance tissue oxygenation and improve wound repair.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved wound healing'],
            ['value' => 'Better tissue oxygen supply'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Support for limb salvage'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Ear pressure discomfort'],
            ['value' => 'Claustrophobia'],
            ['value' => 'Temporary vision changes'],
            ['value' => 'Multiple treatment sessions required'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue wound care and diabetic management'],
            ['value' => 'Monitor blood sugar regularly'],
            ['value' => 'Attend scheduled HBOT sessions'],
            ['value' => 'Follow specialist recommendations'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'HBOT may improve healing outcomes and reduce the risk of amputation in selected diabetic foot patients.',
                'conclusion' => '',
                'seo_title' => 'Hyperbaric Oxygen Therapy Facility',
                'seo_description' => 'A Hyperbaric Oxygen Therapy (HBOT) facility provides specialized oxygen treatment for selected diabetic foot wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
