<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrigeminalNeuralgiaSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Trigeminal Neuralgia Surgery')],
            [
                'title' => 'Trigeminal Neuralgia Surgery',
                'slug' => Str::slug('Trigeminal Neuralgia Surgery'),
                'introduction' => 'Trigeminal neuralgia surgery is a specialized neurosurgical procedure performed to treat severe facial nerve pain caused by irritation or compression of the trigeminal nerve. The condition produces sudden, intense electric shock-like facial pain that may interfere with eating, speaking, or daily activities. Surgery is considered when medications fail to provide adequate pain relief.',
                'what_is' => 'The procedure may involve: Nerve decompression techniques Pain pathway interruption procedures Microsurgical approaches Image-guided surgical planning Long-term neurological monitoring Surgical treatment aims to: Relieve nerve compression Reduce facial pain attacks Improve quality of life Minimize medication dependence The choice of procedure depends on patient age, pain severity, and underlying nerve pathology.',
                'symptoms' => [
            ['value' => 'Severe facial pain'],
            ['value' => 'Electric shock-like sensations'],
            ['value' => 'Pain triggered by chewing or speaking'],
            ['value' => 'Facial sensitivity'],
            ['value' => 'Recurrent pain episodes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Facial numbness'],
            ['value' => 'Hearing disturbances'],
            ['value' => 'Infection'],
            ['value' => 'Persistent or recurrent pain'],
            ['value' => 'Nerve injury complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue neurological follow-up regularly'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Monitor for facial numbness or weakness'],
            ['value' => 'Maintain proper oral hygiene carefully'],
            ['value' => 'Report recurrence of pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Facial numbness'],
            ['value' => 'Hearing disturbances'],
            ['value' => 'Infection'],
            ['value' => 'Persistent or recurrent pain'],
            ['value' => 'Nerve injury complications'],
        ],
                'long_term_outlook' => 'Trigeminal neuralgia surgery provides significant pain relief for many patients. Long-term outcomes depend on the type of surgery and underlying nerve compression.',
                'conclusion' => '',
                'seo_title' => 'Trigeminal Neuralgia Surgery',
                'seo_description' => 'Trigeminal neuralgia surgery is a specialized neurosurgical procedure performed to treat severe facial nerve pain caused by irritation or compression of the trigeminal nerve. The condition produces sudden, intense electric shock-like facial pain that may interfere with eating, speaking, or daily activities. Surgery is considered when medications fail to provide adequate pain relief.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
