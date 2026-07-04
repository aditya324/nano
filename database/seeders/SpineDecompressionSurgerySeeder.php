<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpineDecompressionSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Spine Decompression Surgery')],
            [
                'title' => 'Spine Decompression Surgery',
                'slug' => Str::slug('Spine Decompression Surgery'),
                'introduction' => 'Spine decompression surgery is a neurosurgical procedure performed to relieve pressure on the spinal cord or spinal nerves caused by narrowing, disc problems, tumors, or degenerative spinal disease. The surgery helps reduce pain, weakness, numbness, and mobility problems. It is commonly performed for cervical, thoracic, or lumbar spine disorders.',
                'what_is' => 'The procedure may include: Removal of compressed bone or disc material Enlargement of spinal canal space Nerve root decompression Stabilization procedures when needed Conditions treated include: Spinal stenosis Herniated discs Nerve compression Degenerative spine disease Spinal tumors Advanced imaging and microsurgical techniques improve surgical accuracy and safety.',
                'symptoms' => [
            ['value' => 'Back or neck pain'],
            ['value' => 'Leg or arm numbness'],
            ['value' => 'Weakness in limbs'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Loss of balance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
            ['value' => 'Spinal instability'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow spine movement precautions carefully'],
            ['value' => 'Attend physiotherapy sessions regularly'],
            ['value' => 'Avoid heavy lifting during recovery'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Attend scheduled follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
            ['value' => 'Spinal instability'],
        ],
                'long_term_outlook' => 'Spine decompression surgery often improves pain relief and neurological function. Long-term recovery depends on spinal condition severity and rehabilitation participation.',
                'conclusion' => '',
                'seo_title' => 'Spine Decompression Surgery',
                'seo_description' => 'Spine decompression surgery is a neurosurgical procedure performed to relieve pressure on the spinal cord or spinal nerves caused by narrowing, disc problems, tumors, or degenerative spinal disease. The surgery helps reduce pain, weakness, numbness, and mobility problems. It is commonly performed for cervical, thoracic, or lumbar spine disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
