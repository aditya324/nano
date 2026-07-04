<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluidManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Fluid Management')],
            [
                'title' => 'Fluid Management',
                'slug' => Str::slug('Fluid Management'),
                'introduction' => 'Fluid management is a medical approach used to maintain the proper balance of fluids and electrolytes in the body. It involves careful monitoring and adjustment of fluid intake and output to support organ function, blood circulation, hydration, and overall metabolic stability. Fluid management is essential in critically ill patients, surgical care, kidney disease, heart failure, dehydration, and intensive care settings.',
                'what_is' => 'Fluid management includes intravenous fluid therapy, oral hydration strategies, electrolyte correction, and monitoring of fluid balance to prevent dehydration or fluid overload. Treatment plans are individualized based on the patient’s medical condition, blood pressure, kidney function, heart function, and electrolyte status. Proper fluid management plays a critical role in stabilizing circulation, maintaining oxygen delivery, and supporting recovery from acute or chronic illnesses.',
                'symptoms' => [
            ['value' => 'Dehydration or excessive thirst'],
            ['value' => 'Swelling of the legs, feet, or abdomen'],
            ['value' => 'Low blood pressure or dizziness'],
            ['value' => 'Reduced urine output or fluid retention'],
            ['value' => 'Shortness of breath related to fluid imbalance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Fluid overload causing heart or lung complications'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Kidney dysfunction and reduced organ perfusion'],
            ['value' => 'Blood pressure instability and shock'],
            ['value' => 'Respiratory distress due to pulmonary edema'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of fluid intake and urine output'],
            ['value' => 'Regular assessment of electrolyte and kidney function levels'],
            ['value' => 'Adjustment of intravenous fluids or medications when required'],
            ['value' => 'Blood pressure, weight, and respiratory monitoring'],
            ['value' => 'Ongoing medical follow-up and hydration management'],
        ],
                'surgery_risks' => [
            ['value' => 'Fluid overload causing heart or lung complications'],
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Kidney dysfunction and reduced organ perfusion'],
            ['value' => 'Blood pressure instability and shock'],
            ['value' => 'Respiratory distress due to pulmonary edema'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper fluid management is generally positive when underlying medical conditions are appropriately treated. Careful monitoring and individualized fluid therapy can improve circulation, support organ function, and reduce complications related to dehydration or fluid overload. Continuous medical supervision and preventive care are important for maintaining long-term fluid and electrolyte balance.',
                'conclusion' => '',
                'seo_title' => 'Fluid Management',
                'seo_description' => 'Fluid management is a medical approach used to maintain the proper balance of fluids and electrolytes in the body. It involves careful monitoring and adjustment of fluid intake and output to support organ function, blood circulation, hydration, and overall metabolic stability. Fluid management is essential in critically ill patients, surgical care, kidney disease, heart failure, dehydration, and intensive care settings.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
