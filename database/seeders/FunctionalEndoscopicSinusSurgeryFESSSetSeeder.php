<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FunctionalEndoscopicSinusSurgeryFESSSetSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Functional Endoscopic Sinus Surgery (FESS) Set')],
            [
                'title' => 'Functional Endoscopic Sinus Surgery (FESS) Set',
                'slug' => Str::slug('Functional Endoscopic Sinus Surgery (FESS) Set'),
                'introduction' => 'A Functional Endoscopic Sinus Surgery (FESS) set is a specialized collection of instruments used for minimally invasive sinus surgery to treat chronic sinus disease and nasal obstruction. The equipment allows precise removal of diseased tissue while preserving normal sinus function. FESS improves sinus drainage, breathing, and quality of life.',
                'what_is' => 'The surgical set typically includes: Endoscopes Forceps Suction devices Sinus punches Blakesley forceps Navigation-compatible instruments The equipment is used for: Chronic sinusitis Nasal polyps Sinus blockage Fungal sinus disease Selected sinus tumors The minimally invasive approach reduces tissue damage and promotes faster recovery.',
                'symptoms' => [
            ['value' => 'Chronic nasal blockage'],
            ['value' => 'Recurrent sinus infections'],
            ['value' => 'Facial pain or pressure'],
            ['value' => 'Persistent nasal discharge'],
            ['value' => 'Reduced sense of smell'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Eye-related complications'],
            ['value' => 'CSF leakage in rare cases'],
            ['value' => 'Recurrence of sinus disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Use saline nasal washes regularly'],
            ['value' => 'Avoid forceful nose blowing temporarily'],
            ['value' => 'Attend postoperative nasal cleaning appointments'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Report heavy bleeding or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Eye-related complications'],
            ['value' => 'CSF leakage in rare cases'],
            ['value' => 'Recurrence of sinus disease'],
        ],
                'long_term_outlook' => 'FESS equipment supports effective minimally invasive sinus surgery with improved breathing, reduced infections, and better long-term sinus health.',
                'conclusion' => '',
                'seo_title' => 'Functional Endoscopic Sinus Surgery (FESS) Set',
                'seo_description' => 'A Functional Endoscopic Sinus Surgery (FESS) set is a specialized collection of instruments used for minimally invasive sinus surgery to treat chronic sinus disease and nasal obstruction. The equipment allows precise removal of diseased tissue while preserving normal sinus function. FESS improves sinus drainage, breathing, and quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
