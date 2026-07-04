<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HormoneAssayInstrumentsCortisolACTHSexHormonesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hormone Assay Instruments (Cortisol, ACTH, Sex Hormones)')],
            [
                'title' => 'Hormone Assay Instruments (Cortisol, ACTH, Sex Hormones)',
                'slug' => Str::slug('Hormone Assay Instruments (Cortisol, ACTH, Sex Hormones)'),
                'introduction' => 'Hormone assay instruments are advanced diagnostic laboratory devices used to measure hormone levels in blood and other biological samples. These instruments play a critical role in diagnosing, monitoring, and managing endocrine and metabolic disorders by providing accurate assessment of hormones such as cortisol, Adrenocorticotropic Hormone (ACTH), testosterone, estrogen, progesterone, and other reproductive or adrenal hormones. Hormone testing supports early diagnosis, treatment planning, and long-term endocrine care.',
                'what_is' => 'Hormone assay instruments use advanced immunoassay, chemiluminescence, electrochemiluminescence, or automated biochemical technologies to detect and quantify hormone concentrations with high precision. These systems are commonly used in hospitals, endocrinology clinics, diagnostic laboratories, fertility centers, and research facilities. Hormone assays help evaluate adrenal gland disorders, pituitary abnormalities, reproductive hormone imbalance, infertility, thyroid disease, metabolic disorders, and endocrine tumors. Modern instruments provide automated sample processing, rapid turnaround times, and reliable results to support accurate endocrine evaluation and clinical decision-making.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or unexplained weight changes'],
            ['value' => 'Hormonal imbalance affecting metabolism or reproductive health'],
            ['value' => 'Irregular menstrual cycles or fertility-related concerns'],
            ['value' => 'Excessive hair growth, reduced libido, or sexual dysfunction'],
            ['value' => 'Stress-related symptoms, adrenal disorders, or metabolic instability'],
        ],
                'causes' => [
            ['value' => 'Hormonal imbalance affecting metabolism or reproductive health'],
            ['value' => 'Adrenal gland or pituitary disorders'],
            ['value' => 'Infertility, menstrual irregularities, or reproductive health concerns'],
            ['value' => 'Thyroid disease or endocrine-related metabolic disorders'],
            ['value' => 'Stress-related hormonal imbalance or endocrine tumors'],
        ],
                'condition_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or laboratory errors'],
            ['value' => 'Delayed diagnosis if hormone testing is not performed appropriately'],
            ['value' => 'Variations in hormone levels caused by medications or underlying medical conditions'],
            ['value' => 'Misinterpretation of results without proper clinical correlation'],
            ['value' => 'Poor endocrine disease control if hormonal abnormalities remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hormone assay instruments support effective endocrine diagnosis and treatment planning by helping healthcare providers accurately monitor hormone levels and evaluate treatment response. Management may include hormone replacement therapy, hormone suppression therapy, fertility treatment, adrenal or pituitary disorder management, endocrine surgery, nutritional counseling, lifestyle modification, and regular endocrinology follow-up. Patients may also benefit from preventive endocrine screening, metabolic assessment, reproductive health evaluation, and long-term hormonal monitoring to maintain endocrine stability and overall health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular hormone level monitoring and laboratory evaluation'],
            ['value' => 'Proper blood sample collection and laboratory quality assurance procedures'],
            ['value' => 'Adjustment of hormonal therapy based on assay results'],
            ['value' => 'Nutritional counseling and endocrine health management support'],
            ['value' => 'Long-term endocrinology follow-up and hormonal assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Inaccurate results due to improper sample handling or laboratory errors'],
            ['value' => 'Delayed diagnosis if hormone testing is not performed appropriately'],
            ['value' => 'Variations in hormone levels caused by medications or underlying medical conditions'],
            ['value' => 'Misinterpretation of results without proper clinical correlation'],
            ['value' => 'Poor endocrine disease control if hormonal abnormalities remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hormone assay instruments support effective endocrine diagnosis and treatment planning by helping healthcare providers accurately monitor hormone levels and evaluate treatment response. Management may include hormone replacement therapy, hormone suppression therapy, fertility treatment, adrenal or pituitary disorder management, endocrine surgery, nutritional counseling, lifestyle modification, and regular endocrinology follow-up. Patients may also benefit from preventive endocrine screening, metabolic assessment, reproductive health evaluation, and long-term hormonal monitoring to maintain endocrine stability and overall health.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with hormone assay monitoring is generally highly positive with regular endocrine assessment and appropriate medical management. Routine hormone testing, medication adherence, healthy lifestyle habits, stress management, balanced nutrition, continuous hormonal evaluation, and ongoing healthcare follow-up significantly help maintain endocrine stability, improve metabolic and reproductive health, reduce complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Hormone Assay Instruments (Cortisol, ACTH, Sex Hormones)',
                'seo_description' => 'Hormone assay instruments are advanced diagnostic laboratory devices used to measure hormone levels in blood and other biological samples. These instruments play a critical role in diagnosing, monitoring, and managing endocrine and metabolic disorders by providing accurate assessment of hormones such as cortisol, Adrenocorticotropic Hormone (ACTH), testosterone, estrogen, progesterone, and other reproductive or adrenal hormones. Hormone testing supports early diagnosis, treatment planning, and long-term endocrine care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
