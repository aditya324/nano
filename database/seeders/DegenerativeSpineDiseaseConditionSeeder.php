<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DegenerativeSpineDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Degenerative Spine Disease')],
            [
                'name' => 'Degenerative Spine Disease',
                'slug' => Str::slug('Degenerative Spine Disease'),
                'h1' => 'Degenerative Spine Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Degenerative spine disease refers to age-related wear and tear affecting spinal discs, joints, ligaments, and vertebrae. It may lead to chronic pain, stiffness, nerve compression, and reduced mobility.',
                'about_more' => '',
                'overview' => 'Degenerative spine disease refers to age-related wear and tear affecting spinal discs, joints, ligaments, and vertebrae. It may lead to chronic pain, stiffness, nerve compression, and reduced mobility.',
                'symptoms' => [
            ['value' => 'Chronic neck or back pain'],
            ['value' => 'Stiffness and reduced spinal flexibility'],
            ['value' => 'Numbness or tingling in limbs'],
            ['value' => 'Muscle weakness or spasms'],
            ['value' => 'Difficulty with prolonged standing or walking'],
        ],
                'causes' => [
            ['value' => 'Natural aging and disc degeneration'],
            ['value' => 'Repetitive spinal strain and poor posture'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Previous spinal injuries'],
            ['value' => 'Genetic predisposition to spinal degeneration'],
        ],
                'risks' => [
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Disc prolapse and nerve compression'],
            ['value' => 'Spinal stenosis and myelopathy'],
            ['value' => 'Reduced mobility and independence'],
            ['value' => 'Long-term neurological complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain management and physiotherapy'],
            ['value' => 'Exercise and posture correction'],
            ['value' => 'Weight reduction and lifestyle changes'],
            ['value' => 'Minimally invasive spinal procedures'],
            ['value' => 'Spine surgery for severe degenerative disease'],
        ],
                'recovery' => 'Many patients achieve symptom control with rehabilitation and lifestyle modifications. Severe cases may require surgical intervention for long-term relief.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Degenerative Spine Disease',
                'meta_description' => 'Degenerative spine disease refers to age-related wear and tear affecting spinal discs, joints, ligaments, and vertebrae. It may lead to chronic pain, stiffness,',
                'meta_keywords' => '',
            ]
        );
    }
}
