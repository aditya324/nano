<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AorticAneurysmAorticDissectionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Aortic Aneurysm / Aortic Dissection')],
            [
                'title' => 'Aortic Aneurysm / Aortic Dissection',
                'slug' => Str::slug('Aortic Aneurysm / Aortic Dissection'),
                'introduction' => 'An aortic aneurysm is an abnormal enlargement of the aorta, while aortic dissection occurs when a tear develops within the aortic wall layers. Both conditions are potentially life-threatening cardiovascular emergencies. Early diagnosis and management are essential to prevent rupture and sudden death.',
                'what_is' => 'Risk factors include: Hypertension Smoking Genetic disorders Atherosclerosis Connective tissue disease Diagnosis may involve: CT angiography MRI Echocardiography Ultrasound imaging Treatment depends on severity and may include: Blood pressure control Emergency surgery Endovascular repair Long-term monitoring Aortic dissection requires urgent medical attention.',
                'symptoms' => [
            ['value' => 'Sudden severe chest or back pain'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Fainting or weakness'],
            ['value' => 'Unequal blood pressure in limbs'],
            ['value' => 'Pulsating abdominal mass in some aneurysms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Aortic rupture'],
            ['value' => 'Internal bleeding'],
            ['value' => 'Stroke'],
            ['value' => 'Organ damage from poor blood flow'],
            ['value' => 'Sudden death'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Control blood pressure strictly'],
            ['value' => 'Avoid heavy lifting and strain'],
            ['value' => 'Attend regular imaging follow-up'],
            ['value' => 'Take prescribed medications consistently'],
            ['value' => 'Seek emergency care for sudden pain symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Aortic rupture'],
            ['value' => 'Internal bleeding'],
            ['value' => 'Stroke'],
            ['value' => 'Organ damage from poor blood flow'],
            ['value' => 'Sudden death'],
        ],
                'long_term_outlook' => 'With proper treatment and monitoring, many patients achieve improved survival and reduced risk of life-threatening aortic complications.',
                'conclusion' => '',
                'seo_title' => 'Aortic Aneurysm / Aortic Dissection',
                'seo_description' => 'An aortic aneurysm is an abnormal enlargement of the aorta, while aortic dissection occurs when a tear develops within the aortic wall layers. Both conditions are potentially life-threatening cardiovascular emergencies. Early diagnosis and management are essential to prevent rupture and sudden death.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
