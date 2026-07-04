<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BuergersDiseaseThromboangiitisObliteransConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Buerger’s Disease (Thromboangiitis Obliterans)')],
            [
                'name' => 'Buerger’s Disease (Thromboangiitis Obliterans)',
                'slug' => Str::slug('Buerger’s Disease (Thromboangiitis Obliterans)'),
                'h1' => 'Buerger’s Disease (Thromboangiitis Obliterans)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Buerger’s disease is an inflammatory vascular disorder affecting small and medium-sized blood vessels, strongly associated with tobacco use. It mainly affects the limbs and causes reduced blood circulation.',
                'about_more' => '',
                'overview' => 'Buerger’s disease is an inflammatory vascular disorder affecting small and medium-sized blood vessels, strongly associated with tobacco use. It mainly affects the limbs and causes reduced blood circulation.',
                'symptoms' => [
            ['value' => 'Pain in hands and feet'],
            ['value' => 'Finger or toe ulcers'],
            ['value' => 'Cold sensitivity in extremities'],
            ['value' => 'Numbness and tingling'],
            ['value' => 'Skin discoloration of fingers or toes'],
        ],
                'causes' => [
            ['value' => 'Tobacco smoking or chewing'],
            ['value' => 'Chronic vascular inflammation'],
            ['value' => 'Genetic susceptibility'],
            ['value' => 'Poor circulation disorders'],
            ['value' => 'Exposure to cold temperatures'],
        ],
                'risks' => [
            ['value' => 'Severe limb ischemia'],
            ['value' => 'Non-healing ulcers'],
            ['value' => 'Gangrene and tissue loss'],
            ['value' => 'Limb amputation'],
            ['value' => 'Chronic pain and disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Complete tobacco cessation'],
            ['value' => 'Medications to improve circulation'],
            ['value' => 'Pain management therapy'],
            ['value' => 'Wound care and ulcer treatment'],
            ['value' => 'Vascular surgery in selected cases'],
        ],
                'recovery' => 'Stopping tobacco use is the most important step and can significantly slow disease progression.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Buerger’s Disease (Thromboangiitis Obliterans)',
                'meta_description' => 'Buerger’s disease is an inflammatory vascular disorder affecting small and medium-sized blood vessels, strongly associated with tobacco use. It mainly affects t',
                'meta_keywords' => '',
            ]
        );
    }
}
