<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationSelfMonitoringTrainingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Education & Self-Monitoring Training')],
            [
                'title' => 'Patient Education & Self-Monitoring Training',
                'slug' => Str::slug('Patient Education & Self-Monitoring Training'),
                'introduction' => 'Patient education and self-monitoring training are essential healthcare procedures focused on helping individuals understand their medical conditions, treatment plans, medications, lifestyle modifications, and self-care techniques. These programs empower patients to actively participate in managing their health, improve treatment adherence, recognize early warning signs of complications, and maintain long-term disease control and overall well-being.',
                'what_is' => 'Patient education and self-monitoring training involve structured counseling sessions, practical demonstrations, disease awareness programs, and individualized healthcare guidance provided by doctors, nurses, diabetes educators, nutritionists, physiotherapists, and healthcare specialists. Training may include medication management, blood sugar monitoring, blood pressure monitoring, insulin administration, dietary guidance, exercise planning, symptom tracking, and emergency response education. These programs are commonly used in chronic disease management for diabetes, hypertension, endocrine disorders, respiratory diseases, cardiovascular conditions, and postoperative recovery care.',
                'symptoms' => [
            ['value' => 'Difficulty understanding medical conditions or treatment plans'],
            ['value' => 'Poor medication adherence or inconsistent disease management'],
            ['value' => 'Frequent disease complications or emergency hospital visits'],
            ['value' => 'Uncontrolled blood sugar, blood pressure, or chronic symptoms'],
            ['value' => 'Lack of confidence in performing self-care or monitoring procedures'],
        ],
                'causes' => [
            ['value' => 'Diabetes, hypertension, or chronic endocrine disorders requiring long-term management'],
            ['value' => 'Poor understanding of medications or treatment plans'],
            ['value' => 'Frequent hospital visits due to uncontrolled chronic conditions'],
            ['value' => 'Need for home-based monitoring and self-care support'],
            ['value' => 'Requirement for lifestyle modification and preventive healthcare guidance'],
        ],
                'condition_risks' => [
            ['value' => 'Poor disease control due to inadequate self-management'],
            ['value' => 'Medication errors or incorrect monitoring techniques'],
            ['value' => 'Delayed recognition of medical emergencies or complications'],
            ['value' => 'Increased hospital admissions due to poor treatment adherence'],
            ['value' => 'Emotional stress or anxiety related to chronic disease management'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient education and self-monitoring training focus on improving disease awareness, strengthening self-care abilities, enhancing treatment adherence, and preventing long-term complications. Training may include glucose monitoring education, blood pressure tracking, medication management counseling, insulin administration techniques, nutritional guidance, exercise counseling, stress management, symptom recognition training, and emergency care instructions. Patients may also benefit from digital health monitoring tools, rehabilitation programs, support groups, lifestyle modification counseling, and regular specialist follow-up to optimize long-term health outcomes and overall quality of life.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular assessment of patient understanding and self-monitoring skills'],
            ['value' => 'Reinforcement of medication adherence and disease management strategies'],
            ['value' => 'Monitoring for complications or improper self-care practices'],
            ['value' => 'Ongoing nutritional and lifestyle counseling support'],
            ['value' => 'Continuous healthcare follow-up and patient education updates'],
        ],
                'surgery_risks' => [
            ['value' => 'Poor disease control due to inadequate self-management'],
            ['value' => 'Medication errors or incorrect monitoring techniques'],
            ['value' => 'Delayed recognition of medical emergencies or complications'],
            ['value' => 'Increased hospital admissions due to poor treatment adherence'],
            ['value' => 'Emotional stress or anxiety related to chronic disease management'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient education and self-monitoring training focus on improving disease awareness, strengthening self-care abilities, enhancing treatment adherence, and preventing long-term complications. Training may include glucose monitoring education, blood pressure tracking, medication management counseling, insulin administration techniques, nutritional guidance, exercise counseling, stress management, symptom recognition training, and emergency care instructions. Patients may also benefit from digital health monitoring tools, rehabilitation programs, support groups, lifestyle modification counseling, and regular specialist follow-up to optimize long-term health outcomes and overall quality of life.'],
        ],
                'long_term_outlook' => 'The long-term outlook following patient education and self-monitoring training is highly positive when patients actively participate in their healthcare management. Proper self-monitoring, medication adherence, healthy lifestyle habits, regular medical follow-up, stress management, and continuous health education significantly help improve disease control, reduce complications, prevent emergency situations, enhance treatment effectiveness, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Patient Education & Self-Monitoring Training',
                'seo_description' => 'Patient education and self-monitoring training are essential healthcare procedures focused on helping individuals understand their medical conditions, treatment plans, medications, lifestyle modifications, and self-care techniques. These programs empower patients to actively participate in managing their health, improve treatment adherence, recognize early warning signs of complications, and maintain long-term disease control and overall well-being.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
