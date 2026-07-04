<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostProcedureFollowUpMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Post-Procedure Follow-Up & Monitoring')],
            [
                'title' => 'Post-Procedure Follow-Up & Monitoring',
                'slug' => Str::slug('Post-Procedure Follow-Up & Monitoring'),
                'introduction' => 'Post-procedure follow-up and monitoring involve regular medical evaluations and supportive care after dermatologic treatments or procedures to ensure proper healing, monitor treatment response, and reduce the risk of complications. Follow-up care is an important part of both medical and cosmetic dermatology management.',
                'what_is' => 'Patients undergoing dermatologic procedures such as laser therapy, chemical peels, surgical excision, PRP therapy, cryotherapy, or cosmetic treatments often require scheduled follow-up visits to assess skin healing, treatment effectiveness, and overall recovery. Monitoring may include evaluation of wound healing, infection prevention, scar management, medication adjustments, and long-term skin health maintenance.',
                'symptoms' => [
            ['value' => 'Redness, swelling, or irritation after procedures'],
            ['value' => 'Healing wounds or treated skin lesions'],
            ['value' => 'Mild discomfort, peeling, or sensitivity'],
            ['value' => 'Pigmentation changes or temporary skin reactions'],
            ['value' => 'Cosmetic or medical skin concerns requiring reassessment'],
        ],
                'causes' => [
            ['value' => 'Post-procedure follow-up is commonly required after medical and cosmetic dermatologic treatments to monitor healing progress and ensure successful outcomes. Procedures such as laser treatments, chemical peels, cryotherapy, mole removal, scar revision, PRP therapy, biopsies, and cosmetic skin rejuvenation may cause temporary skin reactions that require professional monitoring. Individuals with sensitive skin, chronic medical conditions, delayed healing tendencies, or a history of allergic reactions may need closer follow-up care to prevent complications and support optimal skin recovery.'],
        ],
                'condition_risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Allergic reactions or medication-related side effects'],
            ['value' => 'Recurrence of treated skin conditions'],
            ['value' => 'Need for additional or maintenance treatment sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Post-procedure care and monitoring focus on supporting skin healing, reducing complications, and maintaining treatment results. Dermatologists may recommend medicated creams, antibiotics, anti-inflammatory medications, moisturizers, and specialized wound care depending on the procedure performed. Follow-up evaluations help assess healing progress, identify early signs of infection or abnormal scarring, and determine whether additional treatment sessions or maintenance therapies are required. Supportive care such as scar management, sun protection, hydration, and gentle skincare practices are often advised to improve recovery and cosmetic outcomes. In certain cases, corrective or revision procedures may be recommended if complications or persistent skin concerns develop.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Following prescribed medications and skincare instructions'],
            ['value' => 'Keeping treated areas clean and protected'],
            ['value' => 'Using sunscreen and avoiding excessive sun exposure'],
            ['value' => 'Monitoring for signs of infection or abnormal healing'],
            ['value' => 'Attending scheduled dermatologic follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or delayed wound healing'],
            ['value' => 'Scarring or pigmentation changes'],
            ['value' => 'Allergic reactions or medication-related side effects'],
            ['value' => 'Recurrence of treated skin conditions'],
            ['value' => 'Need for additional or maintenance treatment sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Post-procedure care and monitoring focus on supporting skin healing, reducing complications, and maintaining treatment results. Dermatologists may recommend medicated creams, antibiotics, anti-inflammatory medications, moisturizers, and specialized wound care depending on the procedure performed. Follow-up evaluations help assess healing progress, identify early signs of infection or abnormal scarring, and determine whether additional treatment sessions or maintenance therapies are required. Supportive care such as scar management, sun protection, hydration, and gentle skincare practices are often advised to improve recovery and cosmetic outcomes. In certain cases, corrective or revision procedures may be recommended if complications or persistent skin concerns develop.'],
        ],
                'long_term_outlook' => 'The long-term outlook after dermatologic procedures is generally very positive when proper follow-up and monitoring are maintained. Regular medical evaluations help ensure safe healing, improve treatment outcomes, and support long-term skin health. Consistent skincare, preventive care, and ongoing dermatologic supervision are important for maintaining optimal results and reducing future complications.',
                'conclusion' => '',
                'seo_title' => 'Post-Procedure Follow-Up & Monitoring',
                'seo_description' => 'Post-procedure follow-up and monitoring involve regular medical evaluations and supportive care after dermatologic treatments or procedures to ensure proper healing, monitor treatment response, and reduce the risk of complications. Follow-up care is an important part of both medical and cosmetic dermatology management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
