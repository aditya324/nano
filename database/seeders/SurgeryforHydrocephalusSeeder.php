<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgeryforHydrocephalusSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgery for Hydrocephalus')],
            [
                'title' => 'Surgery for Hydrocephalus',
                'slug' => Str::slug('Surgery for Hydrocephalus'),
                'introduction' => 'Surgery for hydrocephalus involves neurosurgical procedures designed to treat abnormal accumulation of cerebrospinal fluid within the brain ventricles. Hydrocephalus can increase brain pressure and cause neurological damage if untreated. Surgical treatment restores proper CSF circulation and pressure balance.',
                'what_is' => 'Treatment options may include: VP shunt surgery Endoscopic third ventriculostomy Temporary CSF drainage procedures Pressure monitoring systems Doctors evaluate: Brain imaging studies Ventricular enlargement Neurological symptoms Underlying causes of CSF obstruction Hydrocephalus surgery is performed in both children and adults depending on the condition. Long-term neurosurgical follow-up is essential after treatment.',
                'symptoms' => [
            ['value' => 'Persistent headache'],
            ['value' => 'Vomiting'],
            ['value' => 'Enlarged head in infants'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Vision or memory problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Shunt malfunction'],
            ['value' => 'Infection'],
            ['value' => 'Brain pressure complications'],
            ['value' => 'Seizures'],
            ['value' => 'Repeat surgical procedures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular neurosurgical evaluations'],
            ['value' => 'Monitor for signs of increased brain pressure'],
            ['value' => 'Continue prescribed medications'],
            ['value' => 'Participate in rehabilitation if necessary'],
            ['value' => 'Seek urgent care for worsening symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Shunt malfunction'],
            ['value' => 'Infection'],
            ['value' => 'Brain pressure complications'],
            ['value' => 'Seizures'],
            ['value' => 'Repeat surgical procedures'],
        ],
                'long_term_outlook' => 'Hydrocephalus surgery improves brain pressure control and neurological function. Long-term recovery depends on the underlying cause and effectiveness of CSF drainage.',
                'conclusion' => '',
                'seo_title' => 'Surgery for Hydrocephalus',
                'seo_description' => 'Surgery for hydrocephalus involves neurosurgical procedures designed to treat abnormal accumulation of cerebrospinal fluid within the brain ventricles. Hydrocephalus can increase brain pressure and cause neurological damage if untreated. Surgical treatment restores proper CSF circulation and pressure balance.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
