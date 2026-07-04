<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DietaryCounselingforRenalPatientsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dietary Counseling for Renal Patients')],
            [
                'name' => 'Dietary Counseling for Renal Patients',
                'slug' => Str::slug('Dietary Counseling for Renal Patients'),
                'h1' => 'Dietary Counseling for Renal Patients',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dietary counseling for renal patients is a specialized nutrition service designed to help individuals with kidney disease manage their condition through proper food and fluid intake.',
                'about_more' => 'Because damaged kidneys cannot effectively remove waste products and regulate minerals, dietary modification becomes an important part of treatment. Renal dietary counseling helps reduce kidney workload, control symptoms, and improve overall health outcomes.',
                'overview' => 'The counseling program includes guidance regarding: Protein intake Salt restriction Fluid management Potassium control Phosphorus restriction Diabetic meal planning Weight management Diet plans are individualized according to: Kidney function Dialysis status Blood test results Medical conditions Nutritional needs Dietitians educate patients about healthy food choices, portion control, label reading, and meal preparation techniques. Nutritional counseling also supports blood pressure control and cardiovascular health.',
                'symptoms' => [
            ['value' => 'Swelling due to fluid retention'],
            ['value' => 'Poor appetite'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Weight changes'],
            ['value' => 'Kidney disease progression'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Malnutrition'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Fluid overload'],
            ['value' => 'Worsening kidney function'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow the prescribed renal diet carefully'],
            ['value' => 'Limit salt and processed foods'],
            ['value' => 'Maintain recommended fluid intake'],
            ['value' => 'Attend regular nutritional reviews'],
            ['value' => 'Monitor weight and swelling regularly'],
        ],
                'recovery' => 'Proper dietary management greatly improves kidney disease control and reduces complications. Long-term nutritional guidance supports better energy levels, dialysis outcomes, and overall quality of life.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Dietary Counseling for Renal Patients',
                'meta_description' => 'Dietary counseling for renal patients is a specialized nutrition service designed to help individuals with kidney disease manage their condition through proper ',
                'meta_keywords' => '',
            ]
        );
    }
}
