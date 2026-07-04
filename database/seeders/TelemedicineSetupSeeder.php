<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TelemedicineSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Telemedicine Setup')],
            [
                'title' => 'Telemedicine Setup',
                'slug' => Str::slug('Telemedicine Setup'),
                'introduction' => 'A telemedicine setup is a digital healthcare system that enables remote medical consultations, patient monitoring, communication, and follow-up care through secure online platforms and connected medical technologies. Telemedicine helps improve access to healthcare services, especially for patients who require regular medical follow-up, chronic disease management, or are unable to visit healthcare facilities frequently. It supports continuous healthcare delivery while improving convenience, accessibility, and patient engagement.',
                'what_is' => 'Telemedicine systems are commonly used for chronic disease management, routine consultations, post-hospital follow-up, specialist referrals, preventive healthcare, and remote patient monitoring. A telemedicine setup may include video consultation platforms, electronic medical records (EMR), remote monitoring devices, digital prescriptions, mobile health applications, and communication systems that connect patients with healthcare professionals in real time. These systems are widely used in hospitals, outpatient clinics, home healthcare services, rehabilitation programs, and rural healthcare settings to support timely diagnosis, treatment planning, and long-term medical care.',
                'symptoms' => [
            ['value' => 'Chronic medical conditions requiring regular follow-up'],
            ['value' => 'Limited mobility or difficulty attending hospital visits'],
            ['value' => 'Frequent need for medical consultation or health monitoring'],
            ['value' => 'Ongoing symptoms requiring continuous evaluation'],
            ['value' => 'Increased healthcare needs in remote or underserved areas'],
        ],
                'causes' => [
            ['value' => 'Diabetes, hypertension, heart disease, or other chronic illnesses'],
            ['value' => 'Reduced mobility due to age, disability, or post-surgical recovery'],
            ['value' => 'Need for frequent specialist consultation and medication monitoring'],
            ['value' => 'Limited healthcare access in rural or remote locations'],
            ['value' => 'Long-term respiratory, cardiac, or metabolic conditions requiring continuous supervision'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed medical evaluation without regular follow-up'],
            ['value' => 'Poor chronic disease management and inadequate monitoring'],
            ['value' => 'Reduced healthcare access in remote or underserved regions'],
            ['value' => 'Increased hospitalization risk due to lack of early intervention'],
            ['value' => 'Communication gaps affecting continuity and coordination of care'],
            ['value' => 'Treatment Options'],
            ['value' => 'Telemedicine setups support remote diagnosis, chronic disease management, preventive healthcare, and continuous patient monitoring. Services may include virtual consultations, digital prescription management, remote vital sign monitoring, laboratory report review, specialist referrals, rehabilitation support, lifestyle counseling, medication tracking, and emergency guidance. Patients may also benefit from home healthcare integration, wearable monitoring devices, tele-rehabilitation programs, preventive health screening, mental health support, and long-term multidisciplinary follow-up care to improve healthcare accessibility and treatment outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular virtual consultations and symptom monitoring'],
            ['value' => 'Remote review of reports, medications, and treatment plans'],
            ['value' => 'Monitoring of vital signs and chronic disease indicators'],
            ['value' => 'Ongoing communication between patients and healthcare teams'],
            ['value' => 'Continuous follow-up and preventive healthcare guidance'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed medical evaluation without regular follow-up'],
            ['value' => 'Poor chronic disease management and inadequate monitoring'],
            ['value' => 'Reduced healthcare access in remote or underserved regions'],
            ['value' => 'Increased hospitalization risk due to lack of early intervention'],
            ['value' => 'Communication gaps affecting continuity and coordination of care'],
            ['value' => 'Treatment Options'],
            ['value' => 'Telemedicine setups support remote diagnosis, chronic disease management, preventive healthcare, and continuous patient monitoring. Services may include virtual consultations, digital prescription management, remote vital sign monitoring, laboratory report review, specialist referrals, rehabilitation support, lifestyle counseling, medication tracking, and emergency guidance. Patients may also benefit from home healthcare integration, wearable monitoring devices, tele-rehabilitation programs, preventive health screening, mental health support, and long-term multidisciplinary follow-up care to improve healthcare accessibility and treatment outcomes.'],
        ],
                'long_term_outlook' => 'Telemedicine setups significantly improve healthcare accessibility, continuity of care, and patient convenience. Remote healthcare services support early medical intervention, better chronic disease management, reduced hospital visits, improved treatment adherence, and enhanced overall patient outcomes. Continued integration of telemedicine technologies, preventive healthcare, regular monitoring, and specialist follow-up significantly help improve long-term health stability, patient safety, and quality of life across a wide range of medical conditions.',
                'conclusion' => '',
                'seo_title' => 'Telemedicine Setup',
                'seo_description' => 'A telemedicine setup is a digital healthcare system that enables remote medical consultations, patient monitoring, communication, and follow-up care through secure online platforms and connected medical technologies. Telemedicine helps improve access to healthcare services, especially for patients who require regular medical follow-up, chronic disease management, or are unable to visit healthcare facilities frequently. It supports continuous healthcare delivery while improving convenience, accessibility, and patient engagement.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
