<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PainManagementAnalgesiaProtocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pain Management & Analgesia Protocols')],
            [
                'title' => 'Pain Management & Analgesia Protocols',
                'slug' => Str::slug('Pain Management & Analgesia Protocols'),
                'introduction' => 'Pain management and analgesia protocols are structured medical approaches used to control pain before, during, and after surgical procedures. Effective pain control improves patient comfort, recovery, mobility, and overall surgical outcomes.',
                'what_is' => 'Pain management may involve: Oral pain medications Intravenous analgesics Epidural analgesia Nerve blocks Patient-controlled analgesia (PCA) Multimodal pain management techniques The goal is to: Reduce pain intensity Improve breathing and mobility Minimize stress response after surgery Prevent chronic pain development Pain management plans are individualized according to the type of surgery and patient condition.',
                'symptoms' => [
            ['value' => 'Surgical pain or discomfort'],
            ['value' => 'Muscle stiffness after surgery'],
            ['value' => 'Difficulty moving due to pain'],
            ['value' => 'Pain during breathing or coughing'],
            ['value' => 'Chronic postoperative pain symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Medication side effects such as nausea or drowsiness'],
            ['value' => 'Constipation from opioid medications'],
            ['value' => 'Allergic reactions to analgesics'],
            ['value' => 'Respiratory depression in excessive opioid use'],
            ['value' => 'Dependency risk with prolonged pain medication use'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take pain medications as prescribed'],
            ['value' => 'Inform doctors if pain becomes severe or uncontrolled'],
            ['value' => 'Perform breathing and mobility exercises regularly'],
            ['value' => 'Avoid self-medication without medical advice'],
            ['value' => 'Attend pain management follow-up if needed'],
        ],
                'surgery_risks' => [
            ['value' => 'Medication side effects such as nausea or drowsiness'],
            ['value' => 'Constipation from opioid medications'],
            ['value' => 'Allergic reactions to analgesics'],
            ['value' => 'Respiratory depression in excessive opioid use'],
            ['value' => 'Dependency risk with prolonged pain medication use'],
        ],
                'long_term_outlook' => 'Effective pain control improves surgical recovery, reduces complications, enhances mobility, and supports better physical and emotional well-being.',
                'conclusion' => '',
                'seo_title' => 'Pain Management & Analgesia Protocols',
                'seo_description' => 'Pain management and analgesia protocols are structured medical approaches used to control pain before, during, and after surgical procedures. Effective pain control improves patient comfort, recovery, mobility, and overall surgical outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
