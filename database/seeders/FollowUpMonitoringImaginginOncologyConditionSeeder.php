<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FollowUpMonitoringImaginginOncologyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Follow-Up & Monitoring Imaging in Oncology')],
            [
                'name' => 'Follow-Up & Monitoring Imaging in Oncology',
                'slug' => Str::slug('Follow-Up & Monitoring Imaging in Oncology'),
                'h1' => 'Follow-Up & Monitoring Imaging in Oncology',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Follow-up and monitoring imaging in oncology involves the regular use of advanced imaging techniques to evaluate cancer progression, treatment response, recurrence, and long-term recovery. These imaging procedures help healthcare professionals assess the effectiveness of cancer treatment and detect complications or recurrence at an early stage.',
                'about_more' => '',
                'overview' => 'Oncology imaging follow-up commonly includes CT scans, MRI, PET-CT, ultrasound, X-rays, and nuclear medicine studies depending on the type and location of cancer. These imaging procedures are used to monitor tumor size, detect spread of disease, evaluate response to chemotherapy or radiation therapy, and assess post-surgical recovery. Regular imaging surveillance plays a critical role in long-term cancer management and personalized treatment planning.',
                'symptoms' => [
            ['value' => 'Persistent pain or unexplained swelling'],
            ['value' => 'Fatigue, weakness, or unexplained weight loss'],
            ['value' => 'Recurrence of previous cancer-related symptoms'],
            ['value' => 'Breathing difficulty, neurological symptoms, or abdominal discomfort'],
            ['value' => 'Abnormal laboratory findings or treatment-related complications'],
        ],
                'causes' => [
            ['value' => 'Monitoring tumor response to treatment'],
            ['value' => 'Detection of cancer recurrence or metastasis'],
            ['value' => 'Evaluation after surgery, chemotherapy, or radiation therapy'],
            ['value' => 'Assessment of treatment-related complications'],
            ['value' => 'Long-term surveillance and oncology follow-up care'],
        ],
                'risks' => [
            ['value' => 'Exposure to radiation during repeated imaging studies'],
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Temporary discomfort during prolonged imaging procedures'],
            ['value' => 'Anxiety related to follow-up imaging results'],
            ['value' => 'Rare complications associated with contrast agents or sedation when required'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow-up oncology imaging supports cancer staging, treatment planning, therapy monitoring, and long-term disease surveillance. These procedures help oncologists adjust treatment strategies, identify recurrence early, evaluate organ involvement, and improve overall cancer care and patient outcomes.'],
            ['value' => 'Drinking adequate fluids after contrast-enhanced imaging studies'],
            ['value' => 'Monitoring for allergic reactions or unusual symptoms'],
            ['value' => 'Following preparation and medication instructions carefully'],
            ['value' => 'Attending scheduled oncology follow-up and imaging appointments regularly'],
            ['value' => 'Discussing imaging findings and treatment plans with oncology specialists'],
        ],
                'recovery' => 'The long-term outlook with follow-up and monitoring imaging in oncology is generally very positive because regular imaging surveillance supports early detection of recurrence, timely treatment modification, and improved long-term cancer management. Consistent oncology follow-up, healthy lifestyle practices, medication adherence, and multidisciplinary cancer care are important for maintaining long-term health and quality of life. _________________________ 19. Screening Programs (Breast, Lung, Cervical Cancer) Screening Programs (Breast, Lung & Cervical Cancer) Procedures',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Follow-Up & Monitoring Imaging in Oncology',
                'meta_description' => 'Follow-up and monitoring imaging in oncology involves the regular use of advanced imaging techniques to evaluate cancer progression, treatment response, recurre',
                'meta_keywords' => '',
            ]
        );
    }
}
