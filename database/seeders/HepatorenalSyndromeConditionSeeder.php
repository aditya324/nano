<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HepatorenalSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hepatorenal Syndrome')],
            [
                'name' => 'Hepatorenal Syndrome',
                'slug' => Str::slug('Hepatorenal Syndrome'),
                'h1' => 'Hepatorenal Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hepatorenal syndrome is a severe form of kidney failure that occurs in people with advanced liver disease, especially liver cirrhosis. Poor liver function causes changes in blood circulation, leading to reduced blood flow to the kidneys despite structurally normal kidneys. It is a serious complication associated with advanced liver failure and requires urgent medical attention.',
                'about_more' => '',
                'overview' => 'Hepatorenal syndrome is a severe form of kidney failure that occurs in people with advanced liver disease, especially liver cirrhosis. Poor liver function causes changes in blood circulation, leading to reduced blood flow to the kidneys despite structurally normal kidneys. It is a serious complication associated with advanced liver failure and requires urgent medical attention.',
                'symptoms' => [
            ['value' => 'Reduced urine output'],
            ['value' => 'Swelling of abdomen and legs due to fluid accumulation'],
            ['value' => 'Fatigue, weakness, and confusion'],
            ['value' => 'Yellow discoloration of skin and eyes (jaundice)'],
            ['value' => 'Low blood pressure and worsening kidney function'],
        ],
                'causes' => [
            ['value' => 'Advanced liver cirrhosis'],
            ['value' => 'Severe liver failure and portal hypertension'],
            ['value' => 'Gastrointestinal bleeding or severe infections'],
            ['value' => 'Excessive fluid loss or dehydration'],
            ['value' => 'Alcohol-related or chronic liver disease complications'],
        ],
                'risks' => [
            ['value' => 'Rapid progression to kidney failure'],
            ['value' => 'Severe electrolyte imbalance'],
            ['value' => 'Fluid overload and breathing difficulties'],
            ['value' => 'Multi-organ dysfunction'],
            ['value' => 'High mortality risk without liver transplantation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Intravenous albumin and circulation-supporting medications'],
            ['value' => 'Management of liver disease complications'],
            ['value' => 'Dialysis support when necessary'],
            ['value' => 'Intensive monitoring in severe cases'],
            ['value' => 'Liver transplantation as definitive treatment'],
        ],
                'recovery' => 'The prognosis depends largely on liver disease severity. Some patients improve temporarily with medical therapy, but liver transplantation offers the best long-term outcome for eligible patients.',
                'sort_order' => 42,
                'is_active' => true,
                'meta_title' => 'Hepatorenal Syndrome',
                'meta_description' => 'Hepatorenal syndrome is a severe form of kidney failure that occurs in people with advanced liver disease, especially liver cirrhosis. Poor liver function cause',
                'meta_keywords' => '',
            ]
        );
    }
}
