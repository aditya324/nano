<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricCongenitalDeformityCorrectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Congenital Deformity Correction')],
            [
                'name' => 'Pediatric Congenital Deformity Correction',
                'slug' => Str::slug('Pediatric Congenital Deformity Correction'),
                'h1' => 'Pediatric Congenital Deformity Correction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric congenital deformity correction involves specialized reconstructive and corrective surgical procedures performed to treat structural abnormalities present at birth that affect a child’s appearance, movement, growth, or organ function. These procedures aim to improve physical development, functional ability, and overall quality of life while supporting healthy growth and long-term well-being.',
                'about_more' => '',
                'overview' => 'Congenital deformity correction procedures are commonly performed for conditions affecting the face, skull, hands, limbs, spine, chest wall, and soft tissues. These may include cleft lip and palate, craniofacial abnormalities, syndactyly, limb deformities, ear deformities, and other developmental conditions. Treatment often involves multidisciplinary care with pediatric surgeons, plastic surgeons, orthopedic specialists, speech therapists, physiotherapists, and rehabilitation teams to achieve the best functional and cosmetic outcomes.',
                'symptoms' => [
            ['value' => 'Visible structural abnormalities present at birth'],
            ['value' => 'Difficulty feeding, speaking, or breathing'],
            ['value' => 'Abnormal limb movement or restricted joint function'],
            ['value' => 'Facial asymmetry or developmental growth concerns'],
            ['value' => 'Delayed physical or functional development'],
        ],
                'causes' => [
            ['value' => 'Genetic or hereditary developmental abnormalities'],
            ['value' => 'Abnormal fetal growth and tissue development'],
            ['value' => 'Congenital syndromes or chromosomal conditions'],
            ['value' => 'Environmental or maternal health-related factors during pregnancy'],
            ['value' => 'Abnormal formation of bones, muscles, or soft tissues during development'],
        ],
                'risks' => [
            ['value' => 'Functional limitations affecting movement or daily activities'],
            ['value' => 'Speech, hearing, or breathing difficulties'],
            ['value' => 'Emotional and psychological challenges related to appearance'],
            ['value' => 'Delayed growth or developmental complications'],
            ['value' => 'Need for multiple corrective procedures during growth years'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical assessment and congenital deformity evaluation'],
            ['value' => 'Reconstructive and corrective pediatric surgical procedures'],
            ['value' => 'Craniofacial, hand, limb, or soft tissue reconstruction techniques'],
            ['value' => 'Physiotherapy, speech therapy, and rehabilitation support'],
            ['value' => 'Long-term pediatric follow-up and multidisciplinary developmental care'],
        ],
                'recovery' => 'The long-term outlook for pediatric congenital deformity correction is generally very positive because early diagnosis and modern reconstructive techniques can significantly improve function, appearance, growth, and overall development. Continuous medical follow-up, rehabilitation, family support, and multidisciplinary care are important for maintaining successful long-term physical and developmental outcomes. ____________________',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Pediatric Congenital Deformity Correction',
                'meta_description' => 'Pediatric congenital deformity correction involves specialized reconstructive and corrective surgical procedures performed to treat structural abnormalities pre',
                'meta_keywords' => '',
            ]
        );
    }
}
