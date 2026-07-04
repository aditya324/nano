<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalBleedUpperLowerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Bleed (Upper / Lower)')],
            [
                'name' => 'Gastrointestinal Bleed (Upper / Lower)',
                'slug' => Str::slug('Gastrointestinal Bleed (Upper / Lower)'),
                'h1' => 'Gastrointestinal Bleed (Upper / Lower)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal bleeding refers to bleeding anywhere within the digestive tract and may range from mild blood loss to life-threatening hemorrhage.',
                'about_more' => '',
                'overview' => 'Gastrointestinal bleeding refers to bleeding anywhere within the digestive tract and may range from mild blood loss to life-threatening hemorrhage.',
                'symptoms' => [
            ['value' => 'Vomiting blood'],
            ['value' => 'Black tarry stools'],
            ['value' => 'Fresh rectal bleeding'],
            ['value' => 'Weakness and dizziness'],
            ['value' => 'Low blood pressure in severe bleeding'],
        ],
                'causes' => [
            ['value' => 'Peptic ulcers'],
            ['value' => 'Varices and liver disease'],
            ['value' => 'Hemorrhoids or colorectal disease'],
            ['value' => 'Gastrointestinal cancers'],
            ['value' => 'Inflammatory bowel disease'],
        ],
                'risks' => [
            ['value' => 'Severe anemia'],
            ['value' => 'Shock and circulatory collapse'],
            ['value' => 'Organ damage due to blood loss'],
            ['value' => 'Recurrent bleeding episodes'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency stabilization and fluids'],
            ['value' => 'Blood transfusion if needed'],
            ['value' => 'Endoscopy and colonoscopy'],
            ['value' => 'Medications to control bleeding'],
            ['value' => 'Surgery or interventional procedures in severe cases'],
        ],
                'recovery' => 'Outcome depends on the cause and severity. Early diagnosis and treatment greatly improve survival.',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Bleed (Upper / Lower)',
                'meta_description' => 'Gastrointestinal bleeding refers to bleeding anywhere within the digestive tract and may range from mild blood loss to life-threatening hemorrhage.',
                'meta_keywords' => '',
            ]
        );
    }
}
