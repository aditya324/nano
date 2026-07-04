<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofMalocclusionOrthodonticSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Malocclusion & Orthodontic Surgery')],
            [
                'name' => 'Management of Malocclusion & Orthodontic Surgery',
                'slug' => Str::slug('Management of Malocclusion & Orthodontic Surgery'),
                'h1' => 'Management of Malocclusion & Orthodontic Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of malocclusion and orthodontic surgery involves specialized dental, orthodontic, and surgical treatments performed to correct misalignment of the teeth and jaws. These procedures help improve bite function, facial balance, speech, chewing efficiency, oral health, and overall facial aesthetics.',
                'about_more' => '',
                'overview' => 'Malocclusion refers to improper alignment between the upper and lower teeth and jaws. Mild cases may be corrected with orthodontic treatment alone, while severe skeletal deformities often require orthognathic surgery combined with braces or aligners. Orthodontic surgery repositions the jaws to restore proper alignment, improve facial symmetry, and correct functional problems related to chewing, speech, breathing, and temporomandibular joint function. Treatment planning commonly involves collaboration between orthodontists and oral & maxillofacial surgeons.',
                'symptoms' => [
            ['value' => 'Crooked, crowded, or protruding teeth'],
            ['value' => 'Difficulty chewing or biting food properly'],
            ['value' => 'Jaw pain, facial discomfort, or bite imbalance'],
            ['value' => 'Facial asymmetry or abnormal jaw appearance'],
            ['value' => 'Speech difficulties or breathing-related concerns'],
        ],
                'causes' => [
            ['value' => 'Abnormal jaw growth and skeletal development'],
            ['value' => 'Genetic or hereditary dental alignment disorders'],
            ['value' => 'Thumb sucking or childhood oral habits affecting jaw growth'],
            ['value' => 'Congenital craniofacial abnormalities'],
            ['value' => 'Trauma or developmental disturbances affecting jaw structure'],
        ],
                'risks' => [
            ['value' => 'Tooth wear, gum problems, or dental damage'],
            ['value' => 'Chronic jaw pain and temporomandibular joint dysfunction'],
            ['value' => 'Difficulty maintaining oral hygiene due to crowded teeth'],
            ['value' => 'Facial asymmetry or functional impairment if untreated'],
            ['value' => 'Need for long-term orthodontic and surgical rehabilitation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical dental, facial, and skeletal assessment'],
            ['value' => 'Orthodontic treatment using braces or clear aligners'],
            ['value' => 'Orthognathic jaw surgery for severe skeletal malocclusion'],
            ['value' => 'Bite correction and facial symmetry improvement procedures'],
            ['value' => 'Long-term orthodontic retention and postoperative follow-up care'],
        ],
                'recovery' => 'The long-term outlook for management of malocclusion and orthodontic surgery is generally very positive because modern orthodontic and surgical techniques significantly improve bite function, jaw alignment, facial appearance, speech, and overall oral health. Proper treatment planning, oral hygiene maintenance, regular follow-up, and adherence to orthodontic care instructions are essential for maintaining successful long-term functional and cosmetic outcomes. ____________________ 18. Post-Traumatic Facial Reconstruction Post-Traumatic Facial Reconstruction Procedures',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Management of Malocclusion & Orthodontic Surgery',
                'meta_description' => 'Management of malocclusion and orthodontic surgery involves specialized dental, orthodontic, and surgical treatments performed to correct misalignment of the te',
                'meta_keywords' => '',
            ]
        );
    }
}
