<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverCancerHepatocellularCarcinomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Liver Cancer (Hepatocellular Carcinoma)')],
            [
                'name' => 'Liver Cancer (Hepatocellular Carcinoma)',
                'slug' => Str::slug('Liver Cancer (Hepatocellular Carcinoma)'),
                'h1' => 'Liver Cancer (Hepatocellular Carcinoma)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Liver cancer, also known as hepatocellular carcinoma (HCC), is a type of cancer that begins in the liver cells. It is one of the most common forms of primary liver cancer and often develops in individuals with chronic liver disease or cirrhosis. Early diagnosis and timely treatment are important for improving survival and preserving liver function.',
                'about_more' => '',
                'overview' => 'Liver cancer, also known as hepatocellular carcinoma (HCC), is a type of cancer that begins in the liver cells. It is one of the most common forms of primary liver cancer and often develops in individuals with chronic liver disease or cirrhosis. Early diagnosis and timely treatment are important for improving survival and preserving liver function.',
                'symptoms' => [
            ['value' => 'Abdominal pain or swelling'],
            ['value' => 'Unexplained weight loss and loss of appetite'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice (yellowing of the skin and eyes)'],
            ['value' => 'Nausea, vomiting, or abdominal discomfort'],
        ],
                'causes' => [
            ['value' => 'Chronic hepatitis B or hepatitis C infection'],
            ['value' => 'Liver cirrhosis from alcohol-related or chronic liver disease'],
            ['value' => 'Non-alcoholic fatty liver disease (NAFLD) or metabolic liver disease'],
            ['value' => 'Smoking and long-term alcohol consumption'],
            ['value' => 'Exposure to toxins or genetic liver disorders'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or distant body parts'],
            ['value' => 'Liver failure and worsening cirrhosis'],
            ['value' => 'Internal bleeding and fluid accumulation in the abdomen'],
            ['value' => 'Severe malnutrition and weight loss'],
            ['value' => 'Complications related to chemotherapy, surgery, or liver dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of liver tumors when possible'],
            ['value' => 'Liver transplantation in selected cases'],
            ['value' => 'Chemotherapy, targeted therapy, or immunotherapy'],
            ['value' => 'Radiofrequency ablation or transarterial chemoembolization (TACE)'],
            ['value' => 'Supportive liver care and multidisciplinary cancer management'],
        ],
                'recovery' => 'The long-term outlook for liver cancer depends on the stage of cancer, liver function status, and response to treatment. Early diagnosis and specialized cancer care can significantly improve treatment outcomes and quality of life. Regular monitoring, liver disease management, healthy lifestyle changes, and long-term follow-up are important for supporting recovery and reducing the risk of recurrence. _______________ 7. Pancreatic Cancer',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Liver Cancer (Hepatocellular Carcinoma)',
                'meta_description' => 'Liver cancer, also known as hepatocellular carcinoma (HCC), is a type of cancer that begins in the liver cells. It is one of the most common forms of primary li',
                'meta_keywords' => '',
            ]
        );
    }
}
