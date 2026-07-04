<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RemovalofBenignSkinLesionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Removal of Benign Skin Lesions')],
            [
                'title' => 'Removal of Benign Skin Lesions',
                'slug' => Str::slug('Removal of Benign Skin Lesions'),
                'introduction' => 'Cryotherapy, laser therapy, and surgical excision are commonly used dermatologic procedures for the removal of benign (noncancerous) skin lesions. These treatments help remove unwanted skin growths, improve comfort, and enhance cosmetic appearance while preserving healthy surrounding tissue.',
                'what_is' => 'Benign skin lesions such as warts, skin tags, seborrheic keratoses, cysts, moles, lipomas, and other noncancerous growths may be treated using different removal techniques depending on the size, location, and type of lesion. Cryotherapy uses extreme cold to freeze abnormal tissue, laser therapy uses focused light energy to target lesions precisely, and surgical removal involves excising the lesion under local anesthesia. These procedures are commonly performed in outpatient dermatology clinics.',
                'symptoms' => [
            ['value' => 'Raised or abnormal skin growths'],
            ['value' => 'Skin lesions causing irritation or discomfort'],
            ['value' => 'Cosmetic skin concerns affecting appearance'],
            ['value' => 'Bleeding, itching, or inflamed benign lesions'],
            ['value' => 'Persistent or enlarging skin growths'],
        ],
                'causes' => [
            ['value' => 'Benign skin lesions may develop due to aging, genetic predisposition, viral infections, sun exposure, hormonal changes, skin friction, or blocked skin glands. Certain lesions such as warts are caused by viral infections, while skin tags may occur more commonly in areas of friction or in individuals with obesity or diabetes. Long-term sun exposure can contribute to lesions like seborrheic keratoses and benign pigmented growths. Some cysts and lipomas may develop due to blocked follicles, trauma, or inherited tendencies.'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, swelling, or discomfort'],
            ['value' => 'Mild scarring or pigmentation changes'],
            ['value' => 'Infection at the treatment site in rare cases'],
            ['value' => 'Recurrence of the lesion requiring repeat treatment'],
            ['value' => 'Delayed wound healing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for benign skin lesions depend on the type, size, location, and cosmetic concerns associated with the lesion. Cryotherapy is commonly used to freeze and destroy lesions such as warts and skin tags using liquid nitrogen. Laser therapy offers a precise and minimally invasive method for removing pigmented lesions, vascular lesions, and certain growths with minimal damage to surrounding skin. Surgical excision may be recommended for larger cysts, lipomas, moles, or lesions requiring complete removal and histopathological examination. Additional treatment methods such as electrocautery, radiofrequency ablation, or shave excision may also be used in selected cases. Dermatologists choose the most appropriate technique to ensure effective removal, minimal scarring, and optimal cosmetic outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keeping the treated area clean and protected'],
            ['value' => 'Following wound care and medication instructions'],
            ['value' => 'Avoiding scratching or trauma to the treated skin'],
            ['value' => 'Using sun protection to reduce pigmentation changes'],
            ['value' => 'Regular dermatologic follow-up if required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, swelling, or discomfort'],
            ['value' => 'Mild scarring or pigmentation changes'],
            ['value' => 'Infection at the treatment site in rare cases'],
            ['value' => 'Recurrence of the lesion requiring repeat treatment'],
            ['value' => 'Delayed wound healing in some individuals'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for benign skin lesions depend on the type, size, location, and cosmetic concerns associated with the lesion. Cryotherapy is commonly used to freeze and destroy lesions such as warts and skin tags using liquid nitrogen. Laser therapy offers a precise and minimally invasive method for removing pigmented lesions, vascular lesions, and certain growths with minimal damage to surrounding skin. Surgical excision may be recommended for larger cysts, lipomas, moles, or lesions requiring complete removal and histopathological examination. Additional treatment methods such as electrocautery, radiofrequency ablation, or shave excision may also be used in selected cases. Dermatologists choose the most appropriate technique to ensure effective removal, minimal scarring, and optimal cosmetic outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook after removal of benign skin lesions is generally very good. Most lesions are successfully treated with minimal complications and good cosmetic outcomes. Proper skin care, sun protection, and regular dermatologic evaluations help maintain healthy skin and reduce the risk of recurrence or development of new lesions.',
                'conclusion' => '',
                'seo_title' => 'Removal of Benign Skin Lesions',
                'seo_description' => 'Cryotherapy, laser therapy, and surgical excision are commonly used dermatologic procedures for the removal of benign (noncancerous) skin lesions. These treatments help remove unwanted skin growths, improve comfort, and enhance cosmetic appearance while preserving healthy surrounding tissue.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
