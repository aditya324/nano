<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StrokerelatedtoCardiacSourceCardioembolicSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Stroke related to Cardiac Source (Cardioembolic)')],
            [
                'title' => 'Stroke related to Cardiac Source (Cardioembolic)',
                'slug' => Str::slug('Stroke related to Cardiac Source (Cardioembolic)'),
                'introduction' => 'Cardioembolic stroke occurs when a blood clot forms in the heart and travels to the brain, blocking blood flow and causing a stroke. This type of stroke is commonly associated with atrial fibrillation and other cardiac conditions that promote clot formation. Prompt diagnosis and treatment are critical to minimize brain injury and disability.',
                'what_is' => 'Common cardiac causes include: Atrial fibrillation Heart valve disease Recent heart attack Infective endocarditis Cardiomyopathy Diagnostic evaluation may include: Brain imaging ECG Echocardiography Holter monitoring Blood tests Treatment focuses on: Emergency stroke management Anticoagulation therapy Cardiac rhythm control Stroke rehabilitation Prevention of recurrent stroke Multidisciplinary care involving neurologists and cardiologists is often required.',
                'symptoms' => [
            ['value' => 'Sudden weakness of face or limbs'],
            ['value' => 'Difficulty speaking'],
            ['value' => 'Loss of balance or coordination'],
            ['value' => 'Sudden vision problems'],
            ['value' => 'Sudden confusion or unconsciousness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Recurrent stroke'],
            ['value' => 'Paralysis'],
            ['value' => 'Swallowing and speech difficulties'],
            ['value' => 'Increased mortality risk'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take anticoagulant medications regularly'],
            ['value' => 'Attend neurology and cardiology follow-up appointments'],
            ['value' => 'Participate in rehabilitation therapy consistently'],
            ['value' => 'Monitor blood pressure and heart rhythm carefully'],
            ['value' => 'Maintain healthy lifestyle modifications'],
        ],
                'surgery_risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Recurrent stroke'],
            ['value' => 'Paralysis'],
            ['value' => 'Swallowing and speech difficulties'],
            ['value' => 'Increased mortality risk'],
        ],
                'long_term_outlook' => 'With early treatment and proper prevention strategies, many patients achieve improved recovery and reduced risk of recurrent stroke and cardiovascular complications.',
                'conclusion' => '',
                'seo_title' => 'Stroke related to Cardiac Source (Cardioembolic)',
                'seo_description' => 'Cardioembolic stroke occurs when a blood clot forms in the heart and travels to the brain, blocking blood flow and causing a stroke. This type of stroke is commonly associated with atrial fibrillation and other cardiac conditions that promote clot formation. Prompt diagnosis and treatment are critical to minimize brain injury and disability.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
