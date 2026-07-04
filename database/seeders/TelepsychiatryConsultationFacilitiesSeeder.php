<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TelepsychiatryConsultationFacilitiesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Telepsychiatry / Consultation Facilities')],
            [
                'title' => 'Telepsychiatry / Consultation Facilities',
                'slug' => Str::slug('Telepsychiatry / Consultation Facilities'),
                'introduction' => 'Telepsychiatry and consultation facilities are advanced digital mental healthcare systems designed to provide psychiatric consultations, psychological counseling, therapy sessions, medication management, crisis support, and long-term mental health follow-up through secure virtual communication platforms. These facilities improve accessibility to mental healthcare services while supporting continuity of treatment, emotional support, and remote patient monitoring.',
                'what_is' => 'Telepsychiatry facilities integrate secure video conferencing systems, digital patient management platforms, electronic medical records, online therapy tools, remote monitoring technologies, and virtual counseling services to deliver comprehensive mental healthcare. These facilities are widely used in psychiatry clinics, hospitals, rehabilitation centers, counseling services, and behavioral health departments for managing depression, anxiety disorders, addiction, stress-related conditions, sleep disorders, trauma, and chronic psychiatric illnesses. Teleconsultation systems also support multidisciplinary collaboration, follow-up care, and remote mental wellness programs.',
                'symptoms' => [
            ['value' => 'Persistent anxiety, depression, or emotional distress'],
            ['value' => 'Stress, panic attacks, or sleep disturbances'],
            ['value' => 'Social withdrawal, mood changes, or behavioral difficulties'],
            ['value' => 'Need for regular psychiatric follow-up or counseling support'],
            ['value' => 'Emotional or psychological symptoms affecting daily functioning'],
        ],
                'causes' => [
            ['value' => 'Depression, anxiety disorders, and stress-related conditions'],
            ['value' => 'Trauma, grief, or emotional burnout'],
            ['value' => 'Relationship difficulties and social isolation'],
            ['value' => 'Chronic illness or long-term mental health conditions'],
            ['value' => 'Need for accessible psychiatric and psychological care services'],
        ],
                'condition_risks' => [
            ['value' => 'Limited physical observation during virtual consultations'],
            ['value' => 'Dependence on internet connectivity and digital infrastructure'],
            ['value' => 'Privacy and cybersecurity concerns in online healthcare systems'],
            ['value' => 'Difficulty managing severe psychiatric emergencies remotely'],
            ['value' => 'Requirement for in-person evaluation in complex or high-risk cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Telepsychiatry and consultation facilities support virtual psychiatric evaluations, psychotherapy sessions, medication management, emotional wellness counseling, CBT, DBT, stress management programs, family counseling, addiction recovery support, sleep management guidance, and crisis intervention services. These facilities may also provide remote monitoring, digital therapy platforms, rehabilitation support, lifestyle counseling, and multidisciplinary care coordination involving psychiatrists, psychologists, counselors, and primary care providers to improve long-term mental healthcare outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular virtual psychiatric and counseling follow-up sessions'],
            ['value' => 'Monitoring treatment response and emotional well-being remotely'],
            ['value' => 'Medication review and psychotherapy progress evaluation'],
            ['value' => 'Patient education regarding coping strategies and mental wellness'],
            ['value' => 'Long-term digital mental healthcare support and relapse prevention planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical observation during virtual consultations'],
            ['value' => 'Dependence on internet connectivity and digital infrastructure'],
            ['value' => 'Privacy and cybersecurity concerns in online healthcare systems'],
            ['value' => 'Difficulty managing severe psychiatric emergencies remotely'],
            ['value' => 'Requirement for in-person evaluation in complex or high-risk cases'],
            ['value' => 'Treatment Options'],
            ['value' => 'Telepsychiatry and consultation facilities support virtual psychiatric evaluations, psychotherapy sessions, medication management, emotional wellness counseling, CBT, DBT, stress management programs, family counseling, addiction recovery support, sleep management guidance, and crisis intervention services. These facilities may also provide remote monitoring, digital therapy platforms, rehabilitation support, lifestyle counseling, and multidisciplinary care coordination involving psychiatrists, psychologists, counselors, and primary care providers to improve long-term mental healthcare outcomes.'],
        ],
                'long_term_outlook' => 'Telepsychiatry and consultation facilities significantly improve access to mental healthcare, continuity of treatment, emotional support, and patient convenience. Advancements in secure telemedicine systems, digital counseling platforms, AI-assisted mental health technologies, and remote monitoring tools continue to enhance treatment accessibility, patient engagement, emotional resilience, long-term mental wellness, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Telepsychiatry / Consultation Facilities',
                'seo_description' => 'Telepsychiatry and consultation facilities are advanced digital mental healthcare systems designed to provide psychiatric consultations, psychological counseling, therapy sessions, medication management, crisis support, and long-term mental health follow-up through secure virtual communication platforms. These facilities improve accessibility to mental healthcare services while supporting continuity of treatment, emotional support, and remote patient monitoring.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
