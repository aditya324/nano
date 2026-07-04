<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CervicalCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cervical Cancer')],
            [
                'name' => 'Cervical Cancer',
                'slug' => Str::slug('Cervical Cancer'),
                'h1' => 'Cervical Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cervical cancer is a type of cancer that develops in the cells of the cervix, the lower part of the uterus that connects to the vagina. It commonly begins with abnormal or precancerous cell changes that gradually become cancerous over time. Early detection through routine screening and timely treatment can significantly improve outcomes and prevent complications.',
                'about_more' => '',
                'overview' => 'Cervical cancer is a type of cancer that develops in the cells of the cervix, the lower part of the uterus that connects to the vagina. It commonly begins with abnormal or precancerous cell changes that gradually become cancerous over time. Early detection through routine screening and timely treatment can significantly improve outcomes and prevent complications.',
                'symptoms' => [
            ['value' => 'Vaginal bleeding after intercourse, between menstrual periods, or after menopause'],
            ['value' => 'Watery, bloody, or foul-smelling vaginal discharge'],
            ['value' => 'Painful or difficult urination, sometimes with blood in the urine'],
            ['value' => 'Fatigue, loss of appetite, and unexplained weight loss'],
            ['value' => 'Pelvic pain, backache, or swelling in the legs'],
        ],
                'causes' => [
            ['value' => 'Persistent infection with human papillomavirus (HPV)'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Weakened immune system or chronic infections'],
            ['value' => 'Early sexual activity or multiple sexual partners'],
            ['value' => 'Lack of regular cervical screening and preventive healthcare'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or lymph nodes'],
            ['value' => 'Fertility and reproductive health complications'],
            ['value' => 'Urinary or bowel dysfunction in advanced disease'],
            ['value' => 'Severe bleeding, pain, or pelvic complications'],
            ['value' => 'Treatment-related side effects affecting reproductive or overall health'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of precancerous or cancerous tissue'],
            ['value' => 'Radiation therapy and chemotherapy'],
            ['value' => 'Targeted therapy or immunotherapy when indicated'],
            ['value' => 'Regular cervical screening and HPV vaccination for prevention'],
            ['value' => 'Supportive care and long-term oncology follow-up'],
        ],
                'recovery' => 'The long-term outlook for cervical cancer is generally favorable when detected early and treated appropriately. Regular Pap smears, HPV testing, and preventive vaccination play an important role in reducing the risk of cervical cancer. Continuous follow-up, healthy lifestyle practices, and multidisciplinary cancer care are important for long-term recovery and prevention of recurrence. _______________________ 12. Ovarian Cancer',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Cervical Cancer',
                'meta_description' => 'Cervical cancer is a type of cancer that develops in the cells of the cervix, the lower part of the uterus that connects to the vagina. It commonly begins with ',
                'meta_keywords' => '',
            ]
        );
    }
}
