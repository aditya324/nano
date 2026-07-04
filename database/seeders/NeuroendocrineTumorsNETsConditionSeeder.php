<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuroendocrineTumorsNETsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neuroendocrine Tumors (NETs)')],
            [
                'name' => 'Neuroendocrine Tumors (NETs)',
                'slug' => Str::slug('Neuroendocrine Tumors (NETs)'),
                'h1' => 'Neuroendocrine Tumors (NETs)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neuroendocrine tumors (NETs) are a group of rare tumors that develop from neuroendocrine cells, which have features of both nerve cells and hormone-producing endocrine cells. These tumors can occur in various parts of the body, most commonly in the lungs, pancreas, digestive tract, and other hormone-producing organs. Some NETs grow slowly, while others can be more aggressive and spread to nearby organs or distant body parts.',
                'about_more' => '',
                'overview' => 'Neuroendocrine tumors (NETs) are a group of rare tumors that develop from neuroendocrine cells, which have features of both nerve cells and hormone-producing endocrine cells. These tumors can occur in various parts of the body, most commonly in the lungs, pancreas, digestive tract, and other hormone-producing organs. Some NETs grow slowly, while others can be more aggressive and spread to nearby organs or distant body parts.',
                'symptoms' => [
            ['value' => 'Persistent cough, sometimes with blood'],
            ['value' => 'Abdominal or stomach pain'],
            ['value' => 'A growing lump or swelling under the skin'],
            ['value' => 'Unexplained weight loss'],
            ['value' => 'Shortness of breath or wheezing'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited syndromes'],
            ['value' => 'Abnormal growth of hormone-producing cells'],
            ['value' => 'Family history of endocrine tumors'],
            ['value' => 'Hormonal and cellular mutations affecting neuroendocrine tissue'],
            ['value' => 'Most cases occur without a clearly identifiable cause'],
        ],
                'risks' => [
            ['value' => 'Multiple endocrine neoplasia (MEN) syndromes'],
            ['value' => 'Von Hippel-Lindau syndrome'],
            ['value' => 'Neurofibromatosis type 1'],
            ['value' => 'Tuberous sclerosis complex'],
            ['value' => 'Cowden syndrome and other inherited genetic disorders'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor when possible'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Hormone therapy and symptom-control medications'],
            ['value' => 'Radiation therapy or peptide receptor radionuclide therapy (PRRT)'],
            ['value' => 'Long-term oncology and endocrinology follow-up care'],
        ],
                'recovery' => 'The long-term outlook for neuroendocrine tumors depends on the type of tumor, stage of disease, hormone activity, and response to treatment. Many NETs can be managed successfully with early diagnosis and specialized multidisciplinary care. Continuous monitoring, hormonal evaluation, imaging studies, and supportive care are important for controlling symptoms, preventing complications, and improving long-term quality of life. ______________________ 22. Cancer-Related Complications (Malignant Effusions, Pain & Cachexia)',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Neuroendocrine Tumors (NETs)',
                'meta_description' => 'Neuroendocrine tumors (NETs) are a group of rare tumors that develop from neuroendocrine cells, which have features of both nerve cells and hormone-producing en',
                'meta_keywords' => '',
            ]
        );
    }
}
