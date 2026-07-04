<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MRIAccessforHeadNeckEvaluationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('MRI Access for Head & Neck Evaluation')],
            [
                'title' => 'MRI Access for Head & Neck Evaluation',
                'slug' => Str::slug('MRI Access for Head & Neck Evaluation'),
                'introduction' => 'MRI access for head and neck evaluation provides advanced soft tissue imaging for diagnosing tumors, nerve disorders, infections, and structural abnormalities in the ENT region. MRI offers excellent detail without radiation exposure. It is particularly useful for complex head and neck conditions.',
                'what_is' => 'MRI scans help evaluate: Head and neck tumors Nerve disorders Salivary gland disease Skull base lesions Deep neck infections Vocal cord abnormalities Soft tissue masses The imaging uses magnetic fields and radio waves to produce highly detailed images. MRI is often used in coordination with ENT, oncology, and neurology teams.',
                'symptoms' => [
            ['value' => 'Neck swelling or mass'],
            ['value' => 'Persistent throat symptoms'],
            ['value' => 'Facial nerve weakness'],
            ['value' => 'Head and neck pain'],
            ['value' => 'Suspected tumors or deep infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Claustrophobia during scanning'],
            ['value' => 'Difficulty remaining still for long durations'],
            ['value' => 'Contrast allergy in rare cases'],
            ['value' => 'Restrictions for patients with metal implants'],
            ['value' => 'Anxiety during the procedure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ENT follow-up regularly'],
            ['value' => 'Inform doctors about delayed contrast reactions if any'],
            ['value' => 'Follow further diagnostic recommendations carefully'],
            ['value' => 'Maintain previous medications unless advised otherwise'],
            ['value' => 'Attend multidisciplinary consultations if required'],
        ],
                'surgery_risks' => [
            ['value' => 'Claustrophobia during scanning'],
            ['value' => 'Difficulty remaining still for long durations'],
            ['value' => 'Contrast allergy in rare cases'],
            ['value' => 'Restrictions for patients with metal implants'],
            ['value' => 'Anxiety during the procedure'],
        ],
                'long_term_outlook' => 'MRI imaging improves early diagnosis and treatment planning for complex ENT disorders, supporting better long-term outcomes and disease monitoring.',
                'conclusion' => '',
                'seo_title' => 'MRI Access for Head & Neck Evaluation',
                'seo_description' => 'MRI access for head and neck evaluation provides advanced soft tissue imaging for diagnosing tumors, nerve disorders, infections, and structural abnormalities in the ENT region. MRI offers excellent detail without radiation exposure. It is particularly useful for complex head and neck conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
