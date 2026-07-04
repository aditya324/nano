<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralAneurysmsFemoralPoplitealVisceralConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Aneurysms (Femoral, Popliteal, Visceral)')],
            [
                'name' => 'Peripheral Aneurysms (Femoral, Popliteal, Visceral)',
                'slug' => Str::slug('Peripheral Aneurysms (Femoral, Popliteal, Visceral)'),
                'h1' => 'Peripheral Aneurysms (Femoral, Popliteal, Visceral)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral aneurysms are abnormal dilatations of arteries outside the heart and aorta, commonly affecting the femoral, popliteal, or visceral arteries. These aneurysms can enlarge over time and may lead to clot formation, rupture, or blockage of blood flow.',
                'about_more' => '',
                'overview' => 'Peripheral aneurysms are abnormal dilatations of arteries outside the heart and aorta, commonly affecting the femoral, popliteal, or visceral arteries. These aneurysms can enlarge over time and may lead to clot formation, rupture, or blockage of blood flow.',
                'symptoms' => [
            ['value' => 'Pulsating swelling in the limb or abdomen'],
            ['value' => 'Pain near the affected artery'],
            ['value' => 'Coldness or numbness in the limb'],
            ['value' => 'Swelling behind the knee (popliteal aneurysm)'],
            ['value' => 'Sudden limb pain due to clot formation'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis and arterial wall weakness'],
            ['value' => 'High blood pressure'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Connective tissue disorders'],
            ['value' => 'Trauma or infection affecting arteries'],
        ],
                'risks' => [
            ['value' => 'Blood clot formation and embolism'],
            ['value' => 'Acute limb ischemia'],
            ['value' => 'Rupture causing internal bleeding'],
            ['value' => 'Compression of nearby nerves or veins'],
            ['value' => 'Limb-threatening vascular emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Doppler ultrasound and CT angiography'],
            ['value' => 'Blood thinner medications'],
            ['value' => 'Endovascular stent graft placement'],
            ['value' => 'Surgical aneurysm repair or bypass'],
            ['value' => 'Regular vascular monitoring for small aneurysms'],
        ],
                'recovery' => 'Early detection and treatment help prevent rupture and limb complications. Recovery depends on aneurysm size, location, and overall vascular health.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Peripheral Aneurysms (Femoral, Popliteal, Visceral)',
                'meta_description' => 'Peripheral aneurysms are abnormal dilatations of arteries outside the heart and aorta, commonly affecting the femoral, popliteal, or visceral arteries. These an',
                'meta_keywords' => '',
            ]
        );
    }
}
