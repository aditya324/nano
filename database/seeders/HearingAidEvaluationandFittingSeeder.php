<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HearingAidEvaluationandFittingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hearing Aid Evaluation and Fitting')],
            [
                'title' => 'Hearing Aid Evaluation and Fitting',
                'slug' => Str::slug('Hearing Aid Evaluation and Fitting'),
                'introduction' => 'Hearing aid evaluation and fitting is a specialized ENT and audiology service used to identify suitable hearing devices for individuals with hearing loss. The process helps improve hearing ability, communication, and social interaction through customized hearing support. Proper fitting ensures comfort, sound clarity, and effective long-term hearing rehabilitation.',
                'what_is' => 'The evaluation includes hearing tests, lifestyle assessment, ear examination, and discussion of communication needs. Audiologists recommend appropriate hearing aid types based on the degree and type of hearing loss. The fitting process involves: Device programming Ear mold fitting Sound adjustment Speech testing Patient education on device use and maintenance Modern hearing aids may include digital sound processing, noise reduction, and wireless connectivity features.',
                'symptoms' => [
            ['value' => 'Hearing difficulty'],
            ['value' => 'Speech comprehension problems'],
            ['value' => 'Social withdrawal due to hearing loss'],
            ['value' => 'Difficulty hearing television or phone conversations'],
            ['value' => 'Repeated need for louder sounds'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary discomfort while adjusting to the device'],
            ['value' => 'Ear canal irritation'],
            ['value' => 'Feedback noise from improper fitting'],
            ['value' => 'Device maintenance issues'],
            ['value' => 'Communication difficulty if hearing loss progresses'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Use hearing aids consistently as advised'],
            ['value' => 'Clean devices regularly'],
            ['value' => 'Attend periodic hearing evaluations'],
            ['value' => 'Protect devices from moisture and damage'],
            ['value' => 'Report fitting discomfort promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary discomfort while adjusting to the device'],
            ['value' => 'Ear canal irritation'],
            ['value' => 'Feedback noise from improper fitting'],
            ['value' => 'Device maintenance issues'],
            ['value' => 'Communication difficulty if hearing loss progresses'],
        ],
                'long_term_outlook' => 'Proper hearing aid fitting improves hearing performance, communication skills, confidence, and overall quality of life in individuals with hearing impairment.',
                'conclusion' => '',
                'seo_title' => 'Hearing Aid Evaluation and Fitting',
                'seo_description' => 'Hearing aid evaluation and fitting is a specialized ENT and audiology service used to identify suitable hearing devices for individuals with hearing loss. The process helps improve hearing ability, communication, and social interaction through customized hearing support. Proper fitting ensures comfort, sound clarity, and effective long-term hearing rehabilitation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
