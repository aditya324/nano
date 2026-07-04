<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VitiligoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vitiligo')],
            [
                'name' => 'Vitiligo',
                'slug' => Str::slug('Vitiligo'),
                'h1' => 'Vitiligo',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Vitiligo is a chronic skin condition that causes loss of skin color or pigment due to the destruction of melanocytes, the cells responsible for producing melanin. The condition leads to the development of white or depigmented patches on different parts of the body. Vitiligo can affect the skin, hair, and mucous membranes and may occur gradually or rapidly over time.',
                'about_more' => '',
                'overview' => 'Vitiligo is a chronic skin condition that causes loss of skin color or pigment due to the destruction of melanocytes, the cells responsible for producing melanin. The condition leads to the development of white or depigmented patches on different parts of the body. Vitiligo can affect the skin, hair, and mucous membranes and may occur gradually or rapidly over time.',
                'symptoms' => [
            ['value' => 'Loss of skin color or depigmented patches'],
            ['value' => 'Hyperpigmentation around the edges of affected skin areas'],
            ['value' => 'Premature graying of hair, eyebrows, or eyelashes'],
            ['value' => 'Development of vitiligo in areas affected by cuts, burns, or skin trauma'],
            ['value' => 'White patchy lesions affecting different body regions'],
        ],
                'causes' => [
            ['value' => 'Autoimmune conditions affecting melanocyte cells'],
            ['value' => 'Genetic or hereditary factors'],
            ['value' => 'Environmental triggers or skin injury'],
            ['value' => 'Emotional stress or physical trauma'],
            ['value' => 'Hormonal or immune system imbalance'],
        ],
                'risks' => [
            ['value' => 'Increased sensitivity to sunlight and sunburn'],
            ['value' => 'Emotional stress, anxiety, or reduced self-confidence'],
            ['value' => 'Eye or hearing abnormalities in rare cases'],
            ['value' => 'Progressive spread of depigmented skin patches'],
            ['value' => 'Social and psychological impact affecting quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical medications and corticosteroid creams'],
            ['value' => 'Phototherapy or light-based treatment'],
            ['value' => 'Immunomodulatory medications for pigment restoration'],
            ['value' => 'Cosmetic camouflage and skin protection measures'],
            ['value' => 'Counseling and long-term dermatologic follow-up care'],
        ],
                'recovery' => 'The long-term outlook for vitiligo varies depending on the extent of skin involvement and response to treatment. Some individuals experience stable disease, while others may develop progressive depigmentation over time. Early treatment, sun protection, emotional support, and regular dermatologic care can help improve skin appearance, control progression, and enhance overall quality of life. __________________ 11. Lichen Planus Lichen Planus',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Vitiligo',
                'meta_description' => 'Vitiligo is a chronic skin condition that causes loss of skin color or pigment due to the destruction of melanocytes, the cells responsible for producing melani',
                'meta_keywords' => '',
            ]
        );
    }
}
