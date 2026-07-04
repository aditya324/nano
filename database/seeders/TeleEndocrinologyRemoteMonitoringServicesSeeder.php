<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleEndocrinologyRemoteMonitoringServicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Endocrinology / Remote Monitoring Services')],
            [
                'title' => 'Tele-Endocrinology / Remote Monitoring Services',
                'slug' => Str::slug('Tele-Endocrinology / Remote Monitoring Services'),
                'introduction' => 'Tele-endocrinology and remote monitoring services are advanced healthcare management procedures that use digital communication and remote health technologies to provide endocrine consultations, disease monitoring, treatment guidance, and long-term follow-up care from a distance. These services improve access to specialized endocrine care, support chronic disease management, and help patients maintain hormonal and metabolic stability without the need for frequent in-person hospital visits.',
                'what_is' => 'Tele-endocrinology services involve virtual consultations, digital health assessments, remote review of laboratory results, medication management, and continuous monitoring of chronic endocrine conditions such as diabetes, thyroid disorders, obesity, osteoporosis, metabolic syndrome, and hormonal imbalances. Remote monitoring technologies may include Continuous Glucose Monitoring (CGM) systems, smart insulin devices, wearable health trackers, blood pressure monitors, and mobile health applications that allow healthcare providers to monitor patient progress in real time. These services are commonly supervised by endocrinologists, diabetes educators, nutritionists, and multidisciplinary healthcare teams through secure digital healthcare platforms.',
                'symptoms' => [
            ['value' => 'Difficulty accessing regular endocrine consultations'],
            ['value' => 'Uncontrolled blood sugar, thyroid, or metabolic conditions requiring close monitoring'],
            ['value' => 'Frequent need for medication adjustment or hormonal evaluation'],
            ['value' => 'Chronic endocrine disorders requiring long-term follow-up care'],
            ['value' => 'Reduced mobility or inability to attend frequent hospital visits'],
        ],
                'causes' => [
            ['value' => 'Diabetes and metabolic disorders requiring continuous monitoring'],
            ['value' => 'Thyroid and hormonal disorders needing long-term follow-up'],
            ['value' => 'Obesity and lifestyle-related endocrine conditions'],
            ['value' => 'Limited access to regular in-person specialist consultations'],
            ['value' => 'Chronic endocrine diseases requiring frequent treatment adjustment'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed emergency care if severe symptoms are not recognized promptly'],
            ['value' => 'Technical issues affecting remote communication or monitoring accuracy'],
            ['value' => 'Incomplete assessment without physical examination in selected cases'],
            ['value' => 'Reduced treatment adherence without regular patient engagement'],
            ['value' => 'Data privacy and digital health security concerns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-endocrinology and remote monitoring services focus on improving disease management, enhancing treatment accessibility, reducing complications, and supporting long-term endocrine stability. Services may include virtual endocrine consultations, digital prescription management, remote glucose and hormone monitoring, nutritional counseling, lifestyle modification support, medication adjustment, diabetes education, rehabilitation guidance, and preventive health assessments. Patients may also benefit from continuous communication with healthcare providers, digital self-monitoring tools, stress management programs, and personalized chronic disease management plans to optimize long-term health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular virtual consultations and endocrine follow-up assessments'],
            ['value' => 'Continuous monitoring of blood sugar, hormone levels, and treatment response'],
            ['value' => 'Remote medication review and therapy adjustment when required'],
            ['value' => 'Digital lifestyle counseling and self-monitoring support'],
            ['value' => 'Long-term telehealth coordination with multidisciplinary endocrine care teams'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed emergency care if severe symptoms are not recognized promptly'],
            ['value' => 'Technical issues affecting remote communication or monitoring accuracy'],
            ['value' => 'Incomplete assessment without physical examination in selected cases'],
            ['value' => 'Reduced treatment adherence without regular patient engagement'],
            ['value' => 'Data privacy and digital health security concerns'],
            ['value' => 'Treatment Options'],
            ['value' => 'Tele-endocrinology and remote monitoring services focus on improving disease management, enhancing treatment accessibility, reducing complications, and supporting long-term endocrine stability. Services may include virtual endocrine consultations, digital prescription management, remote glucose and hormone monitoring, nutritional counseling, lifestyle modification support, medication adjustment, diabetes education, rehabilitation guidance, and preventive health assessments. Patients may also benefit from continuous communication with healthcare providers, digital self-monitoring tools, stress management programs, and personalized chronic disease management plans to optimize long-term health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following tele-endocrinology and remote monitoring services is generally highly positive with consistent patient participation and regular specialist supervision. Continuous health monitoring, medication adherence, healthy lifestyle habits, digital self-management tools, routine virtual consultations, and ongoing medical support significantly help improve disease control, reduce complications, maintain hormonal and metabolic stability, enhance treatment accessibility, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Tele-Endocrinology / Remote Monitoring Services',
                'seo_description' => 'Tele-endocrinology and remote monitoring services are advanced healthcare management procedures that use digital communication and remote health technologies to provide endocrine consultations, disease monitoring, treatment guidance, and long-term follow-up care from a distance. These services improve access to specialized endocrine care, support chronic disease management, and help patients maintain hormonal and metabolic stability without the need for frequent in-person hospital visits.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
