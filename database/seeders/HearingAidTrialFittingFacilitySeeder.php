<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HearingAidTrialFittingFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hearing Aid Trial & Fitting Facility')],
            [
                'title' => 'Hearing Aid Trial & Fitting Facility',
                'slug' => Str::slug('Hearing Aid Trial & Fitting Facility'),
                'introduction' => 'A Hearing Aid Trial and Fitting Facility is a specialized ENT and audiology service designed to assess hearing loss and provide suitable hearing aid devices for improved communication and hearing rehabilitation. The facility helps patients select, test, and customize hearing aids according to their hearing needs and lifestyle. Proper hearing aid fitting significantly improves hearing quality and daily functioning.',
                'what_is' => 'The facility provides: Hearing evaluation Hearing aid trial sessions Device programming and fitting Ear mold preparation Counseling and rehabilitation support Follow-up adjustments and maintenance Different hearing aid styles and technologies are evaluated based on the patient’s hearing level, comfort, and communication requirements. The facility also provides education regarding hearing aid care, usage, and long-term maintenance.',
                'symptoms' => [
            ['value' => 'Difficulty hearing conversations'],
            ['value' => 'Hearing loss in noisy environments'],
            ['value' => 'Ringing in the ears (tinnitus)'],
            ['value' => 'Frequent need to increase television or phone volume'],
            ['value' => 'Delayed speech development in children'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Initial discomfort while adapting to hearing aids'],
            ['value' => 'Ear canal irritation from improper fitting'],
            ['value' => 'Feedback or sound distortion initially'],
            ['value' => 'Difficulty adjusting to amplified sounds'],
            ['value' => 'Device maintenance requirements'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Use hearing aids consistently as advised'],
            ['value' => 'Keep devices clean and dry'],
            ['value' => 'Attend regular audiology follow-up appointments'],
            ['value' => 'Replace batteries or recharge devices properly'],
            ['value' => 'Report discomfort or reduced hearing performance promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Initial discomfort while adapting to hearing aids'],
            ['value' => 'Ear canal irritation from improper fitting'],
            ['value' => 'Feedback or sound distortion initially'],
            ['value' => 'Difficulty adjusting to amplified sounds'],
            ['value' => 'Device maintenance requirements'],
        ],
                'long_term_outlook' => 'Hearing aid rehabilitation significantly improves communication ability, social interaction, and overall quality of life. Regular adjustments and follow-up ensure optimal long-term hearing outcomes.',
                'conclusion' => '',
                'seo_title' => 'Hearing Aid Trial & Fitting Facility',
                'seo_description' => 'A Hearing Aid Trial and Fitting Facility is a specialized ENT and audiology service designed to assess hearing loss and provide suitable hearing aid devices for improved communication and hearing rehabilitation. The facility helps patients select, test, and customize hearing aids according to their hearing needs and lifestyle. Proper hearing aid fitting significantly improves hearing quality and daily functioning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
