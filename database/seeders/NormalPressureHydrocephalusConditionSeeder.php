<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NormalPressureHydrocephalusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Normal Pressure Hydrocephalus')],
            [
                'name' => 'Normal Pressure Hydrocephalus',
                'slug' => Str::slug('Normal Pressure Hydrocephalus'),
                'h1' => 'Normal Pressure Hydrocephalus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Normal pressure hydrocephalus (NPH) is a condition in which cerebrospinal fluid accumulates in the brain ventricles, causing enlargement without marked increase in pressure. It commonly affects older adults and can lead to walking difficulties, memory problems, and urinary incontinence.',
                'about_more' => '',
                'overview' => 'Normal pressure hydrocephalus (NPH) is a condition in which cerebrospinal fluid accumulates in the brain ventricles, causing enlargement without marked increase in pressure. It commonly affects older adults and can lead to walking difficulties, memory problems, and urinary incontinence.',
                'symptoms' => [
            ['value' => 'Difficulty walking or imbalance'],
            ['value' => 'Memory loss and confusion'],
            ['value' => 'Urinary urgency or incontinence'],
            ['value' => 'Slowed thinking and reduced concentration'],
            ['value' => 'Frequent falls and gait instability'],
        ],
                'causes' => [
            ['value' => 'Reduced absorption of cerebrospinal fluid'],
            ['value' => 'Previous brain injury or bleeding'],
            ['value' => 'Brain infections such as meningitis'],
            ['value' => 'Age-related neurological changes'],
            ['value' => 'Unknown causes in many patients'],
        ],
                'risks' => [
            ['value' => 'Progressive mobility impairment'],
            ['value' => 'Cognitive decline and dementia-like symptoms'],
            ['value' => 'Loss of independence in daily activities'],
            ['value' => 'Increased fall risk and injuries'],
            ['value' => 'Permanent neurological impairment if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI or CT brain imaging'],
            ['value' => 'Lumbar puncture and CSF drainage tests'],
            ['value' => 'Ventriculoperitoneal shunt surgery'],
            ['value' => 'Physiotherapy and balance rehabilitation'],
            ['value' => 'Long-term neurological follow-up care'],
        ],
                'recovery' => 'Many patients improve significantly after shunt surgery, especially walking and balance symptoms. Early diagnosis offers better neurological recovery and improved quality of life.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Normal Pressure Hydrocephalus',
                'meta_description' => 'Normal pressure hydrocephalus (NPH) is a condition in which cerebrospinal fluid accumulates in the brain ventricles, causing enlargement without marked increase',
                'meta_keywords' => '',
            ]
        );
    }
}
