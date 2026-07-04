<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExtraduralHematomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Extradural Hematoma')],
            [
                'name' => 'Extradural Hematoma',
                'slug' => Str::slug('Extradural Hematoma'),
                'h1' => 'Extradural Hematoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Extradural hematoma, also called epidural hematoma, is bleeding between the skull and the outer covering of the brain. It commonly occurs after severe head injury and may rapidly become life-threatening due to increased intracranial pressure.',
                'about_more' => '',
                'overview' => 'Extradural hematoma, also called epidural hematoma, is bleeding between the skull and the outer covering of the brain. It commonly occurs after severe head injury and may rapidly become life-threatening due to increased intracranial pressure.',
                'symptoms' => [
            ['value' => 'Severe headache after head injury'],
            ['value' => 'Brief loss of consciousness followed by temporary recovery'],
            ['value' => 'Drowsiness and worsening confusion'],
            ['value' => 'Weakness or pupil abnormalities'],
            ['value' => 'Seizures or collapse in severe cases'],
        ],
                'causes' => [
            ['value' => 'Skull fractures causing arterial bleeding'],
            ['value' => 'Road traffic accidents or falls'],
            ['value' => 'Sports-related head trauma'],
            ['value' => 'Violent impact injuries'],
            ['value' => 'High-energy trauma to the skull'],
        ],
                'risks' => [
            ['value' => 'Rapid brain compression and swelling'],
            ['value' => 'Permanent neurological deficits'],
            ['value' => 'Seizures and paralysis'],
            ['value' => 'Brain herniation and coma'],
            ['value' => 'Sudden death if untreated urgently'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency CT imaging and diagnosis'],
            ['value' => 'Immediate neurosurgical evacuation'],
            ['value' => 'ICU monitoring and stabilization'],
            ['value' => 'Medications to reduce brain swelling'],
            ['value' => 'Rehabilitation after neurological recovery'],
        ],
                'recovery' => 'Rapid diagnosis and surgical treatment are critical for survival. Early intervention significantly improves neurological recovery outcomes.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Extradural Hematoma',
                'meta_description' => 'Extradural hematoma, also called epidural hematoma, is bleeding between the skull and the outer covering of the brain. It commonly occurs after severe head inju',
                'meta_keywords' => '',
            ]
        );
    }
}
