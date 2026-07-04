<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CervicalCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cervical Cancer')],
            [
                'title' => 'Cervical Cancer',
                'slug' => Str::slug('Cervical Cancer'),
                'introduction' => '',
                'what_is' => 'Cervical cancer is a type of cancer that develops in the cells of the cervix, the lower part of the uterus that connects to the vagina. It commonly begins with abnormal or precancerous cell changes that gradually become cancerous over time. Early detection through routine screening and timely treatment can significantly improve outcomes and prevent complications. Common Symptoms Vaginal bleeding after intercourse, between menstrual periods, or after menopause Watery, bloody, or foul-smelling vaginal discharge Painful or difficult urination, sometimes with blood in the urine Fatigue, loss of appetite, and unexplained weight loss Pelvic pain, backache, or swelling in the legs Causes & Triggers Persistent infection with human papillomavirus (HPV) Smoking and tobacco use Weakened immune system or chronic infections Early sexual activity or multiple sexual partners Lack of regular cervical screening and preventive healthcare Risks & Complications Spread of cancer to nearby organs or lymph nodes Fertility and reproductive health complications Urinary or bowel dysfunction in advanced disease Severe bleeding, pain, or pelvic complications Treatment-related side effects affecting reproductive or overall health Treatment Options Surgical removal of precancerous or cancerous tissue Radiation therapy and chemotherapy Targeted therapy or immunotherapy when indicated Regular cervical screening and HPV vaccination for prevention Supportive care and long-term oncology follow-up Recovery & Outlook The long-term outlook for cervical cancer is generally favorable when detected early and treated appropriately. Regular Pap smears, HPV testing, and preventive vaccination play an important role in reducing the risk of cervical cancer. Continuous follow-up, healthy lifestyle practices, and multidisciplinary cancer care are important for long-term recovery and prevention of recurrence.',
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
                'seo_title' => 'Cervical Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
