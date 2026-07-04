<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverTumorsBenignMalignantConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Liver Tumors (Benign/Malignant)')],
            [
                'name' => 'Liver Tumors (Benign/Malignant)',
                'slug' => Str::slug('Liver Tumors (Benign/Malignant)'),
                'h1' => 'Liver Tumors (Benign/Malignant)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Liver tumors may be benign growths such as hemangiomas or malignant cancers such as hepatocellular carcinoma and metastatic tumors. They can affect liver function and overall health.',
                'about_more' => '',
                'overview' => 'Liver tumors may be benign growths such as hemangiomas or malignant cancers such as hepatocellular carcinoma and metastatic tumors. They can affect liver function and overall health.',
                'symptoms' => [
            ['value' => 'Right upper abdominal pain or heaviness'],
            ['value' => 'Loss of appetite and weight loss'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice in advanced cases'],
            ['value' => 'Abdominal swelling due to liver enlargement'],
        ],
                'causes' => [
            ['value' => 'Chronic hepatitis B or C infection'],
            ['value' => 'Liver cirrhosis and alcohol abuse'],
            ['value' => 'Fatty liver disease'],
            ['value' => 'Spread of cancer from other organs'],
            ['value' => 'Genetic and metabolic liver disorders'],
        ],
                'risks' => [
            ['value' => 'Liver failure'],
            ['value' => 'Internal bleeding from tumor rupture'],
            ['value' => 'Spread of cancer to other organs'],
            ['value' => 'Portal hypertension and fluid accumulation'],
            ['value' => 'Severe nutritional decline'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Liver imaging and biopsy evaluation'],
            ['value' => 'Surgical removal of liver tumors'],
            ['value' => 'Chemotherapy or targeted therapy'],
            ['value' => 'Radiofrequency ablation or embolization procedures'],
            ['value' => 'Liver transplantation in selected cases'],
        ],
                'recovery' => 'Benign tumors often require monitoring only. Prognosis of malignant tumors depends on tumor stage and liver function status.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Liver Tumors (Benign/Malignant)',
                'meta_description' => 'Liver tumors may be benign growths such as hemangiomas or malignant cancers such as hepatocellular carcinoma and metastatic tumors. They can affect liver functi',
                'meta_keywords' => '',
            ]
        );
    }
}
