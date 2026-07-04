<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicLiverDiseaseCirrhosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Liver Disease / Cirrhosis')],
            [
                'name' => 'Chronic Liver Disease / Cirrhosis',
                'slug' => Str::slug('Chronic Liver Disease / Cirrhosis'),
                'h1' => 'Chronic Liver Disease / Cirrhosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic Liver Disease (CLD) refers to long-standing liver damage that gradually impairs liver function over time. Cirrhosis is the advanced stage of chronic liver disease in which healthy liver tissue is replaced by scar tissue, leading to permanent structural damage and reduced liver function. These conditions can affect digestion, metabolism, detoxification, blood clotting, and overall body health. Early diagnosis and long-term medical management are essential to slow disease progression, prevent complications, and preserve liver function.',
                'about_more' => '',
                'overview' => 'Chronic Liver Disease (CLD) refers to long-standing liver damage that gradually impairs liver function over time. Cirrhosis is the advanced stage of chronic liver disease in which healthy liver tissue is replaced by scar tissue, leading to permanent structural damage and reduced liver function. These conditions can affect digestion, metabolism, detoxification, blood clotting, and overall body health. Early diagnosis and long-term medical management are essential to slow disease progression, prevent complications, and preserve liver function.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced appetite'],
            ['value' => 'Yellowing of the skin and eyes (jaundice)'],
            ['value' => 'Swelling of the abdomen or legs due to fluid accumulation'],
            ['value' => 'Nausea, vomiting, or abdominal discomfort'],
            ['value' => 'Easy bruising, confusion, or bleeding tendencies in advanced disease'],
        ],
                'causes' => [
            ['value' => 'Chronic alcohol consumption causing liver damage'],
            ['value' => 'Viral hepatitis infections such as Hepatitis B or C'],
            ['value' => 'Fatty liver disease associated with obesity and diabetes'],
            ['value' => 'Autoimmune liver disorders or genetic metabolic diseases'],
            ['value' => 'Long-term medication toxicity or exposure to harmful substances affecting liver function'],
        ],
                'risks' => [
            ['value' => 'Liver failure and severe metabolic dysfunction'],
            ['value' => 'Portal hypertension causing internal bleeding or enlarged veins'],
            ['value' => 'Fluid accumulation in the abdomen (ascites)'],
            ['value' => 'Hepatic encephalopathy causing confusion and altered mental status'],
            ['value' => 'Increased risk of liver cancer and life-threatening infections'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for chronic liver disease and cirrhosis focuses on slowing disease progression, managing symptoms, preventing complications, and improving overall liver health. Management may include lifestyle modification, alcohol cessation, antiviral therapy, nutritional support, fluid management, medications to reduce portal hypertension, and treatment of underlying liver conditions. Severe cases may require endoscopic procedures, drainage of abdominal fluid, intensive medical care, or liver transplantation. Patients may also benefit from vaccination, diabetes management, weight control, regular liver function monitoring, hepatology follow-up, and long-term preventive healthcare to optimize liver function and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for chronic liver disease and cirrhosis depends on the severity of liver damage, underlying cause, treatment adherence, and overall patient health. Early diagnosis, alcohol avoidance, healthy nutrition, medication compliance, vaccination, regular monitoring, lifestyle modification, and continuous hepatology follow-up significantly help slow disease progression, reduce complications, preserve liver function, improve quality of life, and enhance long-term survival outcomes. ____________ 10. Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis) Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Chronic Liver Disease / Cirrhosis',
                'meta_description' => 'Chronic Liver Disease (CLD) refers to long-standing liver damage that gradually impairs liver function over time. Cirrhosis is the advanced stage of chronic liv',
                'meta_keywords' => '',
            ]
        );
    }
}
