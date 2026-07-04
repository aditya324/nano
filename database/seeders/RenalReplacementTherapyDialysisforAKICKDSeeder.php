<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalReplacementTherapyDialysisforAKICKDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Renal Replacement Therapy / Dialysis for AKI/CKD')],
            [
                'title' => 'Renal Replacement Therapy / Dialysis for AKI/CKD',
                'slug' => Str::slug('Renal Replacement Therapy / Dialysis for AKI/CKD'),
                'introduction' => 'Renal Replacement Therapy (RRT), commonly known as dialysis, is a specialized medical procedure used to support or replace kidney function in patients with Acute Kidney Injury (AKI) or Chronic Kidney Disease (CKD). Dialysis helps remove waste products, excess fluid, and toxins from the blood when the kidneys are unable to perform these essential functions effectively. This therapy plays a vital role in maintaining electrolyte balance, controlling fluid overload, and improving overall metabolic stability in patients with kidney failure.',
                'what_is' => 'Renal replacement therapy includes different forms of dialysis such as hemodialysis and peritoneal dialysis, depending on the patient’s medical condition and long-term treatment needs. Hemodialysis uses a dialysis machine and special filter to clean the blood outside the body, while peritoneal dialysis uses the lining of the abdomen to remove waste and excess fluid internally. RRT is commonly performed in hospitals, dialysis centers, intensive care units, and home-care settings under the supervision of nephrologists and specialized renal care teams. Severe cases of kidney failure may require urgent dialysis support to prevent life-threatening complications.',
                'symptoms' => [
            ['value' => 'Reduced urine output or complete absence of urine'],
            ['value' => 'Swelling of the legs, face, or abdomen due to fluid retention'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Shortness of breath or chest discomfort from fluid overload'],
            ['value' => 'Nausea, vomiting, or severe electrolyte imbalance due to kidney dysfunction'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus causing kidney damage'],
            ['value' => 'Long-standing high blood pressure (hypertension)'],
            ['value' => 'Severe dehydration or blood loss leading to acute kidney injury'],
            ['value' => 'Chronic kidney diseases such as glomerulonephritis or polycystic kidney disease'],
            ['value' => 'Severe infections, sepsis, or medication-related kidney damage'],
        ],
                'condition_risks' => [
            ['value' => 'Low blood pressure during dialysis sessions'],
            ['value' => 'Infection risk related to dialysis access sites'],
            ['value' => 'Electrolyte imbalance or muscle cramps during treatment'],
            ['value' => 'Blood clotting or access-related complications'],
            ['value' => 'Long-term cardiovascular complications associated with chronic kidney disease'],
            ['value' => 'Treatment Options'],
            ['value' => 'Renal replacement therapy and dialysis focus on removing waste products, maintaining fluid and electrolyte balance, supporting kidney function, and improving overall patient stability. Treatment may include hemodialysis, peritoneal dialysis, fluid management, dietary modification, electrolyte correction, blood pressure control, anemia management, and kidney disease monitoring. Patients may also benefit from nutritional counseling, diabetes management, rehabilitation programs, vascular access care, kidney transplant evaluation, nephrology follow-up, and long-term renal health support to optimize treatment outcomes and quality of life.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of kidney function and fluid balance'],
            ['value' => 'Care of dialysis access sites to prevent infection'],
            ['value' => 'Following prescribed dietary and fluid restrictions'],
            ['value' => 'Monitoring blood pressure, electrolyte levels, and body weight'],
            ['value' => 'Long-term nephrology follow-up and dialysis support care'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood pressure during dialysis sessions'],
            ['value' => 'Infection risk related to dialysis access sites'],
            ['value' => 'Electrolyte imbalance or muscle cramps during treatment'],
            ['value' => 'Blood clotting or access-related complications'],
            ['value' => 'Long-term cardiovascular complications associated with chronic kidney disease'],
            ['value' => 'Treatment Options'],
            ['value' => 'Renal replacement therapy and dialysis focus on removing waste products, maintaining fluid and electrolyte balance, supporting kidney function, and improving overall patient stability. Treatment may include hemodialysis, peritoneal dialysis, fluid management, dietary modification, electrolyte correction, blood pressure control, anemia management, and kidney disease monitoring. Patients may also benefit from nutritional counseling, diabetes management, rehabilitation programs, vascular access care, kidney transplant evaluation, nephrology follow-up, and long-term renal health support to optimize treatment outcomes and quality of life.'],
        ],
                'long_term_outlook' => 'The long-term outlook following renal replacement therapy depends on the severity of kidney disease, underlying medical conditions, treatment adherence, and overall patient health. Regular dialysis sessions, medication compliance, dietary management, fluid control, diabetes and blood pressure management, preventive healthcare, and continuous nephrology follow-up significantly help improve metabolic stability, reduce complications, maintain organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Renal Replacement Therapy / Dialysis for AKI/CKD',
                'seo_description' => 'Renal Replacement Therapy (RRT), commonly known as dialysis, is a specialized medical procedure used to support or replace kidney function in patients with Acute Kidney Injury (AKI) or Chronic Kidney Disease (CKD). Dialysis helps remove waste products, excess fluid, and toxins from the blood when the kidneys are unable to perform these essential functions effectively. This therapy plays a vital role in maintaining electrolyte balance, controlling fluid overload, and improving overall metabolic stability in patients with kidney failure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
