<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GeneticRareEndocrineDisorderManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Genetic & Rare Endocrine Disorder Management')],
            [
                'title' => 'Genetic & Rare Endocrine Disorder Management',
                'slug' => Str::slug('Genetic & Rare Endocrine Disorder Management'),
                'introduction' => 'Genetic and rare endocrine disorder management involves specialized medical procedures used to diagnose, monitor, and treat uncommon hormonal and inherited endocrine conditions affecting glands such as the thyroid, adrenal, pituitary, pancreas, and parathyroid glands. These disorders may disrupt hormone production, metabolism, growth, reproductive health, and overall body function. Early diagnosis, genetic evaluation, and long-term multidisciplinary endocrine care are essential to improve health outcomes and prevent serious complications.',
                'what_is' => 'Management of genetic and rare endocrine disorders includes advanced hormonal assessment, genetic testing, imaging studies, medication therapy, hormone replacement, metabolic monitoring, and individualized long-term treatment planning. Conditions such as Multiple Endocrine Neoplasia (MEN) syndromes, congenital adrenal hyperplasia, inherited thyroid disorders, pituitary abnormalities, and rare metabolic endocrine syndromes often require coordinated care from endocrinologists, genetic specialists, surgeons, oncologists, and rehabilitation teams. Treatment is tailored according to the specific genetic condition, hormonal imbalance, severity of symptoms, and overall patient health.',
                'symptoms' => [
            ['value' => 'Hormonal imbalance affecting growth, metabolism, or reproduction'],
            ['value' => 'Fatigue, weakness, or unexplained weight changes'],
            ['value' => 'Abnormal growth patterns or developmental delays'],
            ['value' => 'High blood pressure, blood sugar imbalance, or electrolyte disturbances'],
            ['value' => 'Recurrent endocrine tumors, gland enlargement, or family history of endocrine disease'],
        ],
                'causes' => [
            ['value' => 'Inherited genetic mutations affecting endocrine glands'],
            ['value' => 'Congenital adrenal or thyroid disorders'],
            ['value' => 'Multiple Endocrine Neoplasia (MEN) syndromes'],
            ['value' => 'Rare metabolic or hormonal syndromes'],
            ['value' => 'Family history of endocrine tumors or endocrine disease'],
        ],
                'condition_risks' => [
            ['value' => 'Progressive hormonal dysfunction affecting multiple organs'],
            ['value' => 'Inherited endocrine tumors or cancer-related complications'],
            ['value' => 'Metabolic instability and long-term organ damage'],
            ['value' => 'Growth, fertility, or developmental complications'],
            ['value' => 'Emotional, psychological, or quality-of-life challenges associated with chronic rare disorders'],
            ['value' => 'Treatment Options'],
            ['value' => 'Genetic and rare endocrine disorder management focuses on restoring hormonal balance, controlling symptoms, preventing complications, and supporting long-term metabolic and endocrine health. Treatment may include hormone replacement therapy, hormone suppression therapy, targeted medications, genetic counseling, endocrine surgery, nutritional counseling, metabolic monitoring, fertility support, and long-term rehabilitation care. Patients may also benefit from psychological support, lifestyle modification, family screening programs, advanced imaging studies, laboratory monitoring, and multidisciplinary endocrine follow-up to optimize treatment outcomes and improve overall health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of hormone levels and metabolic function'],
            ['value' => 'Genetic counseling and family risk assessment when required'],
            ['value' => 'Medication adjustment and long-term endocrine evaluation'],
            ['value' => 'Nutritional counseling and supportive rehabilitation programs'],
            ['value' => 'Continuous endocrinology follow-up and multidisciplinary specialist care'],
        ],
                'surgery_risks' => [
            ['value' => 'Progressive hormonal dysfunction affecting multiple organs'],
            ['value' => 'Inherited endocrine tumors or cancer-related complications'],
            ['value' => 'Metabolic instability and long-term organ damage'],
            ['value' => 'Growth, fertility, or developmental complications'],
            ['value' => 'Emotional, psychological, or quality-of-life challenges associated with chronic rare disorders'],
            ['value' => 'Treatment Options'],
            ['value' => 'Genetic and rare endocrine disorder management focuses on restoring hormonal balance, controlling symptoms, preventing complications, and supporting long-term metabolic and endocrine health. Treatment may include hormone replacement therapy, hormone suppression therapy, targeted medications, genetic counseling, endocrine surgery, nutritional counseling, metabolic monitoring, fertility support, and long-term rehabilitation care. Patients may also benefit from psychological support, lifestyle modification, family screening programs, advanced imaging studies, laboratory monitoring, and multidisciplinary endocrine follow-up to optimize treatment outcomes and improve overall health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of genetic and rare endocrine disorders depends on the specific condition, severity of hormonal imbalance, treatment response, and early intervention. Regular medical monitoring, medication adherence, healthy lifestyle habits, genetic counseling, hormonal evaluation, multidisciplinary care, and continuous specialist follow-up significantly help improve hormonal stability, reduce complications, preserve organ function, support healthy development, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Genetic & Rare Endocrine Disorder Management',
                'seo_description' => 'Genetic and rare endocrine disorder management involves specialized medical procedures used to diagnose, monitor, and treat uncommon hormonal and inherited endocrine conditions affecting glands such as the thyroid, adrenal, pituitary, pancreas, and parathyroid glands. These disorders may disrupt hormone production, metabolism, growth, reproductive health, and overall body function. Early diagnosis, genetic evaluation, and long-term multidisciplinary endocrine care are essential to improve health outcomes and prevent serious complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
