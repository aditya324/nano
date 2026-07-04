<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostOperativeNeurosurgicalICUCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Post-Operative Neurosurgical ICU Care')],
            [
                'title' => 'Post-Operative Neurosurgical ICU Care',
                'slug' => Str::slug('Post-Operative Neurosurgical ICU Care'),
                'introduction' => 'Post-operative neurosurgical ICU care is specialized intensive monitoring and treatment provided after major brain or spinal surgery. The goal is to closely observe neurological function, manage complications, and support recovery during the critical post-surgical period. Continuous monitoring improves patient safety and surgical outcomes.',
                'what_is' => 'ICU care includes: Neurological monitoring Brain pressure assessment Ventilator support when required Pain management Infection prevention Fluid and electrolyte monitoring Doctors observe for: Brain swelling Bleeding Seizures Respiratory complications Neurological deterioration Patients may require prolonged ICU observation depending on surgical complexity and neurological condition.',
                'symptoms' => [
            ['value' => 'Post-surgical neurological weakness'],
            ['value' => 'Altered consciousness'],
            ['value' => 'Severe pain'],
            ['value' => 'Brain swelling symptoms'],
            ['value' => 'Respiratory support requirement'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Seizures'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Neurological worsening'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU monitoring until stable'],
            ['value' => 'Follow medication and rehabilitation plans'],
            ['value' => 'Attend follow-up imaging studies'],
            ['value' => 'Monitor for fever or worsening symptoms'],
            ['value' => 'Gradually resume activities as advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Seizures'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Neurological worsening'],
        ],
                'long_term_outlook' => 'Specialized ICU care improves post-surgical stabilization and neurological recovery. Long-term outcomes depend on the underlying neurosurgical condition and rehabilitation progress.',
                'conclusion' => '',
                'seo_title' => 'Post-Operative Neurosurgical ICU Care',
                'seo_description' => 'Post-operative neurosurgical ICU care is specialized intensive monitoring and treatment provided after major brain or spinal surgery. The goal is to closely observe neurological function, manage complications, and support recovery during the critical post-surgical period. Continuous monitoring improves patient safety and surgical outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
