<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AbdominalAorticAneurysmConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Abdominal Aortic Aneurysm')],
            [
                'name' => 'Abdominal Aortic Aneurysm',
                'slug' => Str::slug('Abdominal Aortic Aneurysm'),
                'h1' => 'Abdominal Aortic Aneurysm',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An abdominal aortic aneurysm (AAA) is abnormal enlargement of the abdominal portion of the aorta, the body’s main artery. If untreated, it may rupture and cause life-threatening bleeding.',
                'about_more' => '',
                'overview' => 'An abdominal aortic aneurysm (AAA) is abnormal enlargement of the abdominal portion of the aorta, the body’s main artery. If untreated, it may rupture and cause life-threatening bleeding.',
                'symptoms' => [
            ['value' => 'Pulsating abdominal swelling'],
            ['value' => 'Deep abdominal or back pain'],
            ['value' => 'Sudden severe pain if rupture occurs'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Shock symptoms in emergency rupture cases'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis and aging'],
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Genetic and connective tissue disorders'],
            ['value' => 'Male gender and vascular disease history'],
        ],
                'risks' => [
            ['value' => 'Rupture causing massive internal bleeding'],
            ['value' => 'Blood clot formation within aneurysm'],
            ['value' => 'Reduced blood flow to organs or limbs'],
            ['value' => 'Shock and sudden death'],
            ['value' => 'Progressive enlargement over time'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound and CT angiography monitoring'],
            ['value' => 'Blood pressure and cholesterol control'],
            ['value' => 'Smoking cessation and vascular care'],
            ['value' => 'Endovascular aneurysm repair (EVAR)'],
            ['value' => 'Open surgical aneurysm repair'],
        ],
                'recovery' => 'Small aneurysms may be monitored regularly. Early surgical treatment greatly reduces the risk of rupture and improves survival.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Abdominal Aortic Aneurysm',
                'meta_description' => 'An abdominal aortic aneurysm (AAA) is abnormal enlargement of the abdominal portion of the aorta, the body’s main artery. If untreated, it may rupture and cause',
                'meta_keywords' => '',
            ]
        );
    }
}
