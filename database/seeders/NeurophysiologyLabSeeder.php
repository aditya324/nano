<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeurophysiologyLabSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neurophysiology Lab')],
            [
                'title' => 'Neurophysiology Lab',
                'slug' => Str::slug('Neurophysiology Lab'),
                'introduction' => 'A Neurophysiology Lab is a specialized diagnostic facility designed to evaluate the electrical activity and functional health of the brain, spinal cord, peripheral nerves, and muscles. These laboratories use advanced neurodiagnostic technologies to help diagnose neurological, neuromuscular, seizure-related, sleep-related, and nerve conduction disorders affecting the nervous system.',
                'what_is' => 'Neurophysiology laboratories are equipped with advanced diagnostic systems such as EEG, Video EEG, EMG, Nerve Conduction Studies (NCS), Evoked Potential systems, and sleep monitoring equipment. These facilities support neurologists and neurophysiology specialists in diagnosing epilepsy, neuropathies, muscle disorders, nerve injuries, movement disorders, spinal conditions, and other neurological abnormalities. Neurophysiology labs play an essential role in early diagnosis, treatment planning, rehabilitation monitoring, and long-term neurological care.',
                'symptoms' => [
            ['value' => 'Seizures, blackouts, or episodes of loss of consciousness'],
            ['value' => 'Numbness, tingling, or muscle weakness'],
            ['value' => 'Chronic nerve pain or abnormal muscle movements'],
            ['value' => 'Sleep disturbances or unexplained neurological symptoms'],
            ['value' => 'Difficulty with movement, coordination, balance, or speech'],
        ],
                'causes' => [
            ['value' => 'Epilepsy and seizure disorders'],
            ['value' => 'Peripheral neuropathy and nerve compression syndromes'],
            ['value' => 'Muscular and neuromuscular disorders'],
            ['value' => 'Brain injuries, stroke, or spinal cord abnormalities'],
            ['value' => 'Autoimmune, metabolic, or degenerative neurological conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Mild discomfort during certain neurophysiological procedures'],
            ['value' => 'Temporary muscle soreness after EMG testing'],
            ['value' => 'Rare triggering of seizures during activation procedures in EEG studies'],
            ['value' => 'Requirement for prolonged monitoring in complex neurological conditions'],
            ['value' => 'Need for specialized interpretation by trained neurophysiology professionals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Neurophysiology labs support accurate diagnosis and comprehensive neurological care by providing advanced functional assessments of the nervous system. Based on the diagnostic findings, treatment may include anti-seizure medications, neurological rehabilitation, physiotherapy, pain management, nerve decompression procedures, sleep disorder management, surgical planning, lifestyle modification, and long-term neurological follow-up. Neurophysiological monitoring also assists physicians in evaluating treatment effectiveness, disease progression, and recovery after neurological injury or intervention.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow-up consultation to review neurophysiological test results'],
            ['value' => 'Monitoring symptoms and neurological function after testing'],
            ['value' => 'Continuation of medications or rehabilitation programs if advised'],
            ['value' => 'Additional imaging or neurological evaluation when required'],
            ['value' => 'Long-term neurological monitoring and specialist follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during certain neurophysiological procedures'],
            ['value' => 'Temporary muscle soreness after EMG testing'],
            ['value' => 'Rare triggering of seizures during activation procedures in EEG studies'],
            ['value' => 'Requirement for prolonged monitoring in complex neurological conditions'],
            ['value' => 'Need for specialized interpretation by trained neurophysiology professionals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Neurophysiology labs support accurate diagnosis and comprehensive neurological care by providing advanced functional assessments of the nervous system. Based on the diagnostic findings, treatment may include anti-seizure medications, neurological rehabilitation, physiotherapy, pain management, nerve decompression procedures, sleep disorder management, surgical planning, lifestyle modification, and long-term neurological follow-up. Neurophysiological monitoring also assists physicians in evaluating treatment effectiveness, disease progression, and recovery after neurological injury or intervention.'],
        ],
                'long_term_outlook' => 'Neurophysiology laboratories play a vital role in early neurological diagnosis, treatment planning, rehabilitation monitoring, and long-term nervous system care. Advancements in digital neurodiagnostic systems, AI-assisted neurological analysis, prolonged monitoring technologies, and minimally invasive diagnostic techniques continue to improve diagnostic accuracy, treatment outcomes, neurological recovery, and overall patient quality of life.',
                'conclusion' => '',
                'seo_title' => 'Neurophysiology Lab',
                'seo_description' => 'A Neurophysiology Lab is a specialized diagnostic facility designed to evaluate the electrical activity and functional health of the brain, spinal cord, peripheral nerves, and muscles. These laboratories use advanced neurodiagnostic technologies to help diagnose neurological, neuromuscular, seizure-related, sleep-related, and nerve conduction disorders affecting the nervous system.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
