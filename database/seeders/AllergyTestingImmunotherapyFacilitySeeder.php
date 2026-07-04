<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AllergyTestingImmunotherapyFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Allergy Testing & Immunotherapy Facility')],
            [
                'title' => 'Allergy Testing & Immunotherapy Facility',
                'slug' => Str::slug('Allergy Testing & Immunotherapy Facility'),
                'introduction' => 'An allergy testing and immunotherapy facility is a specialized ENT and allergy care unit used to diagnose allergic conditions and provide long-term allergy treatment. The facility helps identify allergens responsible for respiratory, nasal, skin, and environmental allergy symptoms. Immunotherapy can reduce allergy severity and improve quality of life.',
                'what_is' => 'The facility may provide: Skin prick testing Blood allergy testing Allergen identification Immunotherapy injections Allergy counseling Environmental control guidance Common conditions evaluated include: Allergic rhinitis Sinus allergies Asthma-related allergies Dust and pollen sensitivity Food-related allergic reactions Immunotherapy gradually reduces allergic sensitivity over time.',
                'symptoms' => [
            ['value' => 'Sneezing and nasal blockage'],
            ['value' => 'Itchy nose or eyes'],
            ['value' => 'Recurrent sinus symptoms'],
            ['value' => 'Chronic cough or wheezing'],
            ['value' => 'Seasonal allergy symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild allergic reactions during testing'],
            ['value' => 'Skin irritation at testing sites'],
            ['value' => 'Rare severe allergic reactions'],
            ['value' => 'Temporary worsening of symptoms'],
            ['value' => 'Need for long-term treatment commitment'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid known allergens whenever possible'],
            ['value' => 'Follow immunotherapy schedules consistently'],
            ['value' => 'Take prescribed allergy medications regularly'],
            ['value' => 'Monitor for allergic reactions after treatment'],
            ['value' => 'Attend regular allergy follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild allergic reactions during testing'],
            ['value' => 'Skin irritation at testing sites'],
            ['value' => 'Rare severe allergic reactions'],
            ['value' => 'Temporary worsening of symptoms'],
            ['value' => 'Need for long-term treatment commitment'],
        ],
                'long_term_outlook' => 'Allergy testing and immunotherapy improve allergy control, reduce symptom severity, and enhance long-term respiratory and ENT health.',
                'conclusion' => '',
                'seo_title' => 'Allergy Testing & Immunotherapy Facility',
                'seo_description' => 'An allergy testing and immunotherapy facility is a specialized ENT and allergy care unit used to diagnose allergic conditions and provide long-term allergy treatment. The facility helps identify allergens responsible for respiratory, nasal, skin, and environmental allergy symptoms. Immunotherapy can reduce allergy severity and improve quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
