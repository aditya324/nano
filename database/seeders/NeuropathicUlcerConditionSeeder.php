<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuropathicUlcerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neuropathic Ulcer')],
            [
                'name' => 'Neuropathic Ulcer',
                'slug' => Str::slug('Neuropathic Ulcer'),
                'h1' => 'Neuropathic Ulcer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neuropathic ulcers are foot ulcers caused by diabetic nerve damage leading to loss of protective sensation. Patients may not feel pain even when serious injury occurs.',
                'about_more' => '',
                'overview' => 'Neuropathic ulcers are foot ulcers caused by diabetic nerve damage leading to loss of protective sensation. Patients may not feel pain even when serious injury occurs.',
                'symptoms' => [
            ['value' => 'Painless ulcer on pressure areas'],
            ['value' => 'Thick callus surrounding the ulcer'],
            ['value' => 'Numbness or tingling in the feet'],
            ['value' => 'Warm dry skin'],
            ['value' => 'Foot deformities associated with neuropathy'],
        ],
                'causes' => [
            ['value' => 'Diabetic peripheral neuropathy'],
            ['value' => 'Repeated pressure on the foot'],
            ['value' => 'Improper footwear'],
            ['value' => 'Walking barefoot'],
            ['value' => 'Poor diabetes control'],
        ],
                'risks' => [
            ['value' => 'Deep tissue infection'],
            ['value' => 'Bone involvement and osteomyelitis'],
            ['value' => 'Chronic non-healing wounds'],
            ['value' => 'Gangrene and amputation'],
            ['value' => 'Recurrent ulcer formation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pressure offloading footwear'],
            ['value' => 'Wound care and dressing'],
            ['value' => 'Blood sugar optimization'],
            ['value' => 'Debridement of callus tissue'],
            ['value' => 'Specialized diabetic foot care'],
        ],
                'recovery' => 'Regular foot monitoring and pressure relief significantly improve healing outcomes.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Neuropathic Ulcer',
                'meta_description' => 'Neuropathic ulcers are foot ulcers caused by diabetic nerve damage leading to loss of protective sensation. Patients may not feel pain even when serious injury ',
                'meta_keywords' => '',
            ]
        );
    }
}
