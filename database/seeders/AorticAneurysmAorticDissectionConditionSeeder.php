<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AorticAneurysmAorticDissectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Aortic Aneurysm / Aortic Dissection')],
            [
                'name' => 'Aortic Aneurysm / Aortic Dissection',
                'slug' => Str::slug('Aortic Aneurysm / Aortic Dissection'),
                'h1' => 'Aortic Aneurysm / Aortic Dissection',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'An aortic aneurysm is abnormal enlargement of the aorta, while aortic dissection occurs when the layers of the aortic wall tear apart. Both conditions are potentially life-threatening cardiovascular emergencies.',
                'about_more' => '',
                'overview' => 'An aortic aneurysm is abnormal enlargement of the aorta, while aortic dissection occurs when the layers of the aortic wall tear apart. Both conditions are potentially life-threatening cardiovascular emergencies.',
                'symptoms' => [
            ['value' => 'Sudden severe chest or back pain'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Pulsating abdominal swelling in some aneurysms'],
            ['value' => 'Weakness or neurological symptoms if circulation is affected'],
        ],
                'causes' => [
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Atherosclerosis and vascular degeneration'],
            ['value' => 'Genetic connective tissue disorders'],
            ['value' => 'Smoking and aging'],
            ['value' => 'Trauma or severe vascular injury'],
        ],
                'risks' => [
            ['value' => 'Aortic rupture and massive bleeding'],
            ['value' => 'Stroke and organ damage'],
            ['value' => 'Heart failure and shock'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Reduced blood supply to vital organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency CT angiography evaluation'],
            ['value' => 'Blood pressure stabilization'],
            ['value' => 'Surgical repair of the aorta'],
            ['value' => 'Endovascular stent graft procedures'],
            ['value' => 'Intensive cardiac and vascular monitoring'],
        ],
                'recovery' => 'Prompt diagnosis and emergency treatment are critical for survival. Long-term blood pressure control is essential after recovery.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Aortic Aneurysm / Aortic Dissection',
                'meta_description' => 'An aortic aneurysm is abnormal enlargement of the aorta, while aortic dissection occurs when the layers of the aortic wall tear apart. Both conditions are poten',
                'meta_keywords' => '',
            ]
        );
    }
}
