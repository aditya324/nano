<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrigeminalNeuralgiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trigeminal Neuralgia')],
            [
                'name' => 'Trigeminal Neuralgia',
                'slug' => Str::slug('Trigeminal Neuralgia'),
                'h1' => 'Trigeminal Neuralgia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trigeminal neuralgia is a chronic pain disorder involving the trigeminal nerve, which carries sensation from the face to the brain. It causes sudden, severe facial pain often described as electric shock–like attacks. The condition can severely affect eating, speaking, and daily activities.',
                'about_more' => '',
                'overview' => 'Trigeminal neuralgia is a chronic pain disorder involving the trigeminal nerve, which carries sensation from the face to the brain. It causes sudden, severe facial pain often described as electric shock–like attacks. The condition can severely affect eating, speaking, and daily activities.',
                'symptoms' => [
            ['value' => 'Sudden sharp facial pain attacks'],
            ['value' => 'Electric shock–like pain on one side of the face'],
            ['value' => 'Pain triggered by chewing, speaking, or touching the face'],
            ['value' => 'Recurrent episodes lasting seconds to minutes'],
            ['value' => 'Anxiety and fear of triggering pain attacks'],
        ],
                'causes' => [
            ['value' => 'Compression of the trigeminal nerve by blood vessels'],
            ['value' => 'Multiple sclerosis or nerve demyelination'],
            ['value' => 'Tumors compressing facial nerves'],
            ['value' => 'Facial trauma or surgical injury'],
            ['value' => 'Age-related nerve degeneration'],
        ],
                'risks' => [
            ['value' => 'Severe chronic facial pain'],
            ['value' => 'Difficulty eating and maintaining nutrition'],
            ['value' => 'Sleep disturbances and emotional stress'],
            ['value' => 'Depression and social withdrawal'],
            ['value' => 'Reduced quality of life due to recurring pain'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Anti-seizure and nerve pain medications'],
            ['value' => 'Nerve block procedures'],
            ['value' => 'Microvascular decompression surgery'],
            ['value' => 'Radiofrequency or gamma knife procedures'],
            ['value' => 'Long-term neurological pain management'],
        ],
                'recovery' => 'Many patients achieve significant pain relief with medications or surgery. Some cases may recur, requiring ongoing neurological follow-up.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Trigeminal Neuralgia',
                'meta_description' => 'Trigeminal neuralgia is a chronic pain disorder involving the trigeminal nerve, which carries sensation from the face to the brain. It causes sudden, severe fac',
                'meta_keywords' => '',
            ]
        );
    }
}
