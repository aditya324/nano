<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MixedNeuroischemicUlcerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mixed (Neuroischemic) Ulcer')],
            [
                'name' => 'Mixed (Neuroischemic) Ulcer',
                'slug' => Str::slug('Mixed (Neuroischemic) Ulcer'),
                'h1' => 'Mixed (Neuroischemic) Ulcer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neuroischemic ulcers occur due to a combination of diabetic neuropathy and poor blood circulation, making them difficult to heal and highly prone to infection.',
                'about_more' => '',
                'overview' => 'Neuroischemic ulcers occur due to a combination of diabetic neuropathy and poor blood circulation, making them difficult to heal and highly prone to infection.',
                'symptoms' => [
            ['value' => 'Ulcers with surrounding discoloration'],
            ['value' => 'Reduced sensation in the feet'],
            ['value' => 'Cold skin and poor circulation'],
            ['value' => 'Painful or infected wounds'],
            ['value' => 'Slow healing ulcers'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Peripheral neuropathy'],
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Smoking and obesity'],
            ['value' => 'Repeated foot trauma'],
        ],
                'risks' => [
            ['value' => 'Severe infection and cellulitis'],
            ['value' => 'Gangrene formation'],
            ['value' => 'Osteomyelitis'],
            ['value' => 'Major limb amputation'],
            ['value' => 'Recurrent ulcers'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Combined wound and vascular care'],
            ['value' => 'Blood sugar optimization'],
            ['value' => 'Pressure offloading techniques'],
            ['value' => 'Antibiotics and debridement'],
            ['value' => 'Angioplasty or vascular surgery'],
        ],
                'recovery' => 'Comprehensive diabetic and vascular management is essential for wound healing and limb preservation.',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Mixed (Neuroischemic) Ulcer',
                'meta_description' => 'Neuroischemic ulcers occur due to a combination of diabetic neuropathy and poor blood circulation, making them difficult to heal and highly prone to infection.',
                'meta_keywords' => '',
            ]
        );
    }
}
