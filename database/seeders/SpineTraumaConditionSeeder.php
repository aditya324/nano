<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpineTraumaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spine Trauma')],
            [
                'name' => 'Spine Trauma',
                'slug' => Str::slug('Spine Trauma'),
                'h1' => 'Spine Trauma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spine trauma refers to injuries affecting the vertebral bones, spinal cord, discs, ligaments, or surrounding structures due to accidents or physical impact. These injuries can range from minor soft tissue damage to severe spinal cord injury causing paralysis. Early neurosurgical evaluation is critical to prevent permanent neurological damage.',
                'about_more' => '',
                'overview' => 'Spine trauma refers to injuries affecting the vertebral bones, spinal cord, discs, ligaments, or surrounding structures due to accidents or physical impact. These injuries can range from minor soft tissue damage to severe spinal cord injury causing paralysis. Early neurosurgical evaluation is critical to prevent permanent neurological damage.',
                'symptoms' => [
            ['value' => 'Severe neck or back pain'],
            ['value' => 'Weakness or paralysis in limbs'],
            ['value' => 'Numbness or tingling sensations'],
            ['value' => 'Difficulty walking or loss of balance'],
            ['value' => 'Loss of bladder or bowel control in severe cases'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents'],
            ['value' => 'Falls from height'],
            ['value' => 'Sports-related injuries'],
            ['value' => 'Workplace or industrial accidents'],
            ['value' => 'Violent trauma or assault'],
        ],
                'risks' => [
            ['value' => 'Spinal cord injury and paralysis'],
            ['value' => 'Permanent nerve damage'],
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Respiratory complications in cervical injuries'],
            ['value' => 'Loss of mobility and independence'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency spinal stabilization'],
            ['value' => 'MRI or CT imaging evaluation'],
            ['value' => 'Pain management and intensive monitoring'],
            ['value' => 'Neurosurgical decompression or fixation surgery'],
            ['value' => 'Physiotherapy and rehabilitation programs'],
        ],
                'recovery' => 'Recovery depends on the severity and level of spinal injury. Early stabilization and rehabilitation improve neurological recovery and functional outcomes.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Spine Trauma',
                'meta_description' => 'Spine trauma refers to injuries affecting the vertebral bones, spinal cord, discs, ligaments, or surrounding structures due to accidents or physical impact. The',
                'meta_keywords' => '',
            ]
        );
    }
}
