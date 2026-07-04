<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpineSurgeryInstrumentSetsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Spine Surgery Instrument Sets')],
            [
                'title' => 'Spine Surgery Instrument Sets',
                'slug' => Str::slug('Spine Surgery Instrument Sets'),
                'introduction' => 'Spine surgery instrument sets are specialized surgical tools designed for spinal procedures involving decompression, stabilization, fusion, and spinal reconstruction. These instruments help neurosurgeons safely perform delicate spinal operations with greater precision and efficiency. Modern spine sets support both open and minimally invasive techniques.',
                'what_is' => 'The instrument sets may include: Spinal retractors Bone cutting tools Screw and rod systems Microsurgical instruments Minimally invasive surgical devices The equipment is used in: Spine decompression surgery Spinal fusion Disc surgery Tumor surgery Trauma stabilization Advanced instrumentation improves surgical accuracy and spinal stabilization.',
                'symptoms' => [
            ['value' => 'Chronic spinal pain'],
            ['value' => 'Spinal instability'],
            ['value' => 'Nerve compression'],
            ['value' => 'Spinal fractures'],
            ['value' => 'Spinal deformities'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Instrument-related injury'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Implant complications'],
            ['value' => 'Neurological deficits'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow spinal rehabilitation plans'],
            ['value' => 'Avoid heavy lifting during healing'],
            ['value' => 'Attend follow-up imaging evaluations'],
            ['value' => 'Maintain spinal precautions carefully'],
            ['value' => 'Continue medications properly'],
        ],
                'surgery_risks' => [
            ['value' => 'Instrument-related injury'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Implant complications'],
            ['value' => 'Neurological deficits'],
        ],
                'long_term_outlook' => 'Advanced spinal instrumentation supports improved spinal stability and surgical outcomes. Long-term recovery depends on rehabilitation and spinal healing.',
                'conclusion' => '',
                'seo_title' => 'Spine Surgery Instrument Sets',
                'seo_description' => 'Spine surgery instrument sets are specialized surgical tools designed for spinal procedures involving decompression, stabilization, fusion, and spinal reconstruction. These instruments help neurosurgeons safely perform delicate spinal operations with greater precision and efficiency. Modern spine sets support both open and minimally invasive techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
