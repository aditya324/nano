<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisMachinesChairsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis Machines & Chairs')],
            [
                'name' => 'Dialysis Machines & Chairs',
                'slug' => Str::slug('Dialysis Machines & Chairs'),
                'h1' => 'Dialysis Machines & Chairs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dialysis machines and specialized dialysis chairs are essential components of a nephrology dialysis facility designed to provide safe, comfortable, and effective hemodialysis treatment.',
                'about_more' => 'Dialysis machines perform the function of artificial kidneys by filtering waste products, excess fluid, and toxins from the bloodstream in patients with kidney failure. Ergonomically designed dialysis chairs help improve patient comfort during long dialysis sessions that may last several hours.',
                'overview' => 'Modern dialysis machines are equipped with: Automated blood filtration systems Electrolyte balancing controls Fluid removal monitoring Blood leak detectors Safety alarm systems Real-time patient monitoring Dialysis chairs are specially designed to: Provide reclining support Improve patient comfort Reduce body strain Allow easy nursing access Support long-duration treatments safely Healthcare professionals continuously monitor: Blood pressure Heart rate Dialysis adequacy Fluid removal Vascular access function These facilities support routine dialysis, emergency dialysis, and long-term renal replacement therapy programs.',
                'symptoms' => [
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Severe fluid retention'],
            ['value' => 'Electrolyte disturbances'],
            ['value' => 'Fatigue due to renal disease'],
            ['value' => 'Uremic complications'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Low blood pressure during dialysis'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Fatigue after treatment'],
            ['value' => 'Vascular access problems'],
            ['value' => 'Rare machine-related complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow dialysis schedules consistently'],
            ['value' => 'Maintain proper access care'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Follow renal diet and fluid restrictions'],
            ['value' => 'Report discomfort during dialysis sessions'],
        ],
                'recovery' => 'Modern dialysis machines and patient-friendly dialysis chairs improve treatment safety, efficiency, and patient comfort. Continuous technological advancements in dialysis equipment help improve long-term renal care outcomes and patient quality of life.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Dialysis Machines & Chairs',
                'meta_description' => 'Dialysis machines and specialized dialysis chairs are essential components of a nephrology dialysis facility designed to provide safe, comfortable, and effectiv',
                'meta_keywords' => '',
            ]
        );
    }
}
