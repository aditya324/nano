<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicDialysisRelatedComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Dialysis-Related Complications')],
            [
                'name' => 'Chronic Dialysis-Related Complications',
                'slug' => Str::slug('Chronic Dialysis-Related Complications'),
                'h1' => 'Chronic Dialysis-Related Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic dialysis-related complications are health problems that develop in patients undergoing long-term dialysis treatment for kidney failure. Although dialysis helps remove waste products and excess fluid, long-term treatment can affect the heart, bones, blood vessels, nerves, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Chronic dialysis-related complications are health problems that develop in patients undergoing long-term dialysis treatment for kidney failure. Although dialysis helps remove waste products and excess fluid, long-term treatment can affect the heart, bones, blood vessels, nerves, and overall quality of life.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness after dialysis sessions'],
            ['value' => 'Muscle cramps and low blood pressure'],
            ['value' => 'Itching and dry skin'],
            ['value' => 'Swelling or fluid overload between sessions'],
            ['value' => 'Difficulty sleeping or restless legs'],
        ],
                'causes' => [
            ['value' => 'Long-term dependence on dialysis therapy'],
            ['value' => 'Fluid and electrolyte fluctuations'],
            ['value' => 'Inadequate dialysis clearance'],
            ['value' => 'Vascular access infections or clotting'],
            ['value' => 'Nutritional deficiencies and chronic inflammation'],
        ],
                'risks' => [
            ['value' => 'Heart disease and blood vessel complications'],
            ['value' => 'Bone weakness and mineral imbalance'],
            ['value' => 'Dialysis access infection or failure'],
            ['value' => 'Anemia and malnutrition'],
            ['value' => 'Reduced quality of life and hospitalization risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular dialysis monitoring and adjustment'],
            ['value' => 'Strict fluid and dietary management'],
            ['value' => 'Medications for anemia and bone health'],
            ['value' => 'Treatment of infections and vascular access care'],
            ['value' => 'Kidney transplantation evaluation when suitable'],
        ],
                'recovery' => 'Long-term dialysis can successfully sustain life for many years when managed properly. Careful monitoring, nutritional support, and adherence to dialysis schedules greatly improve outcomes and quality of life.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Chronic Dialysis-Related Complications',
                'meta_description' => 'Chronic dialysis-related complications are health problems that develop in patients undergoing long-term dialysis treatment for kidney failure. Although dialysi',
                'meta_keywords' => '',
            ]
        );
    }
}
