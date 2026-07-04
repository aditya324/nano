<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LumbarCanalStenosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lumbar Canal Stenosis')],
            [
                'name' => 'Lumbar Canal Stenosis',
                'slug' => Str::slug('Lumbar Canal Stenosis'),
                'h1' => 'Lumbar Canal Stenosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lumbar canal stenosis is narrowing of the lower spinal canal causing compression of spinal nerves. It commonly affects older adults and may result in lower back pain, leg pain, and walking difficulties.',
                'about_more' => '',
                'overview' => 'Lumbar canal stenosis is narrowing of the lower spinal canal causing compression of spinal nerves. It commonly affects older adults and may result in lower back pain, leg pain, and walking difficulties.',
                'symptoms' => [
            ['value' => 'Lower back pain and stiffness'],
            ['value' => 'Leg pain while walking'],
            ['value' => 'Numbness or tingling in lower limbs'],
            ['value' => 'Weakness and reduced walking endurance'],
            ['value' => 'Symptoms improving while sitting or bending forward'],
        ],
                'causes' => [
            ['value' => 'Age-related spinal degeneration'],
            ['value' => 'Thickened ligaments and bone overgrowth'],
            ['value' => 'Herniated lumbar discs'],
            ['value' => 'Degenerative arthritis of the spine'],
            ['value' => 'Congenital narrow spinal canal'],
        ],
                'risks' => [
            ['value' => 'Chronic pain and mobility limitation'],
            ['value' => 'Progressive nerve compression'],
            ['value' => 'Weakness and balance difficulties'],
            ['value' => 'Reduced independence in daily life'],
            ['value' => 'Severe neurological deficits in advanced disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain management and physiotherapy'],
            ['value' => 'Weight reduction and posture correction'],
            ['value' => 'Epidural steroid injections'],
            ['value' => 'Walking and strengthening exercises'],
            ['value' => 'Lumbar decompression surgery if severe'],
        ],
                'recovery' => 'Many patients improve with rehabilitation and conservative treatment. Surgical decompression can significantly improve pain, walking ability, and quality of life in severe cases.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Lumbar Canal Stenosis',
                'meta_description' => 'Lumbar canal stenosis is narrowing of the lower spinal canal causing compression of spinal nerves. It commonly affects older adults and may result in lower back',
                'meta_keywords' => '',
            ]
        );
    }
}
