<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacCTCoronaryAngiographyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cardiac CT / Coronary Angiography')],
            [
                'name' => 'Cardiac CT / Coronary Angiography',
                'slug' => Str::slug('Cardiac CT / Coronary Angiography'),
                'h1' => 'Cardiac CT / Coronary Angiography',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardiac CT and coronary angiography are advanced cardiovascular imaging procedures used to evaluate the heart, coronary arteries, and blood flow supplying the heart muscle. These procedures help diagnose coronary artery disease, arterial blockages, structural heart abnormalities, and other cardiovascular conditions affecting heart function and circulation.',
                'about_more' => '',
                'overview' => 'Cardiac CT uses high-resolution computed tomography imaging to create detailed images of the heart and coronary vessels, while coronary angiography uses contrast dye and imaging guidance to visualize blood flow through the coronary arteries. These procedures are commonly performed to detect narrowing of arteries, plaque buildup, congenital heart abnormalities, vascular blockages, and heart-related complications. They play an important role in early diagnosis, treatment planning, and prevention of cardiac emergencies.',
                'symptoms' => [
            ['value' => 'Chest pain or chest tightness'],
            ['value' => 'Shortness of breath or reduced exercise tolerance'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Dizziness, fatigue, or fainting episodes'],
            ['value' => 'Symptoms suggestive of coronary artery disease or heart dysfunction'],
        ],
                'causes' => [
            ['value' => 'Detection of coronary artery blockages or narrowing'],
            ['value' => 'Evaluation of chest pain and suspected heart disease'],
            ['value' => 'Assessment of congenital or structural heart abnormalities'],
            ['value' => 'Preoperative cardiac evaluation and treatment planning'],
            ['value' => 'Monitoring progression of cardiovascular disease and treatment outcomes'],
        ],
                'risks' => [
            ['value' => 'Exposure to ionizing radiation during imaging'],
            ['value' => 'Allergic reactions to contrast dye in some individuals'],
            ['value' => 'Rare kidney-related complications from contrast material'],
            ['value' => 'Temporary discomfort during catheter-based angiography procedures'],
            ['value' => 'Bleeding, bruising, or vascular complications in invasive angiography'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cardiac CT and coronary angiography support accurate diagnosis, cardiovascular risk assessment, treatment planning, and long-term cardiac monitoring. These procedures help guide medical therapy, angioplasty, stent placement, bypass surgery, and preventive cardiovascular care for individuals with heart disease.'],
            ['value' => 'Drinking adequate fluids to help eliminate contrast material'],
            ['value' => 'Monitoring for bleeding, swelling, or allergic reactions after the procedure'],
            ['value' => 'Avoiding strenuous physical activity temporarily after invasive angiography'],
            ['value' => 'Following prescribed medications and lifestyle recommendations carefully'],
            ['value' => 'Attending regular cardiology follow-up and cardiovascular monitoring appointments'],
        ],
                'recovery' => 'The long-term outlook with cardiac CT and coronary angiography is generally very positive when cardiovascular conditions are diagnosed and treated early. Timely imaging evaluation, healthy lifestyle practices, medication adherence, and regular cardiac follow-up can significantly reduce complications and improve long-term heart health and overall quality of life. ____________________________ 14.Guided Minimally Invasive Procedures (Aspiration, Biopsy, Ablation) Guided Minimally Invasive Procedures (Aspiration, Biopsy & Ablation) Procedures',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Cardiac CT / Coronary Angiography',
                'meta_description' => 'Cardiac CT and coronary angiography are advanced cardiovascular imaging procedures used to evaluate the heart, coronary arteries, and blood flow supplying the h',
                'meta_keywords' => '',
            ]
        );
    }
}
