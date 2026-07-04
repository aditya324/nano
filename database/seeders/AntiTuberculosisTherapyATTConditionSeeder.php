<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiTuberculosisTherapyATTConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anti-Tuberculosis Therapy (ATT)')],
            [
                'name' => 'Anti-Tuberculosis Therapy (ATT)',
                'slug' => Str::slug('Anti-Tuberculosis Therapy (ATT)'),
                'h1' => 'Anti-Tuberculosis Therapy (ATT)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Anti-Tuberculosis Therapy (ATT) is a specialized medical treatment procedure used to eliminate Mycobacterium tuberculosis infection and manage tuberculosis (TB) affecting the lungs or other organs of the body. ATT involves the use of a combination of anti-tubercular medications over a prolonged duration to control infection, prevent disease spread, reduce complications, and improve long-term recovery outcomes. Proper treatment adherence is essential to prevent drug resistance and ensure complete eradication of the infection.',
                'about_more' => '',
                'overview' => 'Anti-tuberculosis therapy typically includes multiple medications administered together in different phases of treatment to effectively destroy TB bacteria and reduce the risk of resistance. ATT is commonly used for pulmonary tuberculosis, extrapulmonary tuberculosis, latent TB infection, and drug-resistant TB under close medical supervision. Treatment duration may vary depending on the severity of infection, drug sensitivity, patient health status, and response to therapy. Regular monitoring through laboratory tests, imaging, and clinical evaluation is important to assess treatment effectiveness and detect medication-related side effects.',
                'symptoms' => [
            ['value' => 'Persistent cough lasting several weeks'],
            ['value' => 'Fever, night sweats, or chills'],
            ['value' => 'Weight loss, fatigue, or weakness'],
            ['value' => 'Chest pain or breathing difficulty'],
            ['value' => 'Coughing up blood or recurrent respiratory infections in advanced cases'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Medication-related liver toxicity or gastrointestinal side effects'],
            ['value' => 'Drug-resistant tuberculosis due to incomplete treatment'],
            ['value' => 'Vision, nerve, or hearing complications from certain medications'],
            ['value' => 'Persistent infection or spread of disease to other organs'],
            ['value' => 'Increased risk of severe lung damage if treatment is delayed or interrupted'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Anti-tuberculosis therapy focuses on eliminating TB infection, preventing transmission, controlling symptoms, and reducing long-term respiratory complications. Treatment may include first-line anti-tubercular medications, multidrug-resistant TB therapy, nutritional support, respiratory care, infection control measures, and regular laboratory monitoring. Patients may also require hospitalization, oxygen therapy, pulmonary rehabilitation, counseling, vaccination support, and management of associated conditions such as HIV/AIDS or chronic lung disease. Strict medication adherence and regular medical follow-up are essential for successful treatment completion and prevention of recurrence.'],
            ['value' => 'Regular monitoring of treatment response and respiratory symptoms'],
            ['value' => 'Periodic liver function and laboratory evaluation during therapy'],
            ['value' => 'Monitoring for medication side effects or complications'],
            ['value' => 'Nutritional support and respiratory rehabilitation when required'],
            ['value' => 'Long-term pulmonology and infectious disease follow-up care'],
        ],
                'recovery' => 'The long-term outlook following anti-tuberculosis therapy is generally positive with early diagnosis and proper treatment adherence. Completion of the full ATT course, regular medical monitoring, healthy nutrition, infection prevention measures, smoking cessation, pulmonary rehabilitation, and continuous follow-up significantly help improve recovery, prevent recurrence, reduce complications, preserve lung function, and enhance overall quality of life. ___________________ 7. Immunomodulators / Biologic Therapy (Severe Asthma, ILD) Immunomodulators / Biologic Therapy (Severe Asthma, ILD) Procedures',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Anti-Tuberculosis Therapy (ATT)',
                'meta_description' => 'Anti-Tuberculosis Therapy (ATT) is a specialized medical treatment procedure used to eliminate Mycobacterium tuberculosis infection and manage tuberculosis (TB)',
                'meta_keywords' => '',
            ]
        );
    }
}
