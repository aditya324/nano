<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SyringomyeliaDecompressionSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Syringomyelia Decompression Surgery')],
            [
                'title' => 'Syringomyelia Decompression Surgery',
                'slug' => Str::slug('Syringomyelia Decompression Surgery'),
                'introduction' => 'Syringomyelia decompression surgery is performed to treat fluid-filled cavities called syrinxes that develop within the spinal cord. The procedure aims to restore normal cerebrospinal fluid flow and reduce spinal cord pressure. Untreated syringomyelia can lead to progressive neurological damage.',
                'what_is' => 'The surgery may include: Decompression of obstructed CSF pathways Treatment of associated Chiari malformation Drainage procedures for syrinx cavities Spinal cord pressure relief Doctors use MRI imaging to evaluate: Syrinx size Spinal cord compression CSF flow abnormalities Associated neurological conditions Surgical treatment helps prevent progression of neurological deficits.',
                'symptoms' => [
            ['value' => 'Weakness in arms or legs'],
            ['value' => 'Chronic neck or back pain'],
            ['value' => 'Numbness or sensory loss'],
            ['value' => 'Muscle wasting'],
            ['value' => 'Balance difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Neurological worsening'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Syrinx recurrence'],
            ['value' => 'Bleeding complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up MRI appointments'],
            ['value' => 'Continue rehabilitation therapy'],
            ['value' => 'Avoid spinal strain during healing'],
            ['value' => 'Monitor neurological symptoms carefully'],
            ['value' => 'Maintain regular neurosurgical follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Neurological worsening'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Syrinx recurrence'],
            ['value' => 'Bleeding complications'],
        ],
                'long_term_outlook' => 'Syringomyelia surgery can stabilize neurological symptoms and prevent further spinal cord damage. Long-term recovery depends on the severity and duration of spinal cord involvement.',
                'conclusion' => '',
                'seo_title' => 'Syringomyelia Decompression Surgery',
                'seo_description' => 'Syringomyelia decompression surgery is performed to treat fluid-filled cavities called syrinxes that develop within the spinal cord. The procedure aims to restore normal cerebrospinal fluid flow and reduce spinal cord pressure. Untreated syringomyelia can lead to progressive neurological damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
