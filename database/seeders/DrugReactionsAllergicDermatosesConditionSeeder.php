<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DrugReactionsAllergicDermatosesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Drug Reactions / Allergic Dermatoses')],
            [
                'name' => 'Drug Reactions / Allergic Dermatoses',
                'slug' => Str::slug('Drug Reactions / Allergic Dermatoses'),
                'h1' => 'Drug Reactions / Allergic Dermatoses',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Drug reactions and allergic dermatoses are skin conditions that occur when the body develops an allergic or hypersensitive response to medications, chemicals, foods, or other allergens. These reactions may range from mild skin rashes and itching to severe inflammatory or life-threatening skin conditions requiring urgent medical attention.',
                'about_more' => '',
                'overview' => 'Drug reactions and allergic dermatoses are skin conditions that occur when the body develops an allergic or hypersensitive response to medications, chemicals, foods, or other allergens. These reactions may range from mild skin rashes and itching to severe inflammatory or life-threatening skin conditions requiring urgent medical attention.',
                'symptoms' => [
            ['value' => 'Red skin rashes or hives'],
            ['value' => 'Itching, burning, or skin irritation'],
            ['value' => 'Swelling of the skin, lips, or eyes'],
            ['value' => 'Blisters, peeling skin, or painful skin lesions'],
            ['value' => 'Fever or flu-like symptoms associated with severe reactions'],
        ],
                'causes' => [
            ['value' => 'Antibiotics, pain relievers, or other prescription medications'],
            ['value' => 'Allergic reactions to foods, chemicals, or environmental allergens'],
            ['value' => 'Immune system hypersensitivity reactions'],
            ['value' => 'Certain vaccines or contrast agents used in medical procedures'],
            ['value' => 'Previous history of allergies or drug sensitivities'],
        ],
                'risks' => [
            ['value' => 'Severe allergic skin reactions or widespread inflammation'],
            ['value' => 'Skin infections due to damaged skin barriers'],
            ['value' => 'Breathing difficulty or anaphylactic reactions in severe cases'],
            ['value' => 'Long-term skin discoloration or scarring'],
            ['value' => 'Recurrence of allergic reactions with repeat exposure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Discontinuation of the triggering medication or allergen'],
            ['value' => 'Antihistamines to reduce itching and allergic symptoms'],
            ['value' => 'Corticosteroids or anti-inflammatory medications'],
            ['value' => 'Supportive skin care and hydration therapy'],
            ['value' => 'Emergency treatment and hospitalization for severe allergic reactions'],
        ],
                'recovery' => 'The long-term outlook for drug reactions and allergic dermatoses is generally good when triggers are identified and avoided early. Most mild reactions improve with appropriate treatment and supportive care, while severe reactions may require intensive medical management. Regular medical follow-up, allergy evaluation, and avoidance of known triggers are important for preventing recurrence and maintaining long-term skin health. __________________________ 19. Nail Disorders (Onychomycosis, Psoriatic Nails) Onychomycosis',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Drug Reactions / Allergic Dermatoses',
                'meta_description' => 'Drug reactions and allergic dermatoses are skin conditions that occur when the body develops an allergic or hypersensitive response to medications, chemicals, f',
                'meta_keywords' => '',
            ]
        );
    }
}
