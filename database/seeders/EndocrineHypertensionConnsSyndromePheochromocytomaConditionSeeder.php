<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndocrineHypertensionConnsSyndromePheochromocytomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)')],
            [
                'name' => 'Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)',
                'slug' => Str::slug('Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)'),
                'h1' => 'Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Endocrine hypertension is a form of high blood pressure caused by hormonal disorders affecting the endocrine glands. Conditions such as Conn’s syndrome and pheochromocytoma lead to excessive hormone production that disrupts blood pressure regulation and cardiovascular function. Conn’s syndrome results from excess aldosterone production by the adrenal glands, while pheochromocytoma is a rare adrenal tumor that produces excessive adrenaline-related hormones. Early diagnosis and specialized endocrine management are essential to prevent severe cardiovascular, metabolic, and organ-related complications.',
                'about_more' => '',
                'overview' => 'Endocrine hypertension is a form of high blood pressure caused by hormonal disorders affecting the endocrine glands. Conditions such as Conn’s syndrome and pheochromocytoma lead to excessive hormone production that disrupts blood pressure regulation and cardiovascular function. Conn’s syndrome results from excess aldosterone production by the adrenal glands, while pheochromocytoma is a rare adrenal tumor that produces excessive adrenaline-related hormones. Early diagnosis and specialized endocrine management are essential to prevent severe cardiovascular, metabolic, and organ-related complications.',
                'symptoms' => [
            ['value' => 'Persistent or difficult-to-control high blood pressure'],
            ['value' => 'Headaches, dizziness, or blurred vision'],
            ['value' => 'Palpitations or rapid heartbeat'],
            ['value' => 'Excessive sweating, anxiety, or tremors'],
            ['value' => 'Muscle weakness, fatigue, or episodes of sudden blood pressure spikes'],
        ],
                'causes' => [
            ['value' => 'Overproduction of aldosterone in Conn’s syndrome'],
            ['value' => 'Adrenal gland tumors producing excess catecholamines in pheochromocytoma'],
            ['value' => 'Genetic or inherited endocrine disorders'],
            ['value' => 'Adrenal gland hyperplasia or abnormal hormone secretion'],
            ['value' => 'Hormonal imbalance affecting cardiovascular regulation'],
        ],
                'risks' => [
            ['value' => 'Heart disease, stroke, or cardiovascular emergencies'],
            ['value' => 'Severe uncontrolled hypertension causing organ damage'],
            ['value' => 'Kidney dysfunction or electrolyte imbalance'],
            ['value' => 'Heart rhythm abnormalities or circulatory instability'],
            ['value' => 'Long-term metabolic and endocrine complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for endocrine hypertension focuses on controlling blood pressure, correcting hormonal imbalance, treating the underlying endocrine disorder, and preventing long-term complications. Management may include blood pressure medications, hormone-blocking therapy, adrenal gland surgery, electrolyte correction, and regular endocrine evaluation. Patients with pheochromocytoma may require specialized medications before surgery to stabilize blood pressure and heart function. Lifestyle modification, healthy diet planning, stress management, cardiovascular monitoring, endocrinology follow-up, and long-term metabolic assessment are important components of ongoing care and recovery.'],
        ],
                'recovery' => 'The long-term outlook for endocrine hypertension is generally positive with early diagnosis and appropriate hormonal management. Regular medication adherence, healthy lifestyle habits, blood pressure monitoring, surgical treatment when indicated, stress reduction, and continuous endocrinology and cardiology follow-up significantly help improve blood pressure control, reduce complications, preserve organ function, maintain hormonal stability, and enhance overall quality of life. _____________________',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Endocrine Hypertension (Conn’s Syndrome, Pheochromocytoma)',
                'meta_description' => 'Endocrine hypertension is a form of high blood pressure caused by hormonal disorders affecting the endocrine glands. Conditions such as Conn’s syndrome and pheo',
                'meta_keywords' => '',
            ]
        );
    }
}
