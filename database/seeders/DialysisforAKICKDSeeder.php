<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DialysisforAKICKDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Dialysis for AKI/CKD')],
            [
                'title' => 'Dialysis for AKI/CKD',
                'slug' => Str::slug('Dialysis for AKI/CKD'),
                'introduction' => 'Dialysis is a medical treatment used to remove waste products, excess fluids, and toxins from the blood when the kidneys are unable to function properly. It is commonly used in patients with Acute Kidney Injury (AKI) or advanced Chronic Kidney Disease (CKD) to help maintain fluid balance, electrolyte stability, and overall body function.',
                'what_is' => 'Dialysis acts as an artificial replacement for certain kidney functions. The two main types are hemodialysis and peritoneal dialysis. Hemodialysis uses a machine and special filter to clean the blood, while peritoneal dialysis uses the lining of the abdomen to remove waste products. Dialysis may be temporary in AKI or long-term in patients with advanced CKD or kidney failure.',
                'symptoms' => [
            ['value' => 'Reduced urine output or kidney failure symptoms'],
            ['value' => 'Swelling of the legs, feet, or face due to fluid retention'],
            ['value' => 'Fatigue, weakness, or confusion'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Shortness of breath or electrolyte imbalance symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe kidney dysfunction or kidney failure'],
            ['value' => 'Fluid overload and pulmonary edema'],
            ['value' => 'High potassium and dangerous electrolyte imbalance'],
            ['value' => 'Toxin accumulation affecting multiple organs'],
            ['value' => 'Increased cardiovascular and metabolic complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of kidney function and electrolyte levels'],
            ['value' => 'Care of dialysis access site and infection prevention'],
            ['value' => 'Fluid and dietary management guidance'],
            ['value' => 'Blood pressure and weight monitoring'],
            ['value' => 'Long-term nephrology follow-up and dialysis scheduling'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe kidney dysfunction or kidney failure'],
            ['value' => 'Fluid overload and pulmonary edema'],
            ['value' => 'High potassium and dangerous electrolyte imbalance'],
            ['value' => 'Toxin accumulation affecting multiple organs'],
            ['value' => 'Increased cardiovascular and metabolic complications'],
        ],
                'long_term_outlook' => 'The long-term outlook with dialysis depends on the severity of kidney disease, overall health condition, and response to treatment. Dialysis can significantly improve survival, symptom control, and quality of life in individuals with severe kidney dysfunction. Continuous medical care, dietary management, medication adherence, and regular dialysis sessions are important for maintaining long-term health and preventing complications.',
                'conclusion' => '',
                'seo_title' => 'Dialysis for AKI/CKD',
                'seo_description' => 'Dialysis is a medical treatment used to remove waste products, excess fluids, and toxins from the blood when the kidneys are unable to function properly. It is commonly used in patients with Acute Kidney Injury (AKI) or advanced Chronic Kidney Disease (CKD) to help maintain fluid balance, electrolyte stability, and overall body function.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
