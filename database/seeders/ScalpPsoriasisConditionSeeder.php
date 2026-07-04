<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScalpPsoriasisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Scalp Psoriasis')],
            [
                'name' => 'Scalp Psoriasis',
                'slug' => Str::slug('Scalp Psoriasis'),
                'h1' => 'Scalp Psoriasis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Scalp psoriasis is a chronic autoimmune skin condition that causes inflammation and rapid buildup of skin cells on the scalp. It commonly appears as thick, scaly, discolored patches that may extend beyond the hairline. The condition can range from mild flaking to severe plaques covering large areas of the scalp and may occur along with psoriasis on other parts of the body.',
                'about_more' => '',
                'overview' => 'Scalp psoriasis is a chronic autoimmune skin condition that causes inflammation and rapid buildup of skin cells on the scalp. It commonly appears as thick, scaly, discolored patches that may extend beyond the hairline. The condition can range from mild flaking to severe plaques covering large areas of the scalp and may occur along with psoriasis on other parts of the body.',
                'symptoms' => [
            ['value' => 'Raised patches or thick plaques on the scalp'],
            ['value' => 'Scaly or flaky skin that sheds easily'],
            ['value' => 'Red, silvery, or discolored scalp lesions'],
            ['value' => 'Cyclic flare-ups that improve and return over time'],
            ['value' => 'Dry, cracked skin that may bleed or feel painful'],
        ],
                'causes' => [
            ['value' => 'Autoimmune reactions causing rapid skin cell growth'],
            ['value' => 'Genetic or hereditary factors'],
            ['value' => 'Emotional stress or anxiety'],
            ['value' => 'Cold weather or dry environmental conditions'],
            ['value' => 'Skin injury, infections, or certain medications triggering flare-ups'],
        ],
                'risks' => [
            ['value' => 'Persistent itching and scalp irritation'],
            ['value' => 'Temporary hair shedding due to inflammation or scratching'],
            ['value' => 'Cracked skin leading to infections or discomfort'],
            ['value' => 'Emotional stress and reduced self-confidence'],
            ['value' => 'Association with psoriatic arthritis in some individuals'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medicated shampoos and scalp treatments'],
            ['value' => 'Topical corticosteroids and anti-inflammatory medications'],
            ['value' => 'Oral medications or biologic therapies for severe cases'],
            ['value' => 'Phototherapy (light therapy) when required'],
            ['value' => 'Regular dermatologic follow-up and trigger management'],
        ],
                'recovery' => 'The long-term outlook for scalp psoriasis is generally manageable with proper treatment and scalp care. Although the condition may be chronic with recurring flare-ups, consistent medical treatment and trigger control can significantly reduce symptoms and improve scalp health. Early dermatologic care and regular follow-up help improve comfort, reduce complications, and support long-term quality of life. ________________________ 24. Hair and Scalp Disorders (Dandruff, Psoriasis, Alopecia) Alopecia Alopecia',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Scalp Psoriasis',
                'meta_description' => 'Scalp psoriasis is a chronic autoimmune skin condition that causes inflammation and rapid buildup of skin cells on the scalp. It commonly appears as thick, scal',
                'meta_keywords' => '',
            ]
        );
    }
}
