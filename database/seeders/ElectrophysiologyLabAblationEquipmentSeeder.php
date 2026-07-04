<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ElectrophysiologyLabAblationEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Electrophysiology Lab & Ablation Equipment')],
            [
                'title' => 'Electrophysiology Lab & Ablation Equipment',
                'slug' => Str::slug('Electrophysiology Lab & Ablation Equipment'),
                'introduction' => 'An Electrophysiology (EP) Lab is a specialized cardiac facility used for diagnosing and treating abnormal heart rhythms through advanced electrical mapping and catheter-based procedures. Ablation equipment is used to eliminate abnormal electrical pathways responsible for arrhythmias. The EP lab plays a vital role in modern arrhythmia management.',
                'what_is' => 'Electrophysiology studies help identify: Atrial fibrillation Supraventricular tachycardia Ventricular arrhythmias Conduction abnormalities Ablation procedures may use: Radiofrequency energy Cryoablation techniques The procedure involves inserting specialized catheters into the heart through blood vessels under imaging guidance. EP procedures reduce arrhythmia burden and improve quality of life.',
                'symptoms' => [
            ['value' => 'Palpitations'],
            ['value' => 'Rapid heartbeat episodes'],
            ['value' => 'Fainting or dizziness'],
            ['value' => 'Irregular pulse'],
            ['value' => 'Recurrent arrhythmias resistant to medication'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection at catheter site'],
            ['value' => 'Arrhythmia recurrence'],
            ['value' => 'Blood vessel injury'],
            ['value' => 'Rare cardiac perforation'],
            ['value' => 'Blood clot complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Monitor catheter insertion site carefully'],
            ['value' => 'Attend regular rhythm follow-up visits'],
            ['value' => 'Continue medications as advised'],
            ['value' => 'Report palpitations or chest pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection at catheter site'],
            ['value' => 'Arrhythmia recurrence'],
            ['value' => 'Blood vessel injury'],
            ['value' => 'Rare cardiac perforation'],
            ['value' => 'Blood clot complications'],
        ],
                'long_term_outlook' => 'EP studies and ablation procedures improve rhythm control, reduce arrhythmia recurrence, and significantly improve long-term cardiac stability and patient comfort.',
                'conclusion' => '',
                'seo_title' => 'Electrophysiology Lab & Ablation Equipment',
                'seo_description' => 'An Electrophysiology (EP) Lab is a specialized cardiac facility used for diagnosing and treating abnormal heart rhythms through advanced electrical mapping and catheter-based procedures. Ablation equipment is used to eliminate abnormal electrical pathways responsible for arrhythmias. The EP lab plays a vital role in modern arrhythmia management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
