<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KidneyRelatedHypertensionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Kidney-Related Hypertension')],
            [
                'name' => 'Kidney-Related Hypertension',
                'slug' => Str::slug('Kidney-Related Hypertension'),
                'h1' => 'Kidney-Related Hypertension',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Kidney-related hypertension, also called renal hypertension, occurs when kidney disease or reduced kidney blood flow causes elevated blood pressure. Since the kidneys regulate fluid balance and blood pressure hormones, kidney dysfunction often leads to persistent or severe hypertension.',
                'about_more' => '',
                'overview' => 'Kidney-related hypertension, also called renal hypertension, occurs when kidney disease or reduced kidney blood flow causes elevated blood pressure. Since the kidneys regulate fluid balance and blood pressure hormones, kidney dysfunction often leads to persistent or severe hypertension.',
                'symptoms' => [
            ['value' => 'Persistent high blood pressure readings'],
            ['value' => 'Headaches or dizziness'],
            ['value' => 'Swelling in legs or face'],
            ['value' => 'Fatigue and reduced energy'],
            ['value' => 'Changes in urination or kidney function'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Renal artery narrowing or obstruction'],
            ['value' => 'Glomerular diseases affecting kidney function'],
            ['value' => 'Diabetes-related kidney damage'],
            ['value' => 'Excess salt and fluid retention'],
        ],
                'risks' => [
            ['value' => 'Heart disease and stroke risk'],
            ['value' => 'Progressive kidney damage'],
            ['value' => 'Vision problems due to uncontrolled hypertension'],
            ['value' => 'Heart enlargement and heart failure'],
            ['value' => 'Increased risk of vascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood pressure-lowering medications'],
            ['value' => 'Kidney-protective ACE inhibitors or ARBs'],
            ['value' => 'Salt-restricted kidney-friendly diet'],
            ['value' => 'Management of underlying kidney disease'],
            ['value' => 'Regular blood pressure and kidney monitoring'],
        ],
                'recovery' => 'Blood pressure control is essential to protect kidney function and reduce cardiovascular risk. Early treatment greatly improves long-term outcomes and slows kidney disease progression.',
                'sort_order' => 44,
                'is_active' => true,
                'meta_title' => 'Kidney-Related Hypertension',
                'meta_description' => 'Kidney-related hypertension, also called renal hypertension, occurs when kidney disease or reduced kidney blood flow causes elevated blood pressure. Since the k',
                'meta_keywords' => '',
            ]
        );
    }
}
