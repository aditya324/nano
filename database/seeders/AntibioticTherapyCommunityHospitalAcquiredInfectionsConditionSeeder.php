<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntibioticTherapyCommunityHospitalAcquiredInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Antibiotic Therapy (Community & Hospital-Acquired Infections)')],
            [
                'name' => 'Antibiotic Therapy (Community & Hospital-Acquired Infections)',
                'slug' => Str::slug('Antibiotic Therapy (Community & Hospital-Acquired Infections)'),
                'h1' => 'Antibiotic Therapy (Community & Hospital-Acquired Infections)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Antibiotic therapy is a medical treatment procedure used to control and eliminate bacterial infections affecting different parts of the body. It plays a critical role in treating both community-acquired infections, which develop outside healthcare settings, and hospital-acquired infections, which occur during hospitalization or medical care. Proper antibiotic therapy helps reduce infection severity, prevent complications, support recovery, and improve patient outcomes.',
                'about_more' => '',
                'overview' => 'Antibiotic therapy involves the use of medications specifically designed to target and destroy harmful bacteria or inhibit their growth. Community-acquired infections commonly include pneumonia, urinary tract infections, skin infections, and respiratory infections, while hospital-acquired infections may involve resistant bacteria affecting the lungs, bloodstream, surgical wounds, or urinary tract. Antibiotic treatment may be administered orally, intravenously, or through other specialized methods depending on the severity and type of infection. Careful monitoring, laboratory testing, and infection control measures are important to ensure effective treatment and prevent antibiotic resistance.',
                'symptoms' => [
            ['value' => 'Fever, chills, or signs of infection'],
            ['value' => 'Cough, breathing difficulty, or chest discomfort in respiratory infections'],
            ['value' => 'Pain, swelling, redness, or pus formation in infected areas'],
            ['value' => 'Fatigue, weakness, or body aches'],
            ['value' => 'Severe infection symptoms such as low blood pressure, confusion, or sepsis in advanced cases'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Allergic reactions or medication-related side effects'],
            ['value' => 'Antibiotic resistance due to improper or prolonged antibiotic use'],
            ['value' => 'Gastrointestinal disturbances such as nausea or diarrhea'],
            ['value' => 'Secondary fungal or opportunistic infections'],
            ['value' => 'Severe infection progression if treatment is delayed or ineffective'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotic therapy focuses on eliminating bacterial infection, controlling inflammation, preventing complications, and supporting overall recovery. Treatment may include broad-spectrum or targeted antibiotics, intravenous antibiotic administration, respiratory support, fluid therapy, infection source control, laboratory monitoring, and intensive care management in severe infections. Patients may also require supportive treatments such as oxygen therapy, nutritional support, wound care, pulmonary rehabilitation, and long-term follow-up depending on the type and severity of infection. Infection prevention measures, vaccination, hand hygiene, and appropriate antibiotic stewardship are essential for reducing infection spread and resistance.'],
            ['value' => 'Regular monitoring of infection symptoms and treatment response'],
            ['value' => 'Completion of the full prescribed antibiotic course'],
            ['value' => 'Monitoring for medication side effects or allergic reactions'],
            ['value' => 'Follow-up laboratory testing and imaging when required'],
            ['value' => 'Long-term medical follow-up and infection prevention counseling'],
        ],
                'recovery' => 'The long-term outlook following antibiotic therapy depends on the type of infection, severity of illness, presence of resistant organisms, and overall patient health. Early diagnosis, proper antibiotic selection, medication adherence, infection control measures, healthy lifestyle habits, and regular medical follow-up significantly help improve recovery, reduce complications, prevent recurrent infections, and enhance overall quality of life. ______________________________ 6. Anti-Tuberculosis Therapy (ATT) Anti-Tuberculosis Therapy (ATT) Procedures',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Antibiotic Therapy (Community & Hospital-Acquired Infections)',
                'meta_description' => 'Antibiotic therapy is a medical treatment procedure used to control and eliminate bacterial infections affecting different parts of the body. It plays a critica',
                'meta_keywords' => '',
            ]
        );
    }
}
