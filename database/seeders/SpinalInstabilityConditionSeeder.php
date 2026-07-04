<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalInstabilityConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spinal Instability')],
            [
                'name' => 'Spinal Instability',
                'slug' => Str::slug('Spinal Instability'),
                'h1' => 'Spinal Instability',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spinal instability occurs when the spine loses its normal structural support and alignment, leading to abnormal movement between vertebrae. It can cause chronic pain, nerve compression, and spinal deformity.',
                'about_more' => '',
                'overview' => 'Spinal instability occurs when the spine loses its normal structural support and alignment, leading to abnormal movement between vertebrae. It can cause chronic pain, nerve compression, and spinal deformity.',
                'symptoms' => [
            ['value' => 'Persistent neck or back pain'],
            ['value' => 'Pain worsening with movement'],
            ['value' => 'Muscle spasms and stiffness'],
            ['value' => 'Numbness or weakness in limbs'],
            ['value' => 'Difficulty maintaining posture or balance'],
        ],
                'causes' => [
            ['value' => 'Degenerative spine disease'],
            ['value' => 'Trauma or vertebral fractures'],
            ['value' => 'Disc degeneration and ligament injury'],
            ['value' => 'Spinal infections or tumors'],
            ['value' => 'Congenital spinal abnormalities'],
        ],
                'risks' => [
            ['value' => 'Chronic spinal pain and deformity'],
            ['value' => 'Nerve compression and weakness'],
            ['value' => 'Spinal cord injury in severe instability'],
            ['value' => 'Reduced mobility and function'],
            ['value' => 'Progressive neurological deterioration'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain management and physiotherapy'],
            ['value' => 'Spinal braces for stabilization'],
            ['value' => 'Lifestyle and posture correction'],
            ['value' => 'Minimally invasive spinal procedures'],
            ['value' => 'Spinal fixation and fusion surgery'],
        ],
                'recovery' => 'Many patients improve with proper stabilization and rehabilitation. Surgical correction provides long-term relief in severe instability cases.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Spinal Instability',
                'meta_description' => 'Spinal instability occurs when the spine loses its normal structural support and alignment, leading to abnormal movement between vertebrae. It can cause chronic',
                'meta_keywords' => '',
            ]
        );
    }
}
