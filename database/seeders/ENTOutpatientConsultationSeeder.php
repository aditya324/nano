<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ENTOutpatientConsultationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ENT Outpatient Consultation')],
            [
                'title' => 'ENT Outpatient Consultation',
                'slug' => Str::slug('ENT Outpatient Consultation'),
                'introduction' => 'ENT outpatient consultation is a specialized medical evaluation provided by an Ear, Nose, and Throat (ENT) specialist for diagnosing and managing disorders related to the ears, nose, throat, head, and neck. The consultation helps identify infections, allergies, hearing problems, voice disorders, sinus conditions, and other ENT-related illnesses through clinical examination and diagnostic assessment. It serves as the first step toward accurate treatment planning and long-term ENT care.',
                'what_is' => 'During the consultation, the ENT specialist reviews symptoms, medical history, and lifestyle factors affecting ear, nose, and throat health. A detailed examination of the ears, nasal passages, throat, neck, and related structures is performed using specialized instruments and diagnostic tools. The consultation may include hearing evaluation, nasal endoscopy, throat examination, allergy assessment, or imaging recommendations depending on the condition. Patients may receive medications, minor office procedures, lifestyle advice, or referral for advanced treatment or surgery if required. ENT outpatient services help manage both acute and chronic conditions while improving breathing, hearing, speech, swallowing, and overall quality of life.',
                'symptoms' => [
            ['value' => 'Ear pain or discharge'],
            ['value' => 'Nasal blockage or sinus problems'],
            ['value' => 'Sore throat or difficulty swallowing'],
            ['value' => 'Hearing loss or ringing in the ears'],
            ['value' => 'Dizziness or balance disturbances'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis if symptoms are ignored'],
            ['value' => 'Progression of untreated infections'],
            ['value' => 'Chronic ENT complications'],
            ['value' => 'Temporary discomfort during examination'],
            ['value' => 'Need for further investigations or procedures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow prescribed medications regularly'],
            ['value' => 'Attend scheduled follow-up appointments'],
            ['value' => 'Maintain proper ear and nasal hygiene'],
            ['value' => 'Avoid exposure to allergens or irritants'],
            ['value' => 'Report worsening symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis if symptoms are ignored'],
            ['value' => 'Progression of untreated infections'],
            ['value' => 'Chronic ENT complications'],
            ['value' => 'Temporary discomfort during examination'],
            ['value' => 'Need for further investigations or procedures'],
        ],
                'long_term_outlook' => 'Regular ENT consultation helps in early detection and effective management of ENT disorders. Long-term follow-up improves symptom control, hearing preservation, breathing comfort, and prevention of recurrent infections or complications.',
                'conclusion' => '',
                'seo_title' => 'ENT Outpatient Consultation',
                'seo_description' => 'ENT outpatient consultation is a specialized medical evaluation provided by an Ear, Nose, and Throat (ENT) specialist for diagnosing and managing disorders related to the ears, nose, throat, head, and neck. The consultation helps identify infections, allergies, hearing problems, voice disorders, sinus conditions, and other ENT-related illnesses through clinical examination and diagnostic assessment. It serves as the first step toward accurate treatment planning and long-term ENT care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
