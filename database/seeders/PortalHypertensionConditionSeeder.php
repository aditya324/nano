<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortalHypertensionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Portal Hypertension')],
            [
                'name' => 'Portal Hypertension',
                'slug' => Str::slug('Portal Hypertension'),
                'h1' => 'Portal Hypertension',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Portal hypertension is increased pressure in the portal venous system, commonly caused by liver cirrhosis and chronic liver disease.',
                'about_more' => '',
                'overview' => 'Portal hypertension is increased pressure in the portal venous system, commonly caused by liver cirrhosis and chronic liver disease.',
                'symptoms' => [
            ['value' => 'Abdominal swelling due to ascites'],
            ['value' => 'Enlarged veins in the esophagus (varices)'],
            ['value' => 'Gastrointestinal bleeding'],
            ['value' => 'Enlarged spleen'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Liver cirrhosis'],
            ['value' => 'Chronic hepatitis infection'],
            ['value' => 'Alcohol-related liver disease'],
            ['value' => 'Portal vein thrombosis'],
            ['value' => 'Fatty liver disease'],
        ],
                'risks' => [
            ['value' => 'Life-threatening variceal bleeding'],
            ['value' => 'Ascites and abdominal infection'],
            ['value' => 'Hepatic encephalopathy'],
            ['value' => 'Kidney dysfunction'],
            ['value' => 'Liver failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medications to reduce portal pressure'],
            ['value' => 'Endoscopic treatment of varices'],
            ['value' => 'Diuretics and salt restriction'],
            ['value' => 'TIPS procedure in severe cases'],
            ['value' => 'Liver transplantation for advanced disease'],
        ],
                'recovery' => 'Outcome depends on the severity of underlying liver disease. Regular monitoring helps reduce serious complications.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Portal Hypertension',
                'meta_description' => 'Portal hypertension is increased pressure in the portal venous system, commonly caused by liver cirrhosis and chronic liver disease.',
                'meta_keywords' => '',
            ]
        );
    }
}
