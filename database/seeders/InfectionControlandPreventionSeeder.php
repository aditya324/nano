<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlandPreventionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Infection Control and Prevention')],
            [
                'title' => 'Infection Control and Prevention',
                'slug' => Str::slug('Infection Control and Prevention'),
                'introduction' => 'Infection control and prevention in ENT focuses on reducing the spread of infections affecting the ear, nose, throat, and surgical areas through proper hygiene, sterilization, and preventive practices. The approach protects both patients and healthcare providers from infectious complications. It is essential in outpatient clinics, operation theatres, and inpatient ENT care.',
                'what_is' => 'Infection prevention measures may include: Sterilization of instruments Hand hygiene protocols Use of personal protective equipment Isolation precautions when necessary Surgical wound care Vaccination and preventive counseling ENT specialists also educate patients on avoiding recurrent infections and maintaining proper respiratory hygiene. Strict infection control standards improve patient safety and reduce hospital-acquired infections.',
                'symptoms' => [
            ['value' => 'Fever'],
            ['value' => 'Redness or swelling'],
            ['value' => 'Ear or throat discharge'],
            ['value' => 'Persistent pain'],
            ['value' => 'Wound infection signs'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Spread of infection'],
            ['value' => 'Surgical site complications'],
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Delayed healing'],
            ['value' => 'Severe systemic infection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain good personal hygiene'],
            ['value' => 'Follow wound care instructions properly'],
            ['value' => 'Complete prescribed medications fully'],
            ['value' => 'Avoid contact with contagious illnesses'],
            ['value' => 'Report fever or worsening symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Spread of infection'],
            ['value' => 'Surgical site complications'],
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Delayed healing'],
            ['value' => 'Severe systemic infection'],
        ],
                'long_term_outlook' => 'Proper infection prevention significantly reduces complications and improves recovery outcomes. Long-term ENT health improves with good hygiene and preventive care.',
                'conclusion' => '',
                'seo_title' => 'Infection Control and Prevention',
                'seo_description' => 'Infection control and prevention in ENT focuses on reducing the spread of infections affecting the ear, nose, throat, and surgical areas through proper hygiene, sterilization, and preventive practices. The approach protects both patients and healthcare providers from infectious complications. It is essential in outpatient clinics, operation theatres, and inpatient ENT care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
