<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrolyteCorrectionFluidManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrolyte Correction & Fluid Management')],
            [
                'title' => 'Electrolyte Correction & Fluid Management',
                'slug' => Str::slug('Electrolyte Correction & Fluid Management'),
                'introduction' => 'Electrolyte correction and fluid management are essential medical treatment procedures used to restore normal fluid balance and correct abnormal levels of electrolytes such as sodium, potassium, calcium, and magnesium in the body. These therapies are critical in maintaining proper heart function, nerve signaling, muscle activity, kidney function, and overall metabolic stability. Prompt correction of fluid and electrolyte imbalances helps prevent serious complications and supports recovery in both acute and chronic medical conditions.',
                'what_is' => 'Electrolyte correction and fluid management involve careful assessment of hydration status, laboratory monitoring, intravenous or oral fluid replacement, electrolyte supplementation, and treatment of underlying medical conditions causing imbalance. Management may include isotonic or electrolyte-rich intravenous fluids, potassium or sodium correction therapy, calcium or magnesium replacement, fluid restriction, or diuretic therapy depending on the patient’s condition. These procedures are commonly used in dehydration, kidney disease, heart failure, liver disease, critical illness, infections, gastrointestinal disorders, and postoperative care. Treatment is supervised by physicians, nephrologists, intensivists, and internal medicine specialists in hospitals, intensive care units, and emergency settings.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or muscle cramps'],
            ['value' => 'Swelling, dehydration, or sudden weight changes'],
            ['value' => 'Nausea, vomiting, or reduced appetite'],
            ['value' => 'Irregular heartbeat or low blood pressure'],
            ['value' => 'Confusion, dizziness, seizures, or altered consciousness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Severe dehydration due to vomiting, diarrhea, or excessive sweating'],
            ['value' => 'Kidney disease affecting fluid and electrolyte balance'],
            ['value' => 'Heart failure or liver disease causing fluid overload'],
            ['value' => 'Infections, sepsis, or critical illness'],
            ['value' => 'Medication use such as diuretics or certain hormonal therapies'],
        ],
                'condition_risks' => [
            ['value' => 'Rapid electrolyte correction causing neurological or cardiac complications'],
            ['value' => 'Fluid overload leading to swelling or breathing difficulty'],
            ['value' => 'Dehydration or worsening kidney dysfunction'],
            ['value' => 'Heart rhythm abnormalities due to severe electrolyte imbalance'],
            ['value' => 'Recurrence of imbalance if underlying medical conditions remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Electrolyte correction and fluid management focus on restoring metabolic stability, improving organ function, preventing complications, and maintaining proper hydration. Treatment may include intravenous fluids, oral rehydration therapy, electrolyte supplementation, diuretics, fluid restriction, nutritional support, kidney function management, and treatment of underlying illnesses. Patients may also benefit from regular laboratory monitoring, dietary counseling, cardiac monitoring, intensive care support when required, nephrology follow-up, and long-term preventive healthcare to maintain healthy fluid and electrolyte balance.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of fluid status and electrolyte levels'],
            ['value' => 'Observation for signs of dehydration, fluid overload, or cardiac instability'],
            ['value' => 'Adjustment of fluid and electrolyte therapy based on laboratory findings'],
            ['value' => 'Nutritional counseling and hydration management support'],
            ['value' => 'Long-term medical follow-up and preventive metabolic care'],
        ],
                'surgery_risks' => [
            ['value' => 'Rapid electrolyte correction causing neurological or cardiac complications'],
            ['value' => 'Fluid overload leading to swelling or breathing difficulty'],
            ['value' => 'Dehydration or worsening kidney dysfunction'],
            ['value' => 'Heart rhythm abnormalities due to severe electrolyte imbalance'],
            ['value' => 'Recurrence of imbalance if underlying medical conditions remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Electrolyte correction and fluid management focus on restoring metabolic stability, improving organ function, preventing complications, and maintaining proper hydration. Treatment may include intravenous fluids, oral rehydration therapy, electrolyte supplementation, diuretics, fluid restriction, nutritional support, kidney function management, and treatment of underlying illnesses. Patients may also benefit from regular laboratory monitoring, dietary counseling, cardiac monitoring, intensive care support when required, nephrology follow-up, and long-term preventive healthcare to maintain healthy fluid and electrolyte balance.'],
        ],
                'long_term_outlook' => 'The long-term outlook following electrolyte correction and fluid management is generally highly positive with early diagnosis and appropriate medical care. Proper hydration, balanced nutrition, medication adherence, routine laboratory monitoring, management of underlying diseases, healthy lifestyle habits, and continuous medical follow-up significantly help maintain metabolic stability, prevent complications, preserve organ function, improve physical well-being, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Electrolyte Correction & Fluid Management',
                'seo_description' => 'Electrolyte correction and fluid management are essential medical treatment procedures used to restore normal fluid balance and correct abnormal levels of electrolytes such as sodium, potassium, calcium, and magnesium in the body. These therapies are critical in maintaining proper heart function, nerve signaling, muscle activity, kidney function, and overall metabolic stability. Prompt correction of fluid and electrolyte imbalances helps prevent serious complications and supports recovery in both acute and chronic medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
