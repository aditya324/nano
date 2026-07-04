<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofHyperkalemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Hyperkalemia')],
            [
                'name' => 'Management of Hyperkalemia',
                'slug' => Str::slug('Management of Hyperkalemia'),
                'h1' => 'Management of Hyperkalemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of hyperkalemia is an emergency and long-term nephrology treatment focused on lowering dangerously high potassium levels in the blood.',
                'about_more' => 'Kidneys normally remove excess potassium, but kidney failure can lead to potassium accumulation, which may cause life-threatening heart rhythm disturbances. Prompt treatment is critical for patient safety.',
                'overview' => 'Treatment may include: Emergency cardiac monitoring Potassium-lowering medications IV calcium therapy Insulin and glucose treatment Dialysis support Dietary potassium restriction Doctors continuously monitor: Blood potassium levels Heart rhythm Kidney function Muscle strength Fluid balance Long-term management also includes identifying the underlying cause and adjusting medications that raise potassium levels.',
                'symptoms' => [
            ['value' => 'Muscle weakness'],
            ['value' => 'Irregular heartbeat'],
            ['value' => 'Fatigue'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Severe kidney dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Cardiac arrhythmias'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Muscle paralysis'],
            ['value' => 'Severe kidney complications'],
            ['value' => 'Emergency hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow low-potassium diet recommendations'],
            ['value' => 'Attend regular blood testing'],
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Avoid potassium-rich supplements without advice'],
            ['value' => 'Report weakness or palpitations immediately'],
        ],
                'recovery' => 'Early treatment of hyperkalemia greatly reduces life-threatening cardiac complications. Regular monitoring and dietary management help maintain safer potassium levels in kidney disease patients.',
                'sort_order' => 48,
                'is_active' => true,
                'meta_title' => 'Management of Hyperkalemia',
                'meta_description' => 'Management of hyperkalemia is an emergency and long-term nephrology treatment focused on lowering dangerously high potassium levels in the blood.',
                'meta_keywords' => '',
            ]
        );
    }
}
