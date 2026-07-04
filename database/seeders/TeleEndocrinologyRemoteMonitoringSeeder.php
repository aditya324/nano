<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleEndocrinologyRemoteMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Endocrinology / Remote Monitoring')],
            [
                'title' => 'Tele-Endocrinology / Remote Monitoring',
                'slug' => Str::slug('Tele-Endocrinology / Remote Monitoring'),
                'introduction' => 'Tele-endocrinology and remote monitoring systems are advanced digital healthcare technologies used to provide endocrine consultations, chronic disease monitoring, treatment guidance, and long-term follow-up care through virtual platforms and connected medical devices. These systems improve access to specialized endocrine care, support continuous patient monitoring, and help maintain hormonal and metabolic stability without requiring frequent hospital visits.',
                'what_is' => 'Tele-endocrinology platforms integrate virtual consultation systems, remote patient monitoring devices, mobile health applications, cloud-based health records, and wearable medical technologies to manage endocrine and metabolic disorders effectively. Remote monitoring equipment may include Continuous Glucose Monitoring (CGM) systems, smart insulin pumps, blood pressure monitors, weight management devices, wearable fitness trackers, and digital hormone monitoring systems. These technologies are commonly used in diabetes care, thyroid disorder management, obesity treatment, osteoporosis monitoring, metabolic syndrome care, and long-term endocrine rehabilitation programs. Tele-endocrinology services are supervised by endocrinologists, diabetes educators, nutritionists, and multidisciplinary healthcare teams through secure digital healthcare networks.',
                'symptoms' => [
            ['value' => 'Uncontrolled diabetes or fluctuating blood sugar levels'],
            ['value' => 'Hormonal imbalance requiring frequent monitoring and follow-up'],
            ['value' => 'Difficulty attending regular in-person endocrine consultations'],
            ['value' => 'Chronic endocrine disorders needing long-term treatment supervision'],
            ['value' => 'Reduced mobility or need for home-based healthcare support'],
        ],
                'causes' => [
            ['value' => 'Diabetes mellitus requiring continuous glucose monitoring'],
            ['value' => 'Thyroid disorders and hormonal imbalance needing regular follow-up'],
            ['value' => 'Obesity, metabolic syndrome, or osteoporosis management'],
            ['value' => 'Limited mobility or difficulty attending hospital visits'],
            ['value' => 'Chronic endocrine conditions requiring long-term specialist supervision'],
        ],
                'condition_risks' => [
            ['value' => 'Technical issues affecting remote monitoring accuracy or communication'],
            ['value' => 'Delayed emergency care if severe symptoms are not recognized promptly'],
            ['value' => 'Data privacy and digital health security concerns'],
            ['value' => 'Incomplete assessment in conditions requiring physical examination'],
            ['value' => 'Reduced treatment adherence without active patient participation and follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-endocrinology and remote monitoring systems support effective endocrine disease management by enabling continuous health tracking, timely treatment adjustment, and improved patient engagement. Management may include virtual endocrine consultations, remote glucose monitoring, digital prescription management, lifestyle counseling, nutritional support, medication adjustment, exercise planning, stress management, and long-term metabolic assessment. Patients may also benefit from smart wearable devices, digital diabetes management tools, online rehabilitation support, preventive health screening, and continuous communication with healthcare providers to optimize treatment outcomes and overall endocrine health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular virtual consultations and endocrine health assessments'],
            ['value' => 'Continuous monitoring of blood sugar, hormone levels, and treatment response'],
            ['value' => 'Remote adjustment of medications and therapy plans when required'],
            ['value' => 'Digital lifestyle counseling and self-monitoring education'],
            ['value' => 'Long-term telehealth follow-up and multidisciplinary endocrine support'],
        ],
                'surgery_risks' => [
            ['value' => 'Technical issues affecting remote monitoring accuracy or communication'],
            ['value' => 'Delayed emergency care if severe symptoms are not recognized promptly'],
            ['value' => 'Data privacy and digital health security concerns'],
            ['value' => 'Incomplete assessment in conditions requiring physical examination'],
            ['value' => 'Reduced treatment adherence without active patient participation and follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-endocrinology and remote monitoring systems support effective endocrine disease management by enabling continuous health tracking, timely treatment adjustment, and improved patient engagement. Management may include virtual endocrine consultations, remote glucose monitoring, digital prescription management, lifestyle counseling, nutritional support, medication adjustment, exercise planning, stress management, and long-term metabolic assessment. Patients may also benefit from smart wearable devices, digital diabetes management tools, online rehabilitation support, preventive health screening, and continuous communication with healthcare providers to optimize treatment outcomes and overall endocrine health.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with tele-endocrinology and remote monitoring systems is generally highly positive with consistent patient participation and regular specialist supervision. Continuous health monitoring, medication adherence, healthy lifestyle habits, digital healthcare support, routine virtual follow-up, and ongoing medical guidance significantly help improve disease control, reduce complications, maintain hormonal and metabolic stability, enhance healthcare accessibility, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Tele-Endocrinology / Remote Monitoring',
                'seo_description' => 'Tele-endocrinology and remote monitoring systems are advanced digital healthcare technologies used to provide endocrine consultations, chronic disease monitoring, treatment guidance, and long-term follow-up care through virtual platforms and connected medical devices. These systems improve access to specialized endocrine care, support continuous patient monitoring, and help maintain hormonal and metabolic stability without requiring frequent hospital visits.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
