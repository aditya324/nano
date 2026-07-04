<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgeryforTuberculosisofSpineSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgery for Tuberculosis of Spine')],
            [
                'title' => 'Surgery for Tuberculosis of Spine',
                'slug' => Str::slug('Surgery for Tuberculosis of Spine'),
                'introduction' => 'Surgery for tuberculosis of the spine is a specialized neurosurgical procedure performed to treat spinal tuberculosis causing spinal instability, deformity, abscess formation, or compression of the spinal cord and nerves. Spinal tuberculosis, also known as Pott’s spine, can lead to severe pain, neurological weakness, and spinal deformity if left untreated. Surgical treatment helps control infection, stabilize the spine, and preserve neurological function.',
                'what_is' => 'The surgery may involve: Removal of infected spinal tissue Drainage of abscesses Spinal cord decompression Spinal stabilization with implants Correction of spinal deformity Doctors commonly combine surgery with: Long-term anti-tubercular medications Rehabilitation therapy Nutritional support Follow-up imaging studies The procedure is performed in patients with neurological deficits, spinal collapse, severe deformity, or failure of medical treatment.',
                'symptoms' => [
            ['value' => 'Severe back pain'],
            ['value' => 'Fever and weight loss'],
            ['value' => 'Weakness in limbs'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Spinal deformity'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Neurological damage'],
            ['value' => 'Spinal instability'],
            ['value' => 'Implant-related complications'],
            ['value' => 'Recurrence of infection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete full anti-tubercular treatment'],
            ['value' => 'Attend rehabilitation sessions regularly'],
            ['value' => 'Follow spinal precautions carefully'],
            ['value' => 'Maintain proper nutrition'],
            ['value' => 'Attend scheduled imaging follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Neurological damage'],
            ['value' => 'Spinal instability'],
            ['value' => 'Implant-related complications'],
            ['value' => 'Recurrence of infection'],
        ],
                'long_term_outlook' => 'Surgical treatment combined with anti-tubercular therapy improves spinal stability and neurological recovery. Long-term outcomes depend on early diagnosis, infection control, and rehabilitation participation.',
                'conclusion' => '',
                'seo_title' => 'Surgery for Tuberculosis of Spine',
                'seo_description' => 'Surgery for tuberculosis of the spine is a specialized neurosurgical procedure performed to treat spinal tuberculosis causing spinal instability, deformity, abscess formation, or compression of the spinal cord and nerves. Spinal tuberculosis, also known as Pott’s spine, can lead to severe pain, neurological weakness, and spinal deformity if left untreated. Surgical treatment helps control infection, stabilize the spine, and preserve neurological function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
