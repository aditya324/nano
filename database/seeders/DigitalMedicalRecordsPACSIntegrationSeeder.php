<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DigitalMedicalRecordsPACSIntegrationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Digital Medical Records & PACS Integration')],
            [
                'title' => 'Digital Medical Records & PACS Integration',
                'slug' => Str::slug('Digital Medical Records & PACS Integration'),
                'introduction' => 'Digital Medical Records and PACS (Picture Archiving and Communication System) integration provide computerized storage, retrieval, and management of patient records, imaging studies, and ENT treatment documentation. The system improves efficiency, communication, and continuity of patient care. It supports accurate long-term medical record management.',
                'what_is' => 'The integrated system may include: Electronic medical records (EMR) Digital imaging storage Radiology integration Endoscopy image archiving Laboratory result access Secure patient data management PACS allows ENT specialists to review: CT scans MRI images Endoscopy recordings Audiology reports Surgical documentation Digital systems improve treatment coordination and reduce paperwork-related errors.',
                'symptoms' => [
            ['value' => 'Chronic ENT disorders requiring long-term follow-up'],
            ['value' => 'Complex surgical cases'],
            ['value' => 'Cancer-related ENT management'],
            ['value' => 'Hearing and imaging evaluation needs'],
            ['value' => 'Multi-specialty treatment coordination'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Data privacy concerns'],
            ['value' => 'Technical system failure'],
            ['value' => 'Delayed access during software downtime'],
            ['value' => 'Cybersecurity risks'],
            ['value' => 'Incomplete documentation if improperly maintained'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain regular follow-up appointments'],
            ['value' => 'Verify medical records during consultations when needed'],
            ['value' => 'Keep personal health information updated'],
            ['value' => 'Follow digital appointment and report systems properly'],
            ['value' => 'Inform healthcare providers about previous ENT treatments accurately'],
        ],
                'surgery_risks' => [
            ['value' => 'Data privacy concerns'],
            ['value' => 'Technical system failure'],
            ['value' => 'Delayed access during software downtime'],
            ['value' => 'Cybersecurity risks'],
            ['value' => 'Incomplete documentation if improperly maintained'],
        ],
                'long_term_outlook' => 'Digital medical systems improve continuity of care, treatment coordination, and long-term monitoring for ENT patients, enhancing healthcare efficiency and patient safety.',
                'conclusion' => '',
                'seo_title' => 'Digital Medical Records & PACS Integration',
                'seo_description' => 'Digital Medical Records and PACS (Picture Archiving and Communication System) integration provide computerized storage, retrieval, and management of patient records, imaging studies, and ENT treatment documentation. The system improves efficiency, communication, and continuity of patient care. It supports accurate long-term medical record management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
