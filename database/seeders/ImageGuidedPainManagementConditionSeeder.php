<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImageGuidedPainManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Image-Guided Pain Management')],
            [
                'name' => 'Image-Guided Pain Management',
                'slug' => Str::slug('Image-Guided Pain Management'),
                'h1' => 'Image-Guided Pain Management',
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
            ['value' => 'Pain relief for arthritis and joint disorders'],
            ['value' => 'Management of spinal and nerve-related pain'],
            ['value' => 'Treatment of sports injuries and musculoskeletal conditions'],
            ['value' => 'Reduction of inflammation in painful joints or tissues'],
            ['value' => 'Diagnostic evaluation of pain source and severity'],
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
            ['value' => 'Image-guided pain management procedures support accurate diagnosis, targeted pain relief, inflammation reduction, and improved physical function. These minimally invasive techniques are widely used in orthopedics, pain medicine, rehabilitation, sports medicine, and spine care to reduce discomfort and improve daily functioning.'],
            ['value' => 'Resting the treated area temporarily if advised'],
            ['value' => 'Monitoring for swelling, redness, or unusual pain after the procedure'],
            ['value' => 'Following medication and rehabilitation instructions carefully'],
            ['value' => 'Avoiding strenuous activity for a short period when recommended'],
            ['value' => 'Attending follow-up evaluations to assess pain relief and recovery'],
        ],
                'recovery' => 'The long-term outlook with image-guided pain management is generally very positive because these procedures provide targeted pain relief with minimal invasiveness and faster recovery. Combined with rehabilitation, exercise, lifestyle modification, and ongoing medical care, these treatments can significantly improve mobility, comfort, and overall quality of life. ____________________________ 21. Interdisciplinary Radiology Consultations Interdisciplinary Radiology Consultations Procedures',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Image-Guided Pain Management',
                'meta_description' => 'Image-guided pain management procedures are minimally invasive treatments performed using imaging guidance such as ultrasound, fluoroscopy, or CT scan to accura',
                'meta_keywords' => '',
            ]
        );
    }
}
