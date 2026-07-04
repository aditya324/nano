<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultiOrganDysfunctionCriticalInternalMedicineCasesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multi-Organ Dysfunction / Critical Internal Medicine Cases')],
            [
                'name' => 'Multi-Organ Dysfunction / Critical Internal Medicine Cases',
                'slug' => Str::slug('Multi-Organ Dysfunction / Critical Internal Medicine Cases'),
                'h1' => 'Multi-Organ Dysfunction / Critical Internal Medicine Cases',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Multi-organ dysfunction refers to severe medical conditions in which two or more organ systems begin to fail due to overwhelming illness, infection, trauma, metabolic imbalance, or critical systemic disease. These cases are commonly managed in intensive care units (ICUs) and require urgent multidisciplinary medical intervention. Critical internal medicine cases may involve the heart, lungs, kidneys, liver, brain, blood circulation, and metabolic systems, leading to life-threatening instability. Early recognition, intensive monitoring, and advanced supportive care are essential to improve survival outcomes and reduce long-term complications.',
                'about_more' => '',
                'overview' => 'Multi-organ dysfunction refers to severe medical conditions in which two or more organ systems begin to fail due to overwhelming illness, infection, trauma, metabolic imbalance, or critical systemic disease. These cases are commonly managed in intensive care units (ICUs) and require urgent multidisciplinary medical intervention. Critical internal medicine cases may involve the heart, lungs, kidneys, liver, brain, blood circulation, and metabolic systems, leading to life-threatening instability. Early recognition, intensive monitoring, and advanced supportive care are essential to improve survival outcomes and reduce long-term complications.',
                'symptoms' => [
            ['value' => 'Severe weakness, confusion, or altered consciousness'],
            ['value' => 'Difficulty breathing or low oxygen levels'],
            ['value' => 'Reduced urine output or kidney dysfunction'],
            ['value' => 'Low blood pressure, rapid heartbeat, or circulatory instability'],
            ['value' => 'Fever, severe infection symptoms, or failure of multiple body systems'],
        ],
                'causes' => [
            ['value' => 'Severe infections and sepsis causing systemic inflammation'],
            ['value' => 'Heart failure, respiratory failure, or shock affecting organ perfusion'],
            ['value' => 'Acute kidney injury, liver failure, or metabolic disturbances'],
            ['value' => 'Major trauma, burns, or surgical complications'],
            ['value' => 'Autoimmune diseases, poisoning, or chronic illnesses leading to critical deterioration'],
        ],
                'risks' => [
            ['value' => 'Respiratory failure requiring ventilatory support'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Severe infection, septic shock, or circulatory collapse'],
            ['value' => 'Brain dysfunction, coma, or neurological complications'],
            ['value' => 'Increased risk of long-term organ damage or life-threatening emergencies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for multi-organ dysfunction and critical internal medicine cases focuses on stabilizing vital functions, treating the underlying cause, supporting failing organs, and preventing further complications. Management may include intensive care monitoring, intravenous medications, oxygen therapy, ventilatory support, dialysis, blood pressure stabilization, infection control, electrolyte correction, nutritional support, and advanced life-support measures. Patients may also require multidisciplinary care involving intensivists, cardiologists, nephrologists, pulmonologists, infectious disease specialists, and rehabilitation teams to optimize recovery and long-term health outcomes.'],
        ],
                'recovery' => 'The long-term outlook for multi-organ dysfunction and critical internal medicine cases depends on the severity of organ involvement, speed of treatment, underlying medical conditions, and overall patient health. Early intensive care intervention, medication adherence, nutritional support, rehabilitation therapy, infection prevention, regular monitoring, and continuous specialist follow-up significantly help improve recovery, reduce complications, preserve organ function, enhance physical stability, and improve overall quality of life. __________________',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Multi-Organ Dysfunction / Critical Internal Medicine Cases',
                'meta_description' => 'Multi-organ dysfunction refers to severe medical conditions in which two or more organ systems begin to fail due to overwhelming illness, infection, trauma, met',
                'meta_keywords' => '',
            ]
        );
    }
}
