<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HypertensiveNephropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hypertensive Nephropathy')],
            [
                'name' => 'Hypertensive Nephropathy',
                'slug' => Str::slug('Hypertensive Nephropathy'),
                'h1' => 'Hypertensive Nephropathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hypertensive nephropathy is kidney damage caused by long-standing uncontrolled high blood pressure. Persistent elevated pressure damages the small blood vessels in the kidneys, gradually reducing kidney function and leading to chronic kidney disease.',
                'about_more' => '',
                'overview' => 'Hypertensive nephropathy is kidney damage caused by long-standing uncontrolled high blood pressure. Persistent elevated pressure damages the small blood vessels in the kidneys, gradually reducing kidney function and leading to chronic kidney disease.',
                'symptoms' => [
            ['value' => 'High blood pressure readings'],
            ['value' => 'Swelling in legs or feet'],
            ['value' => 'Fatigue and reduced energy'],
            ['value' => 'Frequent nighttime urination'],
            ['value' => 'Protein or blood in urine'],
        ],
                'causes' => [
            ['value' => 'Long-term uncontrolled hypertension'],
            ['value' => 'Obesity and poor lifestyle habits'],
            ['value' => 'Diabetes and cardiovascular disease'],
            ['value' => 'Smoking and excessive salt intake'],
            ['value' => 'Family history of hypertension or kidney disease'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Heart attack and stroke risk'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Fluid overload and breathing difficulty'],
            ['value' => 'Vision and blood vessel complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Strict blood pressure control'],
            ['value' => 'Low-salt kidney-friendly diet'],
            ['value' => 'Medications such as ACE inhibitors or ARBs'],
            ['value' => 'Weight management and exercise'],
            ['value' => 'Regular kidney function and urine monitoring'],
        ],
                'recovery' => 'Controlling blood pressure early can significantly slow kidney damage and protect long-term kidney function. Ongoing lifestyle management and medication adherence are essential for preventing complications.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Hypertensive Nephropathy',
                'meta_description' => 'Hypertensive nephropathy is kidney damage caused by long-standing uncontrolled high blood pressure. Persistent elevated pressure damages the small blood vessels',
                'meta_keywords' => '',
            ]
        );
    }
}
