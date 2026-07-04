<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisMachinesChairsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Dialysis Machines & Chairs')],
            [
                'title' => 'Dialysis Machines & Chairs',
                'slug' => Str::slug('Dialysis Machines & Chairs'),
                'introduction' => 'Dialysis machines and specialized dialysis chairs are essential components of a nephrology dialysis facility designed to provide safe, comfortable, and effective hemodialysis treatment. Dialysis machines perform the function of artificial kidneys by filtering waste products, excess fluid, and toxins from the bloodstream in patients with kidney failure. Ergonomically designed dialysis chairs help improve patient comfort during long dialysis sessions that may last several hours.',
                'what_is' => 'Modern dialysis machines are equipped with: Automated blood filtration systems Electrolyte balancing controls Fluid removal monitoring Blood leak detectors Safety alarm systems Real-time patient monitoring Dialysis chairs are specially designed to: Provide reclining support Improve patient comfort Reduce body strain Allow easy nursing access Support long-duration treatments safely Healthcare professionals continuously monitor: Blood pressure Heart rate Dialysis adequacy Fluid removal Vascular access function These facilities support routine dialysis, emergency dialysis, and long-term renal replacement therapy programs.',
                'symptoms' => [
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Severe fluid retention'],
            ['value' => 'Electrolyte disturbances'],
            ['value' => 'Fatigue due to renal disease'],
            ['value' => 'Uremic complications'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Low blood pressure during dialysis'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Fatigue after treatment'],
            ['value' => 'Vascular access problems'],
            ['value' => 'Rare machine-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dialysis schedules consistently'],
            ['value' => 'Maintain proper access care'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Follow renal diet and fluid restrictions'],
            ['value' => 'Report discomfort during dialysis sessions'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood pressure during dialysis'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Fatigue after treatment'],
            ['value' => 'Vascular access problems'],
            ['value' => 'Rare machine-related complications'],
        ],
                'long_term_outlook' => 'Modern dialysis machines and patient-friendly dialysis chairs improve treatment safety, efficiency, and patient comfort. Continuous technological advancements in dialysis equipment help improve long-term renal care outcomes and patient quality of life.',
                'conclusion' => '',
                'seo_title' => 'Dialysis Machines & Chairs',
                'seo_description' => 'Dialysis machines and specialized dialysis chairs are essential components of a nephrology dialysis facility designed to provide safe, comfortable, and effective hemodialysis treatment. Dialysis machines perform the function of artificial kidneys by filtering waste products, excess fluid, and toxins from the bloodstream in patients with kidney failure. Ergonomically designed dialysis chairs help improve patient comfort during long dialysis sessions that may last several hours.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
