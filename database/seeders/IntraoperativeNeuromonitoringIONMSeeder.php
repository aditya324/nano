<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntraoperativeNeuromonitoringIONMSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Intraoperative Neuromonitoring (IONM)')],
            [
                'title' => 'Intraoperative Neuromonitoring (IONM)',
                'slug' => Str::slug('Intraoperative Neuromonitoring (IONM)'),
                'introduction' => 'Intraoperative neuromonitoring (IONM) is an advanced technology used during neurosurgical procedures to continuously monitor nerve and spinal cord function in real time. The system helps surgeons identify neurological changes early and reduce the risk of permanent nerve damage during surgery. IONM improves surgical safety in complex neurological operations.',
                'what_is' => 'The monitoring system may include: Somatosensory evoked potentials Motor evoked potentials Electromyography monitoring EEG monitoring Cranial nerve monitoring IONM is commonly used during: Spine surgery Brain tumor surgery Skull base surgery Peripheral nerve surgery Vascular neurosurgery Continuous monitoring helps preserve neurological function during surgery.',
                'symptoms' => [
            ['value' => 'Spinal cord compression'],
            ['value' => 'Brain tumors'],
            ['value' => 'Nerve disorders'],
            ['value' => 'Cranial nerve abnormalities'],
            ['value' => 'Complex spinal deformities'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Technical monitoring limitations'],
            ['value' => 'Rare skin irritation from electrodes'],
            ['value' => 'Prolonged surgical duration'],
            ['value' => 'False monitoring alarms'],
            ['value' => 'Equipment malfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue neurological evaluations'],
            ['value' => 'Attend follow-up appointments regularly'],
            ['value' => 'Monitor for weakness or numbness'],
            ['value' => 'Continue rehabilitation if advised'],
            ['value' => 'Take medications properly'],
        ],
                'surgery_risks' => [
            ['value' => 'Technical monitoring limitations'],
            ['value' => 'Rare skin irritation from electrodes'],
            ['value' => 'Prolonged surgical duration'],
            ['value' => 'False monitoring alarms'],
            ['value' => 'Equipment malfunction'],
        ],
                'long_term_outlook' => 'IONM improves neurological preservation and surgical precision during complex neurosurgery. Its use contributes to safer operations and better long-term neurological outcomes.',
                'conclusion' => '',
                'seo_title' => 'Intraoperative Neuromonitoring (IONM)',
                'seo_description' => 'Intraoperative neuromonitoring (IONM) is an advanced technology used during neurosurgical procedures to continuously monitor nerve and spinal cord function in real time. The system helps surgeons identify neurological changes early and reduce the risk of permanent nerve damage during surgery. IONM improves surgical safety in complex neurological operations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
