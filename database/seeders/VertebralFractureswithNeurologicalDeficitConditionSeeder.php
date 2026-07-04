<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VertebralFractureswithNeurologicalDeficitConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vertebral Fractures with Neurological Deficit')],
            [
                'name' => 'Vertebral Fractures with Neurological Deficit',
                'slug' => Str::slug('Vertebral Fractures with Neurological Deficit'),
                'h1' => 'Vertebral Fractures with Neurological Deficit',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Vertebral fractures with neurological deficit occur when fractured spinal bones compress or damage the spinal cord or nerves. These injuries can lead to weakness, numbness, paralysis, or loss of bladder and bowel control.',
                'about_more' => '',
                'overview' => 'Vertebral fractures with neurological deficit occur when fractured spinal bones compress or damage the spinal cord or nerves. These injuries can lead to weakness, numbness, paralysis, or loss of bladder and bowel control.',
                'symptoms' => [
            ['value' => 'Severe spinal pain after injury'],
            ['value' => 'Weakness or paralysis of limbs'],
            ['value' => 'Loss of sensation below the injury level'],
            ['value' => 'Difficulty standing or walking'],
            ['value' => 'Bladder or bowel dysfunction'],
        ],
                'causes' => [
            ['value' => 'High-impact accidents and trauma'],
            ['value' => 'Falls from height'],
            ['value' => 'Osteoporosis-related fractures'],
            ['value' => 'Sports injuries'],
            ['value' => 'Tumor-related spinal weakness'],
        ],
                'risks' => [
            ['value' => 'Permanent spinal cord damage'],
            ['value' => 'Paralysis and long-term disability'],
            ['value' => 'Chronic pain and spinal deformity'],
            ['value' => 'Loss of bladder or bowel control'],
            ['value' => 'Reduced quality of life and mobility'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency neurological assessment'],
            ['value' => 'CT and MRI spine evaluation'],
            ['value' => 'Spinal stabilization with braces or surgery'],
            ['value' => 'Decompression of spinal cord pressure'],
            ['value' => 'Rehabilitation and physiotherapy support'],
        ],
                'recovery' => 'Early surgery and rehabilitation improve neurological recovery. Severe spinal cord injury may result in permanent disability despite treatment.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Vertebral Fractures with Neurological Deficit',
                'meta_description' => 'Vertebral fractures with neurological deficit occur when fractured spinal bones compress or damage the spinal cord or nerves. These injuries can lead to weaknes',
                'meta_keywords' => '',
            ]
        );
    }
}
