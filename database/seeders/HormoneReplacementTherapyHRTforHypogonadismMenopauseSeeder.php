<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HormoneReplacementTherapyHRTforHypogonadismMenopauseSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hormone Replacement Therapy (HRT) for Hypogonadism / Menopause')],
            [
                'title' => 'Hormone Replacement Therapy (HRT) for Hypogonadism / Menopause',
                'slug' => Str::slug('Hormone Replacement Therapy (HRT) for Hypogonadism / Menopause'),
                'introduction' => 'Hormone Replacement Therapy (HRT) is a specialized endocrine treatment procedure used to restore hormonal balance in individuals with hormone deficiency conditions such as hypogonadism and menopause. HRT helps replace deficient sex hormones including testosterone, estrogen, and progesterone to relieve symptoms, improve metabolic stability, support reproductive and bone health, and enhance overall quality of life. Proper hormonal management plays an important role in maintaining physical, emotional, and sexual well-being.',
                'what_is' => 'HRT is commonly used in men with low testosterone levels due to hypogonadism and in women experiencing menopausal or perimenopausal hormone decline. Treatment may involve oral medications, injections, skin patches, gels, implants, or topical hormone preparations depending on the patient’s medical condition and treatment goals. Hormone therapy is individualized based on age, symptoms, hormone levels, reproductive health, and overall medical status. Regular endocrine evaluation, laboratory monitoring, and lifestyle management are essential to ensure safe and effective long-term hormonal therapy.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Hot flashes, night sweats, or mood changes'],
            ['value' => 'Reduced libido or sexual dysfunction'],
            ['value' => 'Irregular menstrual cycles or menopausal symptoms'],
            ['value' => 'Loss of muscle mass, bone weakness, or reduced physical endurance'],
        ],
                'causes' => [
            ['value' => 'Age-related hormonal decline'],
            ['value' => 'Menopause or perimenopause'],
            ['value' => 'Primary or secondary hypogonadism'],
            ['value' => 'Surgical removal of ovaries or testes'],
            ['value' => 'Hormonal disorders affecting endocrine gland function'],
        ],
                'condition_risks' => [
            ['value' => 'Blood clot formation or cardiovascular complications in selected patients'],
            ['value' => 'Weight changes, fluid retention, or breast tenderness'],
            ['value' => 'Hormonal imbalance due to incorrect dosage or prolonged therapy'],
            ['value' => 'Increased risk of osteoporosis if hormone deficiency remains untreated'],
            ['value' => 'Need for regular monitoring to reduce long-term treatment-related risks'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hormone Replacement Therapy focuses on restoring hormonal balance, relieving symptoms, improving metabolic and reproductive health, and preventing long-term endocrine complications. Treatment may include testosterone replacement therapy, estrogen and progesterone therapy, bone health support, lifestyle modification, nutritional counseling, and regular hormonal monitoring. Patients may also benefit from exercise programs, stress management, sexual health counseling, cardiovascular risk assessment, endocrinology follow-up, and gynecological or urological care to optimize overall hormonal health and quality of life.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of hormone levels and treatment response'],
            ['value' => 'Observation for side effects or hormonal imbalance symptoms'],
            ['value' => 'Bone density and cardiovascular health assessment when required'],
            ['value' => 'Nutritional counseling and healthy lifestyle support'],
            ['value' => 'Long-term endocrinology follow-up and medication adjustment when necessary'],
        ],
                'surgery_risks' => [
            ['value' => 'Blood clot formation or cardiovascular complications in selected patients'],
            ['value' => 'Weight changes, fluid retention, or breast tenderness'],
            ['value' => 'Hormonal imbalance due to incorrect dosage or prolonged therapy'],
            ['value' => 'Increased risk of osteoporosis if hormone deficiency remains untreated'],
            ['value' => 'Need for regular monitoring to reduce long-term treatment-related risks'],
            ['value' => 'Treatment Options'],
            ['value' => 'Hormone Replacement Therapy focuses on restoring hormonal balance, relieving symptoms, improving metabolic and reproductive health, and preventing long-term endocrine complications. Treatment may include testosterone replacement therapy, estrogen and progesterone therapy, bone health support, lifestyle modification, nutritional counseling, and regular hormonal monitoring. Patients may also benefit from exercise programs, stress management, sexual health counseling, cardiovascular risk assessment, endocrinology follow-up, and gynecological or urological care to optimize overall hormonal health and quality of life.'],
        ],
                'long_term_outlook' => 'The long-term outlook following Hormone Replacement Therapy is generally positive with proper medical supervision and regular follow-up care. Medication adherence, healthy lifestyle habits, balanced nutrition, exercise, stress management, hormonal monitoring, and continuous medical follow-up significantly help maintain hormonal stability, improve physical and emotional well-being, preserve bone and metabolic health, reduce complications, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Hormone Replacement Therapy (HRT) for Hypogonadism / Menopause',
                'seo_description' => 'Hormone Replacement Therapy (HRT) is a specialized endocrine treatment procedure used to restore hormonal balance in individuals with hormone deficiency conditions such as hypogonadism and menopause. HRT helps replace deficient sex hormones including testosterone, estrogen, and progesterone to relieve symptoms, improve metabolic stability, support reproductive and bone health, and enhance overall quality of life. Proper hormonal management plays an important role in maintaining physical, emotional, and sexual well-being.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
