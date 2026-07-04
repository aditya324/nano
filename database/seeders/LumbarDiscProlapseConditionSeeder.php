<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LumbarDiscProlapseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lumbar Disc Prolapse')],
            [
                'name' => 'Lumbar Disc Prolapse',
                'slug' => Str::slug('Lumbar Disc Prolapse'),
                'h1' => 'Lumbar Disc Prolapse',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lumbar disc prolapse occurs when a disc in the lower back protrudes and compresses spinal nerves. It commonly causes lower back pain, sciatica, numbness, and weakness in the legs.',
                'about_more' => '',
                'overview' => 'Lumbar disc prolapse occurs when a disc in the lower back protrudes and compresses spinal nerves. It commonly causes lower back pain, sciatica, numbness, and weakness in the legs.',
                'symptoms' => [
            ['value' => 'Lower back pain'],
            ['value' => 'Pain radiating to buttocks or legs'],
            ['value' => 'Tingling or numbness in lower limbs'],
            ['value' => 'Weakness in legs or feet'],
            ['value' => 'Difficulty standing, walking, or bending'],
        ],
                'causes' => [
            ['value' => 'Disc degeneration with aging'],
            ['value' => 'Heavy lifting or sudden twisting movements'],
            ['value' => 'Poor posture and obesity'],
            ['value' => 'Repetitive strain on the lower back'],
            ['value' => 'Trauma or spinal injury'],
        ],
                'risks' => [
            ['value' => 'Chronic back pain and sciatica'],
            ['value' => 'Persistent nerve compression'],
            ['value' => 'Weakness and mobility limitations'],
            ['value' => 'Loss of bladder or bowel control in severe cases'],
            ['value' => 'Reduced work and daily functioning'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain medications and muscle relaxants'],
            ['value' => 'Physiotherapy and strengthening exercises'],
            ['value' => 'Lifestyle and posture modifications'],
            ['value' => 'Epidural steroid injections'],
            ['value' => 'Lumbar discectomy surgery if required'],
        ],
                'recovery' => 'Most patients recover with conservative treatment and rehabilitation. Surgery may provide excellent relief in severe or persistent nerve compression cases.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Lumbar Disc Prolapse',
                'meta_description' => 'Lumbar disc prolapse occurs when a disc in the lower back protrudes and compresses spinal nerves. It commonly causes lower back pain, sciatica, numbness, and we',
                'meta_keywords' => '',
            ]
        );
    }
}
