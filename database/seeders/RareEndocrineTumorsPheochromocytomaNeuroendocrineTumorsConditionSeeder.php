<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RareEndocrineTumorsPheochromocytomaNeuroendocrineTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)')],
            [
                'name' => 'Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)',
                'slug' => Str::slug('Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)'),
                'h1' => 'Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rare endocrine tumors are uncommon growths arising from hormone-producing glands or neuroendocrine cells within the body. Conditions such as pheochromocytoma and neuroendocrine tumors can produce excessive hormones, leading to significant metabolic, cardiovascular, and systemic complications. Pheochromocytoma commonly develops in the adrenal glands and causes excessive adrenaline production, while neuroendocrine tumors may occur in organs such as the pancreas, gastrointestinal tract, lungs, or other endocrine tissues. Early diagnosis and specialized endocrine and oncological management are essential to prevent serious complications and improve long-term outcomes.',
                'about_more' => '',
                'overview' => 'Rare endocrine tumors are uncommon growths arising from hormone-producing glands or neuroendocrine cells within the body. Conditions such as pheochromocytoma and neuroendocrine tumors can produce excessive hormones, leading to significant metabolic, cardiovascular, and systemic complications. Pheochromocytoma commonly develops in the adrenal glands and causes excessive adrenaline production, while neuroendocrine tumors may occur in organs such as the pancreas, gastrointestinal tract, lungs, or other endocrine tissues. Early diagnosis and specialized endocrine and oncological management are essential to prevent serious complications and improve long-term outcomes.',
                'symptoms' => [
            ['value' => 'High blood pressure or sudden episodes of hypertension'],
            ['value' => 'Excessive sweating, palpitations, or rapid heartbeat'],
            ['value' => 'Headaches, dizziness, or anxiety-like symptoms'],
            ['value' => 'Abdominal pain, flushing, or unexplained weight loss'],
            ['value' => 'Fatigue, hormonal imbalance, or digestive disturbances depending on tumor type'],
        ],
                'causes' => [
            ['value' => 'Genetic or inherited endocrine syndromes'],
            ['value' => 'Abnormal growth of hormone-producing endocrine cells'],
            ['value' => 'Adrenal gland tumors or neuroendocrine cell proliferation'],
            ['value' => 'Family history of endocrine tumors or multiple endocrine neoplasia (MEN) syndromes'],
            ['value' => 'Unknown cellular mutations affecting hormone regulation and tumor development'],
        ],
                'risks' => [
            ['value' => 'Severe hypertension or cardiovascular emergencies'],
            ['value' => 'Hormonal imbalance affecting multiple organ systems'],
            ['value' => 'Tumor spread or metastasis in malignant neuroendocrine tumors'],
            ['value' => 'Heart rhythm abnormalities, stroke, or organ damage'],
            ['value' => 'Long-term metabolic complications and reduced quality of life if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for rare endocrine tumors focuses on controlling hormone overproduction, removing or reducing tumor growth, preventing complications, and improving overall endocrine stability. Management may include blood pressure control, hormone-blocking medications, surgical tumor removal, targeted therapy, chemotherapy, radiotherapy, peptide receptor therapy, and long-term endocrine monitoring. Patients may also benefit from imaging studies, laboratory hormone evaluation, nutritional counseling, genetic counseling, oncology support, and multidisciplinary endocrinology follow-up to optimize treatment outcomes and long-term health.'],
        ],
                'recovery' => 'The long-term outlook for rare endocrine tumors depends on the type of tumor, hormonal activity, stage of disease, response to treatment, and overall patient health. Early diagnosis, proper hormonal control, surgical management, medication adherence, regular monitoring, healthy lifestyle habits, and continuous endocrinology and oncology follow-up significantly help reduce complications, improve metabolic stability, control tumor progression, preserve organ function, and enhance overall quality of life. _______________ 21. Menopause & Perimenopausal Disorders Menopause & Perimenopausal Disorders',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)',
                'meta_description' => 'Rare endocrine tumors are uncommon growths arising from hormone-producing glands or neuroendocrine cells within the body. Conditions such as pheochromocytoma an',
                'meta_keywords' => '',
            ]
        );
    }
}
