<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EMGNerveConductionStudyNCSSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('EMG / Nerve Conduction Study (NCS)')],
            [
                'title' => 'EMG / Nerve Conduction Study (NCS)',
                'slug' => Str::slug('EMG / Nerve Conduction Study (NCS)'),
                'introduction' => 'Electromyography (EMG) and Nerve Conduction Study (NCS) are specialized neurodiagnostic procedures used to evaluate the health and function of muscles, peripheral nerves, and the neuromuscular system. These tests help diagnose nerve injuries, muscle disorders, neuropathies, nerve compression syndromes, and neuromuscular diseases affecting movement, sensation, strength, and coordination.',
                'what_is' => 'Nerve Conduction Study (NCS) measures how quickly and effectively electrical signals travel through peripheral nerves using small electrical impulses applied to the skin. Electromyography (EMG) evaluates the electrical activity of muscles by inserting a fine needle electrode into specific muscles to detect abnormal muscle responses. These procedures are commonly performed together to assess nerve and muscle function comprehensively and help neurologists diagnose conditions affecting the nervous system and muscular system.',
                'symptoms' => [
            ['value' => 'Numbness, tingling, or burning sensations'],
            ['value' => 'Muscle weakness or loss of strength'],
            ['value' => 'Chronic nerve pain or muscle cramps'],
            ['value' => 'Difficulty walking, gripping, or performing daily activities'],
            ['value' => 'Muscle twitching, paralysis, or abnormal movement disorders'],
        ],
                'causes' => [
            ['value' => 'Peripheral neuropathy and nerve damage'],
            ['value' => 'Carpal tunnel syndrome and nerve compression disorders'],
            ['value' => 'Muscular dystrophy and neuromuscular diseases'],
            ['value' => 'Radiculopathy, spinal nerve injuries, or disc-related nerve compression'],
            ['value' => 'Autoimmune, metabolic, or inflammatory neurological conditions'],
        ],
                'condition_risks' => [
            ['value' => 'Mild discomfort during electrical stimulation or needle insertion'],
            ['value' => 'Temporary muscle soreness after the procedure'],
            ['value' => 'Minor bruising or irritation at electrode insertion sites'],
            ['value' => 'Rare risk of infection or bleeding with needle EMG'],
            ['value' => 'Temporary fatigue or discomfort during prolonged testing sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'EMG and NCS help physicians accurately diagnose neuromuscular and nerve-related conditions to guide individualized treatment planning. Based on the findings, treatment may include medications for neuropathic pain, physiotherapy, rehabilitation programs, nerve decompression procedures, orthopedic or neurological interventions, autoimmune disease management, lifestyle modification, and long-term neurological follow-up care. These tests also assist in monitoring disease progression, evaluating recovery after nerve injury, and optimizing rehabilitation outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Resume normal activities after the procedure unless otherwise advised'],
            ['value' => 'Mild soreness can be managed with rest or simple pain relief measures'],
            ['value' => 'Follow physician recommendations regarding further neurological evaluation or treatment'],
            ['value' => 'Continue rehabilitation or physiotherapy programs if prescribed'],
            ['value' => 'Attend follow-up consultations for interpretation of diagnostic findings'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during electrical stimulation or needle insertion'],
            ['value' => 'Temporary muscle soreness after the procedure'],
            ['value' => 'Minor bruising or irritation at electrode insertion sites'],
            ['value' => 'Rare risk of infection or bleeding with needle EMG'],
            ['value' => 'Temporary fatigue or discomfort during prolonged testing sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'EMG and NCS help physicians accurately diagnose neuromuscular and nerve-related conditions to guide individualized treatment planning. Based on the findings, treatment may include medications for neuropathic pain, physiotherapy, rehabilitation programs, nerve decompression procedures, orthopedic or neurological interventions, autoimmune disease management, lifestyle modification, and long-term neurological follow-up care. These tests also assist in monitoring disease progression, evaluating recovery after nerve injury, and optimizing rehabilitation outcomes.'],
        ],
                'long_term_outlook' => 'EMG and Nerve Conduction Studies play an important role in the early diagnosis, treatment planning, and long-term management of nerve and muscle disorders. Advancements in neurodiagnostic technology, digital nerve monitoring systems, and neuromuscular assessment techniques continue to improve diagnostic accuracy, rehabilitation planning, neurological care, and overall patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'EMG / Nerve Conduction Study (NCS)',
                'seo_description' => 'Electromyography (EMG) and Nerve Conduction Study (NCS) are specialized neurodiagnostic procedures used to evaluate the health and function of muscles, peripheral nerves, and the neuromuscular system. These tests help diagnose nerve injuries, muscle disorders, neuropathies, nerve compression syndromes, and neuromuscular diseases affecting movement, sensation, strength, and coordination.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
