<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalAbscessDrainageSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Spinal Abscess Drainage')],
            [
                'title' => 'Spinal Abscess Drainage',
                'slug' => Str::slug('Spinal Abscess Drainage'),
                'introduction' => 'Spinal abscess drainage is a neurosurgical procedure performed to remove infected pus collections around the spinal cord or spinal structures. Spinal abscesses can compress nerves and the spinal cord, leading to paralysis or severe neurological complications. Emergency treatment is often necessary.',
                'what_is' => 'The procedure includes: Surgical drainage of infected collections Spinal decompression Removal of infected tissue Laboratory culture testing Long-term infection management Doctors use MRI imaging to evaluate: Abscess location Degree of spinal cord compression Spread of infection Spinal stability Treatment is usually combined with prolonged antibiotic therapy.',
                'symptoms' => [
            ['value' => 'Severe back pain'],
            ['value' => 'Fever'],
            ['value' => 'Weakness in limbs'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Bladder or bowel dysfunction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Neurological paralysis'],
            ['value' => 'Persistent infection'],
            ['value' => 'Sepsis'],
            ['value' => 'Spinal instability'],
            ['value' => 'Need for repeat surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue antibiotic therapy completely'],
            ['value' => 'Attend follow-up spinal imaging evaluations'],
            ['value' => 'Participate in rehabilitation programs'],
            ['value' => 'Monitor for fever or worsening weakness'],
            ['value' => 'Follow spinal precautions carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Neurological paralysis'],
            ['value' => 'Persistent infection'],
            ['value' => 'Sepsis'],
            ['value' => 'Spinal instability'],
            ['value' => 'Need for repeat surgery'],
        ],
                'long_term_outlook' => 'Prompt abscess drainage improves neurological preservation and infection control. Long-term recovery depends on early diagnosis and spinal cord involvement severity.',
                'conclusion' => '',
                'seo_title' => 'Spinal Abscess Drainage',
                'seo_description' => 'Spinal abscess drainage is a neurosurgical procedure performed to remove infected pus collections around the spinal cord or spinal structures. Spinal abscesses can compress nerves and the spinal cord, leading to paralysis or severe neurological complications. Emergency treatment is often necessary.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
