<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgeryforSpinalTumorsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgery for Spinal Tumors')],
            [
                'title' => 'Surgery for Spinal Tumors',
                'slug' => Str::slug('Surgery for Spinal Tumors'),
                'introduction' => 'Surgery for spinal tumors is a specialized neurosurgical procedure performed to remove tumors affecting the spine, spinal cord, or surrounding tissues. The surgery helps relieve nerve compression, preserve neurological function, and improve pain control. Tumors may be benign or malignant.',
                'what_is' => 'The surgery may involve: Tumor excision Spinal cord decompression Stabilization of the spine Microsurgical techniques Reconstruction procedures Conditions treated include: Intramedullary spinal tumors Extramedullary tumors Metastatic spinal tumors Vertebral tumors Advanced imaging and intraoperative monitoring improve surgical safety and precision.',
                'symptoms' => [
            ['value' => 'Severe back pain'],
            ['value' => 'Weakness in limbs'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Bladder or bowel dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Neurological deficits'],
            ['value' => 'Infection'],
            ['value' => 'Spinal instability'],
            ['value' => 'Bleeding'],
            ['value' => 'Tumor recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up MRI evaluations'],
            ['value' => 'Continue rehabilitation therapy'],
            ['value' => 'Follow spine precautions carefully'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Monitor neurological symptoms regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Neurological deficits'],
            ['value' => 'Infection'],
            ['value' => 'Spinal instability'],
            ['value' => 'Bleeding'],
            ['value' => 'Tumor recurrence'],
        ],
                'long_term_outlook' => 'Spinal tumor surgery improves neurological preservation and symptom relief. Long-term outcomes depend on tumor type, surgical success, and additional oncology treatment.',
                'conclusion' => '',
                'seo_title' => 'Surgery for Spinal Tumors',
                'seo_description' => 'Surgery for spinal tumors is a specialized neurosurgical procedure performed to remove tumors affecting the spine, spinal cord, or surrounding tissues. The surgery helps relieve nerve compression, preserve neurological function, and improve pain control. Tumors may be benign or malignant.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
