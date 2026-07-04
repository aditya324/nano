<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImagingforFootXrayMRISeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Imaging for Foot (X-ray, MRI)')],
            [
                'title' => 'Imaging for Foot (X-ray, MRI)',
                'slug' => Str::slug('Imaging for Foot (X-ray, MRI)'),
                'introduction' => 'Imaging facilities such as X-ray and MRI help evaluate bone, soft tissue, and infection-related complications in diabetic feet.',
                'what_is' => 'Imaging is important for detecting fractures, osteomyelitis, Charcot foot changes, and deep tissue infections.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Osteomyelitis diagnosis'],
            ['value' => 'Charcot foot evaluation'],
            ['value' => 'Deep abscess detection'],
            ['value' => 'Bone deformity assessment'],
            ['value' => 'Surgical planning'],
            ['value' => 'Treatments'],
            ['value' => 'Imaging findings help guide wound care, surgical debridement, antibiotic therapy, reconstructive surgery, and amputation planning when necessary.'],
            ['value' => 'Benefits'],
            ['value' => 'Accurate diagnosis'],
            ['value' => 'Early detection of bone infection'],
            ['value' => 'Better treatment planning'],
            ['value' => 'Improved surgical guidance'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'MRI restrictions in some patients'],
            ['value' => 'Radiation exposure with X-rays'],
            ['value' => 'Cost of advanced imaging'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow specialist recommendations'],
            ['value' => 'Continue wound care and medications'],
            ['value' => 'Attend follow-up imaging if required'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Early imaging evaluation improves diabetic foot treatment outcomes and helps prevent severe complications.',
                'conclusion' => '',
                'seo_title' => 'Imaging for Foot (X-ray, MRI)',
                'seo_description' => 'Imaging facilities such as X-ray and MRI help evaluate bone, soft tissue, and infection-related complications in diabetic feet.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
