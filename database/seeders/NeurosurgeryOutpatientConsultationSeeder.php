<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeurosurgeryOutpatientConsultationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neurosurgery Outpatient Consultation')],
            [
                'title' => 'Neurosurgery Outpatient Consultation',
                'slug' => Str::slug('Neurosurgery Outpatient Consultation'),
                'introduction' => 'Neurosurgery outpatient consultation is a specialized medical service where patients are evaluated by neurosurgeons for disorders affecting the brain, spine, spinal cord, and peripheral nerves. The consultation helps diagnose neurological and surgical conditions, assess symptoms, review imaging studies, and plan appropriate treatment or surgery when needed. Early neurosurgical evaluation improves treatment outcomes and helps prevent neurological complications.',
                'what_is' => 'During the consultation, neurosurgeons assess: Brain and spinal disorders Head injuries Tumors Nerve compression conditions Congenital neurological abnormalities Degenerative spinal diseases Evaluation may include: Neurological examination MRI or CT scan review Surgical risk assessment Pain and mobility evaluation Discussion of treatment options Patients may receive: Medication advice Rehabilitation guidance Surgical planning Emergency referral if required The consultation also helps educate patients regarding long-term neurological and surgical care.',
                'symptoms' => [
            ['value' => 'Persistent headaches'],
            ['value' => 'Back or neck pain'],
            ['value' => 'Weakness or numbness'],
            ['value' => 'Seizures'],
            ['value' => 'Difficulty walking or balance problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis if follow-up is missed'],
            ['value' => 'Progression of neurological symptoms'],
            ['value' => 'Anxiety related to surgical planning'],
            ['value' => 'Need for additional diagnostic testing'],
            ['value' => 'Risk of worsening neurological deficits without treatment'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled follow-up appointments'],
            ['value' => 'Continue prescribed medications regularly'],
            ['value' => 'Follow imaging and rehabilitation advice'],
            ['value' => 'Monitor neurological symptoms carefully'],
            ['value' => 'Report sudden worsening symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis if follow-up is missed'],
            ['value' => 'Progression of neurological symptoms'],
            ['value' => 'Anxiety related to surgical planning'],
            ['value' => 'Need for additional diagnostic testing'],
            ['value' => 'Risk of worsening neurological deficits without treatment'],
        ],
                'long_term_outlook' => 'Regular neurosurgical follow-up supports early diagnosis and timely treatment of neurological disorders. Comprehensive specialist care improves long-term neurological health and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Neurosurgery Outpatient Consultation',
                'seo_description' => 'Neurosurgery outpatient consultation is a specialized medical service where patients are evaluated by neurosurgeons for disorders affecting the brain, spine, spinal cord, and peripheral nerves. The consultation helps diagnose neurological and surgical conditions, assess symptoms, review imaging studies, and plan appropriate treatment or surgery when needed. Early neurosurgical evaluation improves treatment outcomes and helps prevent neurological complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
