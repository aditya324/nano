<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UremiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Uremia')],
            [
                'name' => 'Uremia',
                'slug' => Str::slug('Uremia'),
                'h1' => 'Uremia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Uremia is a serious condition caused by the buildup of waste products and toxins in the blood due to severe kidney failure. It represents advanced kidney dysfunction and can affect nearly every organ system in the body.',
                'about_more' => '',
                'overview' => 'Uremia is a serious condition caused by the buildup of waste products and toxins in the blood due to severe kidney failure. It represents advanced kidney dysfunction and can affect nearly every organ system in the body.',
                'symptoms' => [
            ['value' => 'Severe fatigue and weakness'],
            ['value' => 'Nausea, vomiting, or poor appetite'],
            ['value' => 'Confusion or difficulty concentrating'],
            ['value' => 'Itching and metallic taste in mouth'],
            ['value' => 'Shortness of breath or swelling'],
        ],
                'causes' => [
            ['value' => 'Advanced chronic kidney disease'],
            ['value' => 'Untreated kidney failure'],
            ['value' => 'Severe acute kidney injury'],
            ['value' => 'Inadequate dialysis treatment'],
            ['value' => 'Progressive diabetic or hypertensive kidney disease'],
        ],
                'risks' => [
            ['value' => 'Life-threatening electrolyte imbalance'],
            ['value' => 'Heart inflammation or arrhythmias'],
            ['value' => 'Neurological complications and seizures'],
            ['value' => 'Severe malnutrition and weight loss'],
            ['value' => 'Death without urgent treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency dialysis or intensified dialysis therapy'],
            ['value' => 'Fluid and electrolyte correction'],
            ['value' => 'Dietary protein and fluid management'],
            ['value' => 'Treatment of underlying kidney disease'],
            ['value' => 'Kidney transplantation evaluation'],
        ],
                'recovery' => 'Uremia requires urgent medical management. Symptoms often improve significantly with dialysis or kidney transplantation, although ongoing kidney care remains essential.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Uremia',
                'meta_description' => 'Uremia is a serious condition caused by the buildup of waste products and toxins in the blood due to severe kidney failure. It represents advanced kidney dysfun',
                'meta_keywords' => '',
            ]
        );
    }
}
