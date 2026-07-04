<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalFailurewithSepsisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Failure with Sepsis')],
            [
                'name' => 'Renal Failure with Sepsis',
                'slug' => Str::slug('Renal Failure with Sepsis'),
                'h1' => 'Renal Failure with Sepsis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Renal failure with sepsis is a serious and life-threatening condition in which severe infection causes widespread inflammation throughout the body, leading to acute kidney injury or worsening of existing kidney disease. During sepsis, blood flow to the kidneys decreases, toxins accumulate in the blood, and kidney tissues may become damaged due to inflammation and low oxygen supply. This condition commonly occurs in critically ill patients and requires urgent hospitalization and intensive medical care.',
                'about_more' => '',
                'overview' => 'Renal failure with sepsis is a serious and life-threatening condition in which severe infection causes widespread inflammation throughout the body, leading to acute kidney injury or worsening of existing kidney disease. During sepsis, blood flow to the kidneys decreases, toxins accumulate in the blood, and kidney tissues may become damaged due to inflammation and low oxygen supply. This condition commonly occurs in critically ill patients and requires urgent hospitalization and intensive medical care.',
                'symptoms' => [
            ['value' => 'Reduced urine output or complete absence of urine'],
            ['value' => 'High fever, chills, and severe infection symptoms'],
            ['value' => 'Rapid heartbeat and low blood pressure'],
            ['value' => 'Confusion, drowsiness, or altered mental status'],
            ['value' => 'Swelling, breathing difficulty, and severe weakness'],
        ],
                'causes' => [
            ['value' => 'Severe bacterial, viral, or fungal infections'],
            ['value' => 'Bloodstream infections (septicemia)'],
            ['value' => 'Pneumonia, urinary infections, or abdominal infections'],
            ['value' => 'Severe dehydration and low blood pressure'],
            ['value' => 'Existing chronic kidney disease increasing susceptibility'],
        ],
                'risks' => [
            ['value' => 'Permanent kidney damage or chronic kidney disease'],
            ['value' => 'Multi-organ failure affecting lungs, heart, and brain'],
            ['value' => 'Severe electrolyte and acid-base imbalance'],
            ['value' => 'Septic shock with dangerously low blood pressure'],
            ['value' => 'Increased risk of death without emergency treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Intensive care unit (ICU) monitoring and management'],
            ['value' => 'Intravenous antibiotics and infection control'],
            ['value' => 'Intravenous fluids and blood pressure support medications'],
            ['value' => 'Dialysis for severe kidney failure and toxin removal'],
            ['value' => 'Oxygen therapy and organ-supportive treatment'],
        ],
                'recovery' => 'Recovery depends on how quickly sepsis is recognized and treated. Early aggressive treatment improves survival and kidney recovery, while delayed treatment can lead to permanent kidney failure or life-threatening complications.',
                'sort_order' => 41,
                'is_active' => true,
                'meta_title' => 'Renal Failure with Sepsis',
                'meta_description' => 'Renal failure with sepsis is a serious and life-threatening condition in which severe infection causes widespread inflammation throughout the body, leading to a',
                'meta_keywords' => '',
            ]
        );
    }
}
