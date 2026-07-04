<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CleftLipPalateRepairCraniofacialSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cleft Lip & Palate Repair / Craniofacial Surgery')],
            [
                'name' => 'Cleft Lip & Palate Repair / Craniofacial Surgery',
                'slug' => Str::slug('Cleft Lip & Palate Repair / Craniofacial Surgery'),
                'h1' => 'Cleft Lip & Palate Repair / Craniofacial Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cleft lip and palate repair along with craniofacial surgery are specialized reconstructive surgical procedures performed to correct congenital abnormalities affecting the lip, palate, skull, jaws, and facial bones. These procedures help improve feeding, speech, breathing, hearing, facial appearance, and overall growth and development in children and adults with craniofacial conditions.',
                'about_more' => '',
                'overview' => 'Cleft lip repair focuses on restoring the continuity and appearance of the upper lip, while cleft palate repair reconstructs the roof of the mouth to improve speech and swallowing function. Craniofacial surgery involves correction of complex facial and skull deformities affecting the jaws, eye sockets, facial bones, and airway structures. Treatment often requires a multidisciplinary approach involving craniofacial surgeons, orthodontists, speech therapists, pediatricians, ENT specialists, and rehabilitation teams to achieve optimal functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Visible cleft or separation of the lip and/or palate'],
            ['value' => 'Difficulty feeding, swallowing, or speaking'],
            ['value' => 'Facial asymmetry or abnormal craniofacial growth'],
            ['value' => 'Recurrent ear infections or hearing problems'],
            ['value' => 'Dental alignment issues and jaw growth abnormalities'],
        ],
                'causes' => [
            ['value' => 'Congenital developmental abnormalities during fetal growth'],
            ['value' => 'Genetic or hereditary craniofacial conditions'],
            ['value' => 'Incomplete fusion of facial and palatal tissues before birth'],
            ['value' => 'Syndromic craniofacial developmental disorders'],
            ['value' => 'Abnormal skull, jaw, or facial bone development'],
        ],
                'risks' => [
            ['value' => 'Speech and language development difficulties'],
            ['value' => 'Feeding and nutritional challenges in early childhood'],
            ['value' => 'Hearing impairment or recurrent ear infections'],
            ['value' => 'Facial growth abnormalities and dental malocclusion'],
            ['value' => 'Emotional and psychological concerns related to appearance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical cleft lip and palate repair procedures'],
            ['value' => 'Craniofacial reconstructive and corrective surgery'],
            ['value' => 'Jaw alignment and facial bone reconstruction procedures'],
            ['value' => 'Speech therapy, orthodontic care, and hearing management'],
            ['value' => 'Long-term multidisciplinary rehabilitation and developmental follow-up support'],
        ],
                'recovery' => 'The long-term outlook for cleft lip, palate, and craniofacial surgery is generally very positive because modern reconstructive techniques and multidisciplinary care significantly improve speech, feeding, facial growth, appearance, and overall quality of life. Early intervention, continuous rehabilitation, speech therapy, orthodontic management, and regular follow-up are important for maintaining successful long-term functional and developmental outcomes. ____________________ 6. Surgical Management of Oral & Maxillofacial Tumors Surgical Management of Oral & Maxillofacial Tumors Procedures',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Cleft Lip & Palate Repair / Craniofacial Surgery',
                'meta_description' => 'Cleft lip and palate repair along with craniofacial surgery are specialized reconstructive surgical procedures performed to correct congenital abnormalities aff',
                'meta_keywords' => '',
            ]
        );
    }
}
