<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NABHCompliantENTOTOPDInfrastructureSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('NABH-Compliant ENT OT & OPD Infrastructure')],
            [
                'title' => 'NABH-Compliant ENT OT & OPD Infrastructure',
                'slug' => Str::slug('NABH-Compliant ENT OT & OPD Infrastructure'),
                'introduction' => 'NABH-compliant ENT OT (Operation Theatre) and OPD (Outpatient Department) infrastructure refers to standardized ENT facilities designed according to National Accreditation Board for Hospitals (NABH) quality and patient safety guidelines. The infrastructure supports high standards of healthcare delivery, infection control, documentation, and patient safety. It improves the overall quality of ENT services and hospital operations.',
                'what_is' => 'The infrastructure may include: Sterile operation theatres Advanced ventilation systems Patient safety monitoring Standardized workflow systems Infection control zones Emergency preparedness systems NABH standards ensure: Quality patient care Safe surgical practices Proper documentation Staff training and accountability Continuous quality improvement The setup supports safe and efficient ENT consultations, procedures, and surgeries.',
                'symptoms' => [
            ['value' => 'ENT conditions requiring surgical treatment'],
            ['value' => 'Chronic ENT disorders needing ongoing care'],
            ['value' => 'Airway or hearing-related disorders'],
            ['value' => 'Postoperative follow-up requirements'],
            ['value' => 'Emergency ENT conditions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical complications'],
            ['value' => 'Infection risks if standards are not maintained'],
            ['value' => 'Equipment-related failure'],
            ['value' => 'Documentation errors'],
            ['value' => 'Delayed care coordination in poorly organized systems'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow hospital discharge instructions carefully'],
            ['value' => 'Attend postoperative follow-up appointments'],
            ['value' => 'Continue medications consistently'],
            ['value' => 'Maintain wound and personal hygiene properly'],
            ['value' => 'Report complications or concerns immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical complications'],
            ['value' => 'Infection risks if standards are not maintained'],
            ['value' => 'Equipment-related failure'],
            ['value' => 'Documentation errors'],
            ['value' => 'Delayed care coordination in poorly organized systems'],
        ],
                'long_term_outlook' => 'NABH-compliant ENT infrastructure improves patient safety, treatment quality, and long-term healthcare outcomes through standardized and evidence-based care systems.',
                'conclusion' => '',
                'seo_title' => 'NABH-Compliant ENT OT & OPD Infrastructure',
                'seo_description' => 'NABH-compliant ENT OT (Operation Theatre) and OPD (Outpatient Department) infrastructure refers to standardized ENT facilities designed according to National Accreditation Board for Hospitals (NABH) quality and patient safety guidelines. The infrastructure supports high standards of healthcare delivery, infection control, documentation, and patient safety. It improves the overall quality of ENT services and hospital operations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
