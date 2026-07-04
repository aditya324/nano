<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CharcotFootNeuropathicArthropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Charcot Foot / Neuropathic Arthropathy')],
            [
                'name' => 'Charcot Foot / Neuropathic Arthropathy',
                'slug' => Str::slug('Charcot Foot / Neuropathic Arthropathy'),
                'h1' => 'Charcot Foot / Neuropathic Arthropathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Charcot foot is a serious diabetic complication in which weakened bones and joints of the foot collapse due to neuropathy and repeated unnoticed trauma.',
                'about_more' => '',
                'overview' => 'Charcot foot is a serious diabetic complication in which weakened bones and joints of the foot collapse due to neuropathy and repeated unnoticed trauma.',
                'symptoms' => [
            ['value' => 'Swollen warm foot'],
            ['value' => 'Foot deformity'],
            ['value' => 'Redness and instability'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Reduced sensation in the foot'],
        ],
                'causes' => [
            ['value' => 'Diabetic peripheral neuropathy'],
            ['value' => 'Repeated unnoticed injuries'],
            ['value' => 'Weakening of foot bones'],
            ['value' => 'Poor diabetes control'],
            ['value' => 'Delayed diagnosis'],
        ],
                'risks' => [
            ['value' => 'Severe foot deformity'],
            ['value' => 'Chronic ulcers and pressure sores'],
            ['value' => 'Joint destruction'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Amputation risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Immobilization and offloading'],
            ['value' => 'Custom footwear and braces'],
            ['value' => 'Blood sugar management'],
            ['value' => 'Surgical reconstruction in severe cases'],
            ['value' => 'Regular podiatric care'],
        ],
                'recovery' => 'Early recognition and offloading improve outcomes and help prevent permanent deformity.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Charcot Foot / Neuropathic Arthropathy',
                'meta_description' => 'Charcot foot is a serious diabetic complication in which weakened bones and joints of the foot collapse due to neuropathy and repeated unnoticed trauma.',
                'meta_keywords' => '',
            ]
        );
    }
}
