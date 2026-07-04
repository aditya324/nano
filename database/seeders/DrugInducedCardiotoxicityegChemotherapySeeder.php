<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DrugInducedCardiotoxicityegChemotherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Drug-Induced Cardiotoxicity (e.g., Chemotherapy)')],
            [
                'title' => 'Drug-Induced Cardiotoxicity (e.g., Chemotherapy)',
                'slug' => Str::slug('Drug-Induced Cardiotoxicity (e.g., Chemotherapy)'),
                'introduction' => 'Drug-induced cardiotoxicity refers to heart damage caused by certain medications, particularly chemotherapy drugs, targeted cancer therapies, and some long-term medications. The condition may affect heart muscle function, electrical activity, heart valves, or blood vessels. Early recognition and monitoring are essential to prevent permanent cardiac injury.',
                'what_is' => 'Common causes of cardiotoxicity include: Chemotherapy agents Radiation therapy Certain antibiotics Immunotherapy drugs Recreational drug toxicity Cardiotoxicity may lead to: Heart failure Arrhythmias Hypertension Myocarditis Reduced heart pumping function Diagnostic evaluation may include: Echocardiography ECG Cardiac biomarkers Cardiac MRI Blood pressure monitoring Cardio-oncology teams often coordinate care between cardiologists and oncologists. Treatment may involve medication adjustment, heart failure management, and long-term cardiac monitoring.',
                'symptoms' => [
            ['value' => 'Breathlessness'],
            ['value' => 'Fatigue or weakness'],
            ['value' => 'Swelling of legs'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Palpitations or dizziness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Permanent cardiac muscle damage'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Reduced tolerance to cancer therapy'],
            ['value' => 'Sudden cardiac complications in severe cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular cardiac screening appointments'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Monitor blood pressure and heart symptoms carefully'],
            ['value' => 'Maintain healthy nutrition and physical activity'],
            ['value' => 'Inform doctors about worsening fatigue or breathlessness'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Permanent cardiac muscle damage'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Reduced tolerance to cancer therapy'],
            ['value' => 'Sudden cardiac complications in severe cases'],
        ],
                'long_term_outlook' => 'Early monitoring and intervention can reduce long-term cardiac complications and improve overall survival and quality of life in patients receiving potentially cardiotoxic treatments.',
                'conclusion' => '',
                'seo_title' => 'Drug-Induced Cardiotoxicity (e.g., Chemotherapy)',
                'seo_description' => 'Drug-induced cardiotoxicity refers to heart damage caused by certain medications, particularly chemotherapy drugs, targeted cancer therapies, and some long-term medications. The condition may affect heart muscle function, electrical activity, heart valves, or blood vessels. Early recognition and monitoring are essential to prevent permanent cardiac injury.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
