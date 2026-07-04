<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MalignanciesHematologicSolidTumorsInitialDiagnosisSupportConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)')],
            [
                'name' => 'Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'slug' => Str::slug('Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)'),
                'h1' => 'Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Malignancies are abnormal and uncontrolled growths of cells that can invade surrounding tissues and spread to other parts of the body. These cancers may arise in blood-forming tissues, known as hematologic malignancies, or in organs and tissues as solid tumors. Conditions such as leukemia, lymphoma, multiple myeloma, breast cancer, lung cancer, colorectal cancer, and other solid tumors can significantly affect overall health and organ function. Early diagnosis, accurate staging, supportive care, and timely treatment planning are essential to improve survival outcomes and quality of life.',
                'about_more' => '',
                'overview' => 'Malignancies are abnormal and uncontrolled growths of cells that can invade surrounding tissues and spread to other parts of the body. These cancers may arise in blood-forming tissues, known as hematologic malignancies, or in organs and tissues as solid tumors. Conditions such as leukemia, lymphoma, multiple myeloma, breast cancer, lung cancer, colorectal cancer, and other solid tumors can significantly affect overall health and organ function. Early diagnosis, accurate staging, supportive care, and timely treatment planning are essential to improve survival outcomes and quality of life.',
                'symptoms' => [
            ['value' => 'Unexplained weight loss or persistent fatigue'],
            ['value' => 'Fever, night sweats, or recurrent infections'],
            ['value' => 'Swelling of lymph nodes or abnormal lumps'],
            ['value' => 'Persistent pain, bleeding, or organ-related symptoms'],
            ['value' => 'Loss of appetite, weakness, or unexplained changes in body function'],
        ],
                'causes' => [
            ['value' => 'Genetic mutations or family history of cancer'],
            ['value' => 'Smoking, alcohol use, or exposure to harmful chemicals and radiation'],
            ['value' => 'Chronic infections, immune suppression, or viral illnesses'],
            ['value' => 'Hormonal imbalance, obesity, or unhealthy lifestyle factors'],
            ['value' => 'Environmental exposure and age-related cellular changes increasing cancer risk'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to distant organs (metastasis)'],
            ['value' => 'Severe anemia, infections, or bleeding disorders in hematologic cancers'],
            ['value' => 'Organ dysfunction caused by tumor growth or cancer-related complications'],
            ['value' => 'Weight loss, malnutrition, and reduced immunity'],
            ['value' => 'Emotional stress, chronic pain, and reduced quality of life if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for malignancies focuses on early diagnosis, accurate staging, symptom control, supportive care, and planning individualized cancer treatment strategies. Management may include chemotherapy, radiotherapy, targeted therapy, immunotherapy, hormonal therapy, surgical intervention, blood transfusions, and supportive nutritional care. Patients may also benefit from pain management, rehabilitation therapy, psychological counseling, infection prevention, palliative care, oncology follow-up, and multidisciplinary cancer care to optimize treatment outcomes and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for malignancies depends on the type of cancer, stage at diagnosis, treatment response, and overall patient health. Early detection, timely treatment, medication adherence, healthy nutrition, emotional support, rehabilitation, regular medical monitoring, and continuous oncology follow-up significantly help improve survival outcomes, reduce complications, preserve organ function, maintain physical and emotional well-being, and enhance overall quality of life. ______________ 23. Acute Febrile Illness (Fever of Unknown Origin) Acute Febrile Illness (Fever of Unknown Origin)',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'meta_description' => 'Malignancies are abnormal and uncontrolled growths of cells that can invade surrounding tissues and spread to other parts of the body. These cancers may arise i',
                'meta_keywords' => '',
            ]
        );
    }
}
