<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaccinationInfluenzaPneumococcalCOVID19Seeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vaccination (Influenza, Pneumococcal, COVID-19)')],
            [
                'title' => 'Vaccination (Influenza, Pneumococcal, COVID-19)',
                'slug' => Str::slug('Vaccination (Influenza, Pneumococcal, COVID-19)'),
                'introduction' => 'Vaccination is a preventive healthcare procedure used to protect individuals from serious infectious diseases by strengthening the body’s immune response against specific viruses or bacteria. Vaccines such as influenza, pneumococcal, and COVID-19 vaccines play an important role in reducing the risk of respiratory infections, severe illness, hospitalization, and life-threatening complications, especially in vulnerable individuals with chronic medical conditions or weakened immunity.',
                'what_is' => 'Influenza vaccines help protect against seasonal flu viruses, pneumococcal vaccines reduce the risk of pneumonia and invasive pneumococcal infections, and COVID-19 vaccines provide protection against coronavirus-related respiratory illness and complications. These vaccines stimulate the immune system to recognize and fight infectious agents more effectively if exposure occurs in the future. Vaccination programs are widely recommended for children, older adults, healthcare workers, individuals with chronic lung or heart disease, immunocompromised patients, and high-risk populations. Vaccines are commonly administered in hospitals, clinics, vaccination centers, and primary healthcare settings under medical supervision.',
                'symptoms' => [
            ['value' => 'Frequent respiratory infections or reduced immunity'],
            ['value' => 'Chronic lung or heart disease increasing infection risk'],
            ['value' => 'Fever, cough, or breathing complications during viral outbreaks'],
            ['value' => 'Increased susceptibility to severe respiratory illness in elderly or high-risk individuals'],
            ['value' => 'Exposure risk in healthcare, community, or crowded environments'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild fever, fatigue, or body aches after vaccination'],
            ['value' => 'Pain, redness, or swelling at the injection site'],
            ['value' => 'Temporary headache or mild allergic reactions'],
            ['value' => 'Rare severe allergic reactions requiring medical attention'],
            ['value' => 'Reduced vaccine effectiveness in severely immunocompromised individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Vaccination procedures focus on preventing infectious diseases, reducing transmission, strengthening immunity, and lowering the risk of severe respiratory and systemic complications. Preventive care may include annual influenza vaccination, pneumococcal vaccination schedules, COVID-19 primary and booster doses, infection prevention counseling, and monitoring for vaccine-related side effects. Patients may also benefit from respiratory health monitoring, chronic disease management, healthy nutrition, smoking cessation, pulmonary rehabilitation, and regular medical follow-up to support overall immune and respiratory health.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring for mild fever, soreness, or temporary post-vaccination symptoms'],
            ['value' => 'Observation for allergic reactions or unusual side effects after vaccination'],
            ['value' => 'Adequate hydration, rest, and symptom management when required'],
            ['value' => 'Follow-up booster doses or repeat vaccination schedules as recommended'],
            ['value' => 'Continued infection prevention practices and regular healthcare follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild fever, fatigue, or body aches after vaccination'],
            ['value' => 'Pain, redness, or swelling at the injection site'],
            ['value' => 'Temporary headache or mild allergic reactions'],
            ['value' => 'Rare severe allergic reactions requiring medical attention'],
            ['value' => 'Reduced vaccine effectiveness in severely immunocompromised individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Vaccination procedures focus on preventing infectious diseases, reducing transmission, strengthening immunity, and lowering the risk of severe respiratory and systemic complications. Preventive care may include annual influenza vaccination, pneumococcal vaccination schedules, COVID-19 primary and booster doses, infection prevention counseling, and monitoring for vaccine-related side effects. Patients may also benefit from respiratory health monitoring, chronic disease management, healthy nutrition, smoking cessation, pulmonary rehabilitation, and regular medical follow-up to support overall immune and respiratory health.'],
        ],
                'long_term_outlook' => 'The long-term outlook following vaccination is highly positive as vaccines significantly reduce the risk of severe infections, hospitalization, respiratory complications, and disease-related mortality. Regular vaccination, healthy lifestyle habits, infection prevention measures, chronic disease management, and continuous medical follow-up significantly help strengthen immunity, protect respiratory health, prevent outbreaks, improve public health safety, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Vaccination (Influenza, Pneumococcal, COVID-19)',
                'seo_description' => 'Vaccination is a preventive healthcare procedure used to protect individuals from serious infectious diseases by strengthening the body’s immune response against specific viruses or bacteria. Vaccines such as influenza, pneumococcal, and COVID-19 vaccines play an important role in reducing the risk of respiratory infections, severe illness, hospitalization, and life-threatening complications, especially in vulnerable individuals with chronic medical conditions or weakened immunity.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
