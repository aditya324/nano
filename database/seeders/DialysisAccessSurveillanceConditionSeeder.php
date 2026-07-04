<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisAccessSurveillanceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis Access Surveillance')],
            [
                'name' => 'Dialysis Access Surveillance',
                'slug' => Str::slug('Dialysis Access Surveillance'),
                'h1' => 'Dialysis Access Surveillance',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dialysis access surveillance is a nephrology monitoring program designed to evaluate the health and function of vascular access used for dialysis treatment.',
                'about_more' => 'Regular surveillance helps detect narrowing, clotting, or dysfunction early before serious complications occur. Maintaining healthy dialysis access is critical for uninterrupted and effective dialysis therapy.',
                'overview' => 'The surveillance program includes: Physical examination Blood flow measurement Ultrasound evaluation Pressure monitoring Access performance assessment Doctors assess: Fistula vibration Blood circulation Needle site condition Dialysis adequacy Signs of infection or clotting Early detection allows timely procedures such as angioplasty or surgical revision to preserve access function. Continuous monitoring helps reduce emergency dialysis complications.',
                'symptoms' => [
            ['value' => 'Poor dialysis flow'],
            ['value' => 'Swelling around access site'],
            ['value' => 'Weak fistula vibration'],
            ['value' => 'Prolonged bleeding after dialysis'],
            ['value' => 'Pain near access area'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Access blockage'],
            ['value' => 'Infection'],
            ['value' => 'Dialysis interruption'],
            ['value' => 'Clot formation'],
            ['value' => 'Permanent access loss'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Monitor access daily for vibration'],
            ['value' => 'Protect the access arm carefully'],
            ['value' => 'Attend scheduled surveillance visits'],
            ['value' => 'Maintain proper access hygiene'],
            ['value' => 'Report changes immediately'],
        ],
                'recovery' => 'Regular dialysis access surveillance greatly improves long-term access survival and dialysis effectiveness. Modern vascular monitoring techniques help reduce complications and support safer renal replacement therapy.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Dialysis Access Surveillance',
                'meta_description' => 'Dialysis access surveillance is a nephrology monitoring program designed to evaluate the health and function of vascular access used for dialysis treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
