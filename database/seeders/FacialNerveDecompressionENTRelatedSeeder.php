<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialNerveDecompressionENTRelatedSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Facial Nerve Decompression (ENT-Related)')],
            [
                'title' => 'Facial Nerve Decompression (ENT-Related)',
                'slug' => Str::slug('Facial Nerve Decompression (ENT-Related)'),
                'introduction' => 'Facial nerve decompression is a specialized ENT surgical procedure performed to relieve pressure on the facial nerve when affected by injury, infection, swelling, or compression within the ear or skull region. The surgery aims to preserve or restore facial movement and nerve function. It is commonly considered in severe facial paralysis related to ENT disorders.',
                'what_is' => 'The procedure is performed using microscopic surgical techniques through the ear or skull region to expose and relieve pressure on the facial nerve. Facial nerve decompression may be required for: Severe Bell’s palsy Facial nerve injury Temporal bone fractures Chronic ear disease affecting the nerve Facial paralysis due to infection or tumors The surgery is highly delicate because the facial nerve controls facial expressions and eye closure.',
                'symptoms' => [
            ['value' => 'Facial weakness or paralysis'],
            ['value' => 'Difficulty closing the eye'],
            ['value' => 'Facial asymmetry'],
            ['value' => 'Ear infection with facial weakness'],
            ['value' => 'Loss of facial movement'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Incomplete recovery of facial movement'],
            ['value' => 'Hearing loss'],
            ['value' => 'Dizziness'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Nerve injury complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Perform facial physiotherapy if advised'],
            ['value' => 'Protect the affected eye carefully'],
            ['value' => 'Take medications regularly'],
            ['value' => 'Attend neurological and ENT follow-up visits'],
            ['value' => 'Monitor facial movement changes closely'],
        ],
                'surgery_risks' => [
            ['value' => 'Incomplete recovery of facial movement'],
            ['value' => 'Hearing loss'],
            ['value' => 'Dizziness'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Nerve injury complications'],
        ],
                'long_term_outlook' => 'Early treatment improves the chances of facial nerve recovery. Long-term outcomes depend on the severity and duration of nerve compression.',
                'conclusion' => '',
                'seo_title' => 'Facial Nerve Decompression (ENT-Related)',
                'seo_description' => 'Facial nerve decompression is a specialized ENT surgical procedure performed to relieve pressure on the facial nerve when affected by injury, infection, swelling, or compression within the ear or skull region. The surgery aims to preserve or restore facial movement and nerve function. It is commonly considered in severe facial paralysis related to ENT disorders.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
