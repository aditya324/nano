<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JaundiceCholestaticDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Jaundice / Cholestatic Disorders')],
            [
                'name' => 'Jaundice / Cholestatic Disorders',
                'slug' => Str::slug('Jaundice / Cholestatic Disorders'),
                'h1' => 'Jaundice / Cholestatic Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Jaundice is yellow discoloration of the skin and eyes due to elevated bilirubin levels. Cholestatic disorders involve impaired bile flow from the liver or bile ducts.',
                'about_more' => '',
                'overview' => 'Jaundice is yellow discoloration of the skin and eyes due to elevated bilirubin levels. Cholestatic disorders involve impaired bile flow from the liver or bile ducts.',
                'symptoms' => [
            ['value' => 'Yellow skin and eyes'],
            ['value' => 'Dark urine and pale stools'],
            ['value' => 'Itching of the skin'],
            ['value' => 'Fatigue and abdominal discomfort'],
            ['value' => 'Loss of appetite and nausea'],
        ],
                'causes' => [
            ['value' => 'Liver diseases such as hepatitis or cirrhosis'],
            ['value' => 'Gallstones and bile duct obstruction'],
            ['value' => 'Pancreatic or bile duct tumors'],
            ['value' => 'Drug-induced liver injury'],
            ['value' => 'Genetic and metabolic disorders'],
        ],
                'risks' => [
            ['value' => 'Liver failure'],
            ['value' => 'Severe infections of bile ducts'],
            ['value' => 'Vitamin deficiencies'],
            ['value' => 'Chronic liver disease progression'],
            ['value' => 'Bleeding disorders due to poor liver function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood tests and liver imaging'],
            ['value' => 'ERCP for bile duct obstruction'],
            ['value' => 'Medications for itching and liver support'],
            ['value' => 'Surgery or stenting when required'],
            ['value' => 'Treatment of the underlying cause'],
        ],
                'recovery' => 'Many causes of jaundice are treatable if diagnosed early. Chronic liver diseases may require long-term care.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Jaundice / Cholestatic Disorders',
                'meta_description' => 'Jaundice is yellow discoloration of the skin and eyes due to elevated bilirubin levels. Cholestatic disorders involve impaired bile flow from the liver or bile ',
                'meta_keywords' => '',
            ]
        );
    }
}
