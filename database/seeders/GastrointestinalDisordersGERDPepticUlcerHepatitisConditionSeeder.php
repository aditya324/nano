<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalDisordersGERDPepticUlcerHepatitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)')],
            [
                'name' => 'Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)',
                'slug' => Str::slug('Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)'),
                'h1' => 'Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal disorders are medical conditions affecting the digestive system, including the esophagus, stomach, intestines, and liver. Conditions such as Gastroesophageal Reflux Disease (GERD), peptic ulcer disease, and hepatitis can interfere with digestion, nutrient absorption, liver function, and overall metabolic health. These disorders may range from mild chronic discomfort to severe complications requiring long-term medical management. Early diagnosis and appropriate treatment are essential to prevent digestive complications and maintain overall health.',
                'about_more' => '',
                'overview' => 'Gastrointestinal disorders are medical conditions affecting the digestive system, including the esophagus, stomach, intestines, and liver. Conditions such as Gastroesophageal Reflux Disease (GERD), peptic ulcer disease, and hepatitis can interfere with digestion, nutrient absorption, liver function, and overall metabolic health. These disorders may range from mild chronic discomfort to severe complications requiring long-term medical management. Early diagnosis and appropriate treatment are essential to prevent digestive complications and maintain overall health.',
                'symptoms' => [
            ['value' => 'Abdominal pain, bloating, or discomfort'],
            ['value' => 'Acid reflux, heartburn, or difficulty swallowing'],
            ['value' => 'Nausea, vomiting, or loss of appetite'],
            ['value' => 'Fatigue, weakness, or unexplained weight changes'],
            ['value' => 'Jaundice, dark urine, or digestive disturbances in liver-related conditions'],
        ],
                'causes' => [
            ['value' => 'Excess stomach acid production or weakened lower esophageal sphincter in GERD'],
            ['value' => 'Helicobacter pylori infection or prolonged painkiller use causing peptic ulcers'],
            ['value' => 'Viral infections such as Hepatitis A, B, or C affecting the liver'],
            ['value' => 'Alcohol consumption, smoking, or unhealthy dietary habits'],
            ['value' => 'Autoimmune disorders, obesity, stress, or metabolic conditions affecting digestive health'],
        ],
                'risks' => [
            ['value' => 'Gastrointestinal bleeding or ulcer perforation'],
            ['value' => 'Chronic liver disease, cirrhosis, or liver failure'],
            ['value' => 'Esophageal inflammation or narrowing due to chronic acid reflux'],
            ['value' => 'Nutritional deficiencies and impaired digestion'],
            ['value' => 'Increased risk of liver cancer or severe digestive complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for gastrointestinal disorders focuses on relieving symptoms, controlling inflammation, promoting healing, preventing complications, and improving digestive and liver health. Management may include acid-suppressing medications, antibiotics for infections, antiviral therapy, dietary modification, hydration support, alcohol and smoking cessation, and lifestyle changes. Patients with severe liver disease or gastrointestinal complications may require hospitalization, endoscopic procedures, liver monitoring, or specialized hepatology care. Nutritional counseling, stress management, preventive vaccinations, regular laboratory testing, and long-term gastroenterology follow-up are important components of comprehensive digestive healthcare.'],
        ],
                'recovery' => 'The long-term outlook for gastrointestinal disorders depends on the specific condition, severity of disease, treatment adherence, and overall lifestyle management. Early diagnosis, healthy nutrition, medication compliance, alcohol avoidance, smoking cessation, stress reduction, routine medical monitoring, vaccination, and continuous gastroenterology follow-up significantly help improve digestive health, reduce complications, preserve liver function, and enhance overall quality of life. _________________ 11. Respiratory Disorders (COPD, Asthma, Pneumonia) Respiratory Disorders (COPD, Asthma, Pneumonia)',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Disorders (GERD, Peptic Ulcer, Hepatitis)',
                'meta_description' => 'Gastrointestinal disorders are medical conditions affecting the digestive system, including the esophagus, stomach, intestines, and liver. Conditions such as Ga',
                'meta_keywords' => '',
            ]
        );
    }
}
