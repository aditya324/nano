<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteFebrileIllnessFeverofUnknownOriginConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Febrile Illness (Fever of Unknown Origin)')],
            [
                'name' => 'Acute Febrile Illness (Fever of Unknown Origin)',
                'slug' => Str::slug('Acute Febrile Illness (Fever of Unknown Origin)'),
                'h1' => 'Acute Febrile Illness (Fever of Unknown Origin)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute febrile illness refers to a medical condition characterized by the sudden onset of fever, often accompanied by symptoms such as weakness, body aches, chills, or infection-related complaints. Fever of Unknown Origin (FUO) occurs when persistent fever remains unexplained despite routine medical evaluation and investigations. Acute febrile illnesses may result from infections, inflammatory disorders, autoimmune diseases, malignancies, or metabolic conditions. Early diagnosis and prompt medical evaluation are essential to identify the underlying cause, prevent complications, and support effective recovery.',
                'about_more' => '',
                'overview' => 'Acute febrile illness refers to a medical condition characterized by the sudden onset of fever, often accompanied by symptoms such as weakness, body aches, chills, or infection-related complaints. Fever of Unknown Origin (FUO) occurs when persistent fever remains unexplained despite routine medical evaluation and investigations. Acute febrile illnesses may result from infections, inflammatory disorders, autoimmune diseases, malignancies, or metabolic conditions. Early diagnosis and prompt medical evaluation are essential to identify the underlying cause, prevent complications, and support effective recovery.',
                'symptoms' => [
            ['value' => 'Fever with chills or excessive sweating'],
            ['value' => 'Fatigue, weakness, or body aches'],
            ['value' => 'Headache, loss of appetite, or generalized discomfort'],
            ['value' => 'Nausea, cough, sore throat, or abdominal symptoms depending on the cause'],
            ['value' => 'Weight loss, night sweats, or persistent fever in prolonged illness cases'],
        ],
                'causes' => [
            ['value' => 'Viral, bacterial, fungal, or parasitic infections'],
            ['value' => 'Tuberculosis, dengue, malaria, or other tropical infections'],
            ['value' => 'Autoimmune or inflammatory disorders causing persistent fever'],
            ['value' => 'Malignancies or hidden chronic medical conditions'],
            ['value' => 'Environmental exposure, travel-related infections, or weakened immunity'],
        ],
                'risks' => [
            ['value' => 'Severe dehydration and electrolyte imbalance'],
            ['value' => 'Sepsis or life-threatening systemic infection'],
            ['value' => 'Organ dysfunction affecting the lungs, liver, kidneys, or brain'],
            ['value' => 'Delayed diagnosis leading to progression of underlying disease'],
            ['value' => 'Chronic weakness, nutritional deficiency, or prolonged hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for acute febrile illness and fever of unknown origin focuses on identifying the underlying cause, controlling fever, preventing complications, and supporting recovery. Management may include laboratory investigations, blood cultures, imaging studies, hydration therapy, antibiotics, antiviral or antiparasitic medications, anti-inflammatory treatment, and supportive medical care. Severe cases may require hospitalization, intravenous fluids, oxygen support, or intensive monitoring. Patients may also benefit from nutritional support, infection prevention measures, specialist consultations, and long-term follow-up care depending on the underlying diagnosis.'],
        ],
                'recovery' => 'The long-term outlook for acute febrile illness and fever of unknown origin depends on the underlying cause, severity of illness, treatment response, and overall patient health. Early diagnosis, proper hydration, medication adherence, healthy nutrition, rest, infection control, regular medical monitoring, and continuous healthcare follow-up significantly help improve recovery, reduce complications, preserve organ function, and enhance overall quality of life. _________________ 24. Fluid Overload / Edema Fluid Overload / Edema',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Acute Febrile Illness (Fever of Unknown Origin)',
                'meta_description' => 'Acute febrile illness refers to a medical condition characterized by the sudden onset of fever, often accompanied by symptoms such as weakness, body aches, chil',
                'meta_keywords' => '',
            ]
        );
    }
}
