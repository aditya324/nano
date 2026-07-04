<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalReplacementTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Renal Replacement Therapy')],
            [
                'title' => 'Renal Replacement Therapy',
                'slug' => Str::slug('Renal Replacement Therapy'),
                'introduction' => 'Renal Replacement Therapy (RRT) is a group of medical treatments used to replace the normal filtering function of the kidneys when they are unable to work effectively. RRT helps remove waste products, toxins, and excess fluids from the blood while maintaining electrolyte and fluid balance in patients with severe kidney dysfunction or kidney failure.',
                'what_is' => 'Renal Replacement Therapy is commonly used in patients with Acute Kidney Injury (AKI), Chronic Kidney Disease (CKD), or end-stage renal disease. Treatment options include hemodialysis, peritoneal dialysis, and continuous renal replacement therapy (CRRT) for critically ill patients. In some cases, kidney transplantation may also be considered as a long-term renal replacement option. RRT plays a vital role in supporting body function and preventing life-threatening complications related to kidney failure.',
                'symptoms' => [
            ['value' => 'Reduced urine output or inability to urinate normally'],
            ['value' => 'Swelling of the legs, feet, or face due to fluid retention'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Shortness of breath or symptoms of electrolyte imbalance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe kidney failure or end-stage renal disease'],
            ['value' => 'Fluid overload and pulmonary edema'],
            ['value' => 'Dangerous electrolyte abnormalities such as high potassium'],
            ['value' => 'Accumulation of toxins affecting multiple organs'],
            ['value' => 'Cardiovascular complications related to kidney dysfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of kidney function and fluid balance'],
            ['value' => 'Dialysis access care and infection prevention'],
            ['value' => 'Dietary and fluid intake management'],
            ['value' => 'Blood pressure and electrolyte monitoring'],
            ['value' => 'Ongoing nephrology follow-up and treatment planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe kidney failure or end-stage renal disease'],
            ['value' => 'Fluid overload and pulmonary edema'],
            ['value' => 'Dangerous electrolyte abnormalities such as high potassium'],
            ['value' => 'Accumulation of toxins affecting multiple organs'],
            ['value' => 'Cardiovascular complications related to kidney dysfunction'],
        ],
                'long_term_outlook' => 'The long-term outlook with renal replacement therapy depends on the severity of kidney disease, overall health condition, and treatment response. RRT can significantly improve survival, symptom control, and quality of life in individuals with severe kidney dysfunction. Continuous medical monitoring, adherence to treatment schedules, lifestyle management, and specialist care are important for maintaining long-term kidney and overall health.',
                'conclusion' => '',
                'seo_title' => 'Renal Replacement Therapy',
                'seo_description' => 'Renal Replacement Therapy (RRT) is a group of medical treatments used to replace the normal filtering function of the kidneys when they are unable to work effectively. RRT helps remove waste products, toxins, and excess fluids from the blood while maintaining electrolyte and fluid balance in patients with severe kidney dysfunction or kidney failure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
