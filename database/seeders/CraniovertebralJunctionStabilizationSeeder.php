<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CraniovertebralJunctionStabilizationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Craniovertebral Junction Stabilization')],
            [
                'title' => 'Craniovertebral Junction Stabilization',
                'slug' => Str::slug('Craniovertebral Junction Stabilization'),
                'introduction' => 'Craniovertebral junction stabilization is a complex neurosurgical procedure performed to stabilize the area where the skull meets the upper cervical spine. This region controls important neurological and spinal functions, and instability can cause severe neurological complications. The surgery helps protect the spinal cord and restore structural stability.',
                'what_is' => 'The procedure may involve: Placement of screws and rods Bone fusion techniques Decompression of neural structures Correction of spinal instability Advanced imaging guidance Conditions treated include: Craniovertebral instability Congenital abnormalities Trauma Rheumatoid involvement Basilar invagination The surgery requires careful neurological monitoring and specialized surgical planning.',
                'symptoms' => [
            ['value' => 'Neck pain'],
            ['value' => 'Weakness in limbs'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Balance problems'],
            ['value' => 'Compression-related neurological symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Nerve or spinal cord injury'],
            ['value' => 'Infection'],
            ['value' => 'Implant-related complications'],
            ['value' => 'Reduced neck movement'],
            ['value' => 'Bleeding complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wear cervical support if advised'],
            ['value' => 'Avoid sudden neck movements'],
            ['value' => 'Attend rehabilitation sessions regularly'],
            ['value' => 'Follow spinal precautions carefully'],
            ['value' => 'Attend regular neurosurgical follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Nerve or spinal cord injury'],
            ['value' => 'Infection'],
            ['value' => 'Implant-related complications'],
            ['value' => 'Reduced neck movement'],
            ['value' => 'Bleeding complications'],
        ],
                'long_term_outlook' => 'Craniovertebral stabilization improves spinal safety and neurological protection. Long-term recovery depends on spinal healing and rehabilitation progress.',
                'conclusion' => '',
                'seo_title' => 'Craniovertebral Junction Stabilization',
                'seo_description' => 'Craniovertebral junction stabilization is a complex neurosurgical procedure performed to stabilize the area where the skull meets the upper cervical spine. This region controls important neurological and spinal functions, and instability can cause severe neurological complications. The surgery helps protect the spinal cord and restore structural stability.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
