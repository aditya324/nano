<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnticoagulationAntiplateletTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anticoagulation / Antiplatelet Therapy')],
            [
                'title' => 'Anticoagulation / Antiplatelet Therapy',
                'slug' => Str::slug('Anticoagulation / Antiplatelet Therapy'),
                'introduction' => 'Anticoagulation and antiplatelet therapy are specialized medical treatment procedures used to prevent abnormal blood clot formation, improve blood circulation, and reduce the risk of serious cardiovascular and thromboembolic complications. These therapies are commonly prescribed for conditions such as atrial fibrillation, deep vein thrombosis (DVT), pulmonary embolism (PE), stroke prevention, coronary artery disease, and after certain cardiac procedures or surgeries. Proper monitoring and individualized treatment planning are essential to maintain a balance between preventing clots and minimizing bleeding risk.',
                'what_is' => 'Anticoagulant medications work by interfering with the blood clotting process to prevent harmful clot formation, while antiplatelet medications reduce platelet aggregation and improve blood flow within blood vessels. Common anticoagulants include heparin, warfarin, and direct oral anticoagulants (DOACs), whereas antiplatelet therapy commonly includes aspirin and other platelet-inhibiting medications. These therapies may be used short-term or long-term depending on the patient’s cardiovascular risk, underlying medical condition, and treatment goals. Management is commonly supervised by cardiologists, hematologists, neurologists, vascular specialists, and internal medicine physicians in hospitals, cardiac centers, and outpatient clinics.',
                'symptoms' => [
            ['value' => 'Blood clot-related swelling, pain, or circulation problems'],
            ['value' => 'Irregular heartbeat increasing stroke risk'],
            ['value' => 'Chest pain or cardiovascular disease requiring clot prevention'],
            ['value' => 'Previous history of stroke, DVT, or pulmonary embolism'],
            ['value' => 'Reduced blood flow or clotting abnormalities affecting organ circulation'],
        ],
                'causes' => [
            ['value' => 'Atrial fibrillation or irregular heart rhythm increasing clot risk'],
            ['value' => 'Deep vein thrombosis (DVT) or pulmonary embolism (PE)'],
            ['value' => 'Coronary artery disease or previous heart attack'],
            ['value' => 'Stroke or transient ischemic attack (TIA) history'],
            ['value' => 'Blood clotting disorders or vascular diseases'],
        ],
                'condition_risks' => [
            ['value' => 'Increased risk of bleeding or bruising'],
            ['value' => 'Gastrointestinal bleeding or internal hemorrhage'],
            ['value' => 'Medication interactions affecting clotting balance'],
            ['value' => 'Blood clot recurrence if therapy is interrupted or inadequate'],
            ['value' => 'Need for regular laboratory monitoring with selected anticoagulant medications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anticoagulation and antiplatelet therapy focus on preventing abnormal clot formation, improving circulation, reducing stroke and cardiovascular risk, and maintaining vascular health. Treatment may include oral anticoagulants, injectable blood thinners, antiplatelet medications, clotting profile monitoring, lifestyle modification, hydration management, smoking cessation, blood pressure control, cholesterol management, and treatment of underlying cardiovascular or clotting disorders. Patients may also benefit from dietary counseling, rehabilitation programs, preventive cardiovascular care, specialist monitoring, and long-term follow-up to optimize treatment safety and effectiveness.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of clotting parameters and medication response'],
            ['value' => 'Observation for bleeding, bruising, or treatment-related complications'],
            ['value' => 'Adjustment of medication dosage based on clinical evaluation and laboratory findings'],
            ['value' => 'Nutritional counseling and lifestyle modification support'],
            ['value' => 'Long-term cardiology, hematology, or vascular specialist follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased risk of bleeding or bruising'],
            ['value' => 'Gastrointestinal bleeding or internal hemorrhage'],
            ['value' => 'Medication interactions affecting clotting balance'],
            ['value' => 'Blood clot recurrence if therapy is interrupted or inadequate'],
            ['value' => 'Need for regular laboratory monitoring with selected anticoagulant medications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anticoagulation and antiplatelet therapy focus on preventing abnormal clot formation, improving circulation, reducing stroke and cardiovascular risk, and maintaining vascular health. Treatment may include oral anticoagulants, injectable blood thinners, antiplatelet medications, clotting profile monitoring, lifestyle modification, hydration management, smoking cessation, blood pressure control, cholesterol management, and treatment of underlying cardiovascular or clotting disorders. Patients may also benefit from dietary counseling, rehabilitation programs, preventive cardiovascular care, specialist monitoring, and long-term follow-up to optimize treatment safety and effectiveness.'],
        ],
                'long_term_outlook' => 'The long-term outlook following anticoagulation and antiplatelet therapy is generally highly positive with proper medical supervision and treatment adherence. Medication compliance, regular monitoring, healthy lifestyle habits, hydration, smoking cessation, cardiovascular risk management, preventive healthcare, and continuous medical follow-up significantly help reduce clot-related complications, prevent stroke and cardiovascular events, preserve organ circulation, improve vascular stability, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Anticoagulation / Antiplatelet Therapy',
                'seo_description' => 'Anticoagulation and antiplatelet therapy are specialized medical treatment procedures used to prevent abnormal blood clot formation, improve blood circulation, and reduce the risk of serious cardiovascular and thromboembolic complications. These therapies are commonly prescribed for conditions such as atrial fibrillation, deep vein thrombosis (DVT), pulmonary embolism (PE), stroke prevention, coronary artery disease, and after certain cardiac procedures or surgeries. Proper monitoring and individualized treatment planning are essential to maintain a balance between preventing clots and minimizing bleeding risk.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
