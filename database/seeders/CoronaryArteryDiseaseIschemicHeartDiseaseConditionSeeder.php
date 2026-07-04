<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoronaryArteryDiseaseIschemicHeartDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Coronary Artery Disease / Ischemic Heart Disease')],
            [
                'name' => 'Coronary Artery Disease / Ischemic Heart Disease',
                'slug' => Str::slug('Coronary Artery Disease / Ischemic Heart Disease'),
                'h1' => 'Coronary Artery Disease / Ischemic Heart Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, is a cardiovascular condition caused by narrowing or blockage of the coronary arteries that supply blood and oxygen to the heart muscle. This usually occurs due to plaque buildup from cholesterol, fat, and inflammatory deposits within the blood vessels. Reduced blood flow to the heart can lead to chest pain, heart attacks, heart failure, and other serious cardiovascular complications. Early diagnosis and long-term cardiac management are essential to improve heart function and prevent life-threatening events.',
                'about_more' => '',
                'overview' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, is a cardiovascular condition caused by narrowing or blockage of the coronary arteries that supply blood and oxygen to the heart muscle. This usually occurs due to plaque buildup from cholesterol, fat, and inflammatory deposits within the blood vessels. Reduced blood flow to the heart can lead to chest pain, heart attacks, heart failure, and other serious cardiovascular complications. Early diagnosis and long-term cardiac management are essential to improve heart function and prevent life-threatening events.',
                'symptoms' => [
            ['value' => 'Chest pain or discomfort (angina)'],
            ['value' => 'Shortness of breath during physical activity or at rest'],
            ['value' => 'Fatigue or reduced exercise tolerance'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Heart attack symptoms such as severe chest pain, sweating, nausea, or dizziness'],
        ],
                'causes' => [
            ['value' => 'High cholesterol and plaque buildup in coronary arteries'],
            ['value' => 'High blood pressure and uncontrolled diabetes'],
            ['value' => 'Smoking, obesity, or sedentary lifestyle'],
            ['value' => 'Family history of heart disease or genetic predisposition'],
            ['value' => 'Chronic stress, unhealthy diet, or metabolic syndrome'],
        ],
                'risks' => [
            ['value' => 'Heart attack (myocardial infarction)'],
            ['value' => 'Heart failure or reduced heart pumping function'],
            ['value' => 'Arrhythmias or sudden cardiac arrest'],
            ['value' => 'Stroke or peripheral vascular disease'],
            ['value' => 'Long-term damage to heart muscle and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for coronary artery disease and ischemic heart disease focuses on improving blood flow to the heart, reducing cardiovascular risk, relieving symptoms, and preventing complications. Management may include lifestyle modification, heart-healthy diet planning, regular exercise, smoking cessation, stress management, cholesterol-lowering medications, blood pressure control, anti-platelet therapy, and diabetes management. Patients with significant artery blockage may require procedures such as angioplasty, stent placement, or coronary artery bypass graft surgery (CABG). Regular cardiology follow-up, cardiac rehabilitation, and preventive cardiovascular care are essential for long-term heart health.'],
        ],
                'recovery' => 'The long-term outlook for coronary artery disease and ischemic heart disease is generally positive with early diagnosis, proper treatment, and healthy lifestyle management. Medication adherence, regular exercise, balanced nutrition, blood pressure and cholesterol control, smoking cessation, stress reduction, cardiac rehabilitation, and continuous medical follow-up significantly help reduce cardiovascular complications, improve heart function, preserve blood circulation, and enhance overall quality of life. _________________ 5. Heart Failure (Acute / Chronic) Heart Failure (Acute / Chronic)',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Coronary Artery Disease / Ischemic Heart Disease',
                'meta_description' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, is a cardiovascular condition caused by narrowing or blockage of the coronary arteries that',
                'meta_keywords' => '',
            ]
        );
    }
}
