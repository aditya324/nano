<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SyringomyeliaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Syringomyelia')],
            [
                'name' => 'Syringomyelia',
                'slug' => Str::slug('Syringomyelia'),
                'h1' => 'Syringomyelia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Syringomyelia is a neurological disorder in which a fluid-filled cavity called a syrinx develops within the spinal cord. The expanding cavity can damage spinal cord tissue and disrupt nerve function over time.',
                'about_more' => '',
                'overview' => 'Syringomyelia is a neurological disorder in which a fluid-filled cavity called a syrinx develops within the spinal cord. The expanding cavity can damage spinal cord tissue and disrupt nerve function over time.',
                'symptoms' => [
            ['value' => 'Neck and shoulder pain'],
            ['value' => 'Weakness or stiffness in arms and legs'],
            ['value' => 'Loss of pain and temperature sensation'],
            ['value' => 'Muscle wasting and coordination problems'],
            ['value' => 'Chronic headaches or balance difficulties'],
        ],
                'causes' => [
            ['value' => 'Chiari malformation'],
            ['value' => 'Spinal cord trauma or injury'],
            ['value' => 'Spinal tumors or infections'],
            ['value' => 'Congenital spinal abnormalities'],
            ['value' => 'Post-inflammatory spinal cord damage'],
        ],
                'risks' => [
            ['value' => 'Progressive spinal cord damage'],
            ['value' => 'Muscle weakness and paralysis'],
            ['value' => 'Chronic pain and sensory loss'],
            ['value' => 'Spinal deformities such as scoliosis'],
            ['value' => 'Long-term neurological disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI spine evaluation and monitoring'],
            ['value' => 'Treatment of underlying cause'],
            ['value' => 'Surgical drainage or decompression'],
            ['value' => 'Pain management and rehabilitation'],
            ['value' => 'Neurological follow-up and physiotherapy'],
        ],
                'recovery' => 'Early treatment may prevent progression and improve symptoms. Long-standing spinal cord damage may not completely reverse despite surgery.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Syringomyelia',
                'meta_description' => 'Syringomyelia is a neurological disorder in which a fluid-filled cavity called a syrinx develops within the spinal cord. The expanding cavity can damage spinal ',
                'meta_keywords' => '',
            ]
        );
    }
}
