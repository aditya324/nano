<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HyperkalemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hyperkalemia')],
            [
                'name' => 'Hyperkalemia',
                'slug' => Str::slug('Hyperkalemia'),
                'h1' => 'Hyperkalemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hyperkalemia is a condition in which potassium levels in the blood become abnormally high, commonly due to kidney disease or reduced kidney excretion. Potassium is essential for muscle and heart function, but dangerously high levels can lead to life-threatening cardiac complications.',
                'about_more' => '',
                'overview' => 'Hyperkalemia is a condition in which potassium levels in the blood become abnormally high, commonly due to kidney disease or reduced kidney excretion. Potassium is essential for muscle and heart function, but dangerously high levels can lead to life-threatening cardiac complications.',
                'symptoms' => [
            ['value' => 'Muscle weakness or paralysis'],
            ['value' => 'Fatigue and numbness'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Nausea or chest discomfort'],
            ['value' => 'Sometimes no symptoms until severe complications occur'],
        ],
                'causes' => [
            ['value' => 'Chronic or acute kidney failure'],
            ['value' => 'Certain blood pressure medications'],
            ['value' => 'Excessive potassium intake in kidney disease'],
            ['value' => 'Severe tissue injury or metabolic acidosis'],
            ['value' => 'Uncontrolled diabetes or dehydration'],
        ],
                'risks' => [
            ['value' => 'Dangerous cardiac arrhythmias'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Muscle paralysis and severe weakness'],
            ['value' => 'Worsening kidney dysfunction'],
            ['value' => 'Life-threatening medical emergency in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency medications to stabilize heart rhythm'],
            ['value' => 'Potassium-lowering medications or resins'],
            ['value' => 'Intravenous insulin and glucose therapy'],
            ['value' => 'Dietary potassium restriction'],
            ['value' => 'Dialysis in severe hyperkalemia'],
        ],
                'recovery' => 'Most cases improve rapidly with prompt treatment and correction of the underlying cause. Ongoing monitoring is essential in kidney disease patients to prevent recurrence.',
                'sort_order' => 48,
                'is_active' => true,
                'meta_title' => 'Hyperkalemia',
                'meta_description' => 'Hyperkalemia is a condition in which potassium levels in the blood become abnormally high, commonly due to kidney disease or reduced kidney excretion. Potassium',
                'meta_keywords' => '',
            ]
        );
    }
}
