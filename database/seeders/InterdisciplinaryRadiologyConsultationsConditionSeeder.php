<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InterdisciplinaryRadiologyConsultationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Interdisciplinary Radiology Consultations')],
            [
                'name' => 'Interdisciplinary Radiology Consultations',
                'slug' => Str::slug('Interdisciplinary Radiology Consultations'),
                'h1' => 'Interdisciplinary Radiology Consultations',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Interdisciplinary radiology consultations involve collaborative discussions between radiologists and medical specialists from different departments to support accurate diagnosis, treatment planning, and comprehensive patient care. These consultations help integrate imaging findings with clinical evaluation for improved medical decision-making and patient outcomes.',
                'about_more' => '',
                'overview' => 'Radiology consultations are commonly conducted with specialists in oncology, cardiology, neurology, orthopedics, surgery, pulmonology, gastroenterology, pediatrics, and emergency medicine. Imaging studies such as X-rays, ultrasound, CT scans, MRI, PET-CT, and angiography are reviewed collaboratively to guide diagnosis, surgical planning, interventional procedures, rehabilitation, and long-term disease management. This multidisciplinary approach improves communication, treatment coordination, and patient-centered care.',
                'symptoms' => [
            ['value' => 'Persistent or unexplained medical symptoms'],
            ['value' => 'Complex conditions requiring advanced imaging evaluation'],
            ['value' => 'Chronic pain, swelling, or neurological symptoms'],
            ['value' => 'Suspicion of tumors, vascular disease, or organ abnormalities'],
            ['value' => 'Conditions requiring coordinated specialist management'],
        ],
                'causes' => [
            ['value' => 'Multidisciplinary review of imaging findings and diagnosis'],
            ['value' => 'Cancer staging and oncology treatment planning'],
            ['value' => 'Surgical and interventional procedure planning'],
            ['value' => 'Evaluation of neurological, orthopedic, and cardiovascular disorders'],
            ['value' => 'Long-term disease monitoring and follow-up management'],
        ],
                'risks' => [
            ['value' => 'Delayed diagnosis if imaging interpretation is incomplete'],
            ['value' => 'Need for additional imaging or specialist evaluation'],
            ['value' => 'Anxiety related to complex medical findings'],
            ['value' => 'Rare communication delays between specialties'],
            ['value' => 'Potential need for repeat imaging in certain cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Interdisciplinary radiology consultations support accurate diagnosis, treatment coordination, minimally invasive procedures, surgical planning, and long-term monitoring across multiple medical specialties. Collaborative imaging review helps optimize treatment decisions, improve patient safety, and enhance overall healthcare outcomes.'],
            ['value' => 'Attending scheduled follow-up consultations and imaging appointments'],
            ['value' => 'Discussing imaging results and treatment recommendations with specialists'],
            ['value' => 'Following prescribed treatment and rehabilitation plans carefully'],
            ['value' => 'Monitoring symptoms and reporting changes promptly'],
            ['value' => 'Maintaining regular multidisciplinary medical follow-up when required'],
        ],
                'recovery' => 'The long-term outlook with interdisciplinary radiology consultations is highly positive because collaborative medical evaluation improves diagnostic accuracy, treatment planning, and continuity of care. Early multidisciplinary intervention, ongoing imaging follow-up, and coordinated specialist management can significantly improve patient outcomes and long-term health management. __________________________ 22. Tele-Radiology / Remote Reporting Services Tele-Radiology / Remote Reporting Services Procedures',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Interdisciplinary Radiology Consultations',
                'meta_description' => 'Interdisciplinary radiology consultations involve collaborative discussions between radiologists and medical specialists from different departments to support a',
                'meta_keywords' => '',
            ]
        );
    }
}
