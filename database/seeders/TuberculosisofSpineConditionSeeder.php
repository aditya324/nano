<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TuberculosisofSpineConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tuberculosis of Spine')],
            [
                'name' => 'Tuberculosis of Spine',
                'slug' => Str::slug('Tuberculosis of Spine'),
                'h1' => 'Tuberculosis of Spine',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tuberculosis of the spine, also called Pott’s spine, is a serious infection caused by Mycobacterium tuberculosis affecting the vertebrae and spinal structures. It can lead to spinal deformity, instability, and spinal cord compression.',
                'about_more' => '',
                'overview' => 'Tuberculosis of the spine, also called Pott’s spine, is a serious infection caused by Mycobacterium tuberculosis affecting the vertebrae and spinal structures. It can lead to spinal deformity, instability, and spinal cord compression.',
                'symptoms' => [
            ['value' => 'Chronic back pain and stiffness'],
            ['value' => 'Fever, weight loss, and fatigue'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Difficulty walking or spinal deformity'],
            ['value' => 'Night sweats and loss of appetite'],
        ],
                'causes' => [
            ['value' => 'Tuberculosis infection spreading through blood'],
            ['value' => 'Weakened immune system'],
            ['value' => 'Untreated pulmonary tuberculosis'],
            ['value' => 'Malnutrition and chronic illness'],
            ['value' => 'Delayed diagnosis of TB infection'],
        ],
                'risks' => [
            ['value' => 'Spinal deformity and kyphosis'],
            ['value' => 'Spinal cord compression and paralysis'],
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Vertebral destruction and instability'],
            ['value' => 'Spread of tuberculosis infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Long-term anti-tubercular therapy'],
            ['value' => 'MRI spine and neurological evaluation'],
            ['value' => 'Nutritional and supportive care'],
            ['value' => 'Surgical decompression or stabilization when necessary'],
            ['value' => 'Physiotherapy and rehabilitation support'],
        ],
                'recovery' => 'Most patients improve with early anti-tubercular treatment. Severe neurological deficits may require surgery and prolonged rehabilitation.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Tuberculosis of Spine',
                'meta_description' => 'Tuberculosis of the spine, also called Pott’s spine, is a serious infection caused by Mycobacterium tuberculosis affecting the vertebrae and spinal structures. ',
                'meta_keywords' => '',
            ]
        );
    }
}
