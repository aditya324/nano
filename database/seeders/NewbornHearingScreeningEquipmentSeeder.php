<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewbornHearingScreeningEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Newborn Hearing Screening Equipment')],
            [
                'title' => 'Newborn Hearing Screening Equipment',
                'slug' => Str::slug('Newborn Hearing Screening Equipment'),
                'introduction' => 'Newborn hearing screening equipment is specialized technology used to detect hearing impairment in newborn babies shortly after birth. Early hearing screening is essential for identifying congenital hearing loss before speech and language development are affected. Timely diagnosis allows early intervention and rehabilitation.',
                'what_is' => 'The equipment commonly uses: Otoacoustic Emission (OAE) testing Automated Auditory Brainstem Response (AABR) These tests are: Quick Safe Painless Non-invasive Newborn hearing screening is recommended for all infants, especially those with: Premature birth NICU admission Family history of hearing loss Birth complications Early detection significantly improves speech and developmental outcomes.',
                'symptoms' => [
            ['value' => 'Poor response to sounds'],
            ['value' => 'Delayed speech milestones'],
            ['value' => 'Lack of startle response to loud sounds'],
            ['value' => 'High-risk newborn conditions'],
            ['value' => 'Family history of hearing impairment'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No significant medical risks'],
            ['value' => 'False-positive screening results occasionally'],
            ['value' => 'Need for repeat testing in restless infants'],
            ['value' => 'Temporary testing difficulty due to ear fluid'],
            ['value' => 'Parental anxiety during evaluation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend repeat hearing tests if advised'],
            ['value' => 'Monitor developmental milestones carefully'],
            ['value' => 'Seek early hearing rehabilitation when needed'],
            ['value' => 'Continue pediatric follow-up regularly'],
            ['value' => 'Protect infants from ear infections and loud noise exposure'],
        ],
                'surgery_risks' => [
            ['value' => 'No significant medical risks'],
            ['value' => 'False-positive screening results occasionally'],
            ['value' => 'Need for repeat testing in restless infants'],
            ['value' => 'Temporary testing difficulty due to ear fluid'],
            ['value' => 'Parental anxiety during evaluation'],
        ],
                'long_term_outlook' => 'Early newborn hearing screening greatly improves speech, learning, and communication outcomes through timely intervention and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Newborn Hearing Screening Equipment',
                'seo_description' => 'Newborn hearing screening equipment is specialized technology used to detect hearing impairment in newborn babies shortly after birth. Early hearing screening is essential for identifying congenital hearing loss before speech and language development are affected. Timely diagnosis allows early intervention and rehabilitation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
