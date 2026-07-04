<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastfeedingLactationSupportRoomSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Breastfeeding & Lactation Support Room')],
            [
                'title' => 'Breastfeeding & Lactation Support Room',
                'slug' => Str::slug('Breastfeeding & Lactation Support Room'),
                'introduction' => 'A breastfeeding and lactation support room is a dedicated, hygienic, and comfortable facility designed to help mothers breastfeed, express milk, and receive lactation counseling in a supportive environment.',
                'what_is' => 'These rooms promote successful breastfeeding by providing privacy, seating arrangements, breast pumps, hand hygiene facilities, and lactation education. Lactation consultants assist mothers with breastfeeding techniques, milk supply issues, nipple pain, latching difficulties, and newborn feeding concerns. Such facilities are especially important in maternity hospitals, NICUs, pediatric centers, and workplaces.',
                'symptoms' => [
            ['value' => 'Difficulty breastfeeding or poor infant latch'],
            ['value' => 'Breast engorgement or nipple pain'],
            ['value' => 'Low breast milk production concerns'],
            ['value' => 'Premature babies requiring expressed milk feeding'],
            ['value' => 'Maternal anxiety regarding infant feeding'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Breastfeeding failure or inadequate infant nutrition'],
            ['value' => 'Breast infections such as mastitis'],
            ['value' => 'Emotional stress related to feeding difficulties'],
            ['value' => 'Poor infant weight gain or dehydration'],
            ['value' => 'Reduced mother-infant bonding if feeding issues persist'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Practice correct breastfeeding positioning and latch techniques'],
            ['value' => 'Maintain breast hygiene and hydration'],
            ['value' => 'Feed the baby frequently as advised'],
            ['value' => 'Seek lactation consultation for persistent difficulties'],
            ['value' => 'Monitor infant weight gain and feeding patterns'],
        ],
                'surgery_risks' => [
            ['value' => 'Breastfeeding failure or inadequate infant nutrition'],
            ['value' => 'Breast infections such as mastitis'],
            ['value' => 'Emotional stress related to feeding difficulties'],
            ['value' => 'Poor infant weight gain or dehydration'],
            ['value' => 'Reduced mother-infant bonding if feeding issues persist'],
        ],
                'long_term_outlook' => 'Proper lactation support improves breastfeeding success, infant nutrition, immunity, mother-child bonding, and long-term child health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Breastfeeding & Lactation Support Room',
                'seo_description' => 'A breastfeeding and lactation support room is a dedicated, hygienic, and comfortable facility designed to help mothers breastfeed, express milk, and receive lactation counseling in a supportive environment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
