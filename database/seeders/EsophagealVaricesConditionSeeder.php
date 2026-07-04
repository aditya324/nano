<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EsophagealVaricesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Esophageal Varices')],
            [
                'name' => 'Esophageal Varices',
                'slug' => Str::slug('Esophageal Varices'),
                'h1' => 'Esophageal Varices',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Esophageal varices are enlarged veins in the lower esophagus that usually develop due to liver cirrhosis and portal hypertension.',
                'about_more' => '',
                'overview' => 'Esophageal varices are enlarged veins in the lower esophagus that usually develop due to liver cirrhosis and portal hypertension.',
                'symptoms' => [
            ['value' => 'Vomiting blood'],
            ['value' => 'Black stools'],
            ['value' => 'Fatigue from blood loss'],
            ['value' => 'Signs of chronic liver disease'],
            ['value' => 'Sudden severe bleeding episodes'],
        ],
                'causes' => [
            ['value' => 'Liver cirrhosis'],
            ['value' => 'Portal hypertension'],
            ['value' => 'Chronic alcohol-related liver disease'],
            ['value' => 'Hepatitis infections'],
            ['value' => 'Blood flow obstruction in the liver'],
        ],
                'risks' => [
            ['value' => 'Massive life-threatening bleeding'],
            ['value' => 'Severe anemia and shock'],
            ['value' => 'Liver failure progression'],
            ['value' => 'Recurrent bleeding episodes'],
            ['value' => 'High mortality without treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency endoscopy and banding'],
            ['value' => 'Medications to reduce portal pressure'],
            ['value' => 'Blood transfusions and stabilization'],
            ['value' => 'TIPS procedure in selected cases'],
            ['value' => 'Liver disease management and transplantation evaluation'],
        ],
                'recovery' => 'Early intervention can control bleeding effectively. Long-term management of liver disease is essential.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Esophageal Varices',
                'meta_description' => 'Esophageal varices are enlarged veins in the lower esophagus that usually develop due to liver cirrhosis and portal hypertension.',
                'meta_keywords' => '',
            ]
        );
    }
}
