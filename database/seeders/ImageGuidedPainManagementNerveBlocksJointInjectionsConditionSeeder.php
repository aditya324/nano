<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImageGuidedPainManagementNerveBlocksJointInjectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Image-Guided Pain Management (Nerve Blocks & Joint Injections)')],
            [
                'name' => 'Image-Guided Pain Management (Nerve Blocks & Joint Injections)',
                'slug' => Str::slug('Image-Guided Pain Management (Nerve Blocks & Joint Injections)'),
                'h1' => 'Image-Guided Pain Management (Nerve Blocks & Joint Injections)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Image-guided pain management procedures are minimally invasive treatments performed using imaging guidance such as ultrasound, fluoroscopy, or CT scan to accurately target nerves, joints, or painful structures within the body. Procedures such as nerve blocks and joint injections help relieve pain, reduce inflammation, and improve mobility and quality of life.',
                'about_more' => '',
                'overview' => 'Nerve blocks involve the injection of medications around specific nerves to interrupt pain signals, while joint injections deliver anti-inflammatory or pain-relieving medications directly into affected joints. Imaging guidance improves precision, safety, and treatment effectiveness. These procedures are commonly used for chronic pain, arthritis, spinal disorders, sports injuries, nerve-related pain, and musculoskeletal conditions.',
                'symptoms' => [
            ['value' => 'Chronic joint or muscle pain'],
            ['value' => 'Neck pain, back pain, or radiating nerve pain'],
            ['value' => 'Joint stiffness or reduced mobility'],
            ['value' => 'Inflammation or swelling affecting movement'],
            ['value' => 'Persistent pain not relieved by conservative treatment'],
        ],
                'causes' => [
            ['value' => 'Arthritis and degenerative joint disorders'],
            ['value' => 'Spinal disc disease or nerve compression'],
            ['value' => 'Sports injuries and musculoskeletal strain'],
            ['value' => 'Chronic inflammatory or pain-related conditions'],
            ['value' => 'Repetitive stress, trauma, or poor posture affecting joints and nerves'],
        ],
                'risks' => [
            ['value' => 'Temporary soreness or swelling at the injection site'],
            ['value' => 'Bleeding or infection in rare cases'],
            ['value' => 'Allergic reactions to medications or contrast agents'],
            ['value' => 'Temporary numbness or weakness after nerve block procedures'],
            ['value' => 'Need for repeat procedures if pain recurs or persists'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Image-guided nerve block procedures'],
            ['value' => 'Joint injections for pain and inflammation relief'],
            ['value' => 'Ultrasound or fluoroscopy-guided musculoskeletal interventions'],
            ['value' => 'Pain management rehabilitation and physiotherapy support'],
            ['value' => 'Long-term monitoring and minimally invasive pain control strategies'],
        ],
                'recovery' => 'The long-term outlook with image-guided pain management is generally very positive because these procedures provide targeted pain relief with minimal invasiveness and faster recovery. Combined with rehabilitation, exercise, lifestyle modification, medication management, and regular medical follow-up, these treatments can significantly improve mobility, comfort, and overall quality of life.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Image-Guided Pain Management (Nerve Blocks & Joint Injections)',
                'meta_description' => 'Image-guided pain management procedures are minimally invasive treatments performed using imaging guidance such as ultrasound, fluoroscopy, or CT scan to accura',
                'meta_keywords' => '',
            ]
        );
    }
}
