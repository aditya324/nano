<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BurrHoleSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Burr Hole Surgery')],
            [
                'title' => 'Burr Hole Surgery',
                'slug' => Str::slug('Burr Hole Surgery'),
                'introduction' => 'Burr hole surgery is a minimally invasive neurosurgical procedure in which small openings are created in the skull to access the brain for drainage, pressure relief, or diagnostic purposes. The procedure is commonly used for brain bleeding, fluid drainage, or emergency pressure reduction. It is less extensive than major craniotomy surgery.',
                'what_is' => 'The procedure may involve: Creation of one or more small skull openings Drainage of blood or fluid Pressure relief within the skull Placement of drainage systems Neurological monitoring Common indications include: Chronic subdural hematoma Hydrocephalus Brain abscess drainage Emergency intracranial pressure management Burr hole surgery is often performed under general anesthesia with imaging guidance.',
                'symptoms' => [
            ['value' => 'Headache'],
            ['value' => 'Confusion'],
            ['value' => 'Weakness'],
            ['value' => 'Drowsiness'],
            ['value' => 'Neurological deterioration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Seizures'],
            ['value' => 'Fluid leakage'],
            ['value' => 'Recurrence of hematoma'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep surgical dressings clean and dry'],
            ['value' => 'Attend imaging follow-up appointments'],
            ['value' => 'Monitor for fever or worsening symptoms'],
            ['value' => 'Avoid strenuous activities temporarily'],
            ['value' => 'Continue prescribed medications'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Seizures'],
            ['value' => 'Fluid leakage'],
            ['value' => 'Recurrence of hematoma'],
        ],
                'long_term_outlook' => 'Burr hole surgery effectively relieves brain pressure and improves neurological symptoms in many patients. Recovery depends on the underlying neurological condition and overall brain health.',
                'conclusion' => '',
                'seo_title' => 'Burr Hole Surgery',
                'seo_description' => 'Burr hole surgery is a minimally invasive neurosurgical procedure in which small openings are created in the skull to access the brain for drainage, pressure relief, or diagnostic purposes. The procedure is commonly used for brain bleeding, fluid drainage, or emergency pressure reduction. It is less extensive than major craniotomy surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
