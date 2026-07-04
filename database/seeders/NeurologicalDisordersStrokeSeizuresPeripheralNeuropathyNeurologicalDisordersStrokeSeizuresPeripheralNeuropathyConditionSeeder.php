<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeurologicalDisordersStrokeSeizuresPeripheralNeuropathyNeurologicalDisordersStrokeSeizuresPeripheralNeuropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy) Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)')],
            [
                'name' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy) Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'slug' => Str::slug('Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy) Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)'),
                'h1' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy) Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy) Neurological Disorders (Stroke, Seizures, Peripheral Neuropathy)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
