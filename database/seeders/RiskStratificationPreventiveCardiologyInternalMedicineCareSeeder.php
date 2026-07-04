<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RiskStratificationPreventiveCardiologyInternalMedicineCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Risk Stratification & Preventive Cardiology / Internal Medicine Care')],
            [
                'title' => 'Risk Stratification & Preventive Cardiology / Internal Medicine Care',
                'slug' => Str::slug('Risk Stratification & Preventive Cardiology / Internal Medicine Care'),
                'introduction' => 'Risk stratification and preventive cardiology/internal medicine care are specialized healthcare procedures focused on identifying patients at risk of developing cardiovascular, metabolic, and chronic medical conditions before serious complications occur. These programs aim to assess individual risk factors, detect early disease signs, implement preventive strategies, and promote long-term health through comprehensive medical evaluation and lifestyle management.',
                'what_is' => 'Risk stratification involves detailed assessment of medical history, family history, lifestyle habits, laboratory investigations, imaging studies, and cardiovascular risk factors such as hypertension, diabetes, obesity, smoking, cholesterol imbalance, and metabolic syndrome. Preventive cardiology and internal medicine care focus on reducing disease risk through early intervention, medication management, nutritional counseling, exercise guidance, stress management, and continuous monitoring. Common evaluations may include ECG, echocardiography, lipid profile testing, blood sugar monitoring, blood pressure assessment, body composition analysis, and preventive health screening. These services are supervised by cardiologists, internal medicine physicians, endocrinologists, dietitians, rehabilitation specialists, and preventive healthcare teams.',
                'symptoms' => [
            ['value' => 'High blood pressure, elevated cholesterol, or blood sugar imbalance'],
            ['value' => 'Fatigue, chest discomfort, or reduced physical endurance'],
            ['value' => 'Obesity, smoking history, or unhealthy lifestyle habits'],
            ['value' => 'Family history of heart disease, stroke, or chronic medical conditions'],
            ['value' => 'Early symptoms of metabolic or cardiovascular disorders requiring preventive evaluation'],
        ],
                'causes' => [
            ['value' => 'Unhealthy diet and sedentary lifestyle'],
            ['value' => 'Smoking, alcohol use, or chronic stress'],
            ['value' => 'Obesity, diabetes, hypertension, or high cholesterol'],
            ['value' => 'Family history of cardiovascular or metabolic diseases'],
            ['value' => 'Poor preventive healthcare and lack of regular medical screening'],
        ],
                'condition_risks' => [
            ['value' => 'Heart disease, stroke, or cardiovascular emergencies'],
            ['value' => 'Diabetes, metabolic syndrome, or obesity-related complications'],
            ['value' => 'Kidney disease, liver dysfunction, or chronic organ damage'],
            ['value' => 'Delayed diagnosis of chronic diseases without regular screening'],
            ['value' => 'Increased hospitalization and reduced quality of life if preventive care is neglected'],
            ['value' => 'Treatment Options'],
            ['value' => 'Risk stratification and preventive cardiology/internal medicine care focus on early disease detection, reducing cardiovascular and metabolic risk, improving lifestyle habits, and preventing long-term complications. Management may include blood pressure and cholesterol control, diabetes management, smoking cessation, healthy diet planning, supervised exercise programs, stress reduction, weight management, preventive medications, and routine health monitoring. Patients may also benefit from cardiac rehabilitation, vaccination, nutritional counseling, telehealth monitoring, chronic disease education, and multidisciplinary specialist follow-up to optimize long-term health outcomes and overall wellness.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular cardiovascular and metabolic health evaluations'],
            ['value' => 'Monitoring of blood pressure, blood sugar, cholesterol, and body weight'],
            ['value' => 'Nutritional counseling and preventive lifestyle management support'],
            ['value' => 'Assessment of treatment response and chronic disease risk factors'],
            ['value' => 'Long-term physician and specialist follow-up for preventive healthcare management'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart disease, stroke, or cardiovascular emergencies'],
            ['value' => 'Diabetes, metabolic syndrome, or obesity-related complications'],
            ['value' => 'Kidney disease, liver dysfunction, or chronic organ damage'],
            ['value' => 'Delayed diagnosis of chronic diseases without regular screening'],
            ['value' => 'Increased hospitalization and reduced quality of life if preventive care is neglected'],
            ['value' => 'Treatment Options'],
            ['value' => 'Risk stratification and preventive cardiology/internal medicine care focus on early disease detection, reducing cardiovascular and metabolic risk, improving lifestyle habits, and preventing long-term complications. Management may include blood pressure and cholesterol control, diabetes management, smoking cessation, healthy diet planning, supervised exercise programs, stress reduction, weight management, preventive medications, and routine health monitoring. Patients may also benefit from cardiac rehabilitation, vaccination, nutritional counseling, telehealth monitoring, chronic disease education, and multidisciplinary specialist follow-up to optimize long-term health outcomes and overall wellness.'],
        ],
                'long_term_outlook' => 'The long-term outlook following risk stratification and preventive cardiology/internal medicine care is highly positive with early intervention and consistent preventive healthcare practices. Healthy nutrition, regular exercise, medication adherence, smoking cessation, stress management, routine health screening, preventive monitoring, and continuous medical follow-up significantly help reduce cardiovascular and metabolic complications, preserve organ function, maintain long-term health stability, improve physical well-being, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Risk Stratification & Preventive Cardiology / Internal Medicine Care',
                'seo_description' => 'Risk stratification and preventive cardiology/internal medicine care are specialized healthcare procedures focused on identifying patients at risk of developing cardiovascular, metabolic, and chronic medical conditions before serious complications occur. These programs aim to assess individual risk factors, detect early disease signs, implement preventive strategies, and promote long-term health through comprehensive medical evaluation and lifestyle management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
