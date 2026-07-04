<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationDietCounselingUnitConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Patient Education & Diet Counseling Unit')],
            [
                'name' => 'Patient Education & Diet Counseling Unit',
                'slug' => Str::slug('Patient Education & Diet Counseling Unit'),
                'h1' => 'Patient Education & Diet Counseling Unit',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Patient Education and Diet Counseling Unit is a specialized nephrology support facility designed to educate kidney patients regarding disease management, nutrition, dialysis care, medications, and healthy lifestyle practices.',
                'about_more' => 'Proper education and dietary guidance are essential for slowing kidney disease progression, improving dialysis outcomes, and reducing complications. The counseling unit helps patients actively participate in long-term kidney care.',
                'overview' => 'The counseling facility provides: Renal diet planning Fluid restriction guidance Dialysis education Medication counseling Lifestyle modification support Diabetes and blood pressure education Kidney disease awareness sessions Dietitians and nephrology educators guide patients regarding: Low-salt diets Potassium control Phosphorus restriction Protein intake management Fluid balance Safe eating habits during dialysis Educational sessions also help patients understand: Warning signs of kidney disease progression Importance of medication compliance Infection prevention Dialysis access care Long-term renal treatment planning Family involvement is encouraged to improve patient support and treatment adherence.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Poor appetite or malnutrition'],
            ['value' => 'Fluid overload'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Dialysis-related dietary concerns'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Poor dietary compliance'],
            ['value' => 'Malnutrition'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Worsening kidney disease'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow individualized renal diet plans'],
            ['value' => 'Maintain prescribed fluid restrictions'],
            ['value' => 'Attend counseling sessions regularly'],
            ['value' => 'Monitor weight and blood pressure routinely'],
            ['value' => 'Discuss nutritional concerns with healthcare providers'],
        ],
                'recovery' => 'Comprehensive patient education and diet counseling improve treatment adherence, nutritional health, and kidney disease management. Continuous education empowers patients to achieve safer long-term renal care and better quality of life.',
                'sort_order' => 43,
                'is_active' => true,
                'meta_title' => 'Patient Education & Diet Counseling Unit',
                'meta_description' => 'A Patient Education and Diet Counseling Unit is a specialized nephrology support facility designed to educate kidney patients regarding disease management, nutr',
                'meta_keywords' => '',
            ]
        );
    }
}
