<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreatmentofEndocrineHypertensionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Treatment of Endocrine Hypertension')],
            [
                'title' => 'Treatment of Endocrine Hypertension',
                'slug' => Str::slug('Treatment of Endocrine Hypertension'),
                'introduction' => 'Treatment of endocrine hypertension involves specialized medical and surgical procedures used to control high blood pressure caused by hormonal disorders affecting the endocrine system. Conditions such as Conn’s syndrome, pheochromocytoma, Cushing’s syndrome, thyroid disorders, and adrenal gland abnormalities can lead to persistent or severe hypertension due to excess hormone production. Proper endocrine treatment helps restore hormonal balance, improve blood pressure control, and prevent serious cardiovascular and metabolic complications.',
                'what_is' => 'Endocrine hypertension treatment focuses on identifying and managing the underlying hormonal cause of elevated blood pressure. Management may include hormone-blocking medications, blood pressure control therapy, adrenal or endocrine gland surgery, and correction of electrolyte imbalance. Patients with adrenal tumors or hormone-secreting conditions may require specialized surgical procedures or long-term endocrine medications to stabilize hormone levels and cardiovascular function. Treatment is commonly supervised by endocrinologists, cardiologists, endocrine surgeons, and critical care specialists in hospitals and specialized endocrine care centers.',
                'symptoms' => [
            ['value' => 'Persistent or difficult-to-control high blood pressure'],
            ['value' => 'Headaches, dizziness, or blurred vision'],
            ['value' => 'Palpitations or rapid heartbeat'],
            ['value' => 'Excessive sweating, anxiety, or tremors'],
            ['value' => 'Fatigue, muscle weakness, or episodes of sudden blood pressure elevation'],
        ],
                'causes' => [
            ['value' => 'Conn’s syndrome (primary hyperaldosteronism)'],
            ['value' => 'Pheochromocytoma'],
            ['value' => 'Cushing’s syndrome'],
            ['value' => 'Thyroid hormone disorders'],
            ['value' => 'Adrenal gland tumors or hormonal imbalance'],
        ],
                'condition_risks' => [
            ['value' => 'Heart disease, stroke, or cardiovascular emergencies'],
            ['value' => 'Kidney damage or chronic kidney disease'],
            ['value' => 'Severe electrolyte imbalance affecting heart and muscle function'],
            ['value' => 'Hormonal instability causing metabolic complications'],
            ['value' => 'Organ damage due to prolonged uncontrolled hypertension'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment of endocrine hypertension focuses on controlling blood pressure, correcting hormonal imbalance, preventing complications, and improving long-term cardiovascular health. Treatment may include antihypertensive medications, aldosterone-blocking therapy, alpha and beta-blockers, adrenal hormone suppression therapy, surgical removal of endocrine tumors, electrolyte correction, and long-term endocrine monitoring. Patients may also benefit from nutritional counseling, stress management, weight management, cardiovascular evaluation, lifestyle modification, endocrinology follow-up, and regular laboratory assessment to maintain stable blood pressure and hormonal balance.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood pressure and hormone levels'],
            ['value' => 'Observation for medication side effects or electrolyte imbalance'],
            ['value' => 'Cardiovascular and kidney function assessment'],
            ['value' => 'Nutritional counseling and lifestyle modification support'],
            ['value' => 'Long-term endocrinology and cardiology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart disease, stroke, or cardiovascular emergencies'],
            ['value' => 'Kidney damage or chronic kidney disease'],
            ['value' => 'Severe electrolyte imbalance affecting heart and muscle function'],
            ['value' => 'Hormonal instability causing metabolic complications'],
            ['value' => 'Organ damage due to prolonged uncontrolled hypertension'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment of endocrine hypertension focuses on controlling blood pressure, correcting hormonal imbalance, preventing complications, and improving long-term cardiovascular health. Treatment may include antihypertensive medications, aldosterone-blocking therapy, alpha and beta-blockers, adrenal hormone suppression therapy, surgical removal of endocrine tumors, electrolyte correction, and long-term endocrine monitoring. Patients may also benefit from nutritional counseling, stress management, weight management, cardiovascular evaluation, lifestyle modification, endocrinology follow-up, and regular laboratory assessment to maintain stable blood pressure and hormonal balance.'],
        ],
                'long_term_outlook' => 'The long-term outlook following treatment of endocrine hypertension is generally positive with early diagnosis and proper hormonal management. Medication adherence, healthy lifestyle habits, stress reduction, regular blood pressure monitoring, hormonal evaluation, surgical treatment when indicated, and continuous medical follow-up significantly help improve blood pressure control, reduce cardiovascular complications, preserve organ function, maintain hormonal stability, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Treatment of Endocrine Hypertension',
                'seo_description' => 'Treatment of endocrine hypertension involves specialized medical and surgical procedures used to control high blood pressure caused by hormonal disorders affecting the endocrine system. Conditions such as Conn’s syndrome, pheochromocytoma, Cushing’s syndrome, thyroid disorders, and adrenal gland abnormalities can lead to persistent or severe hypertension due to excess hormone production. Proper endocrine treatment helps restore hormonal balance, improve blood pressure control, and prevent serious cardiovascular and metabolic complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
