<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyNeurosurgicalCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency Neurosurgical Care')],
            [
                'title' => 'Emergency Neurosurgical Care',
                'slug' => Str::slug('Emergency Neurosurgical Care'),
                'introduction' => 'Emergency neurosurgical care is a critical medical service focused on immediate evaluation and treatment of life-threatening brain, spine, and nervous system emergencies. These emergencies may include severe head injuries, brain bleeding, spinal trauma, hydrocephalus, and rapidly worsening neurological conditions. Rapid neurosurgical intervention is essential to prevent permanent neurological damage or death.',
                'what_is' => 'Emergency neurosurgical care includes: Rapid neurological assessment Emergency imaging studies Brain pressure monitoring Surgical stabilization Intensive care coordination Emergency operative procedures Conditions commonly treated include: Brain hemorrhage Skull fractures Spinal cord compression Hydrocephalus Severe traumatic brain injury Acute neurological deterioration The neurosurgical team coordinates closely with ICU specialists, neurologists, anesthesiologists, and emergency physicians.',
                'symptoms' => [
            ['value' => 'Sudden loss of consciousness'],
            ['value' => 'Severe head injury'],
            ['value' => 'Paralysis or weakness'],
            ['value' => 'Seizures'],
            ['value' => 'Sudden severe neurological deterioration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Seizure development'],
            ['value' => 'Increased mortality risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ICU and neurological monitoring'],
            ['value' => 'Attend rehabilitation sessions if advised'],
            ['value' => 'Follow medication schedules carefully'],
            ['value' => 'Monitor neurological recovery closely'],
            ['value' => 'Attend long-term neurosurgical follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Brain swelling'],
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Seizure development'],
            ['value' => 'Increased mortality risk'],
        ],
                'long_term_outlook' => 'Prompt emergency neurosurgical care improves survival and neurological recovery. Long-term outcomes depend on injury severity, early treatment, and rehabilitation support.',
                'conclusion' => '',
                'seo_title' => 'Emergency Neurosurgical Care',
                'seo_description' => 'Emergency neurosurgical care is a critical medical service focused on immediate evaluation and treatment of life-threatening brain, spine, and nervous system emergencies. These emergencies may include severe head injuries, brain bleeding, spinal trauma, hydrocephalus, and rapidly worsening neurological conditions. Rapid neurosurgical intervention is essential to prevent permanent neurological damage or death.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
