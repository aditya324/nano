<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HerpesSimplexConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Herpes Simplex')],
            [
                'name' => 'Herpes Simplex',
                'slug' => Str::slug('Herpes Simplex'),
                'h1' => 'Herpes Simplex',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Herpes simplex is a common viral infection caused by the herpes simplex virus (HSV). The infection can affect the mouth, lips, face, genital area, or other parts of the body and is commonly classified as HSV-1 or HSV-2. Herpes simplex may cause recurrent outbreaks of painful blisters or sores and can spread through close personal contact.',
                'about_more' => '',
                'overview' => 'Herpes simplex is a common viral infection caused by the herpes simplex virus (HSV). The infection can affect the mouth, lips, face, genital area, or other parts of the body and is commonly classified as HSV-1 or HSV-2. Herpes simplex may cause recurrent outbreaks of painful blisters or sores and can spread through close personal contact.',
                'symptoms' => [
            ['value' => 'Painful blisters or fluid-filled sores'],
            ['value' => 'Burning, itching, or tingling sensation before outbreaks'],
            ['value' => 'Redness and skin irritation around affected areas'],
            ['value' => 'Fever, fatigue, or swollen lymph nodes during initial infection'],
            ['value' => 'Crusting or ulcer formation after blisters break open'],
        ],
                'causes' => [
            ['value' => 'Infection with herpes simplex virus (HSV-1 or HSV-2)'],
            ['value' => 'Direct skin-to-skin or intimate contact with an infected person'],
            ['value' => 'Stress, illness, or weakened immune system'],
            ['value' => 'Fever, hormonal changes, or excessive sun exposure'],
            ['value' => 'Physical trauma or skin irritation triggering recurrence'],
        ],
                'risks' => [
            ['value' => 'Recurrent outbreaks of painful sores'],
            ['value' => 'Spread of infection to other body areas or individuals'],
            ['value' => 'Eye infections or neurological complications in rare cases'],
            ['value' => 'Increased risk of severe infection in immunocompromised individuals'],
            ['value' => 'Emotional stress and reduced quality of life related to recurrent symptoms'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antiviral medications such as acyclovir or valacyclovir'],
            ['value' => 'Pain relief and supportive skin care'],
            ['value' => 'Topical antiviral creams for symptom management'],
            ['value' => 'Avoiding triggers and reducing direct contact during outbreaks'],
            ['value' => 'Long-term suppressive antiviral therapy for recurrent infections'],
        ],
                'recovery' => 'The long-term outlook for herpes simplex is generally manageable with appropriate antiviral treatment and preventive care. Although the virus remains in the body and may cause recurrent outbreaks, medications and trigger management can significantly reduce symptoms, frequency of recurrences, and risk of transmission. Regular medical care and healthy lifestyle practices help improve long-term comfort and quality of life. _______________________ 6. Viral Skin Infections (Warts, Herpes Zoster, Herpes Simplex) Herpes Zoster (Shingles)',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Herpes Simplex',
                'meta_description' => 'Herpes simplex is a common viral infection caused by the herpes simplex virus (HSV). The infection can affect the mouth, lips, face, genital area, or other part',
                'meta_keywords' => '',
            ]
        );
    }
}
