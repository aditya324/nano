<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UpperLimbIschemiaSubclavianArteryDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Upper Limb Ischemia / Subclavian Artery Disease')],
            [
                'name' => 'Upper Limb Ischemia / Subclavian Artery Disease',
                'slug' => Str::slug('Upper Limb Ischemia / Subclavian Artery Disease'),
                'h1' => 'Upper Limb Ischemia / Subclavian Artery Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Upper limb ischemia occurs due to reduced blood flow to the arms and hands, commonly caused by narrowing or blockage of the subclavian artery.',
                'about_more' => '',
                'overview' => 'Upper limb ischemia occurs due to reduced blood flow to the arms and hands, commonly caused by narrowing or blockage of the subclavian artery.',
                'symptoms' => [
            ['value' => 'Arm pain during activity'],
            ['value' => 'Hand numbness or weakness'],
            ['value' => 'Cold fingers or hand'],
            ['value' => 'Reduced arm pulses'],
            ['value' => 'Dizziness due to subclavian steal syndrome'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Blood clots or embolism'],
            ['value' => 'Thoracic outlet compression'],
            ['value' => 'Trauma and vascular injury'],
            ['value' => 'Inflammatory vascular diseases'],
        ],
                'risks' => [
            ['value' => 'Tissue damage and ulcers'],
            ['value' => 'Hand weakness and disability'],
            ['value' => 'Stroke risk in severe disease'],
            ['value' => 'Gangrene in advanced ischemia'],
            ['value' => 'Chronic pain and reduced arm function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood-thinning medications'],
            ['value' => 'Angioplasty and stenting'],
            ['value' => 'Surgical bypass procedures'],
            ['value' => 'Physiotherapy and rehabilitation'],
            ['value' => 'Risk factor management'],
        ],
                'recovery' => 'Most patients improve with vascular intervention and proper long-term care.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Upper Limb Ischemia / Subclavian Artery Disease',
                'meta_description' => 'Upper limb ischemia occurs due to reduced blood flow to the arms and hands, commonly caused by narrowing or blockage of the subclavian artery.',
                'meta_keywords' => '',
            ]
        );
    }
}
