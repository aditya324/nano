<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndStageRenalDiseaseESRDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('End-Stage Renal Disease (ESRD)')],
            [
                'name' => 'End-Stage Renal Disease (ESRD)',
                'slug' => Str::slug('End-Stage Renal Disease (ESRD)'),
                'h1' => 'End-Stage Renal Disease (ESRD)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'End-Stage Renal Disease (ESRD) is the final stage of chronic kidney disease in which the kidneys lose nearly all functional capacity. At this stage, the kidneys can no longer adequately remove waste products or maintain fluid and electrolyte balance, making dialysis or kidney transplantation necessary for survival.',
                'about_more' => '',
                'overview' => 'End-Stage Renal Disease (ESRD) is the final stage of chronic kidney disease in which the kidneys lose nearly all functional capacity. At this stage, the kidneys can no longer adequately remove waste products or maintain fluid and electrolyte balance, making dialysis or kidney transplantation necessary for survival.',
                'symptoms' => [
            ['value' => 'Severe fatigue and weakness'],
            ['value' => 'Persistent swelling and fluid retention'],
            ['value' => 'Nausea, vomiting, and poor appetite'],
            ['value' => 'Difficulty breathing due to fluid accumulation'],
            ['value' => 'Confusion, sleep problems, or itching'],
        ],
                'causes' => [
            ['value' => 'Advanced chronic kidney disease'],
            ['value' => 'Long-standing diabetes mellitus'],
            ['value' => 'Uncontrolled hypertension'],
            ['value' => 'Chronic glomerular diseases'],
            ['value' => 'Genetic or autoimmune kidney disorders'],
        ],
                'risks' => [
            ['value' => 'Life-threatening electrolyte imbalance'],
            ['value' => 'Heart disease and heart failure'],
            ['value' => 'Severe anemia and malnutrition'],
            ['value' => 'Bone weakness and fractures'],
            ['value' => 'Death without renal replacement therapy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Hemodialysis or peritoneal dialysis'],
            ['value' => 'Kidney transplantation evaluation'],
            ['value' => 'Strict fluid and dietary management'],
            ['value' => 'Medications for anemia and blood pressure control'],
            ['value' => 'Long-term nephrology care and monitoring'],
        ],
                'recovery' => 'ESRD requires lifelong treatment and monitoring. Dialysis and kidney transplantation can greatly improve survival and quality of life when combined with proper medical care and lifestyle adjustments.',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'End-Stage Renal Disease (ESRD)',
                'meta_description' => 'End-Stage Renal Disease (ESRD) is the final stage of chronic kidney disease in which the kidneys lose nearly all functional capacity. At this stage, the kidneys',
                'meta_keywords' => '',
            ]
        );
    }
}
