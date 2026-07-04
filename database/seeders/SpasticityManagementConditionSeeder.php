<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpasticityManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spasticity Management')],
            [
                'name' => 'Spasticity Management',
                'slug' => Str::slug('Spasticity Management'),
                'h1' => 'Spasticity Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spasticity management involves specialized treatments and rehabilitation strategies used to reduce muscle stiffness, involuntary muscle tightness, and abnormal muscle contractions caused by neurological conditions. The goal of treatment is to improve movement, reduce pain, prevent joint deformities, and enhance overall functional independence.',
                'about_more' => '',
                'overview' => 'Spasticity commonly occurs after conditions such as stroke, cerebral palsy, spinal cord injury, traumatic brain injury, and multiple sclerosis. Management may include botulinum toxin injections to relax overactive muscles, stretching exercises to maintain flexibility, and orthotic devices (orthoses) to support proper joint positioning and movement. Treatment plans are individualized based on the severity of muscle stiffness and functional limitations.',
                'symptoms' => [
            ['value' => 'Muscle stiffness or tightness'],
            ['value' => 'Involuntary muscle spasms or contractions'],
            ['value' => 'Difficulty moving affected limbs'],
            ['value' => 'Abnormal posture or joint positioning'],
            ['value' => 'Pain, reduced flexibility, or difficulty walking'],
            ['value' => 'Common Causes'],
            ['value' => 'Stroke or traumatic brain injury'],
            ['value' => 'Cerebral palsy or neurological developmental disorders'],
            ['value' => 'Spinal cord injuries'],
            ['value' => 'Multiple sclerosis or other neurological diseases'],
            ['value' => 'Damage to the brain or nervous system affecting muscle control'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Joint contractures and reduced mobility'],
            ['value' => 'Muscle pain and stiffness'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Abnormal posture or gait problems'],
            ['value' => 'Skin irritation or discomfort from orthotic devices'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Spasticity management may include botulinum toxin injections, physiotherapy, stretching exercises, splinting, orthotic support, strengthening programs, range-of-motion exercises, and neuromuscular rehabilitation. Rehabilitation specialists may also use positioning techniques, occupational therapy, gait training, and assistive devices to improve mobility, posture, and functional independence.'],
            ['value' => 'Performing stretching and rehabilitation exercises regularly'],
            ['value' => 'Using orthotic devices correctly and consistently'],
            ['value' => 'Monitoring for muscle weakness, pain, or skin irritation'],
            ['value' => 'Attending regular follow-up and rehabilitation sessions'],
            ['value' => 'Maintaining proper posture and mobility training routines'],
        ],
                'recovery' => 'The long-term outlook for spasticity management is generally positive with early intervention and consistent rehabilitation. Appropriate treatment can significantly improve flexibility, reduce muscle tightness, enhance mobility, and improve quality of life. Ongoing therapy, supportive care, and regular neurological follow-up are important for maintaining long-term functional outcomes and preventing complications. ______________________ 17. Cardiac Rehabilitation Programs Cardiac Rehabilitation Programs Procedures',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Spasticity Management',
                'meta_description' => 'Spasticity management involves specialized treatments and rehabilitation strategies used to reduce muscle stiffness, involuntary muscle tightness, and abnormal ',
                'meta_keywords' => '',
            ]
        );
    }
}
