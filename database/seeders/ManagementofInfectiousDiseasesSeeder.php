<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofInfectiousDiseasesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Infectious Diseases')],
            [
                'title' => 'Management of Infectious Diseases',
                'slug' => Str::slug('Management of Infectious Diseases'),
                'introduction' => 'Management of infectious diseases involves the diagnosis, treatment, monitoring, and prevention of illnesses caused by bacteria, viruses, parasites, and other infectious organisms. Treatment plans commonly include antibiotics, antiviral medications, antimalarial therapies, supportive care, and infection control measures to reduce complications and prevent disease spread.',
                'what_is' => 'Infectious disease management is essential for treating conditions such as pneumonia, tuberculosis, dengue, malaria, viral infections, urinary tract infections, sepsis, and other communicable diseases. Treatment approaches are tailored according to the type of infection, severity of illness, patient health condition, and laboratory findings. Early diagnosis, appropriate medication therapy, and continuous monitoring play a critical role in successful recovery and prevention of complications.',
                'symptoms' => [
            ['value' => 'Fever, chills, or sweating'],
            ['value' => 'Fatigue and body weakness'],
            ['value' => 'Cough, breathing difficulty, or sore throat'],
            ['value' => 'Nausea, vomiting, or diarrhea'],
            ['value' => 'Body aches, headache, or signs of systemic infection'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe infection and organ dysfunction'],
            ['value' => 'Sepsis and life-threatening complications'],
            ['value' => 'Spread of infection to other individuals or organs'],
            ['value' => 'Drug-resistant infections due to incomplete treatment'],
            ['value' => 'Increased complications in immunocompromised individuals'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of symptoms and vital signs'],
            ['value' => 'Medication adherence and completion of prescribed treatment'],
            ['value' => 'Laboratory testing and infection response monitoring'],
            ['value' => 'Hydration, nutritional support, and rest'],
            ['value' => 'Infection prevention counseling and follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe infection and organ dysfunction'],
            ['value' => 'Sepsis and life-threatening complications'],
            ['value' => 'Spread of infection to other individuals or organs'],
            ['value' => 'Drug-resistant infections due to incomplete treatment'],
            ['value' => 'Increased complications in immunocompromised individuals'],
        ],
                'long_term_outlook' => 'The long-term outlook for infectious disease management depends on the type and severity of infection, early diagnosis, and response to treatment. Most infections can be successfully treated with timely medical care and appropriate medications. Ongoing monitoring, vaccination, hygiene practices, and preventive healthcare are important for reducing recurrence, preventing complications, and supporting long-term health.',
                'conclusion' => '',
                'seo_title' => 'Management of Infectious Diseases',
                'seo_description' => 'Management of infectious diseases involves the diagnosis, treatment, monitoring, and prevention of illnesses caused by bacteria, viruses, parasites, and other infectious organisms. Treatment plans commonly include antibiotics, antiviral medications, antimalarial therapies, supportive care, and infection control measures to reduce complications and prevent disease spread.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
