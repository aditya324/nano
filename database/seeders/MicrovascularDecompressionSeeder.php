<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrovascularDecompressionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microvascular Decompression')],
            [
                'title' => 'Microvascular Decompression',
                'slug' => Str::slug('Microvascular Decompression'),
                'introduction' => 'Microvascular decompression (MVD) is a delicate neurosurgical procedure performed to relieve abnormal blood vessel pressure on cranial nerves. It is commonly used to treat trigeminal neuralgia, hemifacial spasm, and certain nerve compression syndromes. The surgery aims to preserve nerve function while eliminating painful nerve irritation.',
                'what_is' => 'The procedure includes: Small skull opening behind the ear Microsurgical identification of compressed nerve Separation of blood vessel from nerve Placement of protective padding material Preservation of surrounding neurological structures MVD is performed using: Operating microscopes Microsurgical instruments Advanced neuro-monitoring systems The procedure provides long-term pain relief while preserving nerve integrity.',
                'symptoms' => [
            ['value' => 'Severe facial pain'],
            ['value' => 'Facial muscle spasms'],
            ['value' => 'Nerve irritation symptoms'],
            ['value' => 'Triggered pain episodes'],
            ['value' => 'Facial sensitivity'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hearing loss'],
            ['value' => 'Facial weakness'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Recurrence of symptoms'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular neurosurgical follow-up visits'],
            ['value' => 'Monitor for dizziness or hearing changes'],
            ['value' => 'Avoid heavy physical strain temporarily'],
            ['value' => 'Continue medications as advised'],
            ['value' => 'Report neurological changes promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Hearing loss'],
            ['value' => 'Facial weakness'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Recurrence of symptoms'],
        ],
                'long_term_outlook' => 'Microvascular decompression provides durable symptom relief in many cranial nerve compression disorders. Long-term recovery is generally favorable with proper follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Microvascular Decompression',
                'seo_description' => 'Microvascular decompression (MVD) is a delicate neurosurgical procedure performed to relieve abnormal blood vessel pressure on cranial nerves. It is commonly used to treat trigeminal neuralgia, hemifacial spasm, and certain nerve compression syndromes. The surgery aims to preserve nerve function while eliminating painful nerve irritation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
