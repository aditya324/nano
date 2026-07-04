<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InstrumentationandFixationofSpineSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Instrumentation and Fixation of Spine')],
            [
                'title' => 'Instrumentation and Fixation of Spine',
                'slug' => Str::slug('Instrumentation and Fixation of Spine'),
                'introduction' => 'Instrumentation and fixation of the spine involve the use of metal implants such as screws, rods, plates, and cages to stabilize the spinal column during spinal surgery. These procedures help maintain spinal alignment and support healing after decompression, trauma, or deformity correction. Advanced fixation systems improve spinal stability and recovery.',
                'what_is' => 'The procedure includes: Placement of spinal implants Stabilization of vertebrae Correction of spinal deformity Support for spinal fusion healing Imaging-guided implant positioning Instrumentation is commonly used in: Spinal fractures Scoliosis surgery Spinal instability Degenerative spine disease Tumor-related spinal reconstruction Modern techniques use minimally invasive and navigation-assisted methods whenever possible.',
                'symptoms' => [
            ['value' => 'Severe spinal instability'],
            ['value' => 'Chronic back pain'],
            ['value' => 'Spinal deformity'],
            ['value' => 'Weakness or numbness'],
            ['value' => 'Difficulty walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Implant loosening or failure'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent spinal pain'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow spine movement restrictions carefully'],
            ['value' => 'Attend rehabilitation and physiotherapy sessions'],
            ['value' => 'Maintain proper posture during recovery'],
            ['value' => 'Attend follow-up imaging evaluations'],
            ['value' => 'Report worsening neurological symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Implant loosening or failure'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Bleeding'],
            ['value' => 'Persistent spinal pain'],
        ],
                'long_term_outlook' => 'Spinal instrumentation improves stability, alignment, and functional recovery. Long-term outcomes depend on spinal healing and rehabilitation compliance.',
                'conclusion' => '',
                'seo_title' => 'Instrumentation and Fixation of Spine',
                'seo_description' => 'Instrumentation and fixation of the spine involve the use of metal implants such as screws, rods, plates, and cages to stabilize the spinal column during spinal surgery. These procedures help maintain spinal alignment and support healing after decompression, trauma, or deformity correction. Advanced fixation systems improve spinal stability and recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
