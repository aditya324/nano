<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PressureOffloadingTotalContactCastFootwearInsolesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pressure Offloading (Total Contact Cast, Footwear, Insoles)')],
            [
                'title' => 'Pressure Offloading (Total Contact Cast, Footwear, Insoles)',
                'slug' => Str::slug('Pressure Offloading (Total Contact Cast, Footwear, Insoles)'),
                'introduction' => 'Pressure offloading reduces stress on affected areas of the foot to promote healing of diabetic ulcers.',
                'what_is' => 'Excess pressure on diabetic feet can worsen ulcers and delay wound healing. Offloading techniques help redistribute weight and reduce tissue damage.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Charcot foot'],
            ['value' => 'Pressure sore prevention'],
            ['value' => 'Postoperative foot protection'],
            ['value' => 'Neuropathic foot conditions'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include total contact casts, specialized diabetic footwear, custom insoles, braces, walkers, and pressure-relieving devices designed to reduce stress on wounds.'],
            ['value' => 'Benefits'],
            ['value' => 'Faster ulcer healing'],
            ['value' => 'Reduced pressure injury'],
            ['value' => 'Improved walking comfort'],
            ['value' => 'Prevention of ulcer recurrence'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Skin irritation'],
            ['value' => 'Improper fit causing new pressure points'],
            ['value' => 'Reduced mobility in some patients'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular footwear inspection'],
            ['value' => 'Avoid barefoot walking'],
            ['value' => 'Routine wound assessment'],
            ['value' => 'Follow podiatry advice'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Consistent pressure offloading improves ulcer healing and lowers recurrence of diabetic foot wounds.',
                'conclusion' => '',
                'seo_title' => 'Pressure Offloading (Total Contact Cast, Footwear, Insoles)',
                'seo_description' => 'Pressure offloading reduces stress on affected areas of the foot to promote healing of diabetic ulcers.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
