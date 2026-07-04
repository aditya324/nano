<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeritonealDialysisCounselingandSupportConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Peritoneal Dialysis Counseling and Support')],
            [
                'name' => 'Peritoneal Dialysis Counseling and Support',
                'slug' => Str::slug('Peritoneal Dialysis Counseling and Support'),
                'h1' => 'Peritoneal Dialysis Counseling and Support',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peritoneal dialysis counseling and support is a nephrology educational service that helps patients and families understand peritoneal dialysis as a kidney replacement therapy option.',
                'about_more' => 'Peritoneal dialysis uses the lining of the abdomen to filter waste and excess fluids from the body through a specially placed catheter. Counseling helps patients make informed treatment decisions and safely manage dialysis at home.',
                'overview' => 'The support program includes: Education about dialysis methods Catheter care training Infection prevention guidance Home dialysis instruction Nutritional counseling Emotional support Healthcare professionals explain: Advantages and limitations of peritoneal dialysis Daily dialysis routines Sterile technique requirements Emergency warning signs The counseling process helps patients adapt confidently to home-based renal replacement therapy.',
                'symptoms' => [
            ['value' => 'Advanced kidney failure'],
            ['value' => 'Need for home dialysis option'],
            ['value' => 'Fatigue and fluid retention'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Reduced kidney function'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Peritonitis infection'],
            ['value' => 'Catheter complications'],
            ['value' => 'Fluid imbalance'],
            ['value' => 'Nutritional deficiencies'],
            ['value' => 'Dialysis technique failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain strict catheter hygiene'],
            ['value' => 'Follow sterile dialysis procedures'],
            ['value' => 'Attend regular nephrology reviews'],
            ['value' => 'Monitor for abdominal pain or fever'],
            ['value' => 'Continue nutritional and fluid management'],
        ],
                'recovery' => 'Peritoneal dialysis support programs help patients achieve greater independence and flexible kidney care. Proper education and continuous monitoring improve dialysis success and long-term quality of life.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Peritoneal Dialysis Counseling and Support',
                'meta_description' => 'Peritoneal dialysis counseling and support is a nephrology educational service that helps patients and families understand peritoneal dialysis as a kidney repla',
                'meta_keywords' => '',
            ]
        );
    }
}
