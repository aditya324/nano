<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DecompressiveCraniectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Decompressive Craniectomy')],
            [
                'title' => 'Decompressive Craniectomy',
                'slug' => Str::slug('Decompressive Craniectomy'),
                'introduction' => 'Decompressive craniectomy is a life-saving neurosurgical procedure performed to relieve dangerously increased pressure inside the skull caused by brain swelling. Part of the skull is temporarily removed to allow the swollen brain to expand safely and reduce pressure-related brain damage. The procedure is commonly used in severe head injury, stroke, or brain swelling emergencies.',
                'what_is' => 'The surgery includes: Emergency brain imaging Removal of a skull section Brain pressure relief Intensive care monitoring Preservation of brain blood flow Conditions requiring decompressive craniectomy include: Severe traumatic brain injury Massive stroke Brain hemorrhage Brain swelling due to infection After swelling improves, the removed skull bone may later be replaced through reconstructive surgery. Patients usually require prolonged ICU and rehabilitation support.',
                'symptoms' => [
            ['value' => 'Severe head injury'],
            ['value' => 'Loss of consciousness'],
            ['value' => 'Brain swelling'],
            ['value' => 'Neurological deterioration'],
            ['value' => 'Increased intracranial pressure'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Brain tissue injury'],
            ['value' => 'Seizures'],
            ['value' => 'Long-term neurological disability'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Intensive neurological monitoring'],
            ['value' => 'Prevent pressure on the unprotected skull area'],
            ['value' => 'Continue rehabilitation therapy'],
            ['value' => 'Attend regular neurosurgical follow-up visits'],
            ['value' => 'Monitor for seizures or infection'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Brain tissue injury'],
            ['value' => 'Seizures'],
            ['value' => 'Long-term neurological disability'],
        ],
                'long_term_outlook' => 'Decompressive craniectomy can save life and reduce severe brain damage in critical neurological emergencies. Long-term recovery depends on the severity of the original brain injury and rehabilitation progress.',
                'conclusion' => '',
                'seo_title' => 'Decompressive Craniectomy',
                'seo_description' => 'Decompressive craniectomy is a life-saving neurosurgical procedure performed to relieve dangerously increased pressure inside the skull caused by brain swelling. Part of the skull is temporarily removed to allow the swollen brain to expand safely and reduce pressure-related brain damage. The procedure is commonly used in severe head injury, stroke, or brain swelling emergencies.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
