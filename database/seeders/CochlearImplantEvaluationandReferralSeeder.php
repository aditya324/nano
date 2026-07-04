<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CochlearImplantEvaluationandReferralSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cochlear Implant Evaluation and Referral')],
            [
                'title' => 'Cochlear Implant Evaluation and Referral',
                'slug' => Str::slug('Cochlear Implant Evaluation and Referral'),
                'introduction' => 'Cochlear implant evaluation and referral is a specialized ENT and audiology service used to assess patients with severe hearing loss who may benefit from cochlear implantation. A cochlear implant is an electronic hearing device that directly stimulates the hearing nerve when conventional hearing aids are insufficient. The evaluation determines candidacy for advanced hearing rehabilitation.',
                'what_is' => 'The assessment includes: Detailed hearing tests Speech evaluation Ear examination Imaging studies Counseling sessions Psychological and rehabilitation assessment The evaluation is commonly recommended for: Severe sensorineural hearing loss Congenital deafness Progressive hearing loss Limited benefit from hearing aids Patients who qualify are referred to specialized cochlear implant centers for surgery and rehabilitation.',
                'symptoms' => [
            ['value' => 'Severe hearing impairment'],
            ['value' => 'Difficulty understanding speech'],
            ['value' => 'Limited response to hearing aids'],
            ['value' => 'Delayed speech development in children'],
            ['value' => 'Social communication difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical risks if implantation is performed'],
            ['value' => 'Emotional adjustment challenges'],
            ['value' => 'Device-related complications'],
            ['value' => 'Rehabilitation difficulties initially'],
            ['value' => 'Need for long-term follow-up and therapy'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend hearing rehabilitation sessions regularly'],
            ['value' => 'Use hearing devices consistently'],
            ['value' => 'Participate in speech therapy if advised'],
            ['value' => 'Attend scheduled hearing evaluations'],
            ['value' => 'Maintain device care properly'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical risks if implantation is performed'],
            ['value' => 'Emotional adjustment challenges'],
            ['value' => 'Device-related complications'],
            ['value' => 'Rehabilitation difficulties initially'],
            ['value' => 'Need for long-term follow-up and therapy'],
        ],
                'long_term_outlook' => 'Cochlear implant programs significantly improve hearing perception, communication skills, and quality of life in eligible patients with severe hearing loss.',
                'conclusion' => '',
                'seo_title' => 'Cochlear Implant Evaluation and Referral',
                'seo_description' => 'Cochlear implant evaluation and referral is a specialized ENT and audiology service used to assess patients with severe hearing loss who may benefit from cochlear implantation. A cochlear implant is an electronic hearing device that directly stimulates the hearing nerve when conventional hearing aids are insufficient. The evaluation determines candidacy for advanced hearing rehabilitation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
