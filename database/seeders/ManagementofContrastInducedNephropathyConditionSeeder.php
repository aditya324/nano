<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofContrastInducedNephropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Contrast-Induced Nephropathy')],
            [
                'name' => 'Management of Contrast-Induced Nephropathy',
                'slug' => Str::slug('Management of Contrast-Induced Nephropathy'),
                'h1' => 'Management of Contrast-Induced Nephropathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of contrast-induced nephropathy focuses on preventing and treating kidney injury caused by contrast dye used during CT scans, angiography, and other imaging procedures.',
                'about_more' => 'Contrast dye can temporarily reduce kidney function, especially in patients with diabetes, dehydration, or pre-existing kidney disease. Early prevention and prompt treatment help reduce the risk of permanent kidney damage.',
                'overview' => 'Management includes: Risk assessment before imaging Adequate hydration therapy Kidney function monitoring Avoidance of nephrotoxic medications Careful contrast selection Post-procedure renal monitoring Doctors monitor: Serum creatinine levels Urine output Fluid balance Electrolyte status High-risk patients may receive preventive IV fluids and specialized renal protection protocols before imaging procedures. Close follow-up helps identify kidney injury early and supports timely intervention.',
                'symptoms' => [
            ['value' => 'Reduced urine output'],
            ['value' => 'Fatigue after contrast procedure'],
            ['value' => 'Swelling or fluid retention'],
            ['value' => 'Elevated creatinine levels'],
            ['value' => 'Worsening kidney function'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Dialysis requirement'],
            ['value' => 'Electrolyte disturbances'],
            ['value' => 'Fluid overload'],
            ['value' => 'Permanent kidney damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Avoid unnecessary painkiller medications'],
            ['value' => 'Attend follow-up kidney function testing'],
            ['value' => 'Monitor urine output carefully'],
            ['value' => 'Follow nephrologist recommendations'],
        ],
                'recovery' => 'Most patients recover kidney function with early recognition and proper management. Preventive nephrology care and careful monitoring significantly reduce long-term renal complications.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Management of Contrast-Induced Nephropathy',
                'meta_description' => 'Management of contrast-induced nephropathy focuses on preventing and treating kidney injury caused by contrast dye used during CT scans, angiography, and other ',
                'meta_keywords' => '',
            ]
        );
    }
}
