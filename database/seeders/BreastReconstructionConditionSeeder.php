<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastReconstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Breast Reconstruction')],
            [
                'name' => 'Breast Reconstruction',
                'slug' => Str::slug('Breast Reconstruction'),
                'h1' => 'Breast Reconstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Breast reconstruction is a specialized reconstructive and aesthetic surgical procedure performed to restore the shape, symmetry, and appearance of the breast following mastectomy, trauma, congenital deformity, or cosmetic concerns. These procedures help improve body image, physical comfort, emotional well-being, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Breast reconstruction may be performed immediately after mastectomy or at a later stage depending on the patient’s medical condition and treatment plan. Reconstruction techniques include implant-based reconstruction, autologous tissue flap reconstruction using the patient’s own tissue, and aesthetic breast contouring procedures for symmetry correction or cosmetic enhancement. Modern reconstructive approaches focus on restoring natural breast shape while maintaining comfort and functionality.',
                'symptoms' => [
            ['value' => 'Loss of breast tissue following mastectomy or trauma'],
            ['value' => 'Breast asymmetry or contour irregularities'],
            ['value' => 'Chest wall deformity or tissue loss'],
            ['value' => 'Cosmetic concerns affecting body image and confidence'],
            ['value' => 'Tightness, scarring, or discomfort after breast surgery'],
        ],
                'causes' => [
            ['value' => 'Breast cancer requiring mastectomy treatment'],
            ['value' => 'Congenital breast deformities or developmental asymmetry'],
            ['value' => 'Trauma, burns, or surgical tissue loss affecting the breast'],
            ['value' => 'Previous breast surgery or radiation-related tissue changes'],
            ['value' => 'Aesthetic concerns related to breast shape, size, or symmetry'],
        ],
                'risks' => [
            ['value' => 'Infection, bleeding, or delayed wound healing'],
            ['value' => 'Implant-related complications or tissue rejection in rare cases'],
            ['value' => 'Scar formation or cosmetic asymmetry'],
            ['value' => 'Reduced sensation or tightness in reconstructed tissues'],
            ['value' => 'Need for staged or revision reconstructive procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Implant-based breast reconstruction procedures'],
            ['value' => 'Autologous tissue flap reconstruction using the patient’s own tissue'],
            ['value' => 'Aesthetic breast contouring and symmetry correction procedures'],
            ['value' => 'Nipple and areola reconstruction when required'],
            ['value' => 'Long-term postoperative care, physiotherapy, and emotional support services'],
        ],
                'recovery' => 'The long-term outlook for breast reconstruction is generally very positive because modern reconstructive and aesthetic techniques can significantly improve physical appearance, comfort, confidence, and emotional recovery. Regular follow-up, healthy lifestyle practices, rehabilitation support, and multidisciplinary care are important for maintaining long-term surgical outcomes and overall well-being. __________________________ 10. Liposuction & Fat Transfer Liposuction & Fat Transfer Procedures',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Breast Reconstruction',
                'meta_description' => 'Breast reconstruction is a specialized reconstructive and aesthetic surgical procedure performed to restore the shape, symmetry, and appearance of the breast fo',
                'meta_keywords' => '',
            ]
        );
    }
}
