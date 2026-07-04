<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralArterialDiseasePADLowerLimbIschemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Arterial Disease (PAD) / Lower Limb Ischemia')],
            [
                'name' => 'Peripheral Arterial Disease (PAD) / Lower Limb Ischemia',
                'slug' => Str::slug('Peripheral Arterial Disease (PAD) / Lower Limb Ischemia'),
                'h1' => 'Peripheral Arterial Disease (PAD) / Lower Limb Ischemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral Arterial Disease (PAD) is a vascular condition caused by narrowing or blockage of arteries supplying blood to the legs and feet. Reduced blood flow leads to pain, poor wound healing, and tissue damage. Severe lower limb ischemia can threaten limb survival if untreated.',
                'about_more' => '',
                'overview' => 'Peripheral Arterial Disease (PAD) is a vascular condition caused by narrowing or blockage of arteries supplying blood to the legs and feet. Reduced blood flow leads to pain, poor wound healing, and tissue damage. Severe lower limb ischemia can threaten limb survival if untreated.',
                'symptoms' => [
            ['value' => 'Leg pain while walking (claudication)'],
            ['value' => 'Coldness or numbness in the feet'],
            ['value' => 'Weak or absent leg pulses'],
            ['value' => 'Non-healing ulcers or wounds'],
            ['value' => 'Rest pain in severe disease'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis (fat buildup in arteries)'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'High blood pressure and cholesterol'],
            ['value' => 'Sedentary lifestyle and obesity'],
        ],
                'risks' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Gangrene and tissue death'],
            ['value' => 'Limb amputation'],
            ['value' => 'Heart attack and stroke risk'],
            ['value' => 'Chronic disability and poor mobility'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle modification and smoking cessation'],
            ['value' => 'Antiplatelet and cholesterol-lowering medications'],
            ['value' => 'Exercise and vascular rehabilitation'],
            ['value' => 'Angioplasty and vascular stenting'],
            ['value' => 'Surgical bypass procedures'],
        ],
                'recovery' => 'Early diagnosis and vascular treatment can improve circulation, reduce pain, and prevent limb loss. Long-term risk factor control is essential.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Peripheral Arterial Disease (PAD) / Lower Limb Ischemia',
                'meta_description' => 'Peripheral Arterial Disease (PAD) is a vascular condition caused by narrowing or blockage of arteries supplying blood to the legs and feet. Reduced blood flow l',
                'meta_keywords' => '',
            ]
        );
    }
}
