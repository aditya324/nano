<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CultureGuidedAntibioticTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Culture-Guided Antibiotic Therapy')],
            [
                'title' => 'Culture-Guided Antibiotic Therapy',
                'slug' => Str::slug('Culture-Guided Antibiotic Therapy'),
                'introduction' => 'Culture-guided antibiotic therapy uses laboratory testing to identify infection-causing bacteria and select the most effective antibiotic treatment.',
                'what_is' => 'This targeted approach improves treatment accuracy in diabetic foot infections and reduces unnecessary antibiotic use.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Severe diabetic foot infections'],
            ['value' => 'Recurrent infections'],
            ['value' => 'Osteomyelitis'],
            ['value' => 'Resistant bacterial infections'],
            ['value' => 'Non-healing ulcers'],
            ['value' => 'Treatments'],
            ['value' => 'Wound samples are collected for bacterial culture and sensitivity testing. Antibiotics are then selected based on laboratory results to provide effective infection control.'],
            ['value' => 'Benefits'],
            ['value' => 'Targeted infection treatment'],
            ['value' => 'Reduced antibiotic resistance'],
            ['value' => 'Faster infection control'],
            ['value' => 'Improved healing outcomes'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Delay while awaiting culture reports'],
            ['value' => 'Persistent resistant infections'],
            ['value' => 'Need for prolonged antibiotic therapy'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Adherence to prescribed antibiotics'],
            ['value' => 'Routine wound review'],
            ['value' => 'Repeat cultures if required'],
            ['value' => 'Blood sugar management'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Culture-guided therapy improves infection recovery and reduces complications associated with resistant organisms.',
                'conclusion' => '',
                'seo_title' => 'Culture-Guided Antibiotic Therapy',
                'seo_description' => 'Culture-guided antibiotic therapy uses laboratory testing to identify infection-causing bacteria and select the most effective antibiotic treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
