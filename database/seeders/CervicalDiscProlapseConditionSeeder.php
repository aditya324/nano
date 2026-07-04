<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CervicalDiscProlapseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cervical Disc Prolapse')],
            [
                'name' => 'Cervical Disc Prolapse',
                'slug' => Str::slug('Cervical Disc Prolapse'),
                'h1' => 'Cervical Disc Prolapse',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cervical disc prolapse occurs when a disc in the neck region protrudes or ruptures, compressing nearby nerves or the spinal cord. It commonly causes neck pain, arm pain, numbness, and weakness.',
                'about_more' => '',
                'overview' => 'Cervical disc prolapse occurs when a disc in the neck region protrudes or ruptures, compressing nearby nerves or the spinal cord. It commonly causes neck pain, arm pain, numbness, and weakness.',
                'symptoms' => [
            ['value' => 'Neck pain and stiffness'],
            ['value' => 'Pain radiating to shoulders or arms'],
            ['value' => 'Tingling or numbness in hands'],
            ['value' => 'Weakness in upper limbs'],
            ['value' => 'Difficulty with neck movement'],
        ],
                'causes' => [
            ['value' => 'Degenerative disc disease'],
            ['value' => 'Sudden neck injury or trauma'],
            ['value' => 'Poor posture and prolonged strain'],
            ['value' => 'Heavy lifting or repetitive movements'],
            ['value' => 'Age-related spinal wear and tear'],
        ],
                'risks' => [
            ['value' => 'Chronic neck and arm pain'],
            ['value' => 'Nerve compression and weakness'],
            ['value' => 'Reduced hand coordination'],
            ['value' => 'Spinal cord compression in severe cases'],
            ['value' => 'Long-term mobility limitations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain-relieving and anti-inflammatory medications'],
            ['value' => 'Physiotherapy and posture correction'],
            ['value' => 'Cervical traction and rehabilitation exercises'],
            ['value' => 'Epidural steroid injections in selected cases'],
            ['value' => 'Cervical spine surgery for severe compression'],
        ],
                'recovery' => 'Many patients improve with conservative treatment and physiotherapy. Severe nerve compression may require surgery for lasting relief and neurological recovery.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Cervical Disc Prolapse',
                'meta_description' => 'Cervical disc prolapse occurs when a disc in the neck region protrudes or ruptures, compressing nearby nerves or the spinal cord. It commonly causes neck pain, ',
                'meta_keywords' => '',
            ]
        );
    }
}
