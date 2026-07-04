<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverTumorsHepatocellularCarcinomaBenignTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Liver Tumors (Hepatocellular Carcinoma, Benign Tumors)')],
            [
                'name' => 'Liver Tumors (Hepatocellular Carcinoma, Benign Tumors)',
                'slug' => Str::slug('Liver Tumors (Hepatocellular Carcinoma, Benign Tumors)'),
                'h1' => 'Liver Tumors (Hepatocellular Carcinoma, Benign Tumors)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Liver tumors may be benign (non-cancerous) or malignant (cancerous). Hepatocellular carcinoma (HCC) is the most common primary liver cancer and often develops in patients with chronic liver disease.',
                'about_more' => '',
                'overview' => 'Liver tumors may be benign (non-cancerous) or malignant (cancerous). Hepatocellular carcinoma (HCC) is the most common primary liver cancer and often develops in patients with chronic liver disease.',
                'symptoms' => [
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Weight loss and poor appetite'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice in advanced disease'],
            ['value' => 'Enlarged liver or abdominal mass'],
        ],
                'causes' => [
            ['value' => 'Chronic hepatitis B or C infection'],
            ['value' => 'Liver cirrhosis and alcohol-related disease'],
            ['value' => 'Fatty liver disease (NAFLD/NASH)'],
            ['value' => 'Exposure to toxins and smoking'],
            ['value' => 'Genetic and metabolic liver disorders'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to other organs'],
            ['value' => 'Liver failure'],
            ['value' => 'Internal bleeding'],
            ['value' => 'Severe weight loss and malnutrition'],
            ['value' => 'Reduced survival if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound, CT scan, or MRI evaluation'],
            ['value' => 'Surgical removal of tumors'],
            ['value' => 'Radiofrequency ablation or embolization'],
            ['value' => 'Chemotherapy or targeted therapy'],
            ['value' => 'Liver transplantation in selected cases'],
        ],
                'recovery' => 'Benign tumors often require monitoring only, while malignant tumors need early treatment for better survival outcomes.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Liver Tumors (Hepatocellular Carcinoma, Benign Tumors)',
                'meta_description' => 'Liver tumors may be benign (non-cancerous) or malignant (cancerous). Hepatocellular carcinoma (HCC) is the most common primary liver cancer and often develops i',
                'meta_keywords' => '',
            ]
        );
    }
}
