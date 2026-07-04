<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntibioticTherapyHpylorieradicationInfectiveDiarrheaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antibiotic Therapy (H. pylori eradication, Infective Diarrhea)')],
            [
                'title' => 'Antibiotic Therapy (H. pylori eradication, Infective Diarrhea)',
                'slug' => Str::slug('Antibiotic Therapy (H. pylori eradication, Infective Diarrhea)'),
                'introduction' => 'Antibiotic therapy is used in gastroenterology to treat bacterial infections such as Helicobacter pylori infection and infective diarrhea. Treatment helps eliminate infection and prevent complications.',
                'what_is' => 'Antibiotics are selected based on the type of infection and severity of symptoms. Common uses include: H. pylori eradication therapy Bacterial gastroenteritis Infective diarrhea Liver abscess treatment Intestinal infections Combination therapy may be required in resistant infections.',
                'symptoms' => [
            ['value' => 'Abdominal pain or cramps'],
            ['value' => 'Diarrhea and loose stools'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Fever associated with infection'],
            ['value' => 'Ulcer-related symptoms in H. pylori infection'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Allergic reactions'],
            ['value' => 'Diarrhea related to antibiotics'],
            ['value' => 'Nausea or stomach upset'],
            ['value' => 'Alteration of normal gut bacteria'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete the full antibiotic course'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Avoid contaminated food and water'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Report persistent symptoms to healthcare providers'],
        ],
                'surgery_risks' => [
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Allergic reactions'],
            ['value' => 'Diarrhea related to antibiotics'],
            ['value' => 'Nausea or stomach upset'],
            ['value' => 'Alteration of normal gut bacteria'],
        ],
                'long_term_outlook' => 'Appropriate antibiotic therapy effectively eradicates infections, heals ulcers, and prevents serious gastrointestinal complications.',
                'conclusion' => '',
                'seo_title' => 'Antibiotic Therapy (H. pylori eradication, Infective Diarrhea)',
                'seo_description' => 'Antibiotic therapy is used in gastroenterology to treat bacterial infections such as Helicobacter pylori infection and infective diarrhea. Treatment helps eliminate infection and prevent complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
