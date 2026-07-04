<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HerpesZosterShinglesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Herpes Zoster (Shingles)')],
            [
                'name' => 'Herpes Zoster (Shingles)',
                'slug' => Str::slug('Herpes Zoster (Shingles)'),
                'h1' => 'Herpes Zoster (Shingles)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Herpes zoster, also known as shingles, is a viral infection caused by the reactivation of the varicella-zoster virus, the same virus that causes chickenpox. After a person recovers from chickenpox, the virus can remain inactive in the body and reactivate later in life, leading to a painful skin rash and nerve-related symptoms.',
                'about_more' => '',
                'overview' => 'Herpes zoster, also known as shingles, is a viral infection caused by the reactivation of the varicella-zoster virus, the same virus that causes chickenpox. After a person recovers from chickenpox, the virus can remain inactive in the body and reactivate later in life, leading to a painful skin rash and nerve-related symptoms.',
                'symptoms' => [
            ['value' => 'Pain, burning, or tingling sensation on one side of the body'],
            ['value' => 'Red rash that develops into fluid-filled blisters'],
            ['value' => 'Itching or skin sensitivity'],
            ['value' => 'Fever, fatigue, or headache'],
            ['value' => 'Crusting and healing of blisters after several days'],
        ],
                'causes' => [
            ['value' => 'Reactivation of the varicella-zoster virus'],
            ['value' => 'Weak immune system or increasing age'],
            ['value' => 'Emotional stress or physical illness'],
            ['value' => 'Cancer treatments or immune-suppressing medications'],
            ['value' => 'Chronic medical conditions affecting immunity'],
        ],
                'risks' => [
            ['value' => 'Postherpetic neuralgia causing long-term nerve pain'],
            ['value' => 'Skin infections due to blister damage'],
            ['value' => 'Eye involvement leading to vision complications'],
            ['value' => 'Neurological complications in severe cases'],
            ['value' => 'Persistent pain or skin sensitivity after rash healing'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antiviral medications such as acyclovir or valacyclovir'],
            ['value' => 'Pain management and anti-inflammatory medications'],
            ['value' => 'Topical creams and soothing skin care measures'],
            ['value' => 'Rest, hydration, and supportive care'],
            ['value' => 'Vaccination to reduce the risk of shingles and recurrence'],
        ],
                'recovery' => 'The long-term outlook for herpes zoster is generally good with early antiviral treatment and supportive care. Most individuals recover within a few weeks, although some may experience prolonged nerve pain or complications. Timely treatment, vaccination, and proper medical care can significantly reduce symptom severity, complications, and recurrence risk. __________________________ 7. Urticaria / Hives Urticaria / Hives',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Herpes Zoster (Shingles)',
                'meta_description' => 'Herpes zoster, also known as shingles, is a viral infection caused by the reactivation of the varicella-zoster virus, the same virus that causes chickenpox. Aft',
                'meta_keywords' => '',
            ]
        );
    }
}
