<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofPregnancyRelatedRenalDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Pregnancy-Related Renal Disorders')],
            [
                'name' => 'Management of Pregnancy-Related Renal Disorders',
                'slug' => Str::slug('Management of Pregnancy-Related Renal Disorders'),
                'h1' => 'Management of Pregnancy-Related Renal Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of pregnancy-related renal disorders is a specialized nephrology and maternal healthcare service focused on kidney problems occurring during pregnancy.',
                'about_more' => 'Pregnancy can place additional stress on the kidneys and may worsen pre-existing kidney disease or cause conditions such as preeclampsia, hypertension, or acute kidney injury. Careful monitoring is essential to protect both maternal and fetal health.',
                'overview' => 'The management program includes: Blood pressure monitoring Kidney function testing Urine protein assessment Fluid balance management High-risk pregnancy monitoring Medication adjustment for pregnancy safety Conditions commonly managed include: Preeclampsia Pregnancy-induced hypertension Lupus nephritis during pregnancy Acute kidney injury Chronic kidney disease in pregnancy Nephrologists work closely with obstetricians to optimize maternal and fetal outcomes. Regular monitoring helps reduce pregnancy complications and supports safer delivery planning.',
                'symptoms' => [
            ['value' => 'High blood pressure during pregnancy'],
            ['value' => 'Swelling of face or legs'],
            ['value' => 'Protein in urine'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Severe fatigue or headache'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Preeclampsia'],
            ['value' => 'Premature delivery'],
            ['value' => 'Worsening kidney function'],
            ['value' => 'Fetal growth restriction'],
            ['value' => 'Maternal complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend frequent prenatal follow-up visits'],
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Follow prescribed medications carefully'],
            ['value' => 'Maintain healthy hydration and nutrition'],
            ['value' => 'Report worsening swelling or headaches immediately'],
        ],
                'recovery' => 'Early nephrology involvement significantly improves maternal and fetal outcomes in pregnancy-related renal disorders. Continuous monitoring and multidisciplinary care help reduce long-term kidney complications after pregnancy.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Management of Pregnancy-Related Renal Disorders',
                'meta_description' => 'Management of pregnancy-related renal disorders is a specialized nephrology and maternal healthcare service focused on kidney problems occurring during pregnanc',
                'meta_keywords' => '',
            ]
        );
    }
}
