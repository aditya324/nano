<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PleuralProceduresThoracentesisChestTubePleurodesisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pleural Procedures (Thoracentesis, Chest Tube, Pleurodesis)')],
            [
                'name' => 'Pleural Procedures (Thoracentesis, Chest Tube, Pleurodesis)',
                'slug' => Str::slug('Pleural Procedures (Thoracentesis, Chest Tube, Pleurodesis)'),
                'h1' => 'Pleural Procedures (Thoracentesis, Chest Tube, Pleurodesis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pleural procedures such as thoracentesis, chest tube insertion, and pleurodesis are specialized respiratory interventions used to diagnose and treat conditions affecting the pleural space surrounding the lungs. These procedures help remove excess fluid, air, blood, or infected material from the pleural cavity, improve lung expansion, relieve breathing difficulty, and prevent recurrent pleural complications.',
                'about_more' => '',
                'overview' => 'Thoracentesis is a minimally invasive procedure used to remove excess fluid from the pleural space using a needle or catheter for diagnostic evaluation or symptom relief. Chest tube insertion involves placement of a drainage tube into the pleural cavity to continuously remove air, fluid, blood, or pus and restore normal lung expansion. Pleurodesis is a therapeutic procedure used to prevent recurrent pleural effusion or pneumothorax by creating adhesion between the lung and chest wall lining. These procedures are commonly performed in pulmonology units, emergency departments, intensive care units, thoracic surgery centers, and critical care settings under sterile conditions and imaging guidance when required.',
                'symptoms' => [
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Chest pain or pressure due to pleural fluid or air accumulation'],
            ['value' => 'Persistent cough or respiratory discomfort'],
            ['value' => 'Reduced oxygen levels or respiratory distress'],
            ['value' => 'Recurrent pleural effusion, pneumothorax, or pleural infections'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding or injury to nearby organs and blood vessels'],
            ['value' => 'Infection at the procedure site or within the pleural cavity'],
            ['value' => 'Lung collapse or worsening pneumothorax during drainage procedures'],
            ['value' => 'Pain, discomfort, or fluid leakage after the procedure'],
            ['value' => 'Recurrence of pleural fluid or air accumulation requiring repeat intervention'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pleural procedures focus on relieving pressure around the lungs, improving respiratory function, removing abnormal pleural collections, and preventing recurrence of pleural disease. Management may include thoracentesis, chest tube drainage, pleurodesis, oxygen therapy, antibiotics, respiratory monitoring, pain management, and supportive pulmonary care. Patients may also require treatment for underlying conditions such as pneumonia, tuberculosis, heart failure, malignancy, trauma, or chronic lung disease. Pulmonary rehabilitation, breathing exercises, smoking cessation, and long-term pulmonology follow-up may be recommended to support respiratory recovery and prevent complications.'],
            ['value' => 'Continuous monitoring of breathing function and oxygen levels'],
            ['value' => 'Regular assessment of drainage systems and procedure sites'],
            ['value' => 'Pain management and infection prevention measures'],
            ['value' => 'Follow-up imaging to confirm lung expansion and fluid resolution'],
            ['value' => 'Long-term respiratory follow-up and management of underlying conditions'],
        ],
                'recovery' => 'The long-term outlook following pleural procedures depends on the underlying lung or pleural condition, severity of disease, response to treatment, and overall respiratory health. Early intervention, effective drainage management, infection control, pulmonary rehabilitation, medication adherence, and regular pulmonology follow-up significantly help improve breathing function, reduce recurrence, prevent complications, and enhance overall quality of life. ______________ 10. CPAP / BiPAP Therapy for Sleep Disorders CPAP / BiPAP Therapy for Sleep Disorders Procedures',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Pleural Procedures (Thoracentesis, Chest Tube, Pleurodesis)',
                'meta_description' => 'Pleural procedures such as thoracentesis, chest tube insertion, and pleurodesis are specialized respiratory interventions used to diagnose and treat conditions ',
                'meta_keywords' => '',
            ]
        );
    }
}
