<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AbdominalAorticAneurysmAAAConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Abdominal Aortic Aneurysm (AAA)')],
            [
                'name' => 'Abdominal Aortic Aneurysm (AAA)',
                'slug' => Str::slug('Abdominal Aortic Aneurysm (AAA)'),
                'h1' => 'Abdominal Aortic Aneurysm (AAA)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An abdominal aortic aneurysm is abnormal enlargement of the abdominal aorta. If the aneurysm enlarges or ruptures, it may cause life-threatening internal bleeding.',
                'about_more' => '',
                'overview' => 'An abdominal aortic aneurysm is abnormal enlargement of the abdominal aorta. If the aneurysm enlarges or ruptures, it may cause life-threatening internal bleeding.',
                'symptoms' => [
            ['value' => 'Pulsating abdominal mass'],
            ['value' => 'Back or abdominal pain'],
            ['value' => 'Sudden severe abdominal pain if rupture occurs'],
            ['value' => 'Dizziness and fainting'],
            ['value' => 'Often asymptomatic in early stages'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Smoking and hypertension'],
            ['value' => 'Family history of aneurysm'],
            ['value' => 'Aging and male gender'],
            ['value' => 'Connective tissue disorders'],
        ],
                'risks' => [
            ['value' => 'Aneurysm rupture'],
            ['value' => 'Massive internal bleeding'],
            ['value' => 'Shock and sudden death'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Organ compression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular ultrasound monitoring'],
            ['value' => 'Blood pressure control'],
            ['value' => 'Smoking cessation'],
            ['value' => 'Endovascular aneurysm repair (EVAR)'],
            ['value' => 'Open surgical aneurysm repair'],
        ],
                'recovery' => 'Early surgical management prevents rupture and improves survival. Small aneurysms may be safely monitored.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Abdominal Aortic Aneurysm (AAA)',
                'meta_description' => 'An abdominal aortic aneurysm is abnormal enlargement of the abdominal aorta. If the aneurysm enlarges or ruptures, it may cause life-threatening internal bleedi',
                'meta_keywords' => '',
            ]
        );
    }
}
