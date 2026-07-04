<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndometrialUterineCancerEndometrialUterineCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endometrial / Uterine Cancer Endometrial / Uterine Cancer')],
            [
                'title' => 'Endometrial / Uterine Cancer Endometrial / Uterine Cancer',
                'slug' => Str::slug('Endometrial / Uterine Cancer Endometrial / Uterine Cancer'),
                'introduction' => '',
                'what_is' => 'Endometrial cancer, also known as uterine cancer, is a type of cancer that begins in the lining of the uterus called the endometrium. It is one of the most common gynecological cancers and often develops after menopause, although it can occur earlier. Early diagnosis and treatment significantly improve recovery outcomes and survival rates. Common Symptoms Abnormal vaginal bleeding, especially after menopause Bleeding between menstrual periods Pelvic pain or pressure Watery or blood-tinged vaginal discharge Pain during urination or intercourse in advanced cases Causes & Triggers Hormonal imbalance involving excess estrogen Obesity and metabolic syndrome Diabetes and high blood pressure Family history or inherited genetic syndromes such as Lynch syndrome Increasing age and postmenopausal status Risks & Complications Spread of cancer to nearby organs or lymph nodes Severe bleeding and anemia Fertility and reproductive health complications Pelvic pain and urinary or bowel involvement in advanced disease Treatment-related complications affecting hormonal or overall health Treatment Options Surgical removal of the uterus and affected tissues Radiation therapy and chemotherapy Hormone therapy for selected cases Targeted therapy or immunotherapy when indicated Long-term gynecologic oncology follow-up and supportive care Recovery & Outlook The long-term outlook for endometrial and uterine cancer is generally favorable when detected early and treated appropriately. Regular gynecological evaluations, healthy lifestyle practices, weight management, and ongoing follow-up care are important for improving recovery outcomes and reducing the risk of recurrence.',
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
                'seo_title' => 'Endometrial / Uterine Cancer Endometrial / Uterine Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
