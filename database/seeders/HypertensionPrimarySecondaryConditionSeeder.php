<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HypertensionPrimarySecondaryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hypertension (Primary / Secondary)')],
            [
                'name' => 'Hypertension (Primary / Secondary)',
                'slug' => Str::slug('Hypertension (Primary / Secondary)'),
                'h1' => 'Hypertension (Primary / Secondary)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hypertension is a chronic medical condition characterized by persistently elevated blood pressure levels, which can increase the risk of serious cardiovascular, kidney, brain, and metabolic complications if left untreated. Primary hypertension, also known as essential hypertension, develops gradually without a specific identifiable cause and is commonly associated with lifestyle and genetic factors. Secondary hypertension occurs due to underlying medical conditions such as kidney disease, endocrine disorders, or certain medications. Early diagnosis and long-term blood pressure management are essential to reduce complications and maintain overall health.',
                'about_more' => '',
                'overview' => 'Hypertension is a chronic medical condition characterized by persistently elevated blood pressure levels, which can increase the risk of serious cardiovascular, kidney, brain, and metabolic complications if left untreated. Primary hypertension, also known as essential hypertension, develops gradually without a specific identifiable cause and is commonly associated with lifestyle and genetic factors. Secondary hypertension occurs due to underlying medical conditions such as kidney disease, endocrine disorders, or certain medications. Early diagnosis and long-term blood pressure management are essential to reduce complications and maintain overall health.',
                'symptoms' => [
            ['value' => 'Persistent high blood pressure readings'],
            ['value' => 'Headaches, dizziness, or blurred vision'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Chest discomfort or palpitations in severe cases'],
            ['value' => 'Often asymptomatic and detected during routine health screening'],
        ],
                'causes' => [
            ['value' => 'Genetic predisposition or family history of hypertension'],
            ['value' => 'High salt intake, obesity, or unhealthy lifestyle habits'],
            ['value' => 'Sedentary lifestyle and chronic stress'],
            ['value' => 'Kidney disease, endocrine disorders, or hormonal imbalance'],
            ['value' => 'Smoking, alcohol consumption, or certain medications affecting blood pressure regulation'],
        ],
                'risks' => [
            ['value' => 'Heart disease, heart attack, or heart failure'],
            ['value' => 'Stroke or brain-related vascular complications'],
            ['value' => 'Kidney damage or chronic kidney disease'],
            ['value' => 'Vision problems or hypertensive retinopathy'],
            ['value' => 'Increased risk of metabolic syndrome and vascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for hypertension focuses on controlling blood pressure, preventing organ damage, reducing cardiovascular risk, and improving long-term health outcomes. Management may include lifestyle modification, low-sodium diet planning, regular physical activity, weight management, stress reduction, smoking cessation, and antihypertensive medications. Patients with secondary hypertension may require treatment of the underlying medical condition such as kidney disease or endocrine disorders. Regular blood pressure monitoring, nutritional counseling, cardiovascular evaluation, and long-term medical follow-up are important components of ongoing hypertension management.'],
        ],
                'recovery' => 'The long-term outlook for hypertension is generally positive with early diagnosis and proper treatment adherence. Healthy nutrition, regular exercise, weight management, medication compliance, stress management, smoking cessation, routine blood pressure monitoring, and continuous medical follow-up significantly help reduce cardiovascular complications, preserve organ function, maintain blood pressure stability, and improve overall quality of life. _____________________ 2. Diabetes Mellitus Type 1 & 2 Diabetes Mellitus Type 1 & 2',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Hypertension (Primary / Secondary)',
                'meta_description' => 'Hypertension is a chronic medical condition characterized by persistently elevated blood pressure levels, which can increase the risk of serious cardiovascular,',
                'meta_keywords' => '',
            ]
        );
    }
}
