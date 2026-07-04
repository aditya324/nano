<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KyphoplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Kyphoplasty')],
            [
                'title' => 'Kyphoplasty',
                'slug' => Str::slug('Kyphoplasty'),
                'introduction' => 'Kyphoplasty is a minimally invasive spinal procedure used to treat painful vertebral compression fractures by restoring vertebral height and stabilizing the fractured bone with medical cement. The procedure helps reduce pain, improve posture, and restore spinal alignment. It is commonly used in osteoporosis-related fractures.',
                'what_is' => 'The procedure includes: Balloon insertion into the fractured vertebra Restoration of vertebral height Injection of bone cement Stabilization of the spinal fracture Kyphoplasty is commonly recommended for: Osteoporotic fractures Compression fractures Painful vertebral collapse Selected spinal tumors Imaging guidance improves precision and safety during the procedure.',
                'symptoms' => [
            ['value' => 'Sudden severe back pain'],
            ['value' => 'Height loss'],
            ['value' => 'Stooped posture'],
            ['value' => 'Reduced spinal mobility'],
            ['value' => 'Difficulty walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cement leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Future spinal fractures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy lifting temporarily'],
            ['value' => 'Continue osteoporosis treatment plans'],
            ['value' => 'Attend follow-up spinal evaluations'],
            ['value' => 'Perform rehabilitation exercises regularly'],
            ['value' => 'Maintain proper posture habits'],
        ],
                'surgery_risks' => [
            ['value' => 'Cement leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Future spinal fractures'],
        ],
                'long_term_outlook' => 'Kyphoplasty provides significant pain relief and improves spinal alignment. Long-term outcomes improve with bone-strengthening therapy and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Kyphoplasty',
                'seo_description' => 'Kyphoplasty is a minimally invasive spinal procedure used to treat painful vertebral compression fractures by restoring vertebral height and stabilizing the fractured bone with medical cement. The procedure helps reduce pain, improve posture, and restore spinal alignment. It is commonly used in osteoporosis-related fractures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
