<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrainAbscessDrainageSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Brain Abscess Drainage')],
            [
                'title' => 'Brain Abscess Drainage',
                'slug' => Str::slug('Brain Abscess Drainage'),
                'introduction' => 'Brain abscess drainage is an emergency neurosurgical procedure performed to remove collections of infected pus within the brain. Untreated brain abscesses can cause severe neurological damage, increased brain pressure, and life-threatening infection. Surgical drainage helps reduce infection and relieve brain compression.',
                'what_is' => 'The procedure may involve: Burr hole drainage Craniotomy for abscess removal Collection of samples for laboratory testing Brain pressure relief Long-term antibiotic coordination Doctors use imaging studies to: Locate the abscess Assess brain swelling Monitor response to treatment The procedure is usually combined with prolonged intravenous antibiotic therapy.',
                'symptoms' => [
            ['value' => 'Severe headache'],
            ['value' => 'Fever'],
            ['value' => 'Seizures'],
            ['value' => 'Weakness or confusion'],
            ['value' => 'Neurological deterioration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Brain swelling'],
            ['value' => 'Seizures'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Recurrence of abscess'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete full antibiotic treatment course'],
            ['value' => 'Attend follow-up brain imaging appointments'],
            ['value' => 'Monitor for fever or worsening symptoms'],
            ['value' => 'Continue seizure medications if prescribed'],
            ['value' => 'Attend rehabilitation if necessary'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Brain swelling'],
            ['value' => 'Seizures'],
            ['value' => 'Neurological deficits'],
            ['value' => 'Recurrence of abscess'],
        ],
                'long_term_outlook' => 'Early abscess drainage and infection treatment improve survival and neurological recovery. Long-term outcomes depend on infection severity and speed of treatment.',
                'conclusion' => '',
                'seo_title' => 'Brain Abscess Drainage',
                'seo_description' => 'Brain abscess drainage is an emergency neurosurgical procedure performed to remove collections of infected pus within the brain. Untreated brain abscesses can cause severe neurological damage, increased brain pressure, and life-threatening infection. Surgical drainage helps reduce infection and relieve brain compression.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
