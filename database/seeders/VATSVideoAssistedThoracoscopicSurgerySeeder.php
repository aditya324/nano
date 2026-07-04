<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VATSVideoAssistedThoracoscopicSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('VATS (Video-Assisted Thoracoscopic Surgery)')],
            [
                'title' => 'VATS (Video-Assisted Thoracoscopic Surgery)',
                'slug' => Str::slug('VATS (Video-Assisted Thoracoscopic Surgery)'),
                'introduction' => 'Video-Assisted Thoracoscopic Surgery (VATS) is a minimally invasive thoracic surgical procedure used to diagnose and treat various lung, pleural, and chest conditions through small incisions using a specialized camera called a thoracoscope. VATS allows surgeons to perform complex chest procedures with less pain, smaller scars, faster recovery, and reduced complications compared to traditional open chest surgery.',
                'what_is' => 'During VATS, a thoracoscope equipped with a high-definition camera and specialized surgical instruments is inserted through small incisions in the chest wall to visualize and operate within the thoracic cavity. This procedure is commonly used for lung biopsy, pleural biopsy, removal of lung nodules or tumors, treatment of pneumothorax, pleural effusion management, empyema treatment, and selected lung resections. VATS is widely performed in thoracic surgery centers, pulmonology units, and specialized hospitals under general anesthesia with advanced surgical and respiratory monitoring support.',
                'symptoms' => [
            ['value' => 'Persistent chest pain or unexplained respiratory symptoms'],
            ['value' => 'Lung nodules, tumors, or abnormal chest imaging findings'],
            ['value' => 'Recurrent pleural effusion or pneumothorax'],
            ['value' => 'Chronic lung infections or pleural diseases'],
            ['value' => 'Shortness of breath, cough, or respiratory complications requiring surgical evaluation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Air leakage or prolonged chest tube drainage'],
            ['value' => 'Lung collapse or respiratory complications'],
            ['value' => 'Pain, anesthesia-related complications, or wound healing issues'],
            ['value' => 'Rare need for conversion to open thoracic surgery during complex procedures'],
            ['value' => 'Treatment Options'],
            ['value' => 'VATS procedures focus on diagnosing thoracic diseases, removing abnormal lung or pleural tissue, improving respiratory function, and reducing disease-related complications. Treatment may include lung biopsy, pleural biopsy, drainage of pleural collections, tumor removal, lung resection, pleurodesis, management of pneumothorax, and treatment of empyema or chronic lung disease complications. Patients may also require oxygen therapy, respiratory physiotherapy, antibiotics, pain management, pulmonary rehabilitation, smoking cessation support, and multidisciplinary follow-up involving thoracic surgeons, pulmonologists, oncologists, and rehabilitation specialists.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of breathing function and oxygen levels'],
            ['value' => 'Chest tube care and monitoring for air leaks or fluid drainage'],
            ['value' => 'Pain management and wound care after surgery'],
            ['value' => 'Respiratory physiotherapy and breathing exercises to improve lung expansion'],
            ['value' => 'Follow-up imaging and thoracic surgery or pulmonology review during recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection after surgery'],
            ['value' => 'Air leakage or prolonged chest tube drainage'],
            ['value' => 'Lung collapse or respiratory complications'],
            ['value' => 'Pain, anesthesia-related complications, or wound healing issues'],
            ['value' => 'Rare need for conversion to open thoracic surgery during complex procedures'],
            ['value' => 'Treatment Options'],
            ['value' => 'VATS procedures focus on diagnosing thoracic diseases, removing abnormal lung or pleural tissue, improving respiratory function, and reducing disease-related complications. Treatment may include lung biopsy, pleural biopsy, drainage of pleural collections, tumor removal, lung resection, pleurodesis, management of pneumothorax, and treatment of empyema or chronic lung disease complications. Patients may also require oxygen therapy, respiratory physiotherapy, antibiotics, pain management, pulmonary rehabilitation, smoking cessation support, and multidisciplinary follow-up involving thoracic surgeons, pulmonologists, oncologists, and rehabilitation specialists.'],
        ],
                'long_term_outlook' => 'The long-term outlook following VATS depends on the underlying lung or pleural condition, extent of surgery, overall respiratory health, and response to treatment. Early surgical intervention, pulmonary rehabilitation, smoking cessation, medication adherence, healthy lifestyle habits, and regular medical follow-up significantly help improve lung recovery, reduce complications, support accurate diagnosis and treatment, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'VATS (Video-Assisted Thoracoscopic Surgery)',
                'seo_description' => 'Video-Assisted Thoracoscopic Surgery (VATS) is a minimally invasive thoracic surgical procedure used to diagnose and treat various lung, pleural, and chest conditions through small incisions using a specialized camera called a thoracoscope. VATS allows surgeons to perform complex chest procedures with less pain, smaller scars, faster recovery, and reduced complications compared to traditional open chest surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
