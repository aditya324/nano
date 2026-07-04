<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AlopeciaAreataConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Alopecia Areata')],
            [
                'name' => 'Alopecia Areata',
                'slug' => Str::slug('Alopecia Areata'),
                'h1' => 'Alopecia Areata',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Alopecia areata is an autoimmune condition that causes sudden hair loss when the body’s immune system mistakenly attacks hair follicles. The condition commonly leads to patchy hair loss on the scalp but may also affect the eyebrows, beard, eyelashes, or other body hair. Alopecia areata can affect individuals of any age and may vary from mild patchy hair loss to more extensive hair loss.',
                'about_more' => '',
                'overview' => 'Alopecia areata is an autoimmune condition that causes sudden hair loss when the body’s immune system mistakenly attacks hair follicles. The condition commonly leads to patchy hair loss on the scalp but may also affect the eyebrows, beard, eyelashes, or other body hair. Alopecia areata can affect individuals of any age and may vary from mild patchy hair loss to more extensive hair loss.',
                'symptoms' => [
            ['value' => 'Sudden patchy or circular areas of hair loss'],
            ['value' => 'Smooth bald patches on the scalp or body'],
            ['value' => 'Tingling, itching, or mild burning sensation before hair loss'],
            ['value' => 'Hair thinning or excessive hair shedding'],
            ['value' => 'Nail changes such as pitting or ridges in some cases'],
        ],
                'causes' => [
            ['value' => 'Autoimmune reactions affecting hair follicles'],
            ['value' => 'Genetic and hereditary factors'],
            ['value' => 'Emotional stress or physical illness'],
            ['value' => 'Hormonal or immune system imbalance'],
            ['value' => 'Family history of autoimmune conditions'],
        ],
                'risks' => [
            ['value' => 'Recurrent or progressive hair loss'],
            ['value' => 'Complete scalp or body hair loss in severe cases'],
            ['value' => 'Emotional stress, anxiety, or reduced self-confidence'],
            ['value' => 'Nail abnormalities associated with autoimmune activity'],
            ['value' => 'Psychological impact affecting quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical medications and corticosteroid creams'],
            ['value' => 'Corticosteroid injections into affected areas'],
            ['value' => 'Oral medications or immunotherapy when required'],
            ['value' => 'Platelet-rich plasma (PRP) therapy or advanced hair treatments'],
            ['value' => 'Counseling, stress management, and dermatologic follow-up care'],
        ],
                'recovery' => 'The long-term outlook for alopecia areata varies depending on the severity and individual response to treatment. Many individuals experience partial or complete hair regrowth, although recurrence is common. Early treatment, regular dermatologic care, and emotional support can help improve hair growth outcomes and overall quality of life. _______________________ 9. Alopecia Areata / Pattern Hair Loss Patter Hair Loss Pattern Hair Loss (Androgenetic Alopecia)',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Alopecia Areata',
                'meta_description' => 'Alopecia areata is an autoimmune condition that causes sudden hair loss when the body’s immune system mistakenly attacks hair follicles. The condition commonly ',
                'meta_keywords' => '',
            ]
        );
    }
}
