<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CryotherapyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cryotherapy Equipment')],
            [
                'title' => 'Cryotherapy Equipment',
                'slug' => Str::slug('Cryotherapy Equipment'),
                'introduction' => 'Cryotherapy equipment consists of specialized medical devices used to apply extreme cold temperatures for the treatment of various skin conditions. These systems commonly use liquid nitrogen or other cooling agents to freeze and destroy abnormal, infected, or damaged skin tissue in a controlled and minimally invasive manner.',
                'what_is' => 'Cryotherapy equipment is widely used in dermatology clinics to treat warts, actinic keratosis, skin tags, seborrheic keratoses, precancerous lesions, and certain benign skin growths. The equipment may include spray devices, probes, cryoguns, and storage systems for liquid nitrogen. Cryotherapy procedures are quick, effective, and usually performed in outpatient settings with minimal downtime.',
                'symptoms' => [
            ['value' => 'Warts or rough skin growths'],
            ['value' => 'Precancerous skin lesions'],
            ['value' => 'Thickened, scaly, or raised skin patches'],
            ['value' => 'Benign skin lesions causing irritation or cosmetic concerns'],
            ['value' => 'Persistent lesions resistant to topical treatments'],
        ],
                'causes' => [
            ['value' => 'Viral skin infections such as warts'],
            ['value' => 'Long-term sun exposure causing precancerous changes'],
            ['value' => 'Benign skin growths and keratoses'],
            ['value' => 'Abnormal skin cell growth or inflammation'],
            ['value' => 'Cosmetic skin concerns requiring lesion removal'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary pain, redness, or swelling after treatment'],
            ['value' => 'Blistering or crust formation at treated sites'],
            ['value' => 'Pigmentation changes or mild scarring'],
            ['value' => 'Infection in rare cases'],
            ['value' => 'Recurrence of lesions requiring repeat treatment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Cryotherapy equipment is used as part of minimally invasive dermatologic treatment procedures to remove abnormal or damaged skin tissue. Treatment selection depends on the type, size, and location of the lesion being treated. Cryotherapy may be combined with topical medications, surgical procedures, or follow-up dermatologic care to achieve optimal treatment outcomes and prevent recurrence.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping the treated area clean and dry'],
            ['value' => 'Avoiding scratching or removing crusts or blisters'],
            ['value' => 'Using prescribed creams or dressings if advised'],
            ['value' => 'Monitoring for infection or delayed healing'],
            ['value' => 'Follow-up dermatologic evaluation for persistent lesions'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary pain, redness, or swelling after treatment'],
            ['value' => 'Blistering or crust formation at treated sites'],
            ['value' => 'Pigmentation changes or mild scarring'],
            ['value' => 'Infection in rare cases'],
            ['value' => 'Recurrence of lesions requiring repeat treatment'],
            ['value' => 'Treatment Options'],
            ['value' => 'Cryotherapy equipment is used as part of minimally invasive dermatologic treatment procedures to remove abnormal or damaged skin tissue. Treatment selection depends on the type, size, and location of the lesion being treated. Cryotherapy may be combined with topical medications, surgical procedures, or follow-up dermatologic care to achieve optimal treatment outcomes and prevent recurrence.'],
        ],
                'long_term_outlook' => 'The long-term outlook with cryotherapy treatment is generally very positive for many benign and precancerous skin conditions. Early treatment and regular dermatologic follow-up help reduce recurrence, improve skin healing, and support long-term skin health and preventive care.',
                'conclusion' => '',
                'seo_title' => 'Cryotherapy Equipment',
                'seo_description' => 'Cryotherapy equipment consists of specialized medical devices used to apply extreme cold temperatures for the treatment of various skin conditions. These systems commonly use liquid nitrogen or other cooling agents to freeze and destroy abnormal, infected, or damaged skin tissue in a controlled and minimally invasive manner.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
