<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationDietCounselingUnitSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Education & Diet Counseling Unit')],
            [
                'title' => 'Patient Education & Diet Counseling Unit',
                'slug' => Str::slug('Patient Education & Diet Counseling Unit'),
                'introduction' => 'A Patient Education and Diet Counseling Unit is a specialized nephrology support facility designed to educate kidney patients regarding disease management, nutrition, dialysis care, medications, and healthy lifestyle practices. Proper education and dietary guidance are essential for slowing kidney disease progression, improving dialysis outcomes, and reducing complications. The counseling unit helps patients actively participate in long-term kidney care.',
                'what_is' => 'The counseling facility provides: Renal diet planning Fluid restriction guidance Dialysis education Medication counseling Lifestyle modification support Diabetes and blood pressure education Kidney disease awareness sessions Dietitians and nephrology educators guide patients regarding: Low-salt diets Potassium control Phosphorus restriction Protein intake management Fluid balance Safe eating habits during dialysis Educational sessions also help patients understand: Warning signs of kidney disease progression Importance of medication compliance Infection prevention Dialysis access care Long-term renal treatment planning Family involvement is encouraged to improve patient support and treatment adherence.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Poor appetite or malnutrition'],
            ['value' => 'Fluid overload'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Dialysis-related dietary concerns'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Poor dietary compliance'],
            ['value' => 'Malnutrition'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Worsening kidney disease'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow individualized renal diet plans'],
            ['value' => 'Maintain prescribed fluid restrictions'],
            ['value' => 'Attend counseling sessions regularly'],
            ['value' => 'Monitor weight and blood pressure routinely'],
            ['value' => 'Discuss nutritional concerns with healthcare providers'],
        ],
                'surgery_risks' => [
            ['value' => 'Poor dietary compliance'],
            ['value' => 'Malnutrition'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Worsening kidney disease'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'long_term_outlook' => 'Comprehensive patient education and diet counseling improve treatment adherence, nutritional health, and kidney disease management. Continuous education empowers patients to achieve safer long-term renal care and better quality of life.',
                'conclusion' => '',
                'seo_title' => 'Patient Education & Diet Counseling Unit',
                'seo_description' => 'A Patient Education and Diet Counseling Unit is a specialized nephrology support facility designed to educate kidney patients regarding disease management, nutrition, dialysis care, medications, and healthy lifestyle practices. Proper education and dietary guidance are essential for slowing kidney disease progression, improving dialysis outcomes, and reducing complications. The counseling unit helps patients actively participate in long-term kidney care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
