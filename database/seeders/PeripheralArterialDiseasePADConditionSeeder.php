<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralArterialDiseasePADConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Arterial Disease (PAD)')],
            [
                'name' => 'Peripheral Arterial Disease (PAD)',
                'slug' => Str::slug('Peripheral Arterial Disease (PAD)'),
                'h1' => 'Peripheral Arterial Disease (PAD)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral Arterial Disease occurs when arteries supplying blood to the legs or limbs become narrowed due to atherosclerosis, reducing circulation and causing pain during walking or activity.',
                'about_more' => '',
                'overview' => 'Peripheral Arterial Disease occurs when arteries supplying blood to the legs or limbs become narrowed due to atherosclerosis, reducing circulation and causing pain during walking or activity.',
                'symptoms' => [
            ['value' => 'Leg pain while walking (claudication)'],
            ['value' => 'Cold feet or legs'],
            ['value' => 'Weak pulses in the limbs'],
            ['value' => 'Numbness or muscle weakness'],
            ['value' => 'Nonhealing wounds or ulcers on feet'],
        ],
                'causes' => [
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'High cholesterol and hypertension'],
            ['value' => 'Obesity and inactivity'],
            ['value' => 'Advanced age and vascular disease'],
        ],
                'risks' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Gangrene and tissue loss'],
            ['value' => 'Increased risk of heart attack and stroke'],
            ['value' => 'Poor wound healing and infections'],
            ['value' => 'Need for limb amputation in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vascular Doppler and angiography evaluation'],
            ['value' => 'Smoking cessation and exercise therapy'],
            ['value' => 'Blood thinner and cholesterol medications'],
            ['value' => 'Angioplasty and vascular stenting'],
            ['value' => 'Surgical bypass procedures in advanced disease'],
        ],
                'recovery' => 'Early diagnosis and lifestyle modification improve blood circulation and reduce the risk of limb-threatening complications.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Peripheral Arterial Disease (PAD)',
                'meta_description' => 'Peripheral Arterial Disease occurs when arteries supplying blood to the legs or limbs become narrowed due to atherosclerosis, reducing circulation and causing p',
                'meta_keywords' => '',
            ]
        );
    }
}
