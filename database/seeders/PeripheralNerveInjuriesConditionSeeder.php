<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralNerveInjuriesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peripheral Nerve Injuries')],
            [
                'name' => 'Peripheral Nerve Injuries',
                'slug' => Str::slug('Peripheral Nerve Injuries'),
                'h1' => 'Peripheral Nerve Injuries',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral nerve injuries occur when nerves outside the brain and spinal cord are damaged by trauma, compression, stretching, or surgical injury. These injuries may affect sensation, movement, and muscle control.',
                'about_more' => '',
                'overview' => 'Peripheral nerve injuries occur when nerves outside the brain and spinal cord are damaged by trauma, compression, stretching, or surgical injury. These injuries may affect sensation, movement, and muscle control.',
                'symptoms' => [
            ['value' => 'Numbness or tingling sensations'],
            ['value' => 'Muscle weakness or paralysis'],
            ['value' => 'Burning or shooting nerve pain'],
            ['value' => 'Loss of sensation in affected areas'],
            ['value' => 'Reduced coordination and grip strength'],
        ],
                'causes' => [
            ['value' => 'Trauma or accidents'],
            ['value' => 'Deep cuts or penetrating injuries'],
            ['value' => 'Compression from fractures or swelling'],
            ['value' => 'Surgical or injection-related injury'],
            ['value' => 'Repetitive strain and occupational stress'],
        ],
                'risks' => [
            ['value' => 'Permanent nerve dysfunction'],
            ['value' => 'Muscle wasting and weakness'],
            ['value' => 'Chronic pain syndromes'],
            ['value' => 'Reduced hand or limb function'],
            ['value' => 'Disability affecting daily activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Neurological examination and nerve studies'],
            ['value' => 'Pain management and physiotherapy'],
            ['value' => 'Splints and rehabilitation exercises'],
            ['value' => 'Surgical nerve repair or grafting'],
            ['value' => 'Long-term occupational therapy support'],
        ],
                'recovery' => 'Recovery depends on the severity and location of nerve damage. Early treatment and rehabilitation improve nerve regeneration and functional recovery.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Peripheral Nerve Injuries',
                'meta_description' => 'Peripheral nerve injuries occur when nerves outside the brain and spinal cord are damaged by trauma, compression, stretching, or surgical injury. These injuries',
                'meta_keywords' => '',
            ]
        );
    }
}
