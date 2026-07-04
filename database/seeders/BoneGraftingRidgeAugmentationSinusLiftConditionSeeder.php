<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoneGraftingRidgeAugmentationSinusLiftConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bone Grafting / Ridge Augmentation / Sinus Lift')],
            [
                'name' => 'Bone Grafting / Ridge Augmentation / Sinus Lift',
                'slug' => Str::slug('Bone Grafting / Ridge Augmentation / Sinus Lift'),
                'h1' => 'Bone Grafting / Ridge Augmentation / Sinus Lift',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bone grafting, ridge augmentation, and sinus lift procedures are advanced reconstructive oral and maxillofacial surgical treatments performed to restore deficient jawbone structure and improve support for dental implants, prosthetic rehabilitation, and facial stability. These procedures help rebuild lost bone volume caused by tooth loss, trauma, periodontal disease, infection, or long-term bone resorption.',
                'about_more' => '',
                'overview' => 'Bone grafting involves placement of natural or synthetic graft material to regenerate and strengthen jawbone structure. Ridge augmentation is performed to restore the height and width of the jaw ridge when bone loss affects implant placement or facial contour. A sinus lift procedure is commonly performed in the upper jaw to increase bone height beneath the maxillary sinus by elevating the sinus membrane and placing bone graft material. These procedures improve implant stability, oral function, and long-term restorative outcomes.',
                'symptoms' => [
            ['value' => 'Insufficient jawbone for dental implant placement'],
            ['value' => 'Jawbone shrinkage after tooth loss'],
            ['value' => 'Loose dentures or poor prosthetic support'],
            ['value' => 'Facial contour changes due to bone deficiency'],
            ['value' => 'Bone loss following trauma, infection, or periodontal disease'],
        ],
                'causes' => [
            ['value' => 'Tooth loss leading to gradual bone resorption'],
            ['value' => 'Periodontal disease and chronic dental infections'],
            ['value' => 'Trauma or fractures affecting the jawbone'],
            ['value' => 'Long-term denture use causing ridge resorption'],
            ['value' => 'Congenital defects or bone loss after cyst or tumor removal'],
        ],
                'risks' => [
            ['value' => 'Swelling, pain, or temporary discomfort after surgery'],
            ['value' => 'Infection or delayed bone healing'],
            ['value' => 'Graft failure or inadequate bone integration'],
            ['value' => 'Sinus membrane perforation during sinus lift procedures'],
            ['value' => 'Need for additional grafting or corrective procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination and radiographic bone assessment'],
            ['value' => 'Bone grafting using autogenous, allogenic, xenogenic, or synthetic graft materials'],
            ['value' => 'Ridge augmentation procedures for restoration of jawbone contour and volume'],
            ['value' => 'Sinus lift surgery to increase bone height in the upper jaw'],
            ['value' => 'Long-term implant planning, oral rehabilitation, and postoperative follow-up care'],
        ],
                'recovery' => 'The long-term outlook for bone grafting, ridge augmentation, and sinus lift procedures is generally very positive because modern regenerative and reconstructive techniques significantly improve jawbone quality, implant success, oral function, and facial support. Proper surgical planning, oral hygiene maintenance, regular follow-up, and adherence to postoperative care instructions are essential for maintaining successful long-term healing and dental rehabilitation outcomes. ______________________ 8. TMJ Surgery (Arthrocentesis, Arthroscopy, Arthroplasty) TMJ Surgery (Arthrocentesis, Arthroscopy & Arthroplasty) Procedures',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Bone Grafting / Ridge Augmentation / Sinus Lift',
                'meta_description' => 'Bone grafting, ridge augmentation, and sinus lift procedures are advanced reconstructive oral and maxillofacial surgical treatments performed to restore deficie',
                'meta_keywords' => '',
            ]
        );
    }
}
