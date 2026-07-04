<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NonAlcoholicFattyLiverDiseaseNAFLDNASHConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Non-Alcoholic Fatty Liver Disease (NAFLD) / NASH')],
            [
                'name' => 'Non-Alcoholic Fatty Liver Disease (NAFLD) / NASH',
                'slug' => Str::slug('Non-Alcoholic Fatty Liver Disease (NAFLD) / NASH'),
                'h1' => 'Non-Alcoholic Fatty Liver Disease (NAFLD) / NASH',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'NAFLD is accumulation of excess fat in the liver unrelated to alcohol use. NASH is a more severe form involving liver inflammation and damage.',
                'about_more' => '',
                'overview' => 'NAFLD is accumulation of excess fat in the liver unrelated to alcohol use. NASH is a more severe form involving liver inflammation and damage.',
                'symptoms' => [
            ['value' => 'Fatigue and low energy'],
            ['value' => 'Mild abdominal discomfort'],
            ['value' => 'Obesity and metabolic syndrome'],
            ['value' => 'Elevated liver enzymes'],
            ['value' => 'Often asymptomatic in early stages'],
        ],
                'causes' => [
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'High cholesterol and triglycerides'],
            ['value' => 'Insulin resistance'],
            ['value' => 'Poor dietary habits'],
        ],
                'risks' => [
            ['value' => 'Liver fibrosis and cirrhosis'],
            ['value' => 'Liver cancer'],
            ['value' => 'Cardiovascular disease'],
            ['value' => 'Diabetes progression'],
            ['value' => 'Chronic liver failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Weight reduction and exercise'],
            ['value' => 'Healthy low-fat diet'],
            ['value' => 'Diabetes and cholesterol control'],
            ['value' => 'Regular liver monitoring'],
            ['value' => 'Lifestyle modification programs'],
        ],
                'recovery' => 'Early-stage fatty liver disease can often be reversed with proper lifestyle changes and metabolic control.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Non-Alcoholic Fatty Liver Disease (NAFLD) / NASH',
                'meta_description' => 'NAFLD is accumulation of excess fat in the liver unrelated to alcohol use. NASH is a more severe form involving liver inflammation and damage.',
                'meta_keywords' => '',
            ]
        );
    }
}
