<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharmacotherapyforHypertensionDiabetesDyslipidemiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pharmacotherapy for Hypertension, Diabetes, Dyslipidemia')],
            [
                'title' => 'Pharmacotherapy for Hypertension, Diabetes, Dyslipidemia',
                'slug' => Str::slug('Pharmacotherapy for Hypertension, Diabetes, Dyslipidemia'),
                'introduction' => 'Pharmacotherapy for hypertension, diabetes, and dyslipidemia involves the use of specialized medications to control blood pressure, regulate blood sugar levels, manage cholesterol abnormalities, and reduce the risk of serious cardiovascular and metabolic complications. These chronic conditions are among the leading causes of heart disease, stroke, kidney disease, and other long-term health problems. Proper medication management combined with healthy lifestyle modification is essential to maintain metabolic stability and improve overall health outcomes.',
                'what_is' => 'Pharmacotherapy includes a wide range of medications tailored to the patient’s medical condition, disease severity, and overall cardiovascular risk profile. Hypertension treatment may involve antihypertensive drugs such as ACE inhibitors, ARBs, beta-blockers, calcium channel blockers, or diuretics. Diabetes management may include insulin therapy, oral hypoglycemic agents, and advanced glucose-lowering medications. Dyslipidemia treatment commonly includes statins and other lipid-lowering therapies to improve cholesterol balance and reduce plaque formation in blood vessels. These therapies are commonly supervised by physicians, endocrinologists, cardiologists, and internal medicine specialists in hospitals, clinics, and chronic disease management programs.',
                'symptoms' => [
            ['value' => 'Elevated blood pressure, blood sugar, or cholesterol levels'],
            ['value' => 'Fatigue, weakness, or reduced physical endurance'],
            ['value' => 'Frequent urination, excessive thirst, or unexplained weight changes in diabetes'],
            ['value' => 'Headaches, dizziness, or palpitations in uncontrolled hypertension'],
            ['value' => 'Chest discomfort or metabolic symptoms associated with cardiovascular risk factors'],
        ],
                'causes' => [
            ['value' => 'Unhealthy diet high in salt, sugar, and unhealthy fats'],
            ['value' => 'Obesity or excess body weight'],
            ['value' => 'Physical inactivity and sedentary lifestyle'],
            ['value' => 'Smoking and excessive alcohol consumption'],
            ['value' => 'Family history of hypertension, diabetes, or high cholesterol'],
            ['value' => 'Chronic stress and poor sleep habits'],
            ['value' => 'Hormonal or metabolic disorders'],
            ['value' => 'Aging and reduced metabolic function'],
            ['value' => 'Poorly controlled blood pressure or blood sugar levels'],
            ['value' => 'Lack of regular preventive healthcare and medical monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Medication side effects or drug interactions'],
            ['value' => 'Hypoglycemia or excessive lowering of blood sugar levels'],
            ['value' => 'Kidney, liver, or electrolyte abnormalities due to long-term medication use'],
            ['value' => 'Poor disease control due to inconsistent treatment adherence'],
            ['value' => 'Increased cardiovascular complications if conditions remain uncontrolled'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pharmacotherapy for hypertension, diabetes, and dyslipidemia focuses on improving cardiovascular and metabolic health, reducing disease progression, preventing complications, and supporting long-term wellness. Treatment may include antihypertensive medications, insulin therapy, oral anti-diabetic drugs, statins, lipid-lowering agents, lifestyle modification, nutritional counseling, blood sugar monitoring, blood pressure management, and weight control programs. Patients may also benefit from exercise planning, smoking cessation support, stress management, preventive healthcare screening, specialist follow-up, and long-term metabolic monitoring to optimize treatment outcomes and overall health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of blood pressure, blood sugar, and lipid levels'],
            ['value' => 'Medication adjustment based on clinical response and laboratory findings'],
            ['value' => 'Monitoring for medication side effects or complications'],
            ['value' => 'Nutritional counseling and healthy lifestyle management support'],
            ['value' => 'Long-term physician, cardiology, or endocrinology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Medication side effects or drug interactions'],
            ['value' => 'Hypoglycemia or excessive lowering of blood sugar levels'],
            ['value' => 'Kidney, liver, or electrolyte abnormalities due to long-term medication use'],
            ['value' => 'Poor disease control due to inconsistent treatment adherence'],
            ['value' => 'Increased cardiovascular complications if conditions remain uncontrolled'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pharmacotherapy for hypertension, diabetes, and dyslipidemia focuses on improving cardiovascular and metabolic health, reducing disease progression, preventing complications, and supporting long-term wellness. Treatment may include antihypertensive medications, insulin therapy, oral anti-diabetic drugs, statins, lipid-lowering agents, lifestyle modification, nutritional counseling, blood sugar monitoring, blood pressure management, and weight control programs. Patients may also benefit from exercise planning, smoking cessation support, stress management, preventive healthcare screening, specialist follow-up, and long-term metabolic monitoring to optimize treatment outcomes and overall health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following pharmacotherapy for hypertension, diabetes, and dyslipidemia is generally highly positive with proper treatment adherence and lifestyle management. Medication compliance, healthy nutrition, regular exercise, weight management, smoking cessation, stress reduction, routine medical monitoring, and continuous healthcare follow-up significantly help improve metabolic stability, reduce cardiovascular complications, preserve organ function, enhance physical well-being, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Pharmacotherapy for Hypertension, Diabetes, Dyslipidemia',
                'seo_description' => 'Pharmacotherapy for hypertension, diabetes, and dyslipidemia involves the use of specialized medications to control blood pressure, regulate blood sugar levels, manage cholesterol abnormalities, and reduce the risk of serious cardiovascular and metabolic complications. These chronic conditions are among the leading causes of heart disease, stroke, kidney disease, and other long-term health problems. Proper medication management combined with healthy lifestyle modification is essential to maintain metabolic stability and improve overall health outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
