<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CellulitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cellulitis')],
            [
                'name' => 'Cellulitis',
                'slug' => Str::slug('Cellulitis'),
                'h1' => 'Cellulitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cellulitis is a common bacterial skin infection that affects the deeper layers of the skin and underlying soft tissues. The condition usually develops when bacteria enter the skin through cuts, wounds, insect bites, or other skin injuries. Cellulitis commonly affects the legs, arms, or face and may spread rapidly if left untreated.',
                'about_more' => '',
                'overview' => 'Cellulitis is a common bacterial skin infection that affects the deeper layers of the skin and underlying soft tissues. The condition usually develops when bacteria enter the skin through cuts, wounds, insect bites, or other skin injuries. Cellulitis commonly affects the legs, arms, or face and may spread rapidly if left untreated.',
                'symptoms' => [
            ['value' => 'Red, swollen, and warm skin'],
            ['value' => 'Pain or tenderness in the affected area'],
            ['value' => 'Skin swelling that may spread quickly'],
            ['value' => 'Fever, chills, or fatigue'],
            ['value' => 'Blisters, skin tightness, or pus formation in severe cases'],
        ],
                'causes' => [
            ['value' => 'Bacterial infection caused by Streptococcus or Staphylococcus bacteria'],
            ['value' => 'Cuts, wounds, insect bites, or skin injuries'],
            ['value' => 'Skin conditions such as eczema, ulcers, or fungal infections'],
            ['value' => 'Weak immune system or chronic illnesses such as diabetes'],
            ['value' => 'Poor circulation or swelling in the legs'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to deeper tissues or bloodstream'],
            ['value' => 'Abscess formation or tissue damage'],
            ['value' => 'Recurrent cellulitis and chronic swelling'],
            ['value' => 'Severe infection leading to sepsis in untreated cases'],
            ['value' => 'Lymphatic damage and long-term skin complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Oral or intravenous antibiotics depending on severity'],
            ['value' => 'Pain management and anti-inflammatory care'],
            ['value' => 'Proper wound care and skin hygiene'],
            ['value' => 'Elevation of the affected area to reduce swelling'],
            ['value' => 'Management of underlying conditions and prevention of reinfection'],
        ],
                'recovery' => 'The long-term outlook for cellulitis is generally very good with early diagnosis and prompt antibiotic treatment. Most individuals recover completely, although recurrent infections may occur in people with chronic skin conditions or circulation problems. Proper skin care, hygiene, and management of underlying health conditions are important for preventing recurrence and complications. _______________________________ 6. Viral Skin Infections (Warts, Herpes Zoster, Herpes Simplex) Warts',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Cellulitis',
                'meta_description' => 'Cellulitis is a common bacterial skin infection that affects the deeper layers of the skin and underlying soft tissues. The condition usually develops when bact',
                'meta_keywords' => '',
            ]
        );
    }
}
