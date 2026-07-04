<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicThirdVentriculostomyETVSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Third Ventriculostomy (ETV)')],
            [
                'title' => 'Endoscopic Third Ventriculostomy (ETV)',
                'slug' => Str::slug('Endoscopic Third Ventriculostomy (ETV)'),
                'introduction' => 'Endoscopic third ventriculostomy (ETV) is a minimally invasive neurosurgical procedure used to treat certain types of hydrocephalus by creating an internal pathway for cerebrospinal fluid circulation within the brain. The procedure may reduce the need for permanent shunt placement. ETV is performed using advanced neuroendoscopic techniques.',
                'what_is' => 'The procedure includes: Small skull opening creation Neuroendoscope insertion into the brain ventricles Creation of a small opening in the third ventricle floor Restoration of normal CSF flow ETV is commonly used for: Obstructive hydrocephalus Aqueductal stenosis Selected pediatric hydrocephalus cases The procedure avoids external shunt tubing and reduces long-term shunt-related complications.',
                'symptoms' => [
            ['value' => 'Headache'],
            ['value' => 'Vomiting'],
            ['value' => 'Enlarged head in children'],
            ['value' => 'Vision disturbances'],
            ['value' => 'Balance or gait problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Failure of the procedure'],
            ['value' => 'Need for additional surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend imaging and neurological follow-up appointments'],
            ['value' => 'Monitor for headache or vomiting'],
            ['value' => 'Avoid strenuous activities temporarily'],
            ['value' => 'Report neurological worsening immediately'],
            ['value' => 'Continue rehabilitation if needed'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Failure of the procedure'],
            ['value' => 'Need for additional surgery'],
        ],
                'long_term_outlook' => 'ETV provides effective long-term hydrocephalus control in selected patients. Successful procedures may eliminate long-term dependence on VP shunts.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Third Ventriculostomy (ETV)',
                'seo_description' => 'Endoscopic third ventriculostomy (ETV) is a minimally invasive neurosurgical procedure used to treat certain types of hydrocephalus by creating an internal pathway for cerebrospinal fluid circulation within the brain. The procedure may reduce the need for permanent shunt placement. ETV is performed using advanced neuroendoscopic techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
