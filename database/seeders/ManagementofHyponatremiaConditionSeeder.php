<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofHyponatremiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Hyponatremia')],
            [
                'name' => 'Management of Hyponatremia',
                'slug' => Str::slug('Management of Hyponatremia'),
                'h1' => 'Management of Hyponatremia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of hyponatremia is a nephrology treatment focused on correcting abnormally low sodium levels in the blood, which commonly occur in kidney disease and fluid imbalance disorders.',
                'about_more' => 'Sodium plays an important role in nerve function, fluid balance, and muscle activity. Severe hyponatremia can cause serious neurological complications if untreated. Careful correction is essential to prevent rapid fluid shifts and brain injury.',
                'overview' => 'Treatment includes: Sodium level monitoring Fluid restriction IV sodium correction when necessary Management of underlying kidney disease Medication adjustment Electrolyte monitoring Doctors carefully evaluate: Fluid status Neurological symptoms Kidney function Blood chemistry Medication history Correction is performed gradually to avoid complications related to rapid sodium changes. Continuous monitoring is important during treatment.',
                'symptoms' => [
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Confusion or irritability'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Fatigue or weakness'],
            ['value' => 'Severe neurological symptoms in advanced cases'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Seizures'],
            ['value' => 'Brain swelling'],
            ['value' => 'Neurological injury'],
            ['value' => 'Falls and confusion'],
            ['value' => 'Severe electrolyte imbalance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow prescribed fluid restrictions'],
            ['value' => 'Attend regular electrolyte monitoring'],
            ['value' => 'Take medications carefully'],
            ['value' => 'Monitor neurological symptoms closely'],
            ['value' => 'Maintain nephrology follow-up visits'],
        ],
                'recovery' => 'Proper hyponatremia management improves neurological stability and overall kidney care outcomes. Regular monitoring and individualized treatment help prevent recurrence and long-term complications.',
                'sort_order' => 49,
                'is_active' => true,
                'meta_title' => 'Management of Hyponatremia',
                'meta_description' => 'Management of hyponatremia is a nephrology treatment focused on correcting abnormally low sodium levels in the blood, which commonly occur in kidney disease and',
                'meta_keywords' => '',
            ]
        );
    }
}
