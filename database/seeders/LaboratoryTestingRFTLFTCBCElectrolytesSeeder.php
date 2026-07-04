<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaboratoryTestingRFTLFTCBCElectrolytesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laboratory Testing (RFT, LFT, CBC & Electrolytes)')],
            [
                'title' => 'Laboratory Testing (RFT, LFT, CBC & Electrolytes)',
                'slug' => Str::slug('Laboratory Testing (RFT, LFT, CBC & Electrolytes)'),
                'introduction' => 'Laboratory testing involves blood and diagnostic investigations used to evaluate organ function, detect infections, monitor chronic diseases, and assess overall health status. Common laboratory tests such as Renal Function Tests (RFT), Liver Function Tests (LFT), Complete Blood Count (CBC), and electrolyte analysis provide essential clinical information for accurate diagnosis, treatment planning, preventive healthcare, and ongoing medical monitoring.',
                'what_is' => 'Laboratory investigations are important components of emergency medicine, preventive healthcare, chronic disease management, intensive care, and routine medical evaluation. Renal Function Tests (RFT) assess kidney performance and fluid balance, while Liver Function Tests (LFT) evaluate liver health and metabolic function. Complete Blood Count (CBC) measures red blood cells, white blood cells, platelets, hemoglobin levels, and infection markers, helping detect anemia, infection, inflammation, and blood disorders. Electrolyte testing evaluates sodium, potassium, calcium, magnesium, and other essential minerals responsible for maintaining heart, nerve, muscle, and metabolic function. These tests support early diagnosis, disease monitoring, and timely medical intervention across a wide range of health conditions.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or unexplained illness'],
            ['value' => 'Fever or suspected infection'],
            ['value' => 'Swelling, dehydration, or fluid imbalance'],
            ['value' => 'Jaundice or signs of liver dysfunction'],
            ['value' => 'Abnormal blood pressure, kidney, or metabolic symptoms'],
        ],
                'causes' => [
            ['value' => 'Kidney disease, dehydration, or fluid imbalance'],
            ['value' => 'Liver disorders, hepatitis, or metabolic abnormalities'],
            ['value' => 'Infection, inflammation, or unexplained fever'],
            ['value' => 'Anemia, nutritional deficiencies, or blood disorders'],
            ['value' => 'Diabetes, hypertension, or chronic medical conditions requiring monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of underlying medical conditions'],
            ['value' => 'Missed detection of infections or organ dysfunction'],
            ['value' => 'Worsening metabolic or electrolyte imbalance'],
            ['value' => 'Increased complications due to untreated disease'],
            ['value' => 'Reduced treatment effectiveness without proper monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Laboratory testing supports accurate diagnosis, disease monitoring, treatment planning, and preventive healthcare management. Test findings help guide management for kidney disease, liver disorders, infections, anemia, metabolic conditions, electrolyte imbalance, diabetes, hypertension, and other acute or chronic illnesses. Depending on the results, treatment may include medications, hydration therapy, nutritional support, lifestyle modification, specialist referral, hospitalization, or advanced diagnostic evaluation. Patients may also benefit from preventive health screening, chronic disease monitoring, regular follow-up testing, and continuous medical supervision to optimize long-term health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular laboratory monitoring and repeat testing when required'],
            ['value' => 'Review and interpretation of investigation results'],
            ['value' => 'Monitoring response to treatment and medication therapy'],
            ['value' => 'Early detection of complications or disease progression'],
            ['value' => 'Coordination with specialist care and long-term health monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of underlying medical conditions'],
            ['value' => 'Missed detection of infections or organ dysfunction'],
            ['value' => 'Worsening metabolic or electrolyte imbalance'],
            ['value' => 'Increased complications due to untreated disease'],
            ['value' => 'Reduced treatment effectiveness without proper monitoring'],
            ['value' => 'Treatment Options'],
            ['value' => 'Laboratory testing supports accurate diagnosis, disease monitoring, treatment planning, and preventive healthcare management. Test findings help guide management for kidney disease, liver disorders, infections, anemia, metabolic conditions, electrolyte imbalance, diabetes, hypertension, and other acute or chronic illnesses. Depending on the results, treatment may include medications, hydration therapy, nutritional support, lifestyle modification, specialist referral, hospitalization, or advanced diagnostic evaluation. Patients may also benefit from preventive health screening, chronic disease monitoring, regular follow-up testing, and continuous medical supervision to optimize long-term health outcomes.'],
        ],
                'long_term_outlook' => 'Routine laboratory testing plays a vital role in early disease detection, preventive healthcare, and long-term medical management. Timely investigations, accurate interpretation, regular monitoring, healthy lifestyle habits, medication adherence, and continuous medical follow-up significantly help improve treatment outcomes, reduce complications, preserve organ function, support early intervention, and promote overall health and well-being.',
                'conclusion' => '',
                'seo_title' => 'Laboratory Testing (RFT, LFT, CBC & Electrolytes)',
                'seo_description' => 'Laboratory testing involves blood and diagnostic investigations used to evaluate organ function, detect infections, monitor chronic diseases, and assess overall health status. Common laboratory tests such as Renal Function Tests (RFT), Liver Function Tests (LFT), Complete Blood Count (CBC), and electrolyte analysis provide essential clinical information for accurate diagnosis, treatment planning, preventive healthcare, and ongoing medical monitoring.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
