<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiureticsLoopThiazidePotassiumSparingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diuretics (Loop, Thiazide, Potassium-Sparing)')],
            [
                'title' => 'Diuretics (Loop, Thiazide, Potassium-Sparing)',
                'slug' => Str::slug('Diuretics (Loop, Thiazide, Potassium-Sparing)'),
                'introduction' => 'Diuretics are medications that help the body remove excess salt and fluid through urine, reducing fluid overload and lowering blood pressure. They are commonly used in heart failure, hypertension, and edema-related conditions. Diuretics reduce strain on the heart and improve breathing and circulation.',
                'what_is' => 'Types of diuretics include: Loop diuretics Thiazide diuretics Potassium-sparing diuretics These medications are used for: Heart failure High blood pressure Leg swelling Fluid retention Kidney-related fluid overload Diuretics improve symptoms such as breathlessness and swelling. Electrolyte and kidney function monitoring may be required during therapy.',
                'symptoms' => [
            ['value' => 'Swelling of legs or abdomen'],
            ['value' => 'Breathlessness due to fluid overload'],
            ['value' => 'High blood pressure'],
            ['value' => 'Rapid weight gain from fluid retention'],
            ['value' => 'Congestive heart failure symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Dehydration'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Frequent urination'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Kidney function changes'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor body weight regularly'],
            ['value' => 'Follow fluid and salt restrictions if advised'],
            ['value' => 'Attend blood test monitoring appointments'],
            ['value' => 'Take medications at recommended times'],
            ['value' => 'Report severe weakness or dizziness immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Dehydration'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Frequent urination'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Kidney function changes'],
        ],
                'long_term_outlook' => 'Diuretic therapy improves symptom control, reduces fluid overload, and enhances quality of life in cardiovascular patients.',
                'conclusion' => '',
                'seo_title' => 'Diuretics (Loop, Thiazide, Potassium-Sparing)',
                'seo_description' => 'Diuretics are medications that help the body remove excess salt and fluid through urine, reducing fluid overload and lowering blood pressure. They are commonly used in heart failure, hypertension, and edema-related conditions. Diuretics reduce strain on the heart and improve breathing and circulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
