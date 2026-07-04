<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrachialPlexusInjuriesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Brachial Plexus Injuries')],
            [
                'name' => 'Brachial Plexus Injuries',
                'slug' => Str::slug('Brachial Plexus Injuries'),
                'h1' => 'Brachial Plexus Injuries',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Brachial plexus injuries involve damage to the network of nerves controlling the shoulder, arm, and hand. These injuries can occur due to trauma, birth injury, or stretching of nerves and may cause weakness, paralysis, or sensory loss.',
                'about_more' => '',
                'overview' => 'Brachial plexus injuries involve damage to the network of nerves controlling the shoulder, arm, and hand. These injuries can occur due to trauma, birth injury, or stretching of nerves and may cause weakness, paralysis, or sensory loss.',
                'symptoms' => [
            ['value' => 'Weakness or paralysis of the arm'],
            ['value' => 'Loss of sensation in the shoulder or hand'],
            ['value' => 'Burning or shooting pain'],
            ['value' => 'Reduced arm movement and grip strength'],
            ['value' => 'Muscle wasting in severe cases'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents and trauma'],
            ['value' => 'Sports injuries and falls'],
            ['value' => 'Birth-related nerve injury in newborns'],
            ['value' => 'Penetrating injuries or fractures'],
            ['value' => 'Tumors compressing nerve structures'],
        ],
                'risks' => [
            ['value' => 'Permanent arm weakness or paralysis'],
            ['value' => 'Chronic nerve pain and disability'],
            ['value' => 'Joint stiffness and muscle wasting'],
            ['value' => 'Reduced hand function and coordination'],
            ['value' => 'Emotional and occupational difficulties'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'MRI and nerve conduction studies'],
            ['value' => 'Physiotherapy and rehabilitation exercises'],
            ['value' => 'Pain management and splinting'],
            ['value' => 'Nerve repair or graft surgery'],
            ['value' => 'Tendon transfer or reconstructive procedures'],
        ],
                'recovery' => 'Mild injuries may recover spontaneously, while severe nerve damage may require surgery and prolonged rehabilitation for functional improvement.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Brachial Plexus Injuries',
                'meta_description' => 'Brachial plexus injuries involve damage to the network of nerves controlling the shoulder, arm, and hand. These injuries can occur due to trauma, birth injury, ',
                'meta_keywords' => '',
            ]
        );
    }
}
