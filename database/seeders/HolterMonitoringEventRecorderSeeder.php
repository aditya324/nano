<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HolterMonitoringEventRecorderSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Holter Monitoring / Event Recorder')],
            [
                'title' => 'Holter Monitoring / Event Recorder',
                'slug' => Str::slug('Holter Monitoring / Event Recorder'),
                'introduction' => 'Holter monitoring and event recorders are portable cardiac devices used to continuously monitor heart rhythm over extended periods. These devices help detect intermittent arrhythmias that may not appear during routine ECG testing. They are widely used in diagnosing palpitations, syncope, and unexplained cardiac symptoms.',
                'what_is' => 'Holter monitoring usually records heart rhythm continuously for 24 to 72 hours. Event recorders are activated when symptoms occur and may be used for longer durations. The devices help diagnose: Atrial fibrillation Bradycardia Tachycardia Intermittent arrhythmias Syncope-related rhythm disturbances Patients continue daily activities while wearing the monitor. The recorded information is later analyzed by cardiologists.',
                'symptoms' => [
            ['value' => 'Palpitations'],
            ['value' => 'Irregular heartbeat'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Intermittent chest discomfort'],
            ['value' => 'Unexplained fatigue'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild skin irritation from electrodes'],
            ['value' => 'Temporary discomfort while wearing the monitor'],
            ['value' => 'Anxiety during prolonged monitoring'],
            ['value' => 'Technical recording interruptions'],
            ['value' => 'Rare allergic reactions to adhesive materials'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain activity diary during monitoring if advised'],
            ['value' => 'Avoid water exposure if instructed'],
            ['value' => 'Report severe symptoms immediately'],
            ['value' => 'Return the device on schedule'],
            ['value' => 'Attend follow-up for result interpretation'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild skin irritation from electrodes'],
            ['value' => 'Temporary discomfort while wearing the monitor'],
            ['value' => 'Anxiety during prolonged monitoring'],
            ['value' => 'Technical recording interruptions'],
            ['value' => 'Rare allergic reactions to adhesive materials'],
        ],
                'long_term_outlook' => 'Continuous rhythm monitoring improves arrhythmia detection, guides treatment planning, and reduces complications associated with undiagnosed cardiac rhythm disorders.',
                'conclusion' => '',
                'seo_title' => 'Holter Monitoring / Event Recorder',
                'seo_description' => 'Holter monitoring and event recorders are portable cardiac devices used to continuously monitor heart rhythm over extended periods. These devices help detect intermittent arrhythmias that may not appear during routine ECG testing. They are widely used in diagnosing palpitations, syncope, and unexplained cardiac symptoms.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
