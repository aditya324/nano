<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionalSupportinICUEnteralParenteralSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Nutritional Support in ICU (Enteral / Parenteral)')],
            [
                'title' => 'Nutritional Support in ICU (Enteral / Parenteral)',
                'slug' => Str::slug('Nutritional Support in ICU (Enteral / Parenteral)'),
                'introduction' => 'Nutritional support in the Intensive Care Unit (ICU) is a specialized critical care procedure used to provide essential nutrients, energy, proteins, vitamins, and fluids to critically ill patients who are unable to maintain adequate nutrition through normal oral intake. Enteral and parenteral nutrition support helps preserve organ function, improve healing, strengthen immunity, and support recovery during severe illness, trauma, surgery, or prolonged intensive care treatment.',
                'what_is' => 'Enteral nutrition involves delivering liquid nutritional formulas directly into the stomach or intestines through feeding tubes, while parenteral nutrition provides nutrients intravenously through central venous access when the digestive system cannot be used safely. These nutritional support procedures are commonly used in mechanically ventilated patients, severe trauma cases, sepsis, burns, gastrointestinal failure, neurological emergencies, and critically ill patients requiring prolonged ICU care. Nutritional therapy is carefully monitored and individualized based on metabolic requirements, organ function, fluid balance, and overall medical condition.',
                'symptoms' => [
            ['value' => 'Inability to eat or swallow safely'],
            ['value' => 'Severe weakness, malnutrition, or weight loss'],
            ['value' => 'Critical illness requiring prolonged intensive care support'],
            ['value' => 'Gastrointestinal dysfunction or impaired nutrient absorption'],
            ['value' => 'Increased nutritional demands during severe infection, trauma, or recovery'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Aspiration or respiratory complications during enteral feeding'],
            ['value' => 'Infection related to intravenous nutritional access'],
            ['value' => 'Electrolyte imbalance or metabolic complications'],
            ['value' => 'Liver dysfunction or blood sugar instability during prolonged nutritional therapy'],
            ['value' => 'Gastrointestinal intolerance, diarrhea, or feeding tube complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Nutritional support procedures in ICU focus on maintaining adequate calorie intake, preserving muscle mass, improving immune function, and supporting recovery from critical illness. Management may include enteral tube feeding, parenteral nutrition, fluid and electrolyte management, blood glucose monitoring, protein supplementation, vitamin and mineral replacement, gastrointestinal monitoring, and individualized dietary planning. Patients may also require multidisciplinary nutritional care involving intensivists, dietitians, gastroenterologists, nurses, and rehabilitation teams to optimize healing and reduce complications during critical care treatment.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of nutritional status and metabolic balance'],
            ['value' => 'Regular assessment of feeding tolerance and gastrointestinal function'],
            ['value' => 'Monitoring blood sugar, electrolytes, and organ function'],
            ['value' => 'Prevention of feeding-related infections or complications'],
            ['value' => 'Gradual transition to oral nutrition when clinically stable'],
        ],
                'surgery_risks' => [
            ['value' => 'Aspiration or respiratory complications during enteral feeding'],
            ['value' => 'Infection related to intravenous nutritional access'],
            ['value' => 'Electrolyte imbalance or metabolic complications'],
            ['value' => 'Liver dysfunction or blood sugar instability during prolonged nutritional therapy'],
            ['value' => 'Gastrointestinal intolerance, diarrhea, or feeding tube complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Nutritional support procedures in ICU focus on maintaining adequate calorie intake, preserving muscle mass, improving immune function, and supporting recovery from critical illness. Management may include enteral tube feeding, parenteral nutrition, fluid and electrolyte management, blood glucose monitoring, protein supplementation, vitamin and mineral replacement, gastrointestinal monitoring, and individualized dietary planning. Patients may also require multidisciplinary nutritional care involving intensivists, dietitians, gastroenterologists, nurses, and rehabilitation teams to optimize healing and reduce complications during critical care treatment.'],
        ],
                'long_term_outlook' => 'The long-term outlook following ICU nutritional support depends on the severity of the underlying illness, duration of critical care treatment, nutritional status, and overall patient recovery. Early nutritional intervention, careful metabolic monitoring, rehabilitation support, physiotherapy, and long-term dietary management significantly help improve healing, preserve muscle strength, reduce complications, support organ recovery, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Nutritional Support in ICU (Enteral / Parenteral)',
                'seo_description' => 'Nutritional support in the Intensive Care Unit (ICU) is a specialized critical care procedure used to provide essential nutrients, energy, proteins, vitamins, and fluids to critically ill patients who are unable to maintain adequate nutrition through normal oral intake. Enteral and parenteral nutrition support helps preserve organ function, improve healing, strengthen immunity, and support recovery during severe illness, trauma, surgery, or prolonged intensive care treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
