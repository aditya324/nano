<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisAdequacyMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dialysis Adequacy Monitoring')],
            [
                'name' => 'Dialysis Adequacy Monitoring',
                'slug' => Str::slug('Dialysis Adequacy Monitoring'),
                'h1' => 'Dialysis Adequacy Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dialysis adequacy monitoring is a specialized nephrology assessment used to evaluate whether dialysis treatment is effectively removing waste products and maintaining safe body chemistry.',
                'about_more' => 'Adequate dialysis is essential for improving survival, symptom control, nutrition, and overall quality of life in patients with kidney failure. Regular monitoring helps optimize dialysis efficiency and detect complications early.',
                'overview' => 'The monitoring process includes: Blood testing Dialysis clearance measurement Weight monitoring Fluid balance assessment Nutritional evaluation Symptom assessment Doctors evaluate: Urea reduction ratio (URR) Kt/V measurements Electrolyte levels Blood pressure Dialysis session performance Treatment plans may be adjusted based on monitoring results to improve dialysis quality and patient outcomes. Continuous assessment also supports better cardiovascular and metabolic health.',
                'symptoms' => [
            ['value' => 'Persistent fatigue after dialysis'],
            ['value' => 'Swelling or fluid overload'],
            ['value' => 'Poor appetite'],
            ['value' => 'Nausea or weakness'],
            ['value' => 'Inadequate symptom relief'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Poor toxin removal'],
            ['value' => 'Malnutrition'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Fluid overload'],
            ['value' => 'Reduced dialysis effectiveness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all scheduled dialysis sessions'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Maintain regular blood testing'],
            ['value' => 'Monitor weight and blood pressure'],
            ['value' => 'Report worsening symptoms promptly'],
        ],
                'recovery' => 'Regular dialysis adequacy monitoring improves treatment effectiveness, symptom control, and survival outcomes in dialysis patients. Modern dialysis technology and continuous monitoring continue to enhance long-term renal care and patient quality of life.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Dialysis Adequacy Monitoring',
                'meta_description' => 'Dialysis adequacy monitoring is a specialized nephrology assessment used to evaluate whether dialysis treatment is effectively removing waste products and maint',
                'meta_keywords' => '',
            ]
        );
    }
}
