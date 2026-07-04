<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralArterialDiseaserelatedFootComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Arterial Disease–related Foot Complications')],
            [
                'name' => 'Peripheral Arterial Disease–related Foot Complications',
                'slug' => Str::slug('Peripheral Arterial Disease–related Foot Complications'),
                'h1' => 'Peripheral Arterial Disease–related Foot Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral arterial disease (PAD) reduces blood supply to the diabetic foot, leading to poor healing, pain, ulcers, and tissue loss.',
                'about_more' => '',
                'overview' => 'Peripheral arterial disease (PAD) reduces blood supply to the diabetic foot, leading to poor healing, pain, ulcers, and tissue loss.',
                'symptoms' => [
            ['value' => 'Cold feet and weak pulses'],
            ['value' => 'Pain while walking or at rest'],
            ['value' => 'Non-healing wounds or ulcers'],
            ['value' => 'Skin discoloration or blackening'],
            ['value' => 'Delayed healing after injury'],
        ],
                'causes' => [
            ['value' => 'Diabetes-related vascular disease'],
            ['value' => 'Smoking and hypertension'],
            ['value' => 'High cholesterol levels'],
            ['value' => 'Obesity and inactivity'],
            ['value' => 'Advanced atherosclerosis'],
        ],
                'risks' => [
            ['value' => 'Critical limb ischemia'],
            ['value' => 'Gangrene formation'],
            ['value' => 'Severe wound infections'],
            ['value' => 'Limb amputation'],
            ['value' => 'Cardiovascular complications such as stroke'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vascular Doppler evaluation'],
            ['value' => 'Blood-thinning and cholesterol medications'],
            ['value' => 'Angioplasty or bypass surgery'],
            ['value' => 'Wound care and infection control'],
            ['value' => 'Lifestyle modification and smoking cessation'],
        ],
                'recovery' => 'Restoration of blood flow greatly improves healing and reduces amputation risk.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Peripheral Arterial Disease–related Foot Complications',
                'meta_description' => 'Peripheral arterial disease (PAD) reduces blood supply to the diabetic foot, leading to poor healing, pain, ulcers, and tissue loss.',
                'meta_keywords' => '',
            ]
        );
    }
}
