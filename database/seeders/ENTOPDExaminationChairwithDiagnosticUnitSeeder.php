<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ENTOPDExaminationChairwithDiagnosticUnitSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ENT OPD Examination Chair with Diagnostic Unit')],
            [
                'title' => 'ENT OPD Examination Chair with Diagnostic Unit',
                'slug' => Str::slug('ENT OPD Examination Chair with Diagnostic Unit'),
                'introduction' => 'An ENT OPD Examination Chair with Diagnostic Unit is a specialized examination setup designed for evaluating disorders related to the ear, nose, throat, head, and neck region. The unit combines patient positioning systems with integrated diagnostic instruments that assist ENT specialists in accurate examination and treatment. It improves patient comfort, examination efficiency, and clinical precision during outpatient consultations.',
                'what_is' => 'The examination chair is adjustable and ergonomically designed to support proper patient positioning during ENT evaluations and minor procedures. The diagnostic unit may include: Suction apparatus Light source Instrument trays Air insufflation systems Endoscopy connections Microscope integration The setup supports detailed ENT examinations, ear cleaning, nasal procedures, throat evaluation, and outpatient treatments. It is an essential component of modern ENT outpatient departments.',
                'symptoms' => [
            ['value' => 'Ear pain or hearing difficulty'],
            ['value' => 'Nasal blockage or sinus symptoms'],
            ['value' => 'Sore throat or swallowing difficulty'],
            ['value' => 'Vertigo or dizziness'],
            ['value' => 'Head and neck swelling evaluation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary gag reflex during throat examination'],
            ['value' => 'Rare cross-infection if hygiene protocols are not followed'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Minor dizziness during positional examination'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow prescribed ENT medications properly'],
            ['value' => 'Attend scheduled follow-up consultations'],
            ['value' => 'Maintain ear and nasal hygiene carefully'],
            ['value' => 'Avoid self-cleaning of ears with sharp objects'],
            ['value' => 'Report worsening symptoms promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild discomfort during examination'],
            ['value' => 'Temporary gag reflex during throat examination'],
            ['value' => 'Rare cross-infection if hygiene protocols are not followed'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Minor dizziness during positional examination'],
        ],
                'long_term_outlook' => 'Modern ENT examination units improve early diagnosis, treatment accuracy, and patient comfort. Regular ENT evaluations help maintain long-term ear, nose, and throat health.',
                'conclusion' => '',
                'seo_title' => 'ENT OPD Examination Chair with Diagnostic Unit',
                'seo_description' => 'An ENT OPD Examination Chair with Diagnostic Unit is a specialized examination setup designed for evaluating disorders related to the ear, nose, throat, head, and neck region. The unit combines patient positioning systems with integrated diagnostic instruments that assist ENT specialists in accurate examination and treatment. It improves patient comfort, examination efficiency, and clinical precision during outpatient consultations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
