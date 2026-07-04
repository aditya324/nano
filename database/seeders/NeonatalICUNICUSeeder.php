<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeonatalICUNICUSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neonatal ICU (NICU)')],
            [
                'title' => 'Neonatal ICU (NICU)',
                'slug' => Str::slug('Neonatal ICU (NICU)'),
                'introduction' => 'Neonatal Intensive Care Unit (NICU) is a highly specialized medical facility dedicated to the care of premature, low birth weight, and critically ill newborn babies.',
                'what_is' => 'NICUs provide advanced neonatal monitoring, respiratory support, thermal regulation, nutritional care, infection control, and emergency treatment for newborns with complications such as prematurity, birth asphyxia, jaundice, congenital disorders, and respiratory distress. Specialized neonatal doctors and nurses provide continuous care using advanced neonatal equipment.',
                'symptoms' => [
            ['value' => 'Premature birth or low birth weight'],
            ['value' => 'Difficulty breathing after birth'],
            ['value' => 'Neonatal infections or fever'],
            ['value' => 'Feeding difficulties and poor sucking reflex'],
            ['value' => 'Jaundice, seizures, or abnormal movements'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Respiratory distress syndrome'],
            ['value' => 'Neonatal infections and sepsis'],
            ['value' => 'Brain or developmental complications'],
            ['value' => 'Feeding and growth difficulties'],
            ['value' => 'Long-term neurological problems in severe cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain strict infection control practices'],
            ['value' => 'Monitor feeding, weight gain, and temperature'],
            ['value' => 'Provide regular neonatal follow-up evaluations'],
            ['value' => 'Support breastfeeding and nutritional care'],
            ['value' => 'Monitor developmental milestones after discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Respiratory distress syndrome'],
            ['value' => 'Neonatal infections and sepsis'],
            ['value' => 'Brain or developmental complications'],
            ['value' => 'Feeding and growth difficulties'],
            ['value' => 'Long-term neurological problems in severe cases'],
        ],
                'long_term_outlook' => 'Advanced NICU care greatly improves survival rates and developmental outcomes in premature and critically ill newborns through specialized neonatal management.',
                'conclusion' => '',
                'seo_title' => 'Neonatal ICU (NICU)',
                'seo_description' => 'Neonatal Intensive Care Unit (NICU) is a highly specialized medical facility dedicated to the care of premature, low birth weight, and critically ill newborn babies.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
