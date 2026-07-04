<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SyncopePresyncoperelatedtocardiaccausesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Syncope / Pre-syncope related to cardiac causes')],
            [
                'title' => 'Syncope / Pre-syncope related to cardiac causes',
                'slug' => Str::slug('Syncope / Pre-syncope related to cardiac causes'),
                'introduction' => 'Cardiac syncope refers to temporary loss of consciousness caused by reduced blood flow to the brain due to heart-related problems. Pre-syncope refers to near-fainting symptoms such as dizziness, weakness, or blackouts without complete loss of consciousness. Cardiac causes of syncope can sometimes indicate serious or life-threatening heart conditions.',
                'what_is' => 'Common cardiac causes include: Arrhythmias Heart block Structural heart disease Cardiomyopathy Severe valve disorders Aortic stenosis Evaluation may involve: ECG Holter monitoring Echocardiography Tilt-table testing Electrophysiology studies Treatment depends on the underlying cause and may include: Medications Pacemaker implantation Arrhythmia management Lifestyle modification Cardiac procedures or surgery Early evaluation is important because some cardiac causes carry a risk of sudden cardiac death.',
                'symptoms' => [
            ['value' => 'Sudden fainting episodes'],
            ['value' => 'Dizziness or lightheadedness'],
            ['value' => 'Palpitations'],
            ['value' => 'Chest pain or breathlessness'],
            ['value' => 'Weakness before losing consciousness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Injury from falls'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Stroke in some cardiac conditions'],
            ['value' => 'Recurrent fainting episodes'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular cardiac monitoring appointments'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Avoid dehydration and sudden posture changes'],
            ['value' => 'Follow activity recommendations carefully'],
            ['value' => 'Seek immediate care for recurrent syncope episodes'],
        ],
                'surgery_risks' => [
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Injury from falls'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Stroke in some cardiac conditions'],
            ['value' => 'Recurrent fainting episodes'],
        ],
                'long_term_outlook' => 'The long-term outcome depends on the underlying heart condition. Early diagnosis and treatment can significantly reduce complications and improve safety and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Syncope / Pre-syncope related to cardiac causes',
                'seo_description' => 'Cardiac syncope refers to temporary loss of consciousness caused by reduced blood flow to the brain due to heart-related problems. Pre-syncope refers to near-fainting symptoms such as dizziness, weakness, or blackouts without complete loss of consciousness. Cardiac causes of syncope can sometimes indicate serious or life-threatening heart conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
