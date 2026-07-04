<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BedsideProceduresChestTubeParacentesisThoracentesisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis)')],
            [
                'name' => 'Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis)',
                'slug' => Str::slug('Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis)'),
                'h1' => 'Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bedside procedures such as chest tube insertion, paracentesis, and thoracentesis are minimally invasive medical interventions commonly performed in critically ill or hospitalized patients to remove abnormal fluid or air collections, relieve symptoms, improve organ function, and support diagnosis and treatment. These procedures are often carried out at the patient’s bedside under sterile conditions using imaging guidance when required.',
                'about_more' => '',
                'overview' => 'Chest tube insertion involves placing a drainage tube into the pleural cavity to remove air, blood, pus, or fluid from around the lungs. Thoracentesis is a procedure used to remove excess fluid from the pleural space surrounding the lungs, while paracentesis involves draining fluid from the abdominal cavity. These procedures help relieve breathing difficulty, abdominal pressure, infection-related complications, and organ compression. Bedside procedures are commonly performed in intensive care units, emergency departments, medical wards, and critical care settings by trained physicians and critical care specialists.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Chest pain or pressure due to fluid or air accumulation'],
            ['value' => 'Abdominal swelling, discomfort, or fluid buildup'],
            ['value' => 'Reduced oxygen levels or respiratory distress'],
            ['value' => 'Infection, trauma, or organ dysfunction requiring fluid drainage'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding or injury to surrounding organs and tissues'],
            ['value' => 'Infection at the procedure site'],
            ['value' => 'Lung collapse or air leakage during thoracic procedures'],
            ['value' => 'Fluid leakage or recurrence of fluid accumulation'],
            ['value' => 'Pain, discomfort, or temporary breathing difficulty after the procedure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Bedside procedures focus on relieving pressure, improving breathing and circulation, removing abnormal fluid collections, and supporting recovery from underlying medical conditions. Management may include chest tube drainage systems, pleural or abdominal fluid removal, infection control, oxygen therapy, imaging guidance, laboratory analysis of drained fluid, pain management, and continuous monitoring. Patients may also require treatment for underlying conditions such as pleural effusion, pneumothorax, liver disease, trauma, infections, heart failure, or malignancy. Multidisciplinary care involving pulmonologists, intensivists, surgeons, radiologists, and rehabilitation teams is often essential for comprehensive treatment and recovery.'],
            ['value' => 'Monitoring vital signs and respiratory status after the procedure'],
            ['value' => 'Regular assessment of drainage output and insertion sites'],
            ['value' => 'Pain management and infection prevention measures'],
            ['value' => 'Follow-up imaging or laboratory evaluation when required'],
            ['value' => 'Continued treatment and monitoring of the underlying medical condition'],
        ],
                'recovery' => 'The long-term outlook following bedside procedures depends on the underlying disease, severity of fluid or air accumulation, response to treatment, and overall patient health. Early intervention, proper drainage management, infection prevention, rehabilitation support, and regular medical follow-up significantly help improve symptom relief, restore organ function, reduce complications, and enhance overall quality of life. ____________ 23. Critical Care Ultrasound & Point-of-Care Imaging Critical Care Ultrasound & Point-of-Care Imaging Procedures',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Bedside Procedures (Chest Tube, Paracentesis, Thoracentesis)',
                'meta_description' => 'Bedside procedures such as chest tube insertion, paracentesis, and thoracentesis are minimally invasive medical interventions commonly performed in critically i',
                'meta_keywords' => '',
            ]
        );
    }
}
