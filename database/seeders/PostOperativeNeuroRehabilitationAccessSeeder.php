<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostOperativeNeuroRehabilitationAccessSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Post-Operative Neuro Rehabilitation Access')],
            [
                'title' => 'Post-Operative Neuro Rehabilitation Access',
                'slug' => Str::slug('Post-Operative Neuro Rehabilitation Access'),
                'introduction' => 'Post-operative neuro rehabilitation access refers to specialized rehabilitation services available after neurosurgical procedures to improve neurological recovery and functional independence. The rehabilitation program supports physical, cognitive, speech, and emotional recovery following brain or spine surgery. Early rehabilitation improves long-term outcomes.',
                'what_is' => 'Rehabilitation services may include: Physiotherapy Occupational therapy Speech therapy Cognitive rehabilitation Mobility and balance training Psychological support Patients commonly requiring rehabilitation include: Stroke patients Brain tumor surgery patients Spine surgery patients Traumatic brain injury patients Spinal cord injury patients Multidisciplinary rehabilitation plans are tailored to patient needs.',
                'symptoms' => [
            ['value' => 'Weakness or paralysis'],
            ['value' => 'Difficulty walking'],
            ['value' => 'Speech impairment'],
            ['value' => 'Cognitive deficits'],
            ['value' => 'Reduced functional independence'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed recovery without rehabilitation'],
            ['value' => 'Muscle wasting'],
            ['value' => 'Emotional stress'],
            ['value' => 'Joint stiffness'],
            ['value' => 'Functional decline'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend rehabilitation sessions consistently'],
            ['value' => 'Perform home exercises regularly'],
            ['value' => 'Continue medications properly'],
            ['value' => 'Maintain nutritional support'],
            ['value' => 'Follow neurological recovery plans carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed recovery without rehabilitation'],
            ['value' => 'Muscle wasting'],
            ['value' => 'Emotional stress'],
            ['value' => 'Joint stiffness'],
            ['value' => 'Functional decline'],
        ],
                'long_term_outlook' => 'Neuro rehabilitation improves mobility, independence, and quality of life after neurosurgery. Long-term outcomes improve with consistent therapy and follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Post-Operative Neuro Rehabilitation Access',
                'seo_description' => 'Post-operative neuro rehabilitation access refers to specialized rehabilitation services available after neurosurgical procedures to improve neurological recovery and functional independence. The rehabilitation program supports physical, cognitive, speech, and emotional recovery following brain or spine surgery. Early rehabilitation improves long-term outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
