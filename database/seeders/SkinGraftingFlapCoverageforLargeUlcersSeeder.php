<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinGraftingFlapCoverageforLargeUlcersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Skin Grafting / Flap Coverage for Large Ulcers')],
            [
                'title' => 'Skin Grafting / Flap Coverage for Large Ulcers',
                'slug' => Str::slug('Skin Grafting / Flap Coverage for Large Ulcers'),
                'introduction' => 'Skin grafting and flap coverage procedures help close large diabetic foot wounds and promote tissue healing.',
                'what_is' => 'These reconstructive procedures are used when ulcers are too large or deep to heal naturally with standard wound care alone.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Large diabetic ulcers'],
            ['value' => 'Post-debridement tissue defects'],
            ['value' => 'Exposed bone or tendon'],
            ['value' => 'Non-healing wounds'],
            ['value' => 'Post-amputation wound closure'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may involve split-thickness skin grafts, local tissue flaps, muscle flaps, or reconstructive surgical techniques to cover and heal wounds.'],
            ['value' => 'Benefits'],
            ['value' => 'Faster wound closure'],
            ['value' => 'Improved tissue protection'],
            ['value' => 'Reduced infection exposure'],
            ['value' => 'Better limb preservation'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Graft failure'],
            ['value' => 'Infection'],
            ['value' => 'Poor healing in severe diabetes'],
            ['value' => 'Need for repeat procedures'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Protect grafted area from pressure'],
            ['value' => 'Regular wound inspection'],
            ['value' => 'Dressing care'],
            ['value' => 'Strict blood sugar control'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Successful grafting and flap procedures improve wound healing and support long-term limb function.',
                'conclusion' => '',
                'seo_title' => 'Skin Grafting / Flap Coverage for Large Ulcers',
                'seo_description' => 'Skin grafting and flap coverage procedures help close large diabetic foot wounds and promote tissue healing.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
