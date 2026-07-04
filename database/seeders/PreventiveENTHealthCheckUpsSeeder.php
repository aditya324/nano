<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreventiveENTHealthCheckUpsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Preventive ENT Health Check-Ups')],
            [
                'title' => 'Preventive ENT Health Check-Ups',
                'slug' => Str::slug('Preventive ENT Health Check-Ups'),
                'introduction' => 'Preventive ENT health check-ups are routine evaluations performed to identify ear, nose, throat, hearing, and head and neck problems at an early stage before severe symptoms develop. Regular screening helps detect infections, hearing loss, allergies, tumors, and airway disorders early. Preventive care supports better long-term ENT health and quality of life.',
                'what_is' => 'The check-up may include: Ear examination Hearing assessment Nasal and throat evaluation Allergy assessment Voice and swallowing screening Head and neck examination Preventive ENT check-ups are especially useful for: Children with recurrent infections Elderly individuals with hearing concerns Smokers Professional voice users Patients with chronic allergies or sinus disease Early diagnosis allows timely treatment and prevention of complications.',
                'symptoms' => [
            ['value' => 'Recurrent ENT discomfort'],
            ['value' => 'Hearing changes'],
            ['value' => 'Chronic nasal blockage'],
            ['value' => 'Persistent throat irritation'],
            ['value' => 'Voice or swallowing difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Missed early disease diagnosis without screening'],
            ['value' => 'Progression of untreated ENT conditions'],
            ['value' => 'Chronic hearing or sinus problems'],
            ['value' => 'Delayed cancer detection'],
            ['value' => 'Recurrent infections'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular preventive health check-ups'],
            ['value' => 'Maintain good ENT hygiene practices'],
            ['value' => 'Avoid tobacco and excessive noise exposure'],
            ['value' => 'Follow vaccination and allergy management advice'],
            ['value' => 'Seek early medical attention for symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Missed early disease diagnosis without screening'],
            ['value' => 'Progression of untreated ENT conditions'],
            ['value' => 'Chronic hearing or sinus problems'],
            ['value' => 'Delayed cancer detection'],
            ['value' => 'Recurrent infections'],
        ],
                'long_term_outlook' => 'Preventive ENT care improves early disease detection, reduces complications, and supports healthy hearing, breathing, speech, and overall ENT function throughout life.',
                'conclusion' => '',
                'seo_title' => 'Preventive ENT Health Check-Ups',
                'seo_description' => 'Preventive ENT health check-ups are routine evaluations performed to identify ear, nose, throat, hearing, and head and neck problems at an early stage before severe symptoms develop. Regular screening helps detect infections, hearing loss, allergies, tumors, and airway disorders early. Preventive care supports better long-term ENT health and quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
