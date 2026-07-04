<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfantWarmersRadiantWarmersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Infant Warmers & Radiant Warmers')],
            [
                'title' => 'Infant Warmers & Radiant Warmers',
                'slug' => Str::slug('Infant Warmers & Radiant Warmers'),
                'introduction' => 'Infant warmers and radiant warmers are neonatal care devices designed to maintain body temperature and prevent hypothermia in newborn babies, especially premature or critically ill infants.',
                'what_is' => 'Newborns, particularly premature babies, have difficulty regulating body temperature. Radiant warmers provide controlled heat while allowing easy access for medical procedures and monitoring. These devices are commonly used in delivery rooms, NICUs, and neonatal emergency units.',
                'symptoms' => [
            ['value' => 'Low body temperature in newborns'],
            ['value' => 'Prematurity or low birth weight'],
            ['value' => 'Weak crying or poor activity after birth'],
            ['value' => 'Difficulty maintaining normal body warmth'],
            ['value' => 'Respiratory distress requiring close monitoring'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hypothermia-related complications'],
            ['value' => 'Dehydration due to overheating'],
            ['value' => 'Increased infection risk in premature babies'],
            ['value' => 'Respiratory instability in critically ill newborns'],
            ['value' => 'Temperature fluctuations affecting neonatal health'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuously monitor newborn body temperature'],
            ['value' => 'Ensure proper hydration and feeding support'],
            ['value' => 'Maintain sterile neonatal care practices'],
            ['value' => 'Monitor oxygen levels and vital signs regularly'],
            ['value' => 'Gradually transition to normal temperature environment when stable'],
        ],
                'surgery_risks' => [
            ['value' => 'Hypothermia-related complications'],
            ['value' => 'Dehydration due to overheating'],
            ['value' => 'Increased infection risk in premature babies'],
            ['value' => 'Respiratory instability in critically ill newborns'],
            ['value' => 'Temperature fluctuations affecting neonatal health'],
        ],
                'long_term_outlook' => 'Proper thermal care using infant warmers significantly improves neonatal survival, reduces complications, and supports healthy adaptation after birth.',
                'conclusion' => '',
                'seo_title' => 'Infant Warmers & Radiant Warmers',
                'seo_description' => 'Infant warmers and radiant warmers are neonatal care devices designed to maintain body temperature and prevent hypothermia in newborn babies, especially premature or critically ill infants.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
