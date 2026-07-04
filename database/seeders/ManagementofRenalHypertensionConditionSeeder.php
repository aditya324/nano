<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofRenalHypertensionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Renal Hypertension')],
            [
                'name' => 'Management of Renal Hypertension',
                'slug' => Str::slug('Management of Renal Hypertension'),
                'h1' => 'Management of Renal Hypertension',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of renal hypertension is a specialized nephrology treatment focused on controlling high blood pressure caused by kidney disease or kidney blood vessel abnormalities.',
                'about_more' => 'Kidney-related hypertension can worsen kidney damage and increase the risk of heart disease, stroke, and vascular complications if not treated properly. Effective blood pressure control is essential for preserving kidney and cardiovascular health.',
                'overview' => 'Treatment includes: Blood pressure monitoring Kidney function assessment Antihypertensive medications Salt restriction Fluid management Lifestyle counseling Doctors may prescribe: ACE inhibitors ARBs Diuretics Calcium channel blockers Beta blockers Patients are also advised regarding: Weight management Exercise Smoking cessation Stress reduction Regular follow-up helps optimize medication response and reduce long-term complications.',
                'symptoms' => [
            ['value' => 'Persistent high blood pressure'],
            ['value' => 'Headaches or dizziness'],
            ['value' => 'Swelling of legs'],
            ['value' => 'Fatigue'],
            ['value' => 'Reduced kidney function'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure progression'],
            ['value' => 'Heart disease'],
            ['value' => 'Stroke'],
            ['value' => 'Vision problems'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Reduce salt intake significantly'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Attend nephrology follow-up visits'],
            ['value' => 'Maintain healthy lifestyle habits'],
        ],
                'recovery' => 'Effective management of renal hypertension slows kidney disease progression and reduces cardiovascular risk. Long-term blood pressure control greatly improves survival and kidney health outcomes.',
                'sort_order' => 46,
                'is_active' => true,
                'meta_title' => 'Management of Renal Hypertension',
                'meta_description' => 'Management of renal hypertension is a specialized nephrology treatment focused on controlling high blood pressure caused by kidney disease or kidney blood vesse',
                'meta_keywords' => '',
            ]
        );
    }
}
