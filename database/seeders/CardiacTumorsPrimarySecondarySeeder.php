<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacTumorsPrimarySecondarySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cardiac Tumors (Primary / Secondary)')],
            [
                'title' => 'Cardiac Tumors (Primary / Secondary)',
                'slug' => Str::slug('Cardiac Tumors (Primary / Secondary)'),
                'introduction' => 'Cardiac tumors are abnormal growths involving the heart or surrounding structures. They may be primary tumors originating in the heart or secondary tumors spreading from cancers elsewhere in the body. Some tumors are benign, while others may be malignant and life-threatening. Early diagnosis is important for effective treatment planning.',
                'what_is' => 'Common cardiac tumors include: Myxoma Fibroma Lipoma Metastatic cardiac tumors Symptoms depend on tumor size, location, and effect on heart function. Diagnostic evaluation may include: Echocardiography CT scan MRI Cardiac catheterization Biopsy in selected cases Treatment options may include: Surgical removal Chemotherapy Radiation therapy Supportive cardiac care Multidisciplinary oncology and cardiology coordination is often necessary.',
                'symptoms' => [
            ['value' => 'Breathlessness'],
            ['value' => 'Chest pain'],
            ['value' => 'Fainting episodes'],
            ['value' => 'Palpitations'],
            ['value' => 'Signs of heart failure or embolism'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Obstruction of blood flow'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Stroke or embolic complications'],
            ['value' => 'Heart failure'],
            ['value' => 'Tumor spread in malignant cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular cardiac imaging follow-up'],
            ['value' => 'Continue oncology or cardiology treatment plans'],
            ['value' => 'Monitor for recurrent symptoms carefully'],
            ['value' => 'Maintain healthy lifestyle and nutrition'],
            ['value' => 'Seek urgent care for chest pain or breathing difficulty'],
        ],
                'surgery_risks' => [
            ['value' => 'Obstruction of blood flow'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Stroke or embolic complications'],
            ['value' => 'Heart failure'],
            ['value' => 'Tumor spread in malignant cases'],
        ],
                'long_term_outlook' => 'The prognosis depends on the tumor type and stage. Early diagnosis and treatment can improve survival, heart function, and long-term quality of life.',
                'conclusion' => '',
                'seo_title' => 'Cardiac Tumors (Primary / Secondary)',
                'seo_description' => 'Cardiac tumors are abnormal growths involving the heart or surrounding structures. They may be primary tumors originating in the heart or secondary tumors spreading from cancers elsewhere in the body. Some tumors are benign, while others may be malignant and life-threatening. Early diagnosis is important for effective treatment planning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
