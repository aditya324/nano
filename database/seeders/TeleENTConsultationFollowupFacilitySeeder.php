<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleENTConsultationFollowupFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-ENT Consultation & Follow-up Facility')],
            [
                'title' => 'Tele-ENT Consultation & Follow-up Facility',
                'slug' => Str::slug('Tele-ENT Consultation & Follow-up Facility'),
                'introduction' => 'A Tele-ENT consultation and follow-up facility provides remote ENT consultations using digital communication technologies for diagnosis, treatment guidance, and follow-up care. The facility improves healthcare accessibility, especially for patients in remote or underserved areas. Telemedicine supports continuity of ENT care without requiring frequent hospital visits.',
                'what_is' => 'The facility may provide: Video consultations Digital report review Remote follow-up care Medication guidance Postoperative monitoring Referral coordination Tele-ENT services are useful for: Chronic ENT follow-up Hearing review consultations Allergy management Post-surgical recovery assessment Preliminary evaluation of symptoms The system improves convenience while maintaining specialist access.',
                'symptoms' => [
            ['value' => 'Chronic ENT symptoms requiring follow-up'],
            ['value' => 'Mild postoperative concerns'],
            ['value' => 'Hearing or allergy review needs'],
            ['value' => 'Voice or sinus complaints'],
            ['value' => 'Difficulty accessing in-person ENT care'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Limited physical examination remotely'],
            ['value' => 'Internet or technical issues'],
            ['value' => 'Delayed recognition of emergencies'],
            ['value' => 'Communication limitations'],
            ['value' => 'Data privacy concerns'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled virtual follow-up consultations'],
            ['value' => 'Share reports and imaging clearly when requested'],
            ['value' => 'Continue medications consistently'],
            ['value' => 'Seek immediate in-person care for emergencies'],
            ['value' => 'Maintain regular communication with healthcare providers'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical examination remotely'],
            ['value' => 'Internet or technical issues'],
            ['value' => 'Delayed recognition of emergencies'],
            ['value' => 'Communication limitations'],
            ['value' => 'Data privacy concerns'],
        ],
                'long_term_outlook' => 'Tele-ENT facilities improve accessibility, continuity of care, and long-term monitoring for ENT patients while reducing travel and treatment delays.',
                'conclusion' => '',
                'seo_title' => 'Tele-ENT Consultation & Follow-up Facility',
                'seo_description' => 'A Tele-ENT consultation and follow-up facility provides remote ENT consultations using digital communication technologies for diagnosis, treatment guidance, and follow-up care. The facility improves healthcare accessibility, especially for patients in remote or underserved areas. Telemedicine supports continuity of ENT care without requiring frequent hospital visits.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
