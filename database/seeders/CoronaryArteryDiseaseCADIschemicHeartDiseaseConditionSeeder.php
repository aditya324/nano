<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoronaryArteryDiseaseCADIschemicHeartDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Coronary Artery Disease (CAD) / Ischemic Heart Disease')],
            [
                'name' => 'Coronary Artery Disease (CAD) / Ischemic Heart Disease',
                'slug' => Str::slug('Coronary Artery Disease (CAD) / Ischemic Heart Disease'),
                'h1' => 'Coronary Artery Disease (CAD) / Ischemic Heart Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, occurs when the coronary arteries supplying blood to the heart become narrowed or blocked due to plaque buildup (atherosclerosis). Reduced blood flow to the heart muscle can cause chest pain, shortness of breath, heart attacks, and long-term heart damage.',
                'about_more' => '',
                'overview' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, occurs when the coronary arteries supplying blood to the heart become narrowed or blocked due to plaque buildup (atherosclerosis). Reduced blood flow to the heart muscle can cause chest pain, shortness of breath, heart attacks, and long-term heart damage.',
                'symptoms' => [
            ['value' => 'Chest pain or pressure (angina)'],
            ['value' => 'Shortness of breath during activity'],
            ['value' => 'Fatigue and reduced exercise tolerance'],
            ['value' => 'Pain radiating to arm, jaw, neck, or back'],
            ['value' => 'Sweating, nausea, or dizziness during cardiac events'],
        ],
                'causes' => [
            ['value' => 'High blood pressure and high cholesterol'],
            ['value' => 'Smoking and tobacco use'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Family history of heart disease'],
        ],
                'risks' => [
            ['value' => 'Heart attack (myocardial infarction)'],
            ['value' => 'Heart failure due to weakened heart muscle'],
            ['value' => 'Dangerous cardiac arrhythmias'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Reduced quality of life and physical capacity'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle modification and cardiac rehabilitation'],
            ['value' => 'Blood pressure and cholesterol control'],
            ['value' => 'Antiplatelet and heart-protective medications'],
            ['value' => 'Angioplasty with stent placement'],
            ['value' => 'Coronary artery bypass graft (CABG) surgery'],
        ],
                'recovery' => 'With early diagnosis, medications, lifestyle changes, and timely intervention, many patients can lead active lives. Long-term follow-up is important to prevent future cardiac events.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Coronary Artery Disease (CAD) / Ischemic Heart Disease',
                'meta_description' => 'Coronary Artery Disease (CAD), also known as Ischemic Heart Disease, occurs when the coronary arteries supplying blood to the heart become narrowed or blocked d',
                'meta_keywords' => '',
            ]
        );
    }
}
