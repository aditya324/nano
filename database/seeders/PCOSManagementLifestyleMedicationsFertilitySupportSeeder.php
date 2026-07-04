<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PCOSManagementLifestyleMedicationsFertilitySupportSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('PCOS Management (Lifestyle, Medications, Fertility Support)')],
            [
                'title' => 'PCOS Management (Lifestyle, Medications, Fertility Support)',
                'slug' => Str::slug('PCOS Management (Lifestyle, Medications, Fertility Support)'),
                'introduction' => 'PCOS management involves specialized medical and supportive treatment procedures used to regulate hormones, improve metabolic health, manage symptoms, and support reproductive wellness in individuals with Polycystic Ovary Syndrome (PCOS). PCOS is a common hormonal disorder associated with irregular ovulation, insulin resistance, elevated androgen levels, and metabolic imbalance. Early diagnosis and long-term management are important to improve fertility, menstrual health, weight control, and overall quality of life.',
                'what_is' => 'PCOS management includes a combination of lifestyle modification, medications, hormonal therapy, and fertility support tailored to the patient’s symptoms and reproductive goals. Lifestyle interventions such as healthy diet planning, weight management, and regular exercise help improve insulin sensitivity and hormonal balance. Medications may be used to regulate menstrual cycles, control androgen-related symptoms, improve ovulation, and manage insulin resistance. Fertility-focused treatment may include ovulation induction therapy, assisted reproductive techniques, and specialized reproductive endocrinology support. Management is commonly supervised by endocrinologists, gynecologists, fertility specialists, nutritionists, and metabolic care teams.',
                'symptoms' => [
            ['value' => 'Irregular or missed menstrual periods'],
            ['value' => 'Excess facial or body hair growth (hirsutism)'],
            ['value' => 'Acne, oily skin, or hair thinning'],
            ['value' => 'Weight gain or difficulty losing weight'],
            ['value' => 'Infertility or difficulty conceiving'],
        ],
                'causes' => [
            ['value' => 'Hormonal imbalance affecting ovulation'],
            ['value' => 'Insulin resistance and metabolic dysfunction'],
            ['value' => 'Genetic or family history of PCOS'],
            ['value' => 'Obesity or unhealthy lifestyle habits'],
            ['value' => 'Elevated androgen hormone levels'],
        ],
                'condition_risks' => [
            ['value' => 'Infertility or ovulation-related reproductive complications'],
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'Obesity, metabolic syndrome, or cardiovascular disease'],
            ['value' => 'Emotional stress, anxiety, or depression related to hormonal imbalance'],
            ['value' => 'Increased risk of endometrial complications due to irregular menstruation'],
            ['value' => 'Treatment Options'],
            ['value' => 'PCOS management focuses on restoring hormonal balance, improving ovulation, reducing metabolic complications, and supporting long-term reproductive and endocrine health. Treatment may include lifestyle modification, nutritional counseling, weight reduction programs, insulin-sensitizing medications, hormonal contraceptive therapy, ovulation induction medications, fertility support, stress management, and regular metabolic monitoring. Patients may also benefit from exercise programs, dermatological treatment for acne or hair growth, psychological counseling, endocrinology follow-up, and gynecological care to optimize treatment outcomes and improve overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of menstrual cycles and hormonal levels'],
            ['value' => 'Blood sugar, weight, and metabolic health assessment'],
            ['value' => 'Nutritional counseling and supervised lifestyle management'],
            ['value' => 'Fertility evaluation and reproductive health follow-up when required'],
            ['value' => 'Long-term endocrinology and gynecology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Infertility or ovulation-related reproductive complications'],
            ['value' => 'Type 2 diabetes and insulin resistance'],
            ['value' => 'Obesity, metabolic syndrome, or cardiovascular disease'],
            ['value' => 'Emotional stress, anxiety, or depression related to hormonal imbalance'],
            ['value' => 'Increased risk of endometrial complications due to irregular menstruation'],
            ['value' => 'Treatment Options'],
            ['value' => 'PCOS management focuses on restoring hormonal balance, improving ovulation, reducing metabolic complications, and supporting long-term reproductive and endocrine health. Treatment may include lifestyle modification, nutritional counseling, weight reduction programs, insulin-sensitizing medications, hormonal contraceptive therapy, ovulation induction medications, fertility support, stress management, and regular metabolic monitoring. Patients may also benefit from exercise programs, dermatological treatment for acne or hair growth, psychological counseling, endocrinology follow-up, and gynecological care to optimize treatment outcomes and improve overall well-being.'],
        ],
                'long_term_outlook' => 'The long-term outlook following PCOS management is generally positive with early diagnosis and consistent medical and lifestyle care. Healthy nutrition, regular exercise, weight management, medication adherence, stress reduction, fertility support, hormonal monitoring, and continuous medical follow-up significantly help regulate menstrual cycles, improve fertility, reduce metabolic complications, maintain hormonal stability, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'PCOS Management (Lifestyle, Medications, Fertility Support)',
                'seo_description' => 'PCOS management involves specialized medical and supportive treatment procedures used to regulate hormones, improve metabolic health, manage symptoms, and support reproductive wellness in individuals with Polycystic Ovary Syndrome (PCOS). PCOS is a common hormonal disorder associated with irregular ovulation, insulin resistance, elevated androgen levels, and metabolic imbalance. Early diagnosis and long-term management are important to improve fertility, menstrual health, weight control, and overall quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
