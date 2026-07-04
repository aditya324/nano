<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationToolsforLifestyleManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Education Tools for Lifestyle Management')],
            [
                'title' => 'Patient Education Tools for Lifestyle Management',
                'slug' => Str::slug('Patient Education Tools for Lifestyle Management'),
                'introduction' => 'Patient education tools for lifestyle management are specialized healthcare resources and digital support systems designed to help individuals understand, manage, and improve their overall health through healthy lifestyle practices. These tools support disease prevention, chronic condition management, nutritional awareness, physical activity guidance, stress management, and long-term behavioral changes. They play an important role in improving patient engagement, treatment adherence, and overall quality of life.',
                'what_is' => 'Patient education tools may include mobile health applications, digital wellness platforms, educational videos, diet tracking systems, exercise monitoring devices, wearable fitness trackers, printed educational materials, interactive health programs, telehealth platforms, and self-monitoring guides. These tools are commonly used in diabetes care, obesity management, cardiovascular health programs, endocrine care, rehabilitation services, and preventive healthcare settings. They help patients monitor daily health habits, understand treatment plans, track progress, and communicate effectively with healthcare providers for long-term wellness support.',
                'symptoms' => [
            ['value' => 'Difficulty maintaining healthy lifestyle habits'],
            ['value' => 'Poor understanding of chronic disease management'],
            ['value' => 'Weight gain or unhealthy dietary patterns'],
            ['value' => 'Sedentary lifestyle or reduced physical activity'],
            ['value' => 'Poor treatment adherence or lack of health awareness'],
        ],
                'causes' => [
            ['value' => 'Diabetes and chronic disease education'],
            ['value' => 'Weight management and obesity care'],
            ['value' => 'Nutritional guidance and diet planning'],
            ['value' => 'Physical activity and fitness tracking'],
            ['value' => 'Stress management and mental wellness support'],
            ['value' => 'Medication reminders and treatment adherence'],
            ['value' => 'Preventive healthcare and lifestyle modification programs'],
        ],
                'condition_risks' => [
            ['value' => 'Poor disease control due to inadequate self-management'],
            ['value' => 'Incorrect interpretation of health information without professional guidance'],
            ['value' => 'Reduced motivation or inconsistency in lifestyle modification efforts'],
            ['value' => 'Dependence on inaccurate or non-validated digital health information'],
            ['value' => 'Increased risk of chronic disease complications without proper monitoring and follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient education tools for lifestyle management support healthy behavioral changes, improve disease awareness, and enhance long-term preventive healthcare. Management may include nutritional education, physical activity tracking, stress management programs, digital health monitoring, medication reminders, weight management support, smoking cessation counseling, sleep tracking, and personalized wellness coaching. Patients may also benefit from diabetes education, telehealth consultations, rehabilitation programs, preventive health screening, endocrinology follow-up, and multidisciplinary healthcare support to achieve sustainable lifestyle improvement and better overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular assessment of patient understanding and lifestyle progress'],
            ['value' => 'Monitoring adherence to diet, exercise, and treatment plans'],
            ['value' => 'Ongoing digital health support and educational reinforcement'],
            ['value' => 'Nutritional counseling and wellness coaching sessions'],
            ['value' => 'Long-term healthcare follow-up and preventive health monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Poor disease control due to inadequate self-management'],
            ['value' => 'Incorrect interpretation of health information without professional guidance'],
            ['value' => 'Reduced motivation or inconsistency in lifestyle modification efforts'],
            ['value' => 'Dependence on inaccurate or non-validated digital health information'],
            ['value' => 'Increased risk of chronic disease complications without proper monitoring and follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Patient education tools for lifestyle management support healthy behavioral changes, improve disease awareness, and enhance long-term preventive healthcare. Management may include nutritional education, physical activity tracking, stress management programs, digital health monitoring, medication reminders, weight management support, smoking cessation counseling, sleep tracking, and personalized wellness coaching. Patients may also benefit from diabetes education, telehealth consultations, rehabilitation programs, preventive health screening, endocrinology follow-up, and multidisciplinary healthcare support to achieve sustainable lifestyle improvement and better overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with patient education tools for lifestyle management is generally highly positive when patients actively engage in self-care and healthy lifestyle practices. Continuous health education, regular monitoring, balanced nutrition, physical activity, stress reduction, digital wellness support, medication adherence, and ongoing medical follow-up significantly help improve disease control, reduce complications, support long-term wellness, enhance treatment effectiveness, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Patient Education Tools for Lifestyle Management',
                'seo_description' => 'Patient education tools for lifestyle management are specialized healthcare resources and digital support systems designed to help individuals understand, manage, and improve their overall health through healthy lifestyle practices. These tools support disease prevention, chronic condition management, nutritional awareness, physical activity guidance, stress management, and long-term behavioral changes. They play an important role in improving patient engagement, treatment adherence, and overall quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
