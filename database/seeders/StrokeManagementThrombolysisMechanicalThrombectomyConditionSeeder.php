<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StrokeManagementThrombolysisMechanicalThrombectomyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Stroke Management (Thrombolysis, Mechanical Thrombectomy)')],
            [
                'name' => 'Stroke Management (Thrombolysis, Mechanical Thrombectomy)',
                'slug' => Str::slug('Stroke Management (Thrombolysis, Mechanical Thrombectomy)'),
                'h1' => 'Stroke Management (Thrombolysis, Mechanical Thrombectomy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Stroke management procedures such as thrombolysis and mechanical thrombectomy are emergency neurological interventions used to restore blood flow to the brain in patients experiencing acute ischemic stroke caused by blocked blood vessels. These procedures are critical in reducing brain damage, preserving neurological function, improving recovery outcomes, and preventing long-term disability. Rapid diagnosis and timely intervention are essential because early restoration of blood circulation significantly improves survival and neurological recovery.',
                'about_more' => '',
                'overview' => 'Thrombolysis involves the administration of clot-dissolving medications to break down blood clots obstructing blood flow in the brain. Mechanical thrombectomy is a minimally invasive procedure in which specialized catheters and devices are used to physically remove blood clots from blocked cerebral arteries. These procedures are commonly performed in emergency departments, stroke units, neurointerventional suites, and intensive care settings under advanced neurological and imaging guidance. Stroke management also includes continuous neurological monitoring, blood pressure control, airway support, and multidisciplinary rehabilitation planning.',
                'symptoms' => [
            ['value' => 'Sudden weakness or numbness affecting one side of the body'],
            ['value' => 'Difficulty speaking, understanding speech, or confusion'],
            ['value' => 'Sudden loss of balance, coordination, or dizziness'],
            ['value' => 'Vision disturbances or sudden difficulty seeing'],
            ['value' => 'Severe headache or sudden neurological deterioration'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications associated with thrombolytic medications'],
            ['value' => 'Blood vessel injury or stroke recurrence during thrombectomy procedures'],
            ['value' => 'Brain swelling or worsening neurological deficits'],
            ['value' => 'Cardiac or respiratory complications during critical illness'],
            ['value' => 'Long-term neurological disability if treatment is delayed or ineffective'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Stroke management procedures focus on restoring blood flow to the brain, stabilizing neurological function, and preventing further brain injury. Management may include intravenous thrombolytic therapy, mechanical thrombectomy, oxygen therapy, blood pressure control, anticoagulant or antiplatelet medications, intensive neurological monitoring, airway management, and rehabilitation support. Patients may also require physiotherapy, speech therapy, occupational therapy, cognitive rehabilitation, lifestyle modification, and long-term neurology follow-up to improve functional recovery and reduce the risk of recurrent stroke.'],
            ['value' => 'Continuous neurological and cardiovascular monitoring after the procedure'],
            ['value' => 'Monitoring for bleeding, recurrent stroke, or neurological complications'],
            ['value' => 'Blood pressure management and medication adjustment'],
            ['value' => 'Rehabilitation therapies including physiotherapy, speech therapy, and occupational therapy'],
            ['value' => 'Long-term neurology follow-up and stroke prevention planning'],
        ],
                'recovery' => 'The long-term outlook following stroke management procedures depends on the severity of brain injury, speed of treatment, underlying vascular condition, and rehabilitation progress. Early intervention, intensive neurological care, rehabilitation support, medication adherence, healthy lifestyle modification, and regular neurological follow-up significantly help improve mobility, speech, cognitive function, independence, and overall quality of life while reducing the risk of future strokes. __________________ 16. Management of DKA / HHS (Insulin, Fluids, Electrolytes) Management of DKA / HHS (Insulin, Fluids, Electrolytes) Procedures',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Stroke Management (Thrombolysis, Mechanical Thrombectomy)',
                'meta_description' => 'Stroke management procedures such as thrombolysis and mechanical thrombectomy are emergency neurological interventions used to restore blood flow to the brain i',
                'meta_keywords' => '',
            ]
        );
    }
}
