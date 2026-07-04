<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntracranialAneurysmConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Intracranial Aneurysm')],
            [
                'name' => 'Intracranial Aneurysm',
                'slug' => Str::slug('Intracranial Aneurysm'),
                'h1' => 'Intracranial Aneurysm',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Intracranial aneurysm is a weakened, bulging area in a brain blood vessel that may rupture and cause life-threatening bleeding. Many aneurysms remain silent until rupture occurs, leading to sudden neurological emergencies.',
                'about_more' => '',
                'overview' => 'Intracranial aneurysm is a weakened, bulging area in a brain blood vessel that may rupture and cause life-threatening bleeding. Many aneurysms remain silent until rupture occurs, leading to sudden neurological emergencies.',
                'symptoms' => [
            ['value' => 'Sudden severe headache (“worst headache”)'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Neck stiffness and sensitivity to light'],
            ['value' => 'Vision problems or double vision'],
            ['value' => 'Loss of consciousness or seizures in rupture cases'],
        ],
                'causes' => [
            ['value' => 'Weakness in blood vessel walls'],
            ['value' => 'Chronic high blood pressure'],
            ['value' => 'Smoking and vascular disease'],
            ['value' => 'Genetic predisposition or family history'],
            ['value' => 'Trauma or connective tissue disorders'],
        ],
                'risks' => [
            ['value' => 'Subarachnoid hemorrhage and brain bleeding'],
            ['value' => 'Stroke and permanent neurological damage'],
            ['value' => 'Seizures and cognitive impairment'],
            ['value' => 'Brain swelling and coma'],
            ['value' => 'Sudden death in severe rupture cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT angiography and brain imaging'],
            ['value' => 'Surgical clipping of aneurysm'],
            ['value' => 'Endovascular coiling procedures'],
            ['value' => 'Blood pressure and ICU management'],
            ['value' => 'Long-term neurological follow-up'],
        ],
                'recovery' => 'Unruptured aneurysms treated early often have good outcomes. Ruptured aneurysms require emergency treatment, and recovery depends on the severity of bleeding.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Intracranial Aneurysm',
                'meta_description' => 'Intracranial aneurysm is a weakened, bulging area in a brain blood vessel that may rupture and cause life-threatening bleeding. Many aneurysms remain silent unt',
                'meta_keywords' => '',
            ]
        );
    }
}
