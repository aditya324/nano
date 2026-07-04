<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicSinusSurgeryCameraMonitorSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Sinus Surgery Camera & Monitor')],
            [
                'title' => 'Endoscopic Sinus Surgery Camera & Monitor',
                'slug' => Str::slug('Endoscopic Sinus Surgery Camera & Monitor'),
                'introduction' => 'An endoscopic sinus surgery camera and monitor system is an advanced imaging setup used during ENT procedures to provide magnified high-definition visualization of the nasal cavity and sinus structures. The system enhances surgical precision and safety during sinus and skull base procedures. It is a critical component of modern endoscopic ENT surgery.',
                'what_is' => 'The setup includes: High-definition camera Endoscopic monitor Light source Video recording system Digital imaging support The system is used for: Functional endoscopic sinus surgery Nasal polyp removal Skull base procedures Diagnostic nasal endoscopy Sinus tumor surgery Enhanced visualization improves surgical accuracy and reduces complications.',
                'symptoms' => [
            ['value' => 'Chronic sinusitis'],
            ['value' => 'Nasal polyps'],
            ['value' => 'Nasal obstruction'],
            ['value' => 'Recurrent sinus infections'],
            ['value' => 'Skull base or sinus lesions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Equipment malfunction during surgery'],
            ['value' => 'Surgical bleeding'],
            ['value' => 'Infection risk'],
            ['value' => 'Rare visual or orbital complications'],
            ['value' => 'Recurrence of sinus disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow nasal care instructions carefully'],
            ['value' => 'Use saline irrigation regularly if advised'],
            ['value' => 'Attend follow-up nasal endoscopy visits'],
            ['value' => 'Avoid smoking and environmental irritants'],
            ['value' => 'Report fever or excessive bleeding immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Equipment malfunction during surgery'],
            ['value' => 'Surgical bleeding'],
            ['value' => 'Infection risk'],
            ['value' => 'Rare visual or orbital complications'],
            ['value' => 'Recurrence of sinus disease'],
        ],
                'long_term_outlook' => 'Advanced endoscopic imaging systems improve surgical precision, recovery outcomes, and long-term sinus disease management.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Sinus Surgery Camera & Monitor',
                'seo_description' => 'An endoscopic sinus surgery camera and monitor system is an advanced imaging setup used during ENT procedures to provide magnified high-definition visualization of the nasal cavity and sinus structures. The system enhances surgical precision and safety during sinus and skull base procedures. It is a critical component of modern endoscopic ENT surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
