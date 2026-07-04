<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EEGCapsAmplifiersRecordingSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('EEG Caps / Amplifiers / Recording Systems')],
            [
                'title' => 'EEG Caps / Amplifiers / Recording Systems',
                'slug' => Str::slug('EEG Caps / Amplifiers / Recording Systems'),
                'introduction' => 'EEG caps, amplifiers, and recording systems are specialized neurodiagnostic equipment used to measure, amplify, record, and analyze the electrical activity of the brain during Electroencephalography (EEG) procedures. These systems play a vital role in diagnosing neurological disorders, seizure conditions, sleep abnormalities, and brain function disturbances by capturing accurate brainwave activity in real time.',
                'what_is' => 'EEG systems consist of electrode caps placed on the scalp, signal amplifiers that enhance weak brain electrical signals, and digital recording systems that store and analyze brainwave data. EEG caps contain multiple electrodes positioned according to standardized neurophysiological mapping systems, while amplifiers improve signal quality by minimizing interference and enhancing accuracy. Modern recording systems integrate computerized monitoring, digital waveform analysis, video synchronization, and long-term monitoring capabilities to support advanced neurological diagnosis and treatment planning.',
                'symptoms' => [
            ['value' => 'Seizures or episodes of loss of consciousness'],
            ['value' => 'Unexplained fainting, confusion, or blackouts'],
            ['value' => 'Sleep disturbances or abnormal nighttime behaviors'],
            ['value' => 'Memory problems, cognitive difficulties, or altered mental status'],
            ['value' => 'Abnormal movements, twitching, or suspected neurological disorders'],
        ],
                'causes' => [
            ['value' => 'Epilepsy and seizure-related disorders'],
            ['value' => 'Brain injuries, infections, or neurological abnormalities'],
            ['value' => 'Sleep disorders and altered brainwave activity'],
            ['value' => 'Stroke, tumors, or inflammatory neurological conditions'],
            ['value' => 'Neurodevelopmental or degenerative brain disorders affecting brain function'],
        ],
                'condition_risks' => [
            ['value' => 'Mild scalp discomfort or skin irritation from electrode placement'],
            ['value' => 'Signal interference affecting recording quality'],
            ['value' => 'Rare triggering of seizures during activation procedures'],
            ['value' => 'Requirement for prolonged monitoring in complex neurological cases'],
            ['value' => 'Need for specialized technical setup and expert interpretation'],
            ['value' => 'Treatment Options'],
            ['value' => 'EEG caps, amplifiers, and recording systems support accurate diagnosis and neurological monitoring to guide individualized treatment planning. Based on EEG findings, treatment may include anti-seizure medications, neurological rehabilitation, sleep disorder management, behavioral therapy, neurosurgical evaluation, lifestyle modification, and long-term neurological follow-up care. Advanced EEG systems also support continuous brain monitoring, epilepsy management, neurocritical care, and assessment of treatment effectiveness during long-term neurological care.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Removal of EEG electrodes and cleaning of the scalp after testing'],
            ['value' => 'Follow-up consultation to review EEG findings'],
            ['value' => 'Monitoring neurological symptoms and treatment response'],
            ['value' => 'Additional neurological evaluation or imaging if required'],
            ['value' => 'Continued medical management and long-term neurological follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild scalp discomfort or skin irritation from electrode placement'],
            ['value' => 'Signal interference affecting recording quality'],
            ['value' => 'Rare triggering of seizures during activation procedures'],
            ['value' => 'Requirement for prolonged monitoring in complex neurological cases'],
            ['value' => 'Need for specialized technical setup and expert interpretation'],
            ['value' => 'Treatment Options'],
            ['value' => 'EEG caps, amplifiers, and recording systems support accurate diagnosis and neurological monitoring to guide individualized treatment planning. Based on EEG findings, treatment may include anti-seizure medications, neurological rehabilitation, sleep disorder management, behavioral therapy, neurosurgical evaluation, lifestyle modification, and long-term neurological follow-up care. Advanced EEG systems also support continuous brain monitoring, epilepsy management, neurocritical care, and assessment of treatment effectiveness during long-term neurological care.'],
        ],
                'long_term_outlook' => 'EEG caps, amplifiers, and recording systems play an important role in improving neurological diagnosis, seizure monitoring, brain function assessment, and long-term patient care. Advancements in digital EEG technology, wireless monitoring systems, AI-assisted brainwave analysis, and high-resolution neurodiagnostic equipment continue to improve diagnostic accuracy, neurological treatment planning, patient safety, and overall neurological healthcare outcomes.',
                'conclusion' => '',
                'seo_title' => 'EEG Caps / Amplifiers / Recording Systems',
                'seo_description' => 'EEG caps, amplifiers, and recording systems are specialized neurodiagnostic equipment used to measure, amplify, record, and analyze the electrical activity of the brain during Electroencephalography (EEG) procedures. These systems play a vital role in diagnosing neurological disorders, seizure conditions, sleep abnormalities, and brain function disturbances by capturing accurate brainwave activity in real time.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
