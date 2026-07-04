<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RaynaudsPhenomenonrequiringsurgicalinterventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Raynaud’s Phenomenon requiring surgical intervention')],
            [
                'name' => 'Raynaud’s Phenomenon requiring surgical intervention',
                'slug' => Str::slug('Raynaud’s Phenomenon requiring surgical intervention'),
                'h1' => 'Raynaud’s Phenomenon requiring surgical intervention',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Raynaud’s phenomenon is a vascular disorder causing excessive narrowing of blood vessels in the fingers and toes in response to cold or stress. Severe cases may require surgical treatment when blood flow becomes critically reduced.',
                'about_more' => '',
                'overview' => 'Raynaud’s phenomenon is a vascular disorder causing excessive narrowing of blood vessels in the fingers and toes in response to cold or stress. Severe cases may require surgical treatment when blood flow becomes critically reduced.',
                'symptoms' => [
            ['value' => 'Fingers turning white, blue, or red'],
            ['value' => 'Cold and numb hands or feet'],
            ['value' => 'Tingling or burning sensations'],
            ['value' => 'Pain during cold exposure'],
            ['value' => 'Finger ulcers or tissue damage in severe cases'],
        ],
                'causes' => [
            ['value' => 'Exposure to cold temperatures'],
            ['value' => 'Emotional stress'],
            ['value' => 'Autoimmune diseases such as scleroderma'],
            ['value' => 'Smoking and nicotine exposure'],
            ['value' => 'Occupational vibration injuries'],
        ],
                'risks' => [
            ['value' => 'Chronic pain and circulation problems'],
            ['value' => 'Finger ulcers and infections'],
            ['value' => 'Tissue death and gangrene'],
            ['value' => 'Reduced hand function'],
            ['value' => 'Permanent vascular damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle modification and warmth protection'],
            ['value' => 'Smoking cessation'],
            ['value' => 'Vasodilator medications'],
            ['value' => 'Sympathectomy surgery in severe cases'],
            ['value' => 'Treatment of underlying autoimmune disease'],
        ],
                'recovery' => 'Most patients improve with lifestyle measures and medications. Severe ischemic cases may need surgical intervention to preserve tissue.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Raynaud’s Phenomenon requiring surgical intervention',
                'meta_description' => 'Raynaud’s phenomenon is a vascular disorder causing excessive narrowing of blood vessels in the fingers and toes in response to cold or stress. Severe cases may',
                'meta_keywords' => '',
            ]
        );
    }
}
