<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalManagementofOralMaxillofacialTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Surgical Management of Oral & Maxillofacial Tumors')],
            [
                'name' => 'Surgical Management of Oral & Maxillofacial Tumors',
                'slug' => Str::slug('Surgical Management of Oral & Maxillofacial Tumors'),
                'h1' => 'Surgical Management of Oral & Maxillofacial Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Surgical management of oral and maxillofacial tumors involves specialized procedures performed to diagnose, remove, and reconstruct tumors affecting the mouth, jaws, facial bones, salivary glands, and surrounding head and neck structures. These procedures are essential for treating both benign and malignant tumors while preserving facial appearance, oral function, and overall quality of life.',
                'about_more' => '',
                'overview' => 'Oral and maxillofacial tumors may arise from bone, soft tissues, salivary glands, mucosal lining, or tooth-forming structures. Surgical treatment may involve tumor excision, jaw resection, lymph node management, reconstructive surgery, and microsurgical tissue transfer depending on the type and extent of the tumor. Advanced imaging, biopsy evaluation, and multidisciplinary planning help ensure accurate diagnosis and effective treatment. Reconstructive procedures are often performed to restore chewing, speech, swallowing, facial symmetry, and airway function after tumor removal.',
                'symptoms' => [
            ['value' => 'Persistent oral swelling or facial lump'],
            ['value' => 'Mouth ulcers or lesions that do not heal'],
            ['value' => 'Jaw pain, facial numbness, or loose teeth'],
            ['value' => 'Difficulty chewing, swallowing, or speaking'],
            ['value' => 'Facial asymmetry or swelling in the neck or jaw region'],
        ],
                'causes' => [
            ['value' => 'Benign or malignant growth of oral and facial tissues'],
            ['value' => 'Tobacco and alcohol use in oral cancer cases'],
            ['value' => 'Chronic irritation or untreated pre-cancerous lesions'],
            ['value' => 'Genetic or developmental abnormalities affecting oral tissues'],
            ['value' => 'Salivary gland, bone, or soft tissue tumor formation'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed postoperative healing'],
            ['value' => 'Facial deformity or loss of oral function'],
            ['value' => 'Difficulty speaking, chewing, or swallowing'],
            ['value' => 'Nerve injury causing numbness or facial weakness'],
            ['value' => 'Tumor recurrence or spread in malignant conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical examination, imaging, and biopsy evaluation'],
            ['value' => 'Surgical excision of benign or malignant tumors'],
            ['value' => 'Jaw reconstruction, bone grafting, and facial reconstruction procedures'],
            ['value' => 'Microsurgical flap reconstruction and soft tissue repair'],
            ['value' => 'Long-term oncologic follow-up, rehabilitation, speech therapy, and nutritional support'],
        ],
                'recovery' => 'The long-term outlook for surgical management of oral and maxillofacial tumors depends on the type of tumor, stage of disease, extent of surgery, and rehabilitation support. Early diagnosis, complete tumor removal, reconstructive surgery, and multidisciplinary follow-up significantly improve survival, oral function, facial appearance, and quality of life. Continuous monitoring and rehabilitation are important for maintaining successful long-term functional and cosmetic outcomes. _________________________ 7. Bone Grafting / Ridge Augmentation / Sinus Lift Bone Grafting / Ridge Augmentation / Sinus Lift Procedures',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Surgical Management of Oral & Maxillofacial Tumors',
                'meta_description' => 'Surgical management of oral and maxillofacial tumors involves specialized procedures performed to diagnose, remove, and reconstruct tumors affecting the mouth, ',
                'meta_keywords' => '',
            ]
        );
    }
}
