<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spinal Infections')],
            [
                'name' => 'Spinal Infections',
                'slug' => Str::slug('Spinal Infections'),
                'h1' => 'Spinal Infections',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spinal infections involve infection of the vertebrae, discs, spinal cord coverings, or surrounding tissues. These infections can cause severe pain, nerve damage, spinal instability, and neurological complications.',
                'about_more' => '',
                'overview' => 'Spinal infections involve infection of the vertebrae, discs, spinal cord coverings, or surrounding tissues. These infections can cause severe pain, nerve damage, spinal instability, and neurological complications.',
                'symptoms' => [
            ['value' => 'Persistent back or neck pain'],
            ['value' => 'Fever and chills'],
            ['value' => 'Weakness or numbness in limbs'],
            ['value' => 'Difficulty walking or standing'],
            ['value' => 'Loss of bladder or bowel control in severe cases'],
        ],
                'causes' => [
            ['value' => 'Bacterial or fungal infections'],
            ['value' => 'Spread of infection through the bloodstream'],
            ['value' => 'Tuberculosis or chronic infections'],
            ['value' => 'Post-surgical spinal infections'],
            ['value' => 'Weakened immunity or diabetes'],
        ],
                'risks' => [
            ['value' => 'Spinal cord compression'],
            ['value' => 'Vertebral destruction and deformity'],
            ['value' => 'Chronic pain and instability'],
            ['value' => 'Paralysis and neurological deficits'],
            ['value' => 'Spread of infection to other organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI spine imaging and laboratory tests'],
            ['value' => 'Long-term antibiotics or antifungal medications'],
            ['value' => 'Pain management and spinal support'],
            ['value' => 'Surgical drainage or decompression if needed'],
            ['value' => 'Rehabilitation and neurological monitoring'],
        ],
                'recovery' => 'With early diagnosis and appropriate antimicrobial therapy, many patients recover well. Delayed treatment may cause permanent spinal and neurological damage.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Spinal Infections',
                'meta_description' => 'Spinal infections involve infection of the vertebrae, discs, spinal cord coverings, or surrounding tissues. These infections can cause severe pain, nerve damage',
                'meta_keywords' => '',
            ]
        );
    }
}
