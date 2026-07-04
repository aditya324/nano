<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectiousDiseasesSepsisTBMalariaDengueViralInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)')],
            [
                'name' => 'Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)',
                'slug' => Str::slug('Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)'),
                'h1' => 'Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infectious diseases are illnesses caused by bacteria, viruses, parasites, fungi, or other microorganisms that can spread through air, water, food, insect bites, or direct human contact. Conditions such as sepsis, tuberculosis (TB), malaria, dengue, and viral infections can affect multiple organs and body systems, ranging from mild illness to life-threatening medical emergencies. Early diagnosis, prompt treatment, infection control, and preventive healthcare are essential to reduce complications and improve recovery outcomes.',
                'about_more' => '',
                'overview' => 'Infectious diseases are illnesses caused by bacteria, viruses, parasites, fungi, or other microorganisms that can spread through air, water, food, insect bites, or direct human contact. Conditions such as sepsis, tuberculosis (TB), malaria, dengue, and viral infections can affect multiple organs and body systems, ranging from mild illness to life-threatening medical emergencies. Early diagnosis, prompt treatment, infection control, and preventive healthcare are essential to reduce complications and improve recovery outcomes.',
                'symptoms' => [
            ['value' => 'Fever, chills, or excessive sweating'],
            ['value' => 'Fatigue, weakness, or body aches'],
            ['value' => 'Cough, breathing difficulty, or chest discomfort'],
            ['value' => 'Nausea, vomiting, diarrhea, or abdominal pain'],
            ['value' => 'Headache, rash, confusion, or reduced platelet count in severe infections'],
        ],
                'causes' => [
            ['value' => 'Bacterial infections causing sepsis or tuberculosis'],
            ['value' => 'Mosquito-borne infections such as malaria and dengue fever'],
            ['value' => 'Viral infections spreading through respiratory droplets or contaminated surfaces'],
            ['value' => 'Weak immune system or chronic medical conditions increasing infection risk'],
            ['value' => 'Poor sanitation, overcrowding, travel exposure, or environmental contamination'],
        ],
                'risks' => [
            ['value' => 'Severe sepsis or septic shock causing organ failure'],
            ['value' => 'Lung damage or respiratory complications from tuberculosis or viral infections'],
            ['value' => 'Dehydration, bleeding, or low platelet complications in dengue fever'],
            ['value' => 'Brain, liver, kidney, or cardiovascular complications in severe infections'],
            ['value' => 'Increased risk of hospitalization, chronic illness, or life-threatening emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for infectious diseases focuses on eliminating the infection, controlling symptoms, preventing complications, and supporting overall recovery. Management may include antibiotics, antiviral medications, anti-tuberculosis therapy, anti-malarial treatment, intravenous fluids, oxygen therapy, fever management, nutritional support, and intensive care support in severe cases. Patients may also benefit from vaccination, infection prevention counseling, hygiene management, isolation precautions, immune support, regular laboratory monitoring, infectious disease specialist follow-up, and long-term rehabilitation care when required.'],
        ],
                'recovery' => 'The long-term outlook for infectious diseases depends on the type and severity of infection, immune status, speed of treatment, and overall patient health. Early diagnosis, medication adherence, proper hydration, healthy nutrition, vaccination, hygiene practices, infection prevention measures, regular medical monitoring, and continuous healthcare follow-up significantly help improve recovery, reduce complications, prevent recurrence, preserve organ function, and enhance overall quality of life. _____________',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Infectious Diseases (Sepsis, TB, Malaria, Dengue, Viral Infections)',
                'meta_description' => 'Infectious diseases are illnesses caused by bacteria, viruses, parasites, fungi, or other microorganisms that can spread through air, water, food, insect bites,',
                'meta_keywords' => '',
            ]
        );
    }
}
