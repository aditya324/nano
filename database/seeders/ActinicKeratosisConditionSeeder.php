<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActinicKeratosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Actinic Keratosis')],
            [
                'name' => 'Actinic Keratosis',
                'slug' => Str::slug('Actinic Keratosis'),
                'h1' => 'Actinic Keratosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Actinic keratosis is a precancerous skin condition caused by long-term exposure to ultraviolet (UV) radiation from the sun or tanning beds. It commonly appears as rough, scaly, or discolored patches on sun-exposed areas such as the face, scalp, ears, neck, hands, and forearms. Although actinic keratosis is treatable, untreated lesions may develop into squamous cell carcinoma (SCC), a type of skin cancer.',
                'about_more' => '',
                'overview' => 'Actinic keratosis is a precancerous skin condition caused by long-term exposure to ultraviolet (UV) radiation from the sun or tanning beds. It commonly appears as rough, scaly, or discolored patches on sun-exposed areas such as the face, scalp, ears, neck, hands, and forearms. Although actinic keratosis is treatable, untreated lesions may develop into squamous cell carcinoma (SCC), a type of skin cancer.',
                'symptoms' => [
            ['value' => 'Burning, stinging, or discomfort, especially under clothing'],
            ['value' => 'Flat or slightly raised rough patches on the skin'],
            ['value' => 'Itching, crusting, bleeding, or scaling lesions'],
            ['value' => 'Red, pink, brown, gray, or darker discolored skin patches'],
            ['value' => 'New rough bumps or patches on sun-exposed areas'],
        ],
                'causes' => [
            ['value' => 'Long-term exposure to ultraviolet (UV) radiation'],
            ['value' => 'Frequent sunburns or tanning bed use'],
            ['value' => 'Fair skin and increased sun sensitivity'],
            ['value' => 'Aging and cumulative sun damage over time'],
            ['value' => 'Weak immune system or chronic skin damage'],
        ],
                'risks' => [
            ['value' => 'Increased risk in individuals with weakened immunity'],
            ['value' => 'Greater susceptibility in people with red or blond hair and light-colored eyes'],
            ['value' => 'Personal history of actinic keratosis or skin cancer'],
            ['value' => 'Many years of sun exposure or tanning bed use'],
            ['value' => 'Risk of progression to squamous cell carcinoma if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cryotherapy (freezing treatment)'],
            ['value' => 'Photodynamic therapy (PDT)'],
            ['value' => 'Curettage or scraping procedures'],
            ['value' => 'Laser therapy'],
            ['value' => 'Surgical excision and topical prescription medications'],
        ],
                'recovery' => 'The long-term outlook for actinic keratosis is generally very good with early diagnosis and proper treatment. Most lesions can be successfully treated before they become cancerous. Regular skin examinations, consistent sun protection, and ongoing dermatologic follow-up are essential for preventing recurrence and reducing the risk of skin cancer development. ___________________________ 16. Premalignant Lesions (Actinic Keratosis, Dysplastic Nevi) Dysplastic Nevi',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Actinic Keratosis',
                'meta_description' => 'Actinic keratosis is a precancerous skin condition caused by long-term exposure to ultraviolet (UV) radiation from the sun or tanning beds. It commonly appears ',
                'meta_keywords' => '',
            ]
        );
    }
}
