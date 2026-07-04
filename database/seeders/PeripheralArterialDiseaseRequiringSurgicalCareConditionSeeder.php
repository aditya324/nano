<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralArterialDiseaseRequiringSurgicalCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Arterial Disease Requiring Surgical Care')],
            [
                'name' => 'Peripheral Arterial Disease Requiring Surgical Care',
                'slug' => Str::slug('Peripheral Arterial Disease Requiring Surgical Care'),
                'h1' => 'Peripheral Arterial Disease Requiring Surgical Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral arterial disease (PAD) requiring surgical care occurs when severe narrowing or blockage of arteries reduces blood flow to the limbs, causing pain, ulcers, or tissue loss.',
                'about_more' => '',
                'overview' => 'Peripheral arterial disease (PAD) requiring surgical care occurs when severe narrowing or blockage of arteries reduces blood flow to the limbs, causing pain, ulcers, or tissue loss.',
                'symptoms' => [
            ['value' => 'Leg pain while walking or resting'],
            ['value' => 'Cold feet or reduced limb temperature'],
            ['value' => 'Nonhealing wounds or ulcers'],
            ['value' => 'Weak or absent pulses in the legs'],
            ['value' => 'Gangrene or tissue discoloration in severe cases'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis and cholesterol buildup'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Hypertension and obesity'],
            ['value' => 'Advanced vascular disease with aging'],
        ],
                'risks' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Gangrene and tissue death'],
            ['value' => 'Limb amputation risk'],
            ['value' => 'Severe infection in ischemic ulcers'],
            ['value' => 'Increased risk of heart attack and stroke'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vascular Doppler and angiography evaluation'],
            ['value' => 'Blood thinner and cholesterol medications'],
            ['value' => 'Smoking cessation and diabetes control'],
            ['value' => 'Angioplasty and vascular stenting'],
            ['value' => 'Surgical bypass procedures for blood flow restoration'],
        ],
                'recovery' => 'Early vascular intervention improves circulation and reduces amputation risk. Long-term lifestyle modification is essential for preventing disease progression.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Peripheral Arterial Disease Requiring Surgical Care',
                'meta_description' => 'Peripheral arterial disease (PAD) requiring surgical care occurs when severe narrowing or blockage of arteries reduces blood flow to the limbs, causing pain, ul',
                'meta_keywords' => '',
            ]
        );
    }
}
