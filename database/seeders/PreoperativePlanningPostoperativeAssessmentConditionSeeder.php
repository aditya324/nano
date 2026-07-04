<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreoperativePlanningPostoperativeAssessmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Preoperative Planning & Postoperative Assessment')],
            [
                'name' => 'Preoperative Planning & Postoperative Assessment',
                'slug' => Str::slug('Preoperative Planning & Postoperative Assessment'),
                'h1' => 'Preoperative Planning & Postoperative Assessment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Preoperative planning and postoperative assessment are essential medical evaluation processes performed before and after surgical procedures to support accurate diagnosis, surgical preparation, recovery monitoring, and long-term treatment success. These assessments help healthcare professionals improve patient safety, optimize surgical outcomes, and detect complications early.',
                'about_more' => '',
                'overview' => 'Preoperative planning involves clinical evaluation, imaging studies, laboratory investigations, and risk assessment to prepare patients for surgery and guide surgical decision-making. Postoperative assessment includes monitoring healing, evaluating surgical outcomes, detecting complications, and assessing recovery progress through physical examination, imaging, and follow-up care. These procedures are widely used across orthopedic, neurological, cardiovascular, abdominal, oncological, and general surgical specialties.',
                'symptoms' => [
            ['value' => 'Pain, swelling, or discomfort requiring surgical evaluation'],
            ['value' => 'Reduced mobility or organ-related functional limitations'],
            ['value' => 'Persistent symptoms despite medical treatment'],
            ['value' => 'Signs of infection, bleeding, or delayed healing after surgery'],
            ['value' => 'Weakness, fatigue, or abnormal postoperative recovery symptoms'],
        ],
                'causes' => [
            ['value' => 'Surgical planning and anatomical evaluation before procedures'],
            ['value' => 'Assessment of organ function and treatment readiness'],
            ['value' => 'Monitoring healing and recovery after surgery'],
            ['value' => 'Detection of postoperative complications or recurrence'],
            ['value' => 'Long-term follow-up and rehabilitation planning'],
        ],
                'risks' => [
            ['value' => 'Delayed detection of surgical complications'],
            ['value' => 'Infection, bleeding, or fluid collection after surgery'],
            ['value' => 'Poor wound healing or failure of surgical repair'],
            ['value' => 'Need for repeat surgery or additional procedures'],
            ['value' => 'Persistent pain or reduced functional recovery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Preoperative planning and postoperative assessment support safe surgical management, treatment monitoring, rehabilitation planning, and long-term patient care. Imaging studies, laboratory evaluations, and multidisciplinary consultations help guide surgical decisions, monitor recovery, and improve overall treatment outcomes.'],
            ['value' => 'Following postoperative medication and rehabilitation instructions carefully'],
            ['value' => 'Attending scheduled follow-up appointments and imaging evaluations'],
            ['value' => 'Monitoring for pain, swelling, fever, or wound-related complications'],
            ['value' => 'Maintaining proper wound care and healthy recovery practices'],
            ['value' => 'Reporting unusual symptoms or delayed recovery promptly'],
        ],
                'recovery' => 'The long-term outlook with proper preoperative planning and postoperative assessment is generally very positive because thorough evaluation and continuous monitoring improve surgical safety, recovery outcomes, and long-term health management. Regular follow-up, rehabilitation, healthy lifestyle practices, and adherence to medical recommendations are important for maintaining successful recovery and overall well-being. __________________________________ 25. Reporting & Documentation for NABH / Insurance Compliance Reporting & Documentation for NABH / Insurance Compliance Procedures',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Preoperative Planning & Postoperative Assessment',
                'meta_description' => 'Preoperative planning and postoperative assessment are essential medical evaluation processes performed before and after surgical procedures to support accurate',
                'meta_keywords' => '',
            ]
        );
    }
}
