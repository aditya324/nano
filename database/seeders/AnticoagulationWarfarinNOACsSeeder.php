<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnticoagulationWarfarinNOACsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anticoagulation (Warfarin, NOACs)')],
            [
                'title' => 'Anticoagulation (Warfarin, NOACs)',
                'slug' => Str::slug('Anticoagulation (Warfarin, NOACs)'),
                'introduction' => 'Anticoagulation therapy involves medications that reduce blood clot formation by interfering with the body’s clotting mechanisms. These medicines help prevent stroke, deep vein thrombosis, pulmonary embolism, and clot-related complications in heart conditions. Anticoagulation is especially important in patients with atrial fibrillation and artificial heart valves.',
                'what_is' => 'Common anticoagulants include: Warfarin Apixaban Rivaroxaban Dabigatran Edoxaban These medications are used for: Atrial fibrillation Venous thromboembolism Mechanical heart valves Pulmonary embolism Stroke prevention Regular monitoring may be required depending on the medication type. Treatment plans are individualized according to bleeding risk and cardiovascular condition.',
                'symptoms' => [
            ['value' => 'Irregular heartbeat'],
            ['value' => 'Previous stroke or clot history'],
            ['value' => 'Swelling or pain in the legs'],
            ['value' => 'Shortness of breath from pulmonary embolism'],
            ['value' => 'Heart valve replacement history'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased bleeding risk'],
            ['value' => 'Nosebleeds or gum bleeding'],
            ['value' => 'Internal bleeding complications'],
            ['value' => 'Drug and food interactions'],
            ['value' => 'Need for frequent blood monitoring with warfarin'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take anticoagulants consistently at the same time daily'],
            ['value' => 'Attend regular blood monitoring if advised'],
            ['value' => 'Avoid high-risk activities causing injury'],
            ['value' => 'Inform healthcare providers before procedures'],
            ['value' => 'Report bleeding or black stools immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased bleeding risk'],
            ['value' => 'Nosebleeds or gum bleeding'],
            ['value' => 'Internal bleeding complications'],
            ['value' => 'Drug and food interactions'],
            ['value' => 'Need for frequent blood monitoring with warfarin'],
        ],
                'long_term_outlook' => 'Proper anticoagulation therapy greatly reduces clot-related complications and improves long-term survival in patients with cardiovascular and thromboembolic disorders.',
                'conclusion' => '',
                'seo_title' => 'Anticoagulation (Warfarin, NOACs)',
                'seo_description' => 'Anticoagulation therapy involves medications that reduce blood clot formation by interfering with the body’s clotting mechanisms. These medicines help prevent stroke, deep vein thrombosis, pulmonary embolism, and clot-related complications in heart conditions. Anticoagulation is especially important in patients with atrial fibrillation and artificial heart valves.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
