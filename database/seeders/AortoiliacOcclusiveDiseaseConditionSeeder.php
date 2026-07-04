<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AortoiliacOcclusiveDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Aortoiliac Occlusive Disease')],
            [
                'name' => 'Aortoiliac Occlusive Disease',
                'slug' => Str::slug('Aortoiliac Occlusive Disease'),
                'h1' => 'Aortoiliac Occlusive Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Aortoiliac occlusive disease occurs when blood flow through the abdominal aorta and iliac arteries becomes blocked, reducing circulation to the lower body and legs.',
                'about_more' => '',
                'overview' => 'Aortoiliac occlusive disease occurs when blood flow through the abdominal aorta and iliac arteries becomes blocked, reducing circulation to the lower body and legs.',
                'symptoms' => [
            ['value' => 'Pain in hips, thighs, or calves during walking'],
            ['value' => 'Weak leg pulses'],
            ['value' => 'Erectile dysfunction in men'],
            ['value' => 'Leg numbness or weakness'],
            ['value' => 'Cold lower limbs'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Smoking and diabetes'],
            ['value' => 'High cholesterol levels'],
            ['value' => 'Hypertension'],
            ['value' => 'Physical inactivity'],
        ],
                'risks' => [
            ['value' => 'Severe lower limb ischemia'],
            ['value' => 'Tissue loss and gangrene'],
            ['value' => 'Walking disability'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Limb amputation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle modification'],
            ['value' => 'Cholesterol and blood pressure control'],
            ['value' => 'Angioplasty and stenting'],
            ['value' => 'Aortobifemoral bypass surgery'],
            ['value' => 'Vascular rehabilitation therapy'],
        ],
                'recovery' => 'Most patients improve with timely vascular intervention and strict risk factor management.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Aortoiliac Occlusive Disease',
                'meta_description' => 'Aortoiliac occlusive disease occurs when blood flow through the abdominal aorta and iliac arteries becomes blocked, reducing circulation to the lower body and l',
                'meta_keywords' => '',
            ]
        );
    }
}
