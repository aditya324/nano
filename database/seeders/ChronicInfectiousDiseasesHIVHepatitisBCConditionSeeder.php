<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicInfectiousDiseasesHIVHepatitisBCConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Infectious Diseases (HIV, Hepatitis B/C)')],
            [
                'name' => 'Chronic Infectious Diseases (HIV, Hepatitis B/C)',
                'slug' => Str::slug('Chronic Infectious Diseases (HIV, Hepatitis B/C)'),
                'h1' => 'Chronic Infectious Diseases (HIV, Hepatitis B/C)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic infectious diseases are long-term infections caused by viruses or other microorganisms that persist in the body for extended periods and may progressively affect overall health and organ function. Conditions such as Human Immunodeficiency Virus (HIV) infection and chronic Hepatitis B or Hepatitis C can weaken the immune system, damage vital organs such as the liver, and increase the risk of serious medical complications. Early diagnosis, long-term medical management, and preventive healthcare are essential to control disease progression, improve quality of life, and reduce transmission risk.',
                'about_more' => '',
                'overview' => 'Chronic infectious diseases are long-term infections caused by viruses or other microorganisms that persist in the body for extended periods and may progressively affect overall health and organ function. Conditions such as Human Immunodeficiency Virus (HIV) infection and chronic Hepatitis B or Hepatitis C can weaken the immune system, damage vital organs such as the liver, and increase the risk of serious medical complications. Early diagnosis, long-term medical management, and preventive healthcare are essential to control disease progression, improve quality of life, and reduce transmission risk.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or unexplained weight loss'],
            ['value' => 'Fever, night sweats, or recurrent infections'],
            ['value' => 'Loss of appetite, nausea, or abdominal discomfort'],
            ['value' => 'Jaundice, dark urine, or liver-related symptoms in hepatitis'],
            ['value' => 'Swollen lymph nodes, skin changes, or reduced immunity-related symptoms'],
        ],
                'causes' => [
            ['value' => 'Viral infections caused by HIV, Hepatitis B, or Hepatitis C viruses'],
            ['value' => 'Transmission through infected blood, body fluids, or unprotected sexual contact'],
            ['value' => 'Shared needles, unsafe injections, or contaminated medical equipment'],
            ['value' => 'Mother-to-child transmission during pregnancy or childbirth'],
            ['value' => 'Reduced immunity, lack of vaccination, or exposure to infected individuals increasing infection risk'],
        ],
                'risks' => [
            ['value' => 'Liver cirrhosis, liver failure, or liver cancer in chronic hepatitis'],
            ['value' => 'Severe immune suppression and opportunistic infections in HIV'],
            ['value' => 'Chronic fatigue, nutritional deficiency, or metabolic complications'],
            ['value' => 'Increased risk of kidney disease, cardiovascular disease, or neurological complications'],
            ['value' => 'Long-term organ damage and reduced quality of life if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for chronic infectious diseases focuses on controlling viral activity, preventing complications, improving immune function, and supporting long-term health. Management may include antiretroviral therapy (ART) for HIV, antiviral medications for Hepatitis B and C, liver function monitoring, nutritional support, vaccination, and infection prevention counseling. Patients may also benefit from lifestyle modification, alcohol avoidance, safe health practices, psychological support, regular laboratory testing, infectious disease specialist follow-up, and long-term preventive healthcare to maintain immune and organ health.'],
        ],
                'recovery' => 'The long-term outlook for chronic infectious diseases has improved significantly with early diagnosis and advanced medical treatment. Medication adherence, healthy nutrition, regular exercise, vaccination, safe lifestyle practices, routine laboratory monitoring, mental health support, and continuous medical follow-up significantly help control infection, reduce complications, preserve liver and immune function, improve overall health, and enhance quality of life. __________________',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Chronic Infectious Diseases (HIV, Hepatitis B/C)',
                'meta_description' => 'Chronic infectious diseases are long-term infections caused by viruses or other microorganisms that persist in the body for extended periods and may progressive',
                'meta_keywords' => '',
            ]
        );
    }
}
