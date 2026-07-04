<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiagnosticRigidNasalEndoscopesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diagnostic & Rigid Nasal Endoscopes')],
            [
                'title' => 'Diagnostic & Rigid Nasal Endoscopes',
                'slug' => Str::slug('Diagnostic & Rigid Nasal Endoscopes'),
                'introduction' => 'Diagnostic and rigid nasal endoscopes are specialized instruments used to examine the nasal passages, sinuses, and upper airway structures in detail. These endoscopes provide magnified visualization for accurate diagnosis and treatment planning of nasal and sinus disorders. They are commonly used in ENT clinics and surgical procedures.',
                'what_is' => 'Rigid nasal endoscopes are thin telescopic instruments connected to a light source and camera system. They help evaluate: Nasal obstruction Sinus disease Nasal polyps Deviated nasal septum Tumors or masses Nosebleeds The procedure is usually performed in the outpatient clinic under local anesthesia or nasal decongestants. High-definition imaging improves diagnostic precision and minimally invasive treatment planning.',
                'symptoms' => [
            ['value' => 'Chronic nasal blockage'],
            ['value' => 'Recurrent sinus infections'],
            ['value' => 'Nasal bleeding'],
            ['value' => 'Reduced sense of smell'],
            ['value' => 'Persistent nasal discharge'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild nasal discomfort'],
            ['value' => 'Sneezing or watering of eyes'],
            ['value' => 'Minor nasal bleeding'],
            ['value' => 'Temporary irritation'],
            ['value' => 'Rare infection risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid forceful nose blowing temporarily'],
            ['value' => 'Use saline nasal sprays if advised'],
            ['value' => 'Continue prescribed medications regularly'],
            ['value' => 'Attend follow-up nasal evaluations'],
            ['value' => 'Report heavy bleeding or severe pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild nasal discomfort'],
            ['value' => 'Sneezing or watering of eyes'],
            ['value' => 'Minor nasal bleeding'],
            ['value' => 'Temporary irritation'],
            ['value' => 'Rare infection risk'],
        ],
                'long_term_outlook' => 'Nasal endoscopy improves early diagnosis and effective treatment of sinus and nasal disorders, supporting better long-term respiratory and sinus health.',
                'conclusion' => '',
                'seo_title' => 'Diagnostic & Rigid Nasal Endoscopes',
                'seo_description' => 'Diagnostic and rigid nasal endoscopes are specialized instruments used to examine the nasal passages, sinuses, and upper airway structures in detail. These endoscopes provide magnified visualization for accurate diagnosis and treatment planning of nasal and sinus disorders. They are commonly used in ENT clinics and surgical procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
