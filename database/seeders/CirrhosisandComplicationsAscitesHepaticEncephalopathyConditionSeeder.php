<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CirrhosisandComplicationsAscitesHepaticEncephalopathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cirrhosis and Complications (Ascites, Hepatic Encephalopathy)')],
            [
                'name' => 'Cirrhosis and Complications (Ascites, Hepatic Encephalopathy)',
                'slug' => Str::slug('Cirrhosis and Complications (Ascites, Hepatic Encephalopathy)'),
                'h1' => 'Cirrhosis and Complications (Ascites, Hepatic Encephalopathy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cirrhosis is advanced scarring of the liver resulting from chronic liver damage. It affects liver function and may lead to severe complications.',
                'about_more' => '',
                'overview' => 'Cirrhosis is advanced scarring of the liver resulting from chronic liver damage. It affects liver function and may lead to severe complications.',
                'symptoms' => [
            ['value' => 'Abdominal swelling due to ascites'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice and itching'],
            ['value' => 'Confusion or altered mental status'],
            ['value' => 'Swelling of legs and feet'],
        ],
                'causes' => [
            ['value' => 'Chronic alcohol-related liver disease'],
            ['value' => 'Viral hepatitis infections'],
            ['value' => 'Fatty liver disease (NAFLD/NASH)'],
            ['value' => 'Autoimmune liver disorders'],
            ['value' => 'Long-standing liver injury'],
        ],
                'risks' => [
            ['value' => 'Liver failure'],
            ['value' => 'Esophageal variceal bleeding'],
            ['value' => 'Hepatic encephalopathy'],
            ['value' => 'Kidney dysfunction and infections'],
            ['value' => 'Liver cancer development'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Salt restriction and diuretics for ascites'],
            ['value' => 'Lactulose and medications for encephalopathy'],
            ['value' => 'Endoscopy for variceal management'],
            ['value' => 'Liver disease monitoring and supportive care'],
            ['value' => 'Liver transplantation in advanced cases'],
        ],
                'recovery' => 'Cirrhosis is a chronic progressive disease, but early management can improve quality of life and reduce complications.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Cirrhosis and Complications (Ascites, Hepatic Encephalopathy)',
                'meta_description' => 'Cirrhosis is advanced scarring of the liver resulting from chronic liver damage. It affects liver function and may lead to severe complications.',
                'meta_keywords' => '',
            ]
        );
    }
}
