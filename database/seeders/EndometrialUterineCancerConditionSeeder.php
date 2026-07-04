<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndometrialUterineCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endometrial / Uterine Cancer')],
            [
                'name' => 'Endometrial / Uterine Cancer',
                'slug' => Str::slug('Endometrial / Uterine Cancer'),
                'h1' => 'Endometrial / Uterine Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Endometrial cancer, also known as uterine cancer, is a type of cancer that begins in the lining of the uterus called the endometrium. It is one of the most common gynecological cancers and often develops after menopause, although it can occur earlier. Early diagnosis and treatment significantly improve recovery outcomes and survival rates.',
                'about_more' => '',
                'overview' => 'Endometrial cancer, also known as uterine cancer, is a type of cancer that begins in the lining of the uterus called the endometrium. It is one of the most common gynecological cancers and often develops after menopause, although it can occur earlier. Early diagnosis and treatment significantly improve recovery outcomes and survival rates.',
                'symptoms' => [
            ['value' => 'Abnormal vaginal bleeding, especially after menopause'],
            ['value' => 'Bleeding between menstrual periods'],
            ['value' => 'Pelvic pain or pressure'],
            ['value' => 'Watery or blood-tinged vaginal discharge'],
            ['value' => 'Pain during urination or intercourse in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Hormonal imbalance involving excess estrogen'],
            ['value' => 'Obesity and metabolic syndrome'],
            ['value' => 'Diabetes and high blood pressure'],
            ['value' => 'Family history or inherited genetic syndromes such as Lynch syndrome'],
            ['value' => 'Increasing age and postmenopausal status'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or lymph nodes'],
            ['value' => 'Severe bleeding and anemia'],
            ['value' => 'Fertility and reproductive health complications'],
            ['value' => 'Pelvic pain and urinary or bowel involvement in advanced disease'],
            ['value' => 'Treatment-related complications affecting hormonal or overall health'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the uterus and affected tissues'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Hormone therapy for selected cases'],
            ['value' => 'Targeted therapy or immunotherapy when indicated'],
            ['value' => 'Long-term gynecologic oncology follow-up and supportive care'],
        ],
                'recovery' => 'The long-term outlook for endometrial and uterine cancer is generally favorable when detected early and treated appropriately. Regular gynecological evaluations, healthy lifestyle practices, weight management, and ongoing follow-up care are important for improving recovery outcomes and reducing the risk of recurrence. __________________________ 14. Testicular Cancer',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Endometrial / Uterine Cancer',
                'meta_description' => 'Endometrial cancer, also known as uterine cancer, is a type of cancer that begins in the lining of the uterus called the endometrium. It is one of the most comm',
                'meta_keywords' => '',
            ]
        );
    }
}
