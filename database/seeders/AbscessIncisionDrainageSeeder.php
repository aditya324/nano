<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AbscessIncisionDrainageSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Abscess Incision & Drainage')],
            [
                'title' => 'Abscess Incision & Drainage',
                'slug' => Str::slug('Abscess Incision & Drainage'),
                'introduction' => 'Abscess incision and drainage is a minor surgical procedure performed to release pus from an infected cavity and relieve pain, swelling, and pressure.',
                'what_is' => 'An abscess forms due to localized bacterial infection and accumulation of pus within tissues. The procedure involves: Making a small incision Draining infected material Cleaning the abscess cavity Packing the wound if required Antibiotics may be used depending on infection severity and patient condition. Prompt drainage prevents spread of infection to surrounding tissues.',
                'symptoms' => [
            ['value' => 'Painful swollen lump'],
            ['value' => 'Redness and warmth over the skin'],
            ['value' => 'Fever or chills'],
            ['value' => 'Pus discharge'],
            ['value' => 'Tenderness at the affected site'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or discomfort'],
            ['value' => 'Recurrence of abscess'],
            ['value' => 'Spread of infection'],
            ['value' => 'Scarring after healing'],
            ['value' => 'Delayed wound closure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the wound clean and dry'],
            ['value' => 'Attend regular dressing changes'],
            ['value' => 'Complete the full course of antibiotics'],
            ['value' => 'Monitor for recurrent swelling or fever'],
            ['value' => 'Maintain proper personal hygiene'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or discomfort'],
            ['value' => 'Recurrence of abscess'],
            ['value' => 'Spread of infection'],
            ['value' => 'Scarring after healing'],
            ['value' => 'Delayed wound closure'],
        ],
                'long_term_outlook' => 'Most abscesses heal completely after proper drainage and infection control, resulting in good recovery and relief of symptoms.',
                'conclusion' => '',
                'seo_title' => 'Abscess Incision & Drainage',
                'seo_description' => 'Abscess incision and drainage is a minor surgical procedure performed to release pus from an infected cavity and relieve pain, swelling, and pressure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
