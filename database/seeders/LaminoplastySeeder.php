<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaminoplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laminoplasty')],
            [
                'title' => 'Laminoplasty',
                'slug' => Str::slug('Laminoplasty'),
                'introduction' => 'Laminoplasty is a spinal surgical procedure designed to enlarge the spinal canal while preserving part of the spinal bone structure. The surgery relieves pressure on the spinal cord without completely removing the lamina. It is commonly performed in cervical spinal cord compression disorders.',
                'what_is' => 'The procedure includes: Reconstruction of spinal canal space Partial opening and repositioning of lamina Spinal cord decompression Preservation of spinal stability Conditions treated include: Cervical spinal stenosis Cervical myelopathy Spinal cord compression Laminoplasty aims to maintain spinal movement while reducing nerve pressure.',
                'symptoms' => [
            ['value' => 'Neck pain'],
            ['value' => 'Hand weakness'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Numbness in arms or legs'],
            ['value' => 'Loss of coordination'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Neck stiffness'],
            ['value' => 'Persistent neurological symptoms'],
            ['value' => 'Bleeding complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wear cervical support if advised'],
            ['value' => 'Attend physiotherapy sessions regularly'],
            ['value' => 'Avoid sudden neck movements'],
            ['value' => 'Continue medications properly'],
            ['value' => 'Attend neurosurgical follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Neck stiffness'],
            ['value' => 'Persistent neurological symptoms'],
            ['value' => 'Bleeding complications'],
        ],
                'long_term_outlook' => 'Laminoplasty effectively improves spinal cord decompression while preserving spinal motion. Long-term recovery depends on neurological condition severity and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Laminoplasty',
                'seo_description' => 'Laminoplasty is a spinal surgical procedure designed to enlarge the spinal canal while preserving part of the spinal bone structure. The surgery relieves pressure on the spinal cord without completely removing the lamina. It is commonly performed in cervical spinal cord compression disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
