<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LungCancerManagementSurgeryChemotherapyRadiotherapyTargetedTherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lung Cancer Management (Surgery, Chemotherapy, Radiotherapy, Targeted Therapy)')],
            [
                'name' => 'Lung Cancer Management (Surgery, Chemotherapy, Radiotherapy, Targeted Therapy)',
                'slug' => Str::slug('Lung Cancer Management (Surgery, Chemotherapy, Radiotherapy, Targeted Therapy)'),
                'h1' => 'Lung Cancer Management (Surgery, Chemotherapy, Radiotherapy, Targeted Therapy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lung cancer management involves specialized medical, surgical, and oncological treatment procedures used to control cancer growth, relieve symptoms, prevent cancer spread, and improve survival and quality of life in patients diagnosed with lung cancer. Treatment approaches may include surgery, chemotherapy, radiotherapy, targeted therapy, immunotherapy, and supportive care depending on the type, stage, and severity of the cancer. Early diagnosis and multidisciplinary cancer care are essential for achieving the best possible treatment outcomes.',
                'about_more' => '',
                'overview' => 'Lung cancer treatment is individualized based on factors such as tumor type, cancer stage, genetic mutations, overall lung function, and patient health status. Surgery is commonly used to remove localized lung tumors, while chemotherapy and radiotherapy help destroy cancer cells or reduce tumor growth. Targeted therapy uses specialized medications that act on specific genetic or molecular abnormalities within cancer cells, offering more precise treatment in selected patients. These procedures are commonly managed by multidisciplinary teams including oncologists, pulmonologists, thoracic surgeons, radiologists, pathologists, and rehabilitation specialists in specialized cancer care centers.',
                'symptoms' => [
            ['value' => 'Persistent cough or worsening respiratory symptoms'],
            ['value' => 'Chest pain or difficulty breathing'],
            ['value' => 'Coughing up blood or recurrent chest infections'],
            ['value' => 'Unexplained weight loss, fatigue, or weakness'],
            ['value' => 'Wheezing, hoarseness, or reduced exercise tolerance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Spread of cancer to other organs such as the brain, bones, or liver'],
            ['value' => 'Respiratory complications or reduced lung function after treatment'],
            ['value' => 'Side effects from chemotherapy, radiation, or targeted medications'],
            ['value' => 'Infection risk or weakened immunity during cancer therapy'],
            ['value' => 'Emotional stress, fatigue, or reduced quality of life during long-term treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lung cancer management focuses on controlling tumor growth, improving breathing function, preventing complications, and supporting long-term recovery. Treatment may include surgical lung resection, minimally invasive thoracic surgery, chemotherapy, radiotherapy, targeted therapy, immunotherapy, bronchoscopy-guided interventions, oxygen therapy, pain management, and palliative care support. Patients may also benefit from pulmonary rehabilitation, nutritional counseling, smoking cessation programs, psychological counseling, physiotherapy, and long-term oncology and pulmonology follow-up to optimize treatment outcomes and quality of life.'],
            ['value' => 'Continuous monitoring of respiratory function and overall recovery'],
            ['value' => 'Pain management and wound care following surgical procedures'],
            ['value' => 'Monitoring for chemotherapy, radiotherapy, or targeted therapy side effects'],
            ['value' => 'Pulmonary rehabilitation, breathing exercises, and nutritional support'],
            ['value' => 'Long-term oncology and pulmonology follow-up with regular imaging and laboratory evaluation'],
        ],
                'recovery' => 'The long-term outlook following lung cancer management depends on the cancer type, stage at diagnosis, treatment response, overall lung health, and presence of metastasis or complications. Early diagnosis, timely cancer treatment, smoking cessation, rehabilitation support, medication adherence, nutritional care, psychological support, and continuous specialist follow-up significantly help improve survival, reduce complications, preserve lung function, enhance symptom control, and improve overall quality of life. ___________________ 24. Monitoring & Management of Chronic Oxygen Dependency Monitoring & Management of Chronic Oxygen Dependency Procedures',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Lung Cancer Management (Surgery, Chemotherapy, Radiotherapy, Targeted Therapy)',
                'meta_description' => 'Lung cancer management involves specialized medical, surgical, and oncological treatment procedures used to control cancer growth, relieve symptoms, prevent can',
                'meta_keywords' => '',
            ]
        );
    }
}
