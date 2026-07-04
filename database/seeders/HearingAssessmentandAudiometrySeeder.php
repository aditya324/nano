<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HearingAssessmentandAudiometrySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hearing Assessment and Audiometry')],
            [
                'title' => 'Hearing Assessment and Audiometry',
                'slug' => Str::slug('Hearing Assessment and Audiometry'),
                'introduction' => 'Hearing assessment and audiometry are diagnostic procedures used to evaluate hearing ability, identify hearing loss, and determine the type and severity of auditory disorders. The evaluation helps guide treatment planning, hearing aid selection, and long-term hearing rehabilitation. It is important for both children and adults with hearing concerns.',
                'what_is' => 'Audiometry involves a series of hearing tests performed in a controlled sound environment using specialized equipment. The patient responds to different sound frequencies and speech signals to assess hearing sensitivity. The evaluation may include: Pure tone audiometry Speech audiometry Tympanometry Hearing threshold testing Middle ear function assessment Hearing assessment is commonly recommended for: Hearing loss Ear infections Tinnitus Vertigo Speech delay in children The results help ENT specialists diagnose conductive or sensorineural hearing disorders.',
                'symptoms' => [
            ['value' => 'Difficulty hearing conversations'],
            ['value' => 'Ringing in the ears'],
            ['value' => 'Delayed speech development'],
            ['value' => 'Ear fullness'],
            ['value' => 'Difficulty understanding speech'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Minimal or no procedural risk'],
            ['value' => 'Temporary discomfort from headphones'],
            ['value' => 'Anxiety during testing in children'],
            ['value' => 'Need for repeat testing in some patients'],
            ['value' => 'Misinterpretation if patient cooperation is poor'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up hearing evaluations regularly'],
            ['value' => 'Use hearing devices if prescribed'],
            ['value' => 'Avoid excessive noise exposure'],
            ['value' => 'Continue ENT treatment as advised'],
            ['value' => 'Monitor hearing changes over time'],
        ],
                'surgery_risks' => [
            ['value' => 'Minimal or no procedural risk'],
            ['value' => 'Temporary discomfort from headphones'],
            ['value' => 'Anxiety during testing in children'],
            ['value' => 'Need for repeat testing in some patients'],
            ['value' => 'Misinterpretation if patient cooperation is poor'],
        ],
                'long_term_outlook' => 'Regular hearing assessment supports early diagnosis and timely hearing rehabilitation. Proper management improves communication ability, speech development, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Hearing Assessment and Audiometry',
                'seo_description' => 'Hearing assessment and audiometry are diagnostic procedures used to evaluate hearing ability, identify hearing loss, and determine the type and severity of auditory disorders. The evaluation helps guide treatment planning, hearing aid selection, and long-term hearing rehabilitation. It is important for both children and adults with hearing concerns.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
