<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UrticariaHivesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Urticaria / Hives')],
            [
                'name' => 'Urticaria / Hives',
                'slug' => Str::slug('Urticaria / Hives'),
                'h1' => 'Urticaria / Hives',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Urticaria, commonly known as hives, is a skin condition characterized by raised, itchy welts or bumps that may appear suddenly on the skin. These welts can vary in size and shape and may disappear and reappear over different areas of the body. Urticaria may be acute or chronic and is often triggered by allergic reactions, infections, medications, or environmental factors.',
                'about_more' => '',
                'overview' => 'Urticaria, commonly known as hives, is a skin condition characterized by raised, itchy welts or bumps that may appear suddenly on the skin. These welts can vary in size and shape and may disappear and reappear over different areas of the body. Urticaria may be acute or chronic and is often triggered by allergic reactions, infections, medications, or environmental factors.',
                'symptoms' => [
            ['value' => 'Raised, itchy welts or skin bumps'],
            ['value' => 'Red, pink, or skin-colored patches on the skin'],
            ['value' => 'Swelling of the skin or deeper tissues (angioedema)'],
            ['value' => 'Burning or stinging sensation'],
            ['value' => 'Symptoms that appear suddenly and may move to different body areas'],
        ],
                'causes' => [
            ['value' => 'Allergic reactions to foods, medications, or insect bites'],
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Emotional stress or anxiety'],
            ['value' => 'Temperature changes, heat, cold, or pressure on the skin'],
            ['value' => 'Autoimmune conditions or unknown triggers in chronic cases'],
        ],
                'risks' => [
            ['value' => 'Severe itching and skin discomfort'],
            ['value' => 'Sleep disturbances and reduced quality of life'],
            ['value' => 'Angioedema causing swelling around the eyes, lips, or throat'],
            ['value' => 'Difficulty breathing in severe allergic reactions'],
            ['value' => 'Chronic recurrent hives affecting emotional well-being'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antihistamine medications to reduce itching and swelling'],
            ['value' => 'Avoidance of known allergens and triggers'],
            ['value' => 'Corticosteroids for severe flare-ups when required'],
            ['value' => 'Cold compresses and soothing skin care measures'],
            ['value' => 'Advanced immunologic therapies for chronic urticaria cases'],
        ],
                'recovery' => 'The long-term outlook for urticaria is generally good, especially when triggers are identified and managed appropriately. Many acute cases resolve within days or weeks, while chronic cases may require long-term management and specialist care. Proper treatment, lifestyle modifications, and regular medical follow-up help improve symptom control and overall quality of life. _____________________________ 8. Contact Dermatitis (Allergic / Irritant) Contact Dermatitis (Allergic / Irritant)',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Urticaria / Hives',
                'meta_description' => 'Urticaria, commonly known as hives, is a skin condition characterized by raised, itchy welts or bumps that may appear suddenly on the skin. These welts can vary',
                'meta_keywords' => '',
            ]
        );
    }
}
