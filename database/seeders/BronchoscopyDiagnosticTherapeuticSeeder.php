<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BronchoscopyDiagnosticTherapeuticSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Bronchoscopy (Diagnostic & Therapeutic)')],
            [
                'title' => 'Bronchoscopy (Diagnostic & Therapeutic)',
                'slug' => Str::slug('Bronchoscopy (Diagnostic & Therapeutic)'),
                'introduction' => 'Bronchoscopy is a specialized respiratory procedure used to examine the airways, lungs, and bronchial passages using a thin flexible or rigid tube called a bronchoscope. This procedure helps diagnose, evaluate, and treat various lung and airway conditions including infections, tumors, bleeding, airway obstruction, and chronic respiratory diseases. Bronchoscopy may be performed for both diagnostic and therapeutic purposes depending on the patient’s condition and clinical findings.',
                'what_is' => 'During bronchoscopy, the bronchoscope is inserted through the nose or mouth and guided into the airways to provide real-time visualization of the respiratory tract. Diagnostic bronchoscopy helps collect tissue samples, mucus, or fluid for laboratory testing and evaluation of lung abnormalities, while therapeutic bronchoscopy is used to remove mucus plugs, foreign bodies, tumors, or airway obstructions and control bleeding within the lungs. The procedure is commonly performed in pulmonology units, operation theaters, intensive care units, and specialized respiratory care centers under local anesthesia, sedation, or general anesthesia when required.',
                'symptoms' => [
            ['value' => 'Persistent cough or unexplained respiratory symptoms'],
            ['value' => 'Coughing up blood or abnormal lung imaging findings'],
            ['value' => 'Shortness of breath or airway obstruction symptoms'],
            ['value' => 'Recurrent lung infections or unexplained wheezing'],
            ['value' => 'Suspected lung tumors, infections, or chronic respiratory diseases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or airway irritation during the procedure'],
            ['value' => 'Infection or fever following bronchoscopy'],
            ['value' => 'Breathing difficulty or temporary oxygen level reduction'],
            ['value' => 'Lung collapse (pneumothorax) after biopsy procedures'],
            ['value' => 'Reactions to sedation or anesthesia in selected patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Bronchoscopy procedures focus on diagnosing respiratory conditions, obtaining tissue samples, relieving airway obstruction, and supporting targeted respiratory treatment. Management may include biopsy collection, bronchoalveolar lavage, mucus removal, foreign body extraction, airway stent placement, tumor debulking, bleeding control, and infection evaluation. Patients may also receive oxygen therapy, antibiotics, bronchodilator medications, respiratory monitoring, pulmonary rehabilitation, and long-term pulmonology follow-up depending on the underlying condition identified during bronchoscopy.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring breathing, oxygen levels, and vital signs after the procedure'],
            ['value' => 'Observation for bleeding, fever, or respiratory complications'],
            ['value' => 'Temporary fasting until throat sensation returns after sedation'],
            ['value' => 'Follow-up consultation to review biopsy or laboratory results'],
            ['value' => 'Continued respiratory treatment and pulmonology follow-up when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or airway irritation during the procedure'],
            ['value' => 'Infection or fever following bronchoscopy'],
            ['value' => 'Breathing difficulty or temporary oxygen level reduction'],
            ['value' => 'Lung collapse (pneumothorax) after biopsy procedures'],
            ['value' => 'Reactions to sedation or anesthesia in selected patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Bronchoscopy procedures focus on diagnosing respiratory conditions, obtaining tissue samples, relieving airway obstruction, and supporting targeted respiratory treatment. Management may include biopsy collection, bronchoalveolar lavage, mucus removal, foreign body extraction, airway stent placement, tumor debulking, bleeding control, and infection evaluation. Patients may also receive oxygen therapy, antibiotics, bronchodilator medications, respiratory monitoring, pulmonary rehabilitation, and long-term pulmonology follow-up depending on the underlying condition identified during bronchoscopy.'],
        ],
                'long_term_outlook' => 'The long-term outlook following bronchoscopy depends on the underlying respiratory condition, severity of airway disease, and response to treatment. Early diagnosis, proper respiratory management, medication adherence, pulmonary rehabilitation, smoking cessation, and regular pulmonology follow-up significantly help improve lung function, reduce complications, support accurate diagnosis, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Bronchoscopy (Diagnostic & Therapeutic)',
                'seo_description' => 'Bronchoscopy is a specialized respiratory procedure used to examine the airways, lungs, and bronchial passages using a thin flexible or rigid tube called a bronchoscope. This procedure helps diagnose, evaluate, and treat various lung and airway conditions including infections, tumors, bleeding, airway obstruction, and chronic respiratory diseases. Bronchoscopy may be performed for both diagnostic and therapeutic purposes depending on the patient’s condition and clinical findings.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
