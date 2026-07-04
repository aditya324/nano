<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PsoriasisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Psoriasis')],
            [
                'name' => 'Psoriasis',
                'slug' => Str::slug('Psoriasis'),
                'h1' => 'Psoriasis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Psoriasis is a chronic autoimmune skin condition that causes rapid buildup of skin cells, leading to inflammation, scaling, and thickened patches on the skin. The condition commonly affects the scalp, elbows, knees, lower back, and nails, and may vary from mild localized plaques to widespread skin involvement. Psoriasis can also affect the joints and overall quality of life.',
                'about_more' => '',
                'overview' => 'Psoriasis is a chronic autoimmune skin condition that causes rapid buildup of skin cells, leading to inflammation, scaling, and thickened patches on the skin. The condition commonly affects the scalp, elbows, knees, lower back, and nails, and may vary from mild localized plaques to widespread skin involvement. Psoriasis can also affect the joints and overall quality of life.',
                'symptoms' => [
            ['value' => 'Itchy or irritated skin'],
            ['value' => 'Cracked, dry, or scaly skin'],
            ['value' => 'Pitted, cracked, or crumbly nails'],
            ['value' => 'Skin pain or burning sensation'],
            ['value' => 'Joint pain, stiffness, or swelling'],
        ],
                'causes' => [
            ['value' => 'Infections such as streptococcal infections'],
            ['value' => 'Skin injuries including cuts, scrapes, or surgery'],
            ['value' => 'Certain medications such as lithium and beta-blockers'],
            ['value' => 'Weather-related temperature changes'],
            ['value' => 'Emotional stress and immune system imbalance'],
        ],
                'risks' => [
            ['value' => 'Psoriatic arthritis causing joint pain and stiffness'],
            ['value' => 'Eye conditions such as conjunctivitis, blepharitis, or uveitis'],
            ['value' => 'Emotional stress, anxiety, depression, or reduced self-esteem'],
            ['value' => 'Skin discoloration after healing of plaques'],
            ['value' => 'Increased risk of cardiovascular disease and metabolic disorders'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical creams, ointments, and medicated shampoos'],
            ['value' => 'Oral medications and biologic therapies'],
            ['value' => 'Light therapy (phototherapy) for moderate to severe psoriasis'],
            ['value' => 'Lifestyle modifications and trigger management'],
            ['value' => 'Regular dermatology follow-up and long-term skin care management'],
        ],
                'recovery' => 'The long-term outlook for psoriasis is generally manageable with proper medical care, lifestyle modifications, and trigger control. Although psoriasis is a chronic condition with periods of flare-ups and remission, early treatment and continuous dermatologic care can significantly reduce symptoms, improve skin health, and enhance overall quality of life. ___________________________ 4. Fungal Skin Infections (Tinea, Candidiasis) Tinea (Ringworm / Dermatophytosis)',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Psoriasis',
                'meta_description' => 'Psoriasis is a chronic autoimmune skin condition that causes rapid buildup of skin cells, leading to inflammation, scaling, and thickened patches on the skin. T',
                'meta_keywords' => '',
            ]
        );
    }
}
