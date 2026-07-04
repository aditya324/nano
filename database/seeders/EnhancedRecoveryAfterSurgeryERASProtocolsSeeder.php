<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EnhancedRecoveryAfterSurgeryERASProtocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Enhanced Recovery After Surgery (ERAS) Protocols')],
            [
                'title' => 'Enhanced Recovery After Surgery (ERAS) Protocols',
                'slug' => Str::slug('Enhanced Recovery After Surgery (ERAS) Protocols'),
                'introduction' => 'Enhanced Recovery After Surgery (ERAS) protocols are evidence-based perioperative care pathways designed to reduce surgical stress, speed recovery, and improve patient outcomes after surgery.',
                'what_is' => 'ERAS programs combine: Preoperative patient education Optimized nutrition Minimally invasive surgery Effective pain management Early mobilization Early oral feeding The goal is to: Reduce complications Shorten hospital stay Improve patient comfort Accelerate recovery ERAS protocols are widely used in colorectal, general, gynecological, and major abdominal surgeries.',
                'symptoms' => [
            ['value' => 'Patients undergoing major surgery'],
            ['value' => 'Need for faster postoperative recovery'],
            ['value' => 'High-risk surgical conditions'],
            ['value' => 'Prolonged hospitalization risk'],
            ['value' => 'Postoperative weakness or delayed recovery'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Inadequate adherence to recovery protocols'],
            ['value' => 'Temporary postoperative discomfort'],
            ['value' => 'Nutritional challenges after surgery'],
            ['value' => 'Pain management-related side effects'],
            ['value' => 'Rare complications from early mobilization'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Begin mobilization early as advised'],
            ['value' => 'Follow nutritional recommendations carefully'],
            ['value' => 'Perform breathing and physiotherapy exercises'],
            ['value' => 'Take pain medications appropriately'],
            ['value' => 'Attend scheduled follow-up evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Inadequate adherence to recovery protocols'],
            ['value' => 'Temporary postoperative discomfort'],
            ['value' => 'Nutritional challenges after surgery'],
            ['value' => 'Pain management-related side effects'],
            ['value' => 'Rare complications from early mobilization'],
        ],
                'long_term_outlook' => 'ERAS protocols improve recovery speed, reduce complications, enhance patient satisfaction, and support better long-term surgical outcomes and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Enhanced Recovery After Surgery (ERAS) Protocols',
                'seo_description' => 'Enhanced Recovery After Surgery (ERAS) protocols are evidence-based perioperative care pathways designed to reduce surgical stress, speed recovery, and improve patient outcomes after surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
