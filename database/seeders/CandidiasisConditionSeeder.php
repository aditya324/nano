<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CandidiasisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Candidiasis')],
            [
                'name' => 'Candidiasis',
                'slug' => Str::slug('Candidiasis'),
                'h1' => 'Candidiasis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Candidiasis is a fungal infection caused by an overgrowth of Candida yeast, most commonly Candida albicans, which normally lives on the skin and inside the body. When the balance of microorganisms is disturbed, the yeast can multiply excessively and cause infection in areas such as the mouth, throat, skin, nails, and genital region.',
                'about_more' => '',
                'overview' => 'Candidiasis is a fungal infection caused by an overgrowth of Candida yeast, most commonly Candida albicans, which normally lives on the skin and inside the body. When the balance of microorganisms is disturbed, the yeast can multiply excessively and cause infection in areas such as the mouth, throat, skin, nails, and genital region.',
                'symptoms' => [
            ['value' => 'Abnormal vaginal discharge'],
            ['value' => 'Difficulty swallowing (dysphagia)'],
            ['value' => 'Skin rash with small raised bumps'],
            ['value' => 'White patches or sores in the mouth and throat'],
            ['value' => 'Loss of taste (ageusia)'],
        ],
                'causes' => [
            ['value' => 'Use of antibiotics or corticosteroid medications'],
            ['value' => 'Weak immune system or chronic illness'],
            ['value' => 'Diabetes and uncontrolled blood sugar levels'],
            ['value' => 'Warm, moist skin environments and excessive sweating'],
            ['value' => 'Poor hygiene or prolonged skin irritation'],
        ],
                'risks' => [
            ['value' => 'Recurrent fungal infections'],
            ['value' => 'Painful oral or genital irritation'],
            ['value' => 'Spread of infection in immunocompromised individuals'],
            ['value' => 'Skin breakdown and secondary bacterial infections'],
            ['value' => 'Difficulty eating or swallowing in severe oral infections'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical antifungal creams, gels, or powders'],
            ['value' => 'Oral antifungal medications for severe infections'],
            ['value' => 'Antifungal mouth rinses or lozenges for oral candidiasis'],
            ['value' => 'Maintaining proper hygiene and keeping affected areas dry'],
            ['value' => 'Management of underlying medical conditions such as diabetes'],
        ],
                'recovery' => 'The long-term outlook for candidiasis is generally very good with timely antifungal treatment and preventive care. Most infections respond well to therapy, although recurrent infections may occur in individuals with persistent risk factors or weakened immunity. Good hygiene, moisture control, and proper management of underlying health conditions are important for preventing recurrence and maintaining overall skin and mucosal health. _______________________________ 5. Bacterial Skin Infections (Impetigo, Cellulitis) Impetigo',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Candidiasis',
                'meta_description' => 'Candidiasis is a fungal infection caused by an overgrowth of Candida yeast, most commonly Candida albicans, which normally lives on the skin and inside the body',
                'meta_keywords' => '',
            ]
        );
    }
}
