<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstheticsOrthoticsManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prosthetics & Orthotics Management')],
            [
                'name' => 'Prosthetics & Orthotics Management',
                'slug' => Str::slug('Prosthetics & Orthotics Management'),
                'h1' => 'Prosthetics & Orthotics Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Prosthetics and orthotics management involves the assessment, fitting, training, and long-term care of artificial limbs (prosthetics) and supportive devices (orthotics) designed to improve mobility, stability, posture, and functional independence. These services help individuals affected by limb loss, muscle weakness, neurological disorders, or musculoskeletal conditions regain movement and improve quality of life.',
                'about_more' => '',
                'overview' => 'Prosthetic devices replace missing limbs after amputation, while orthotic devices provide external support to joints, muscles, or the spine to improve alignment and movement. Management includes device selection, custom fitting, gait training, mobility rehabilitation, posture correction, and regular adjustments to ensure comfort and optimal function. Prosthetics and orthotics are commonly used in rehabilitation programs for amputations, stroke, cerebral palsy, spinal cord injuries, and orthopedic disorders.',
                'symptoms' => [
            ['value' => 'Limb loss or reduced limb function'],
            ['value' => 'Difficulty walking or maintaining balance'],
            ['value' => 'Muscle weakness or joint instability'],
            ['value' => 'Abnormal posture or movement patterns'],
            ['value' => 'Reduced mobility and functional independence'],
            ['value' => 'Common Causes'],
            ['value' => 'Amputations due to trauma, diabetes, or vascular disease'],
            ['value' => 'Neurological disorders affecting movement and muscle control'],
            ['value' => 'Congenital limb or musculoskeletal abnormalities'],
            ['value' => 'Orthopedic injuries or spinal deformities'],
            ['value' => 'Chronic joint instability or muscle weakness'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Skin irritation or pressure sores from device use'],
            ['value' => 'Poor prosthetic or orthotic fit causing discomfort'],
            ['value' => 'Muscle weakness or imbalance affecting mobility'],
            ['value' => 'Falls or instability during movement'],
            ['value' => 'Emotional stress related to adjustment and mobility limitations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Prosthetics and orthotics management may include custom device fabrication, gait training, balance rehabilitation, strengthening exercises, mobility training, posture correction, and occupational therapy. Rehabilitation specialists also provide education on device maintenance, skin care, safe usage techniques, and long-term adaptation strategies to improve independence and comfort.'],
            ['value' => 'Regular cleaning and maintenance of prosthetic or orthotic devices'],
            ['value' => 'Monitoring skin condition and pressure points'],
            ['value' => 'Practicing prescribed mobility and strengthening exercises'],
            ['value' => 'Attending follow-up appointments for adjustments and fitting'],
            ['value' => 'Using assistive devices and safety measures as recommended'],
        ],
                'recovery' => 'The long-term outlook with prosthetics and orthotics management is generally very positive when devices are properly fitted and rehabilitation is performed consistently. These supportive technologies can significantly improve mobility, posture, balance, independence, and overall quality of life. Continuous rehabilitation, regular device adjustments, and ongoing medical follow-up are important for maintaining long-term functional outcomes and comfort. ___________________________ 5. Electrotherapy (TENS, NMES, Ultrasound, Laser Therapy) Electrotherapy (TENS, NMES, Ultrasound & Laser Therapy) Procedures',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Prosthetics & Orthotics Management',
                'meta_description' => 'Prosthetics and orthotics management involves the assessment, fitting, training, and long-term care of artificial limbs (prosthetics) and supportive devices (or',
                'meta_keywords' => '',
            ]
        );
    }
}
