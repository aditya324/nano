<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofDrugReactionsAllergicDermatosesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Drug Reactions & Allergic Dermatoses')],
            [
                'title' => 'Management of Drug Reactions & Allergic Dermatoses',
                'slug' => Str::slug('Management of Drug Reactions & Allergic Dermatoses'),
                'introduction' => 'Management of drug reactions and allergic dermatoses involves identifying, treating, and preventing skin conditions caused by allergic or hypersensitivity reactions to medications, chemicals, foods, or environmental allergens. Treatment focuses on reducing inflammation, relieving symptoms, preventing complications, and avoiding future exposure to triggering substances.',
                'what_is' => 'Drug reactions and allergic dermatoses can range from mild rashes and itching to severe inflammatory or life-threatening skin conditions. Management may include discontinuation of the triggering medication, use of antihistamines or corticosteroids, supportive skin care, and emergency treatment in severe reactions. Early diagnosis and specialist evaluation are important for preventing complications and improving recovery.',
                'symptoms' => [
            ['value' => 'Red skin rashes or hives'],
            ['value' => 'Itching, burning, or skin irritation'],
            ['value' => 'Swelling of the skin, lips, or eyes'],
            ['value' => 'Blisters, peeling skin, or painful lesions'],
            ['value' => 'Fever or flu-like symptoms associated with severe reactions'],
        ],
                'causes' => [
            ['value' => 'Drug reactions and allergic dermatoses may occur due to hypersensitivity responses triggered by medications, foods, chemicals, cosmetics, infections, or environmental allergens. Common medications associated with allergic skin reactions include antibiotics, pain relievers, anticonvulsants, and anti-inflammatory drugs. Exposure to certain skincare products, detergents, metals, insect bites, and airborne allergens may also contribute to allergic skin conditions. Individuals with a history of allergies, asthma, eczema, or weakened immunity may be at a higher risk of developing allergic dermatoses.'],
        ],
                'condition_risks' => [
            ['value' => 'Severe allergic skin reactions or widespread inflammation'],
            ['value' => 'Skin infections due to damaged skin barriers'],
            ['value' => 'Breathing difficulty or anaphylactic reactions in severe cases'],
            ['value' => 'Long-term skin discoloration or scarring'],
            ['value' => 'Recurrence of allergic reactions with repeat exposure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for drug reactions and allergic dermatoses focus on identifying and eliminating the triggering substance while controlling inflammation and relieving symptoms. The first step often involves stopping the suspected medication or avoiding the allergen responsible for the reaction. Mild allergic reactions may be managed with antihistamines, soothing moisturizers, and topical corticosteroids to reduce itching and inflammation. More severe reactions may require oral or injectable corticosteroids, immunosuppressive medications, intravenous fluids, or emergency medical care in cases involving breathing difficulty or widespread skin involvement. Supportive skincare, hydration, infection prevention, and regular dermatologic monitoring are important parts of recovery and long-term management.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoidance of known allergens or triggering medications'],
            ['value' => 'Regular use of prescribed medications and supportive skincare'],
            ['value' => 'Monitoring for worsening symptoms or secondary infections'],
            ['value' => 'Hydration, nutrition, and skin protection measures'],
            ['value' => 'Allergy evaluation and dermatologic follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe allergic skin reactions or widespread inflammation'],
            ['value' => 'Skin infections due to damaged skin barriers'],
            ['value' => 'Breathing difficulty or anaphylactic reactions in severe cases'],
            ['value' => 'Long-term skin discoloration or scarring'],
            ['value' => 'Recurrence of allergic reactions with repeat exposure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for drug reactions and allergic dermatoses focus on identifying and eliminating the triggering substance while controlling inflammation and relieving symptoms. The first step often involves stopping the suspected medication or avoiding the allergen responsible for the reaction. Mild allergic reactions may be managed with antihistamines, soothing moisturizers, and topical corticosteroids to reduce itching and inflammation. More severe reactions may require oral or injectable corticosteroids, immunosuppressive medications, intravenous fluids, or emergency medical care in cases involving breathing difficulty or widespread skin involvement. Supportive skincare, hydration, infection prevention, and regular dermatologic monitoring are important parts of recovery and long-term management.'],
        ],
                'long_term_outlook' => 'The long-term outlook for drug reactions and allergic dermatoses is generally positive when triggers are identified and avoided appropriately. Most mild reactions improve with timely treatment and supportive care, while severe reactions may require intensive medical management. Ongoing medical follow-up, allergy awareness, and preventive strategies are important for reducing recurrence and maintaining long-term skin health.',
                'conclusion' => '',
                'seo_title' => 'Management of Drug Reactions & Allergic Dermatoses',
                'seo_description' => 'Management of drug reactions and allergic dermatoses involves identifying, treating, and preventing skin conditions caused by allergic or hypersensitivity reactions to medications, chemicals, foods, or environmental allergens. Treatment focuses on reducing inflammation, relieving symptoms, preventing complications, and avoiding future exposure to triggering substances.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
