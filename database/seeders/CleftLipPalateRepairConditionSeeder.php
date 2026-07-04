<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CleftLipPalateRepairConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cleft Lip & Palate Repair')],
            [
                'name' => 'Cleft Lip & Palate Repair',
                'slug' => Str::slug('Cleft Lip & Palate Repair'),
                'h1' => 'Cleft Lip & Palate Repair',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cleft lip and palate repair are specialized reconstructive surgical procedures performed to correct congenital openings or separations in the upper lip and roof of the mouth (palate). These procedures help improve feeding, speech, breathing, hearing, facial appearance, and overall growth and development in children born with cleft-related conditions.',
                'about_more' => '',
                'overview' => 'Cleft lip repair is usually performed during early infancy to restore the normal structure and appearance of the upper lip, while cleft palate repair focuses on closing the opening in the roof of the mouth to improve speech and swallowing function. These procedures are often part of a multidisciplinary treatment approach involving plastic surgeons, pediatricians, speech therapists, dentists, orthodontists, and ENT specialists. Early surgical correction and long-term follow-up are essential for optimal functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Visible opening or separation in the lip or palate'],
            ['value' => 'Difficulty feeding or swallowing in infants'],
            ['value' => 'Speech and language development difficulties'],
            ['value' => 'Frequent ear infections or hearing problems'],
            ['value' => 'Dental alignment or facial growth abnormalities'],
        ],
                'causes' => [
            ['value' => 'Congenital developmental abnormalities during pregnancy'],
            ['value' => 'Genetic or hereditary factors'],
            ['value' => 'Nutritional or environmental influences during fetal development'],
            ['value' => 'Syndromic or chromosomal conditions associated with cleft formation'],
            ['value' => 'Abnormal fusion of facial tissues during early pregnancy'],
        ],
                'risks' => [
            ['value' => 'Feeding difficulties and poor weight gain in infancy'],
            ['value' => 'Speech, hearing, or dental complications'],
            ['value' => 'Infection or delayed healing after surgery'],
            ['value' => 'Scar formation or residual facial asymmetry'],
            ['value' => 'Need for additional corrective or reconstructive procedures during growth'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical cleft lip and palate repair procedures'],
            ['value' => 'Feeding support and pediatric nutritional care'],
            ['value' => 'Speech therapy and hearing evaluation'],
            ['value' => 'Orthodontic and dental corrective treatment'],
            ['value' => 'Long-term craniofacial follow-up and multidisciplinary rehabilitation support'],
        ],
                'recovery' => 'The long-term outlook for cleft lip and palate repair is generally very positive because modern reconstructive techniques can significantly improve feeding, speech, facial appearance, and overall quality of life. Early intervention, regular follow-up, speech therapy, dental care, and multidisciplinary support are important for achieving successful long-term functional and developmental outcomes. ______________________',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Cleft Lip & Palate Repair',
                'meta_description' => 'Cleft lip and palate repair are specialized reconstructive surgical procedures performed to correct congenital openings or separations in the upper lip and roof',
                'meta_keywords' => '',
            ]
        );
    }
}
