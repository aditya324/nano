<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LungBiopsyTransbronchialVideoAssistedThoracoscopicSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lung Biopsy (Transbronchial / Video-Assisted Thoracoscopic Surgery)')],
            [
                'name' => 'Lung Biopsy (Transbronchial / Video-Assisted Thoracoscopic Surgery)',
                'slug' => Str::slug('Lung Biopsy (Transbronchial / Video-Assisted Thoracoscopic Surgery)'),
                'h1' => 'Lung Biopsy (Transbronchial / Video-Assisted Thoracoscopic Surgery)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lung biopsy is a specialized diagnostic procedure used to obtain small samples of lung tissue for laboratory examination to identify infections, inflammation, tumors, interstitial lung diseases, or other abnormal lung conditions. Transbronchial lung biopsy is performed through a bronchoscope inserted into the airways, while Video-Assisted Thoracoscopic Surgery (VATS) biopsy is a minimally invasive surgical procedure performed using small chest incisions and a thoracoscope for direct visualization of lung tissue.',
                'about_more' => '',
                'overview' => 'Transbronchial biopsy is commonly performed during bronchoscopy to collect tissue samples from the lungs using small biopsy instruments passed through the bronchoscope. VATS lung biopsy involves the use of a camera-assisted thoracoscopic system that allows surgeons to obtain larger or deeper lung tissue samples with minimal surgical trauma compared to open surgery. These procedures are commonly used in the diagnosis of lung cancer, interstitial lung disease, pulmonary infections, unexplained lung nodules, and chronic inflammatory lung conditions. Lung biopsy procedures are performed in pulmonology units, operation theaters, thoracic surgery centers, and specialized respiratory care facilities under sedation or general anesthesia.',
                'symptoms' => [
            ['value' => 'Persistent cough or unexplained respiratory symptoms'],
            ['value' => 'Abnormal lung imaging findings or lung nodules'],
            ['value' => 'Shortness of breath or progressive lung disease'],
            ['value' => 'Suspected lung cancer, infection, or interstitial lung disease'],
            ['value' => 'Recurrent respiratory infections or unexplained lung inflammation'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding or coughing up blood after biopsy'],
            ['value' => 'Pneumothorax (lung collapse) following tissue sampling'],
            ['value' => 'Infection or fever after the procedure'],
            ['value' => 'Breathing difficulty or temporary oxygen reduction'],
            ['value' => 'Pain, anesthesia-related complications, or delayed wound healing in surgical biopsy cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lung biopsy procedures focus on obtaining accurate tissue diagnosis to guide targeted treatment and long-term respiratory management. Depending on biopsy findings, treatment may include antibiotics, corticosteroids, chemotherapy, immunotherapy, antifibrotic therapy, surgery, radiation therapy, or supportive pulmonary care. Patients may also require oxygen therapy, pulmonary rehabilitation, smoking cessation, nutritional support, respiratory physiotherapy, and multidisciplinary care involving pulmonologists, thoracic surgeons, oncologists, radiologists, and critical care specialists.'],
            ['value' => 'Continuous monitoring of breathing, oxygen levels, and vital signs'],
            ['value' => 'Observation for bleeding, pneumothorax, or respiratory complications'],
            ['value' => 'Pain management and wound care following surgical biopsy procedures'],
            ['value' => 'Follow-up imaging and pathology review to assess biopsy results'],
            ['value' => 'Long-term pulmonology or oncology follow-up depending on diagnosis'],
        ],
                'recovery' => 'The long-term outlook following lung biopsy depends on the underlying lung condition identified, severity of disease, response to treatment, and overall respiratory health. Early diagnosis, appropriate medical management, pulmonary rehabilitation, smoking cessation, regular respiratory monitoring, and multidisciplinary follow-up significantly help improve treatment planning, reduce complications, preserve lung function, and enhance overall quality of life. __________________ 14. Management of Pulmonary Hypertension (Medications / Interventions) Management of Pulmonary Hypertension (Medications / Interventions) Procedures',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Lung Biopsy (Transbronchial / Video-Assisted Thoracoscopic Surgery)',
                'meta_description' => 'Lung biopsy is a specialized diagnostic procedure used to obtain small samples of lung tissue for laboratory examination to identify infections, inflammation, t',
                'meta_keywords' => '',
            ]
        );
    }
}
