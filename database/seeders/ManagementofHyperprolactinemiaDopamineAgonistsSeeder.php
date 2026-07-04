<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofHyperprolactinemiaDopamineAgonistsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Hyperprolactinemia (Dopamine Agonists)')],
            [
                'title' => 'Management of Hyperprolactinemia (Dopamine Agonists)',
                'slug' => Str::slug('Management of Hyperprolactinemia (Dopamine Agonists)'),
                'introduction' => 'Management of hyperprolactinemia involves specialized endocrine treatment procedures used to reduce elevated prolactin hormone levels, restore hormonal balance, relieve symptoms, and prevent complications related to pituitary gland dysfunction. Dopamine agonists are the primary medications used to control excessive prolactin production and improve reproductive, metabolic, and endocrine health. Early diagnosis and long-term treatment are important to maintain hormonal stability and improve overall quality of life.',
                'what_is' => 'Hyperprolactinemia management commonly involves dopamine agonist medications such as Cabergoline and Bromocriptine, which help suppress prolactin secretion from the pituitary gland. These medications are highly effective in reducing prolactin levels, shrinking prolactin-secreting pituitary tumors, restoring menstrual cycles, improving fertility, and relieving symptoms associated with hormonal imbalance. Treatment is individualized based on prolactin levels, underlying pituitary abnormalities, reproductive goals, and overall patient health. Regular hormone monitoring and imaging studies are essential to assess treatment response and ensure long-term endocrine stability.',
                'symptoms' => [
            ['value' => 'Irregular or absent menstrual periods'],
            ['value' => 'Milky nipple discharge unrelated to pregnancy or breastfeeding'],
            ['value' => 'Reduced libido or sexual dysfunction'],
            ['value' => 'Infertility or difficulty conceiving'],
            ['value' => 'Headaches, fatigue, or vision disturbances in severe cases'],
        ],
                'causes' => [
            ['value' => 'Pituitary adenoma (prolactinoma)'],
            ['value' => 'Hypothyroidism'],
            ['value' => 'Certain medications affecting dopamine levels'],
            ['value' => 'Chronic stress or hormonal imbalance'],
            ['value' => 'Pregnancy or breastfeeding-related hormonal changes'],
        ],
                'condition_risks' => [
            ['value' => 'Hormonal imbalance affecting reproductive and metabolic health'],
            ['value' => 'Medication side effects such as nausea, dizziness, or low blood pressure'],
            ['value' => 'Osteoporosis or reduced bone density due to prolonged hormonal imbalance'],
            ['value' => 'Pituitary tumor growth causing neurological or vision-related complications'],
            ['value' => 'Recurrence of elevated prolactin levels requiring long-term treatment and monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of hyperprolactinemia focuses on normalizing prolactin levels, restoring hormonal balance, improving fertility, and preventing complications related to pituitary dysfunction. Treatment may include dopamine agonist therapy, hormone evaluation, fertility counseling, pituitary imaging studies, and regular endocrine monitoring. Patients with large or resistant pituitary tumors may require surgery or radiation therapy in selected cases. Nutritional counseling, stress management, bone health support, endocrinology follow-up, and long-term hormonal assessment are also important components of ongoing care and recovery.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of prolactin and hormone levels'],
            ['value' => 'Follow-up imaging studies to assess pituitary gland response'],
            ['value' => 'Observation for medication side effects or recurrence of symptoms'],
            ['value' => 'Fertility and reproductive health assessment when required'],
            ['value' => 'Long-term endocrinology follow-up and hormonal monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Hormonal imbalance affecting reproductive and metabolic health'],
            ['value' => 'Medication side effects such as nausea, dizziness, or low blood pressure'],
            ['value' => 'Osteoporosis or reduced bone density due to prolonged hormonal imbalance'],
            ['value' => 'Pituitary tumor growth causing neurological or vision-related complications'],
            ['value' => 'Recurrence of elevated prolactin levels requiring long-term treatment and monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of hyperprolactinemia focuses on normalizing prolactin levels, restoring hormonal balance, improving fertility, and preventing complications related to pituitary dysfunction. Treatment may include dopamine agonist therapy, hormone evaluation, fertility counseling, pituitary imaging studies, and regular endocrine monitoring. Patients with large or resistant pituitary tumors may require surgery or radiation therapy in selected cases. Nutritional counseling, stress management, bone health support, endocrinology follow-up, and long-term hormonal assessment are also important components of ongoing care and recovery.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of hyperprolactinemia is generally very positive with early diagnosis and proper endocrine treatment. Medication adherence, regular hormonal monitoring, healthy lifestyle habits, stress management, fertility support, bone health maintenance, and continuous medical follow-up significantly help maintain hormonal stability, reduce complications, improve reproductive health, preserve pituitary function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of Hyperprolactinemia (Dopamine Agonists)',
                'seo_description' => 'Management of hyperprolactinemia involves specialized endocrine treatment procedures used to reduce elevated prolactin hormone levels, restore hormonal balance, relieve symptoms, and prevent complications related to pituitary gland dysfunction. Dopamine agonists are the primary medications used to control excessive prolactin production and improve reproductive, metabolic, and endocrine health. Early diagnosis and long-term treatment are important to maintain hormonal stability and improve overall quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
