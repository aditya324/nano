<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThoracicAorticAneurysmDissectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thoracic Aortic Aneurysm / Dissection')],
            [
                'name' => 'Thoracic Aortic Aneurysm / Dissection',
                'slug' => Str::slug('Thoracic Aortic Aneurysm / Dissection'),
                'h1' => 'Thoracic Aortic Aneurysm / Dissection',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thoracic aortic aneurysm is enlargement of the aorta in the chest, while aortic dissection occurs when a tear develops in the aortic wall. Both are potentially life-threatening vascular emergencies.',
                'about_more' => '',
                'overview' => 'Thoracic aortic aneurysm is enlargement of the aorta in the chest, while aortic dissection occurs when a tear develops in the aortic wall. Both are potentially life-threatening vascular emergencies.',
                'symptoms' => [
            ['value' => 'Sudden severe chest or back pain'],
            ['value' => 'Tearing sensation in the chest'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Fainting or collapse'],
            ['value' => 'Difficulty swallowing or hoarseness'],
        ],
                'causes' => [
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Connective tissue disorders'],
            ['value' => 'Atherosclerosis'],
            ['value' => 'Trauma or injury'],
            ['value' => 'Smoking and aging'],
        ],
                'risks' => [
            ['value' => 'Aortic rupture'],
            ['value' => 'Stroke and organ ischemia'],
            ['value' => 'Severe internal bleeding'],
            ['value' => 'Heart failure'],
            ['value' => 'Sudden death'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency imaging and monitoring'],
            ['value' => 'Blood pressure control medications'],
            ['value' => 'Endovascular stent graft placement'],
            ['value' => 'Open surgical repair'],
            ['value' => 'Intensive care management'],
        ],
                'recovery' => 'Prompt emergency treatment is critical for survival. Lifelong vascular follow-up is often required.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Thoracic Aortic Aneurysm / Dissection',
                'meta_description' => 'Thoracic aortic aneurysm is enlargement of the aorta in the chest, while aortic dissection occurs when a tear develops in the aortic wall. Both are potentially ',
                'meta_keywords' => '',
            ]
        );
    }
}
