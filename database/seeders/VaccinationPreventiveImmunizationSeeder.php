<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaccinationPreventiveImmunizationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vaccination / Preventive Immunization')],
            [
                'title' => 'Vaccination / Preventive Immunization',
                'slug' => Str::slug('Vaccination / Preventive Immunization'),
                'introduction' => 'Vaccination and preventive immunization are healthcare measures used to protect individuals from infectious diseases by strengthening the body’s immune response. Vaccines help the immune system recognize and fight harmful viruses and bacteria, reducing the risk of infection, severe illness, hospitalization, and disease transmission.',
                'what_is' => 'Preventive immunization is an important part of public health and preventive medicine. Vaccines are recommended for children, adults, elderly individuals, healthcare workers, travelers, and people with chronic illnesses or weakened immunity. Common vaccines help prevent diseases such as influenza, hepatitis, pneumonia, COVID-19, tetanus, measles, tuberculosis, and other vaccine-preventable infections. Immunization schedules are planned according to age, medical condition, and risk factors.',
                'symptoms' => [
            ['value' => 'Increased vulnerability to infectious diseases'],
            ['value' => 'Recurrent infections or weakened immunity'],
            ['value' => 'Fever, cough, or exposure-related infection risk'],
            ['value' => 'Chronic medical conditions increasing infection susceptibility'],
            ['value' => 'Risk of disease exposure during outbreaks or travel'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Higher risk of preventable infectious diseases'],
            ['value' => 'Severe illness and infection-related complications'],
            ['value' => 'Increased hospitalization due to infectious outbreaks'],
            ['value' => 'Spread of infections within families and communities'],
            ['value' => 'Greater infection risk in immunocompromised individuals'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Observation for mild side effects such as fever or soreness at the injection site'],
            ['value' => 'Adequate hydration and rest after vaccination'],
            ['value' => 'Monitoring for rare allergic or adverse reactions'],
            ['value' => 'Completion of booster doses and scheduled immunizations'],
            ['value' => 'Continued preventive healthcare and infection control practices'],
        ],
                'surgery_risks' => [
            ['value' => 'Higher risk of preventable infectious diseases'],
            ['value' => 'Severe illness and infection-related complications'],
            ['value' => 'Increased hospitalization due to infectious outbreaks'],
            ['value' => 'Spread of infections within families and communities'],
            ['value' => 'Greater infection risk in immunocompromised individuals'],
        ],
                'long_term_outlook' => 'The long-term outlook with vaccination and preventive immunization is highly beneficial for both individual and public health. Vaccines significantly reduce the risk of severe infections, long-term complications, disease outbreaks, and infection-related mortality. Regular immunization and preventive healthcare practices are essential for maintaining long-term immunity, community protection, and overall well-being.',
                'conclusion' => '',
                'seo_title' => 'Vaccination / Preventive Immunization',
                'seo_description' => 'Vaccination and preventive immunization are healthcare measures used to protect individuals from infectious diseases by strengthening the body’s immune response. Vaccines help the immune system recognize and fight harmful viruses and bacteria, reducing the risk of infection, severe illness, hospitalization, and disease transmission.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
