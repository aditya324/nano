<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodFlowMonitoringSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Flow Monitoring Systems')],
            [
                'title' => 'Blood Flow Monitoring Systems',
                'slug' => Str::slug('Blood Flow Monitoring Systems'),
                'introduction' => 'Blood flow monitoring systems assess circulation and vascular function before, during, and after vascular procedures.',
                'what_is' => 'These systems help identify circulation problems early and guide treatment decisions during vascular care.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Intraoperative circulation monitoring'],
            ['value' => 'Graft surveillance'],
            ['value' => 'Limb perfusion assessment'],
            ['value' => 'Postoperative vascular monitoring'],
            ['value' => 'Treatments'],
            ['value' => 'These monitoring systems assist doctors in evaluating blood flow after bypass surgery, angioplasty, aneurysm repair, dialysis access surgery, and vascular trauma repair.'],
            ['value' => 'Benefits'],
            ['value' => 'Real-time circulation monitoring'],
            ['value' => 'Early complication detection'],
            ['value' => 'Improved graft assessment'],
            ['value' => 'Better postoperative safety'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Requires trained personnel'],
            ['value' => 'Interpretation variability'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Routine vascular monitoring'],
            ['value' => 'Follow-up imaging when required'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Continuous blood flow monitoring improves surgical success and long-term vascular outcomes.',
                'conclusion' => '',
                'seo_title' => 'Blood Flow Monitoring Systems',
                'seo_description' => 'Blood flow monitoring systems assess circulation and vascular function before, during, and after vascular procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
