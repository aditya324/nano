<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgeryforSpinalInfectionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgery for Spinal Infections')],
            [
                'title' => 'Surgery for Spinal Infections',
                'slug' => Str::slug('Surgery for Spinal Infections'),
                'introduction' => 'Surgery for spinal infections is performed to treat severe infections affecting the spine, spinal cord, vertebrae, or surrounding tissues. The procedure helps remove infected tissue, relieve spinal compression, and stabilize the spine when necessary. Early treatment is important to prevent permanent neurological damage.',
                'what_is' => 'The surgery may include: Drainage of abscesses Removal of infected tissue Spinal decompression Stabilization procedures Biopsy for infection diagnosis Conditions treated include: Spinal tuberculosis Vertebral osteomyelitis Epidural abscess Disc space infections Treatment is often combined with long-term antibiotic or anti-tubercular therapy.',
                'symptoms' => [
            ['value' => 'Severe back pain'],
            ['value' => 'Fever'],
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Spinal tenderness'],
            ['value' => 'Difficulty walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Spinal instability'],
            ['value' => 'Neurological damage'],
            ['value' => 'Sepsis'],
            ['value' => 'Need for repeat surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete the full antibiotic treatment course'],
            ['value' => 'Attend follow-up imaging appointments'],
            ['value' => 'Follow spine rehabilitation advice'],
            ['value' => 'Monitor for fever or worsening pain'],
            ['value' => 'Maintain proper nutrition during recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent infection'],
            ['value' => 'Spinal instability'],
            ['value' => 'Neurological damage'],
            ['value' => 'Sepsis'],
            ['value' => 'Need for repeat surgery'],
        ],
                'long_term_outlook' => 'Surgical treatment combined with infection control improves spinal stability and neurological recovery. Long-term follow-up is important to monitor healing and prevent recurrence.',
                'conclusion' => '',
                'seo_title' => 'Surgery for Spinal Infections',
                'seo_description' => 'Surgery for spinal infections is performed to treat severe infections affecting the spine, spinal cord, vertebrae, or surrounding tissues. The procedure helps remove infected tissue, relieve spinal compression, and stabilize the spine when necessary. Early treatment is important to prevent permanent neurological damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
