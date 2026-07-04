<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdrenalCancerAdrenalTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Adrenal Cancer / Adrenal Tumors')],
            [
                'name' => 'Adrenal Cancer / Adrenal Tumors',
                'slug' => Str::slug('Adrenal Cancer / Adrenal Tumors'),
                'h1' => 'Adrenal Cancer / Adrenal Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Adrenal cancer is a rare type of cancer that develops in the adrenal glands, which are small hormone-producing glands located above each kidney. These glands produce hormones that regulate blood pressure, metabolism, stress response, and other important body functions. Adrenal tumors may be benign or cancerous, and some tumors can produce excessive hormones leading to significant health complications.',
                'about_more' => '',
                'overview' => 'Adrenal cancer is a rare type of cancer that develops in the adrenal glands, which are small hormone-producing glands located above each kidney. These glands produce hormones that regulate blood pressure, metabolism, stress response, and other important body functions. Adrenal tumors may be benign or cancerous, and some tumors can produce excessive hormones leading to significant health complications.',
                'symptoms' => [
            ['value' => 'Unexplained weight gain or weight loss'],
            ['value' => 'High blood pressure or persistent headaches'],
            ['value' => 'Muscle weakness and fatigue'],
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Hormonal changes such as excessive hair growth, abnormal menstrual cycles, or elevated blood sugar levels'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited syndromes'],
            ['value' => 'Hormonal and endocrine abnormalities'],
            ['value' => 'Family history of adrenal tumors or endocrine cancers'],
            ['value' => 'Abnormal cell growth within the adrenal glands'],
            ['value' => 'Most cases occur without a clearly identifiable cause'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or distant body parts'],
            ['value' => 'Severe hormonal imbalance affecting metabolism and blood pressure'],
            ['value' => 'Cardiovascular complications due to excess hormone production'],
            ['value' => 'Kidney and metabolic complications'],
            ['value' => 'Treatment-related side effects affecting hormonal function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the adrenal tumor or gland'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Radiation therapy in selected cases'],
            ['value' => 'Hormonal control medications and endocrine management'],
            ['value' => 'Long-term oncology and endocrinology follow-up care'],
        ],
                'recovery' => 'The long-term outlook for adrenal cancer depends on the type of tumor, stage of disease, hormone involvement, and response to treatment. Early diagnosis and specialized multidisciplinary care can improve treatment outcomes and quality of life. Continuous hormonal monitoring, imaging studies, supportive care, and regular follow-up are important for long-term recovery and prevention of recurrence. _________________ 21. Rare Cancers (Adrenal, Neuroendocrine Tumors) Neuroendocrine Tumors (NETs)',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Adrenal Cancer / Adrenal Tumors',
                'meta_description' => 'Adrenal cancer is a rare type of cancer that develops in the adrenal glands, which are small hormone-producing glands located above each kidney. These glands pr',
                'meta_keywords' => '',
            ]
        );
    }
}
