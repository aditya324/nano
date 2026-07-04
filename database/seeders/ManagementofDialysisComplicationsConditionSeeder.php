<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofDialysisComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Dialysis Complications')],
            [
                'name' => 'Management of Dialysis Complications',
                'slug' => Str::slug('Management of Dialysis Complications'),
                'h1' => 'Management of Dialysis Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of dialysis complications is a specialized nephrology service focused on identifying and treating problems that may occur during or after dialysis therapy.',
                'about_more' => 'Although dialysis is life-saving, patients may experience complications related to fluid shifts, vascular access, blood pressure changes, or long-term metabolic disturbances. Timely recognition and treatment improve patient safety and dialysis effectiveness.',
                'overview' => 'Complication management includes: Blood pressure stabilization Electrolyte correction Fluid balance monitoring Access complication treatment Infection management Nutritional support Common dialysis complications include: Low blood pressure Muscle cramps Access clotting Infection Fatigue Dialysis disequilibrium syndrome Doctors continuously monitor vital signs, dialysis adequacy, and laboratory parameters during treatment. Individualized dialysis adjustments help reduce complications and improve comfort.',
                'symptoms' => [
            ['value' => 'Dizziness during dialysis'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Swelling or fluid overload'],
            ['value' => 'Fever or infection signs'],
            ['value' => 'Severe fatigue after dialysis'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Cardiovascular instability'],
            ['value' => 'Access failure'],
            ['value' => 'Infection'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all dialysis sessions consistently'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Report symptoms early'],
            ['value' => 'Maintain access site hygiene carefully'],
        ],
                'recovery' => 'Proper management of dialysis complications improves patient comfort, treatment safety, and long-term survival. Continuous nephrology monitoring and modern dialysis technologies help optimize long-term dialysis care.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Management of Dialysis Complications',
                'meta_description' => 'Management of dialysis complications is a specialized nephrology service focused on identifying and treating problems that may occur during or after dialysis th',
                'meta_keywords' => '',
            ]
        );
    }
}
