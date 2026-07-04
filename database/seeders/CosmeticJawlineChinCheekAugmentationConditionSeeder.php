<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CosmeticJawlineChinCheekAugmentationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cosmetic Jawline / Chin / Cheek Augmentation')],
            [
                'name' => 'Cosmetic Jawline / Chin / Cheek Augmentation',
                'slug' => Str::slug('Cosmetic Jawline / Chin / Cheek Augmentation'),
                'h1' => 'Cosmetic Jawline / Chin / Cheek Augmentation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cosmetic jawline, chin, and cheek augmentation are aesthetic surgical and non-surgical procedures performed to enhance facial contour, improve symmetry, restore facial balance, and create a more defined facial appearance. These procedures help improve facial proportions, profile aesthetics, and overall self-confidence.',
                'about_more' => '',
                'overview' => 'Jawline augmentation enhances the lower facial contour and definition, chin augmentation improves chin projection and facial harmony, and cheek augmentation restores or enhances midface volume and contour. Procedures may involve implants, fat grafting, dermal fillers, bone contouring, or orthognathic corrective techniques depending on the patient’s facial structure and cosmetic goals. Advanced facial aesthetic planning helps achieve natural-looking and balanced results.',
                'symptoms' => [
            ['value' => 'Weak or poorly defined jawline'],
            ['value' => 'Receding or underdeveloped chin appearance'],
            ['value' => 'Flat or volume-deficient cheeks'],
            ['value' => 'Facial asymmetry or disproportionate facial profile'],
            ['value' => 'Cosmetic dissatisfaction affecting confidence and appearance'],
        ],
                'causes' => [
            ['value' => 'Genetic or hereditary facial skeletal variations'],
            ['value' => 'Aging-related facial volume loss and soft tissue sagging'],
            ['value' => 'Congenital or developmental facial structure differences'],
            ['value' => 'Weight loss or trauma affecting facial contour'],
            ['value' => 'Personal aesthetic and facial enhancement goals'],
        ],
                'risks' => [
            ['value' => 'Swelling, bruising, or temporary discomfort after procedures'],
            ['value' => 'Infection or delayed healing in surgical cases'],
            ['value' => 'Facial asymmetry or uneven cosmetic outcomes'],
            ['value' => 'Implant-related complications or filler migration in rare cases'],
            ['value' => 'Need for revision or maintenance procedures over time'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical facial analysis and aesthetic treatment planning'],
            ['value' => 'Chin and jawline augmentation using implants or bone contouring procedures'],
            ['value' => 'Cheek enhancement using implants, fat grafting, or dermal fillers'],
            ['value' => 'Non-surgical facial contouring and minimally invasive aesthetic procedures'],
            ['value' => 'Long-term postoperative care and cosmetic follow-up support'],
        ],
                'recovery' => 'The long-term outlook for cosmetic jawline, chin, and cheek augmentation is generally very positive because modern facial aesthetic techniques significantly improve facial definition, symmetry, balance, and overall appearance. Proper treatment planning, postoperative care, healthy skincare, and regular follow-up are important for maintaining successful long-term cosmetic outcomes and patient satisfaction. ____________________ 15. Biopsy of Oral Lesions & Cysts Biopsy of Oral Lesions & Cysts Procedures',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Cosmetic Jawline / Chin / Cheek Augmentation',
                'meta_description' => 'Cosmetic jawline, chin, and cheek augmentation are aesthetic surgical and non-surgical procedures performed to enhance facial contour, improve symmetry, restore',
                'meta_keywords' => '',
            ]
        );
    }
}
