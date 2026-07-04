<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SplintingCastingforContracturePreventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Splinting & Casting for Contracture Prevention')],
            [
                'name' => 'Splinting & Casting for Contracture Prevention',
                'slug' => Str::slug('Splinting & Casting for Contracture Prevention'),
                'h1' => 'Splinting & Casting for Contracture Prevention',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Splinting and casting are supportive rehabilitation techniques used to maintain proper joint positioning, prevent muscle shortening, reduce deformities, and improve functional movement. These interventions are commonly used to prevent or manage contractures, which occur when muscles, tendons, or joints become stiff and restricted due to injury, neurological conditions, or prolonged immobilization.',
                'about_more' => '',
                'overview' => 'Splints and casts help stabilize joints, support healing tissues, and maintain optimal alignment during recovery and rehabilitation. They are commonly used in conditions such as stroke, cerebral palsy, spinal cord injury, fractures, burns, tendon injuries, and post-surgical rehabilitation. Splints may be removable or custom-made, while casts provide more rigid support depending on the clinical need and severity of movement restriction.',
                'symptoms' => [
            ['value' => 'Joint stiffness or reduced range of motion'],
            ['value' => 'Muscle tightness or spasticity'],
            ['value' => 'Abnormal joint positioning or deformity'],
            ['value' => 'Difficulty moving affected limbs'],
            ['value' => 'Pain or discomfort during movement'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological disorders causing muscle spasticity'],
            ['value' => 'Prolonged immobilization or bed rest'],
            ['value' => 'Fractures, burns, or orthopedic injuries'],
            ['value' => 'Stroke or spinal cord injuries'],
            ['value' => 'Post-surgical healing and tendon shortening'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Skin irritation or pressure sores under splints or casts'],
            ['value' => 'Muscle weakness due to prolonged immobilization'],
            ['value' => 'Reduced circulation or swelling in severe cases'],
            ['value' => 'Joint stiffness if devices are not used appropriately'],
            ['value' => 'Discomfort or difficulty performing daily activities'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Splinting and casting may be combined with physiotherapy, stretching exercises, range-of-motion training, positioning techniques, strengthening programs, and occupational therapy. Rehabilitation specialists may recommend static or dynamic splints, serial casting, and customized orthotic support depending on the severity of contracture risk and rehabilitation goals.'],
            ['value' => 'Keeping splints or casts clean and dry'],
            ['value' => 'Monitoring for swelling, numbness, or skin irritation'],
            ['value' => 'Performing prescribed exercises regularly'],
            ['value' => 'Following positioning and rehabilitation instructions carefully'],
            ['value' => 'Attending follow-up appointments for adjustments and reassessment'],
        ],
                'recovery' => 'The long-term outlook with splinting and casting for contracture prevention is generally positive when treatment is started early and combined with structured rehabilitation. These interventions can significantly improve joint mobility, reduce deformity risk, and support functional recovery. Continuous therapy, proper positioning, and regular follow-up are important for maintaining long-term flexibility and mobility. _________________________ 14. Stretching & Flexibility Programs Stretching & Flexibility Programs Procedures',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Splinting & Casting for Contracture Prevention',
                'meta_description' => 'Splinting and casting are supportive rehabilitation techniques used to maintain proper joint positioning, prevent muscle shortening, reduce deformities, and imp',
                'meta_keywords' => '',
            ]
        );
    }
}
