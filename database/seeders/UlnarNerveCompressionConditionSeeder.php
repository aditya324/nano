<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UlnarNerveCompressionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ulnar Nerve Compression')],
            [
                'name' => 'Ulnar Nerve Compression',
                'slug' => Str::slug('Ulnar Nerve Compression'),
                'h1' => 'Ulnar Nerve Compression',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ulnar nerve compression occurs when the ulnar nerve becomes trapped or compressed, usually at the elbow or wrist. It affects sensation and muscle control in the hand and fingers.',
                'about_more' => '',
                'overview' => 'Ulnar nerve compression occurs when the ulnar nerve becomes trapped or compressed, usually at the elbow or wrist. It affects sensation and muscle control in the hand and fingers.',
                'symptoms' => [
            ['value' => 'Numbness in the ring and little fingers'],
            ['value' => 'Weak grip strength'],
            ['value' => 'Tingling or burning sensations in the hand'],
            ['value' => 'Hand muscle weakness or wasting'],
            ['value' => 'Difficulty with fine finger movements'],
        ],
                'causes' => [
            ['value' => 'Prolonged elbow pressure or bending'],
            ['value' => 'Repetitive arm movements'],
            ['value' => 'Trauma or fractures around the elbow'],
            ['value' => 'Arthritis or bone spurs'],
            ['value' => 'Nerve entrapment syndromes'],
        ],
                'risks' => [
            ['value' => 'Permanent hand weakness'],
            ['value' => 'Muscle wasting and deformity'],
            ['value' => 'Chronic pain and sensory loss'],
            ['value' => 'Reduced hand coordination'],
            ['value' => 'Occupational and functional limitations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Activity modification and elbow protection'],
            ['value' => 'Splints and physiotherapy'],
            ['value' => 'Pain and anti-inflammatory medications'],
            ['value' => 'Nerve decompression surgery'],
            ['value' => 'Rehabilitation and strengthening exercises'],
        ],
                'recovery' => 'Many patients improve with conservative care, while severe compression may require surgery for optimal recovery and hand function restoration.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Ulnar Nerve Compression',
                'meta_description' => 'Ulnar nerve compression occurs when the ulnar nerve becomes trapped or compressed, usually at the elbow or wrist. It affects sensation and muscle control in the',
                'meta_keywords' => '',
            ]
        );
    }
}
