<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalFusionSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Spinal Fusion Surgery')],
            [
                'title' => 'Spinal Fusion Surgery',
                'slug' => Str::slug('Spinal Fusion Surgery'),
                'introduction' => 'Spinal fusion surgery is a neurosurgical procedure performed to permanently connect two or more spinal vertebrae to improve spinal stability and reduce pain. The surgery is commonly used for spinal instability, deformity, fractures, or degenerative spinal conditions. Fusion helps prevent abnormal spinal movement.',
                'what_is' => 'The procedure may involve: Bone graft placement Metal rods and screws Stabilization implants Decompression procedures Spinal alignment correction Conditions treated include: Degenerative disc disease Spinal fractures Scoliosis Spinal instability Severe spinal stenosis Fusion surgery may involve cervical, thoracic, or lumbar spine regions.',
                'symptoms' => [
            ['value' => 'Chronic spinal pain'],
            ['value' => 'Spinal instability'],
            ['value' => 'Nerve compression symptoms'],
            ['value' => 'Difficulty standing or walking'],
            ['value' => 'Spinal deformity'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Implant failure'],
            ['value' => 'Infection'],
            ['value' => 'Non-union of fusion'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow spinal precautions carefully'],
            ['value' => 'Avoid heavy lifting during healing'],
            ['value' => 'Attend physiotherapy programs'],
            ['value' => 'Wear spinal braces if prescribed'],
            ['value' => 'Maintain follow-up imaging evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Implant failure'],
            ['value' => 'Infection'],
            ['value' => 'Non-union of fusion'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
        ],
                'long_term_outlook' => 'Spinal fusion improves stability and reduces pain in many spinal disorders. Long-term outcomes improve with rehabilitation and proper spine care.',
                'conclusion' => '',
                'seo_title' => 'Spinal Fusion Surgery',
                'seo_description' => 'Spinal fusion surgery is a neurosurgical procedure performed to permanently connect two or more spinal vertebrae to improve spinal stability and reduce pain. The surgery is commonly used for spinal instability, deformity, fractures, or degenerative spinal conditions. Fusion helps prevent abnormal spinal movement.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
