<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThoracicDiscProlapseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thoracic Disc Prolapse')],
            [
                'name' => 'Thoracic Disc Prolapse',
                'slug' => Str::slug('Thoracic Disc Prolapse'),
                'h1' => 'Thoracic Disc Prolapse',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thoracic disc prolapse is a less common spinal condition in which a disc in the middle spine protrudes and compresses nerves or the spinal cord. Symptoms may affect the chest, abdomen, or lower limbs depending on the level involved.',
                'about_more' => '',
                'overview' => 'Thoracic disc prolapse is a less common spinal condition in which a disc in the middle spine protrudes and compresses nerves or the spinal cord. Symptoms may affect the chest, abdomen, or lower limbs depending on the level involved.',
                'symptoms' => [
            ['value' => 'Mid-back pain and stiffness'],
            ['value' => 'Pain radiating around the chest or abdomen'],
            ['value' => 'Tingling or numbness in lower limbs'],
            ['value' => 'Weakness or walking difficulty'],
            ['value' => 'Balance or coordination problems'],
        ],
                'causes' => [
            ['value' => 'Degenerative disc disease'],
            ['value' => 'Trauma or spinal injury'],
            ['value' => 'Repetitive spinal strain'],
            ['value' => 'Poor posture and spinal stress'],
            ['value' => 'Age-related disc degeneration'],
        ],
                'risks' => [
            ['value' => 'Chronic thoracic spine pain'],
            ['value' => 'Spinal cord compression'],
            ['value' => 'Weakness or paralysis in severe cases'],
            ['value' => 'Difficulty walking and coordination issues'],
            ['value' => 'Long-term neurological deficits'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain management and anti-inflammatory therapy'],
            ['value' => 'Physiotherapy and spinal exercises'],
            ['value' => 'MRI evaluation and neurological monitoring'],
            ['value' => 'Lifestyle and posture correction'],
            ['value' => 'Neurosurgical decompression when necessary'],
        ],
                'recovery' => 'Many mild cases improve with conservative treatment. Severe spinal cord compression may require surgery for neurological recovery.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Thoracic Disc Prolapse',
                'meta_description' => 'Thoracic disc prolapse is a less common spinal condition in which a disc in the middle spine protrudes and compresses nerves or the spinal cord. Symptoms may af',
                'meta_keywords' => '',
            ]
        );
    }
}
