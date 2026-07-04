<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RareCancersAdrenalNeuroendocrineTumorsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Rare Cancers (Adrenal, Neuroendocrine Tumors)')],
            [
                'title' => 'Rare Cancers (Adrenal, Neuroendocrine Tumors)',
                'slug' => Str::slug('Rare Cancers (Adrenal, Neuroendocrine Tumors)'),
                'introduction' => '',
                'what_is' => 'Neuroendocrine tumors (NETs) are a group of rare tumors that develop from neuroendocrine cells, which have features of both nerve cells and hormone-producing endocrine cells. These tumors can occur in various parts of the body, most commonly in the lungs, pancreas, digestive tract, and other hormone-producing organs. Some NETs grow slowly, while others can be more aggressive and spread to nearby organs or distant body parts. Common Symptoms Persistent cough, sometimes with blood Abdominal or stomach pain A growing lump or swelling under the skin Unexplained weight loss Shortness of breath or wheezing Causes & Triggers Genetic and inherited syndromes Abnormal growth of hormone-producing cells Family history of endocrine tumors Hormonal and cellular mutations affecting neuroendocrine tissue Most cases occur without a clearly identifiable cause Risks & Complications Multiple endocrine neoplasia (MEN) syndromes Von Hippel-Lindau syndrome Neurofibromatosis type 1 Tuberous sclerosis complex Cowden syndrome and other inherited genetic disorders Treatment Options Surgical removal of the tumor when possible Chemotherapy and targeted therapy Hormone therapy and symptom-control medications Radiation therapy or peptide receptor radionuclide therapy (PRRT) Long-term oncology and endocrinology follow-up care Recovery & Outlook The long-term outlook for neuroendocrine tumors depends on the type of tumor, stage of disease, hormone activity, and response to treatment. Many NETs can be managed successfully with early diagnosis and specialized multidisciplinary care. Continuous monitoring, hormonal evaluation, imaging studies, and supportive care are important for controlling symptoms, preventing complications, and improving long-term quality of life.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Rare Cancers (Adrenal, Neuroendocrine Tumors)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
