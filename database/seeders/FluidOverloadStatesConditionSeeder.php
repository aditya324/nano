<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluidOverloadStatesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fluid Overload States')],
            [
                'name' => 'Fluid Overload States',
                'slug' => Str::slug('Fluid Overload States'),
                'h1' => 'Fluid Overload States',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fluid overload occurs when excess fluid accumulates in the body because the kidneys are unable to remove it effectively. This condition is commonly seen in kidney failure, heart disease, liver disease, and severe infections. Excess fluid may accumulate in the lungs, abdomen, or tissues, causing swelling and breathing difficulties.',
                'about_more' => '',
                'overview' => 'Fluid overload occurs when excess fluid accumulates in the body because the kidneys are unable to remove it effectively. This condition is commonly seen in kidney failure, heart disease, liver disease, and severe infections. Excess fluid may accumulate in the lungs, abdomen, or tissues, causing swelling and breathing difficulties.',
                'symptoms' => [
            ['value' => 'Swelling of legs, ankles, face, or abdomen'],
            ['value' => 'Rapid weight gain due to fluid retention'],
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Reduced exercise tolerance and fatigue'],
            ['value' => 'High blood pressure and reduced urine output'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease or kidney failure'],
            ['value' => 'Excessive intravenous fluid administration'],
            ['value' => 'Heart failure or liver disease'],
            ['value' => 'High salt intake'],
            ['value' => 'Nephrotic syndrome and protein loss disorders'],
        ],
                'risks' => [
            ['value' => 'Pulmonary edema causing severe breathing distress'],
            ['value' => 'High blood pressure and heart strain'],
            ['value' => 'Worsening kidney function'],
            ['value' => 'Reduced oxygen delivery to organs'],
            ['value' => 'Increased hospitalization and emergency complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Fluid and salt restriction'],
            ['value' => 'Diuretic medications to remove excess fluid'],
            ['value' => 'Dialysis in severe kidney-related overload'],
            ['value' => 'Monitoring body weight and fluid balance'],
            ['value' => 'Treatment of underlying heart or kidney disease'],
        ],
                'recovery' => 'Fluid overload can often be controlled effectively with medication, dialysis, and lifestyle modifications. Early treatment prevents severe respiratory and cardiovascular complications.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Fluid Overload States',
                'meta_description' => 'Fluid overload occurs when excess fluid accumulates in the body because the kidneys are unable to remove it effectively. This condition is commonly seen in kidn',
                'meta_keywords' => '',
            ]
        );
    }
}
