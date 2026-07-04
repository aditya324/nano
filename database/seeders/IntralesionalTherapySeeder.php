<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IntralesionalTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Intralesional Therapy')],
            [
                'title' => 'Intralesional Therapy',
                'slug' => Str::slug('Intralesional Therapy'),
                'introduction' => 'Intralesional therapy is a dermatologic treatment in which medications are injected directly into skin lesions to reduce inflammation, shrink abnormal tissue, or treat certain skin conditions locally. Commonly used medications include corticosteroids and 5-fluorouracil (5-FU), depending on the type of skin disorder being treated.',
                'what_is' => 'Intralesional corticosteroid injections are frequently used for conditions such as keloids, hypertrophic scars, alopecia areata, cystic acne, and inflammatory skin diseases. Intralesional 5-FU is commonly used for selected precancerous lesions, scars, and certain skin tumors. Delivering medication directly into the affected area helps provide targeted treatment while minimizing effects on the rest of the body.',
                'symptoms' => [
            ['value' => 'Raised scars or keloids'],
            ['value' => 'Persistent inflammatory skin lesions'],
            ['value' => 'Patchy hair loss in alopecia areata'],
            ['value' => 'Precancerous or abnormal skin growths'],
            ['value' => 'Painful or resistant cystic acne lesions'],
        ],
                'causes' => [
            ['value' => 'Intralesional therapy is commonly recommended for skin conditions that do not respond adequately to topical treatments or require focused local therapy. Common causes and conditions treated with intralesional injections include excessive collagen formation leading to keloids and hypertrophic scars, autoimmune reactions causing alopecia areata, chronic inflammation associated with cystic acne, and abnormal or precancerous skin growths. Skin trauma, burns, surgery, infections, hormonal influences, and genetic predisposition may also contribute to the development of these dermatologic conditions.'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary pain, redness, or swelling at injection sites'],
            ['value' => 'Skin thinning or discoloration after steroid injections'],
            ['value' => 'Mild bleeding or bruising'],
            ['value' => 'Infection at the treated area in rare cases'],
            ['value' => 'Recurrence of lesions requiring repeat treatment sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for conditions requiring intralesional therapy depend on the type and severity of the skin disorder. Intralesional corticosteroid injections are commonly used to reduce inflammation, flatten raised scars, relieve itching, and stimulate hair regrowth in conditions such as alopecia areata. Intralesional 5-fluorouracil (5-FU) may be used alone or in combination with corticosteroids to treat resistant keloids, hypertrophic scars, and selected precancerous lesions by slowing abnormal cell growth. In certain cases, intralesional therapy may be combined with cryotherapy, laser treatments, topical medications, oral medications, chemical peels, or minor surgical procedures to achieve better clinical outcomes. Multiple treatment sessions may be required depending on the response and severity of the condition.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping the treated area clean and protected'],
            ['value' => 'Avoiding scratching or irritation at injection sites'],
            ['value' => 'Monitoring for redness, swelling, or skin changes'],
            ['value' => 'Following prescribed skincare and medication instructions'],
            ['value' => 'Regular dermatologic follow-up for additional sessions if required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary pain, redness, or swelling at injection sites'],
            ['value' => 'Skin thinning or discoloration after steroid injections'],
            ['value' => 'Mild bleeding or bruising'],
            ['value' => 'Infection at the treated area in rare cases'],
            ['value' => 'Recurrence of lesions requiring repeat treatment sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for conditions requiring intralesional therapy depend on the type and severity of the skin disorder. Intralesional corticosteroid injections are commonly used to reduce inflammation, flatten raised scars, relieve itching, and stimulate hair regrowth in conditions such as alopecia areata. Intralesional 5-fluorouracil (5-FU) may be used alone or in combination with corticosteroids to treat resistant keloids, hypertrophic scars, and selected precancerous lesions by slowing abnormal cell growth. In certain cases, intralesional therapy may be combined with cryotherapy, laser treatments, topical medications, oral medications, chemical peels, or minor surgical procedures to achieve better clinical outcomes. Multiple treatment sessions may be required depending on the response and severity of the condition.'],
        ],
                'long_term_outlook' => 'The long-term outlook with intralesional therapy is generally very good when treatments are performed appropriately under dermatologic supervision. Many patients experience significant improvement in inflammation, scarring, abnormal skin growths, or hair loss conditions. Ongoing follow-up and maintenance care help optimize treatment outcomes and reduce recurrence risk.',
                'conclusion' => '',
                'seo_title' => 'Intralesional Therapy',
                'seo_description' => 'Intralesional therapy is a dermatologic treatment in which medications are injected directly into skin lesions to reduce inflammation, shrink abnormal tissue, or treat certain skin conditions locally. Commonly used medications include corticosteroids and 5-fluorouracil (5-FU), depending on the type of skin disorder being treated.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
