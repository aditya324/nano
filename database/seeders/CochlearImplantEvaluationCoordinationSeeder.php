<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CochlearImplantEvaluationCoordinationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cochlear Implant Evaluation Coordination')],
            [
                'title' => 'Cochlear Implant Evaluation Coordination',
                'slug' => Str::slug('Cochlear Implant Evaluation Coordination'),
                'introduction' => 'Cochlear implant evaluation coordination is a specialized service that assesses patients with severe hearing loss for possible cochlear implantation and coordinates multidisciplinary care. The evaluation helps determine whether patients may benefit from surgically implanted hearing devices when hearing aids are insufficient. Early assessment improves speech, hearing, and communication outcomes.',
                'what_is' => 'The coordination process may include: Advanced hearing tests Speech and language assessment Imaging studies ENT evaluation Audiology consultation Counseling and rehabilitation planning The program involves collaboration between: ENT surgeons Audiologists Speech therapists Pediatric specialists Rehabilitation teams Candidates undergo detailed assessment before surgery and long-term follow-up after implantation.',
                'symptoms' => [
            ['value' => 'Severe hearing loss'],
            ['value' => 'Poor benefit from hearing aids'],
            ['value' => 'Delayed speech development'],
            ['value' => 'Difficulty understanding speech'],
            ['value' => 'Congenital or progressive deafness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Surgical complications after implantation'],
            ['value' => 'Device-related malfunction'],
            ['value' => 'Infection risk'],
            ['value' => 'Need for long-term rehabilitation'],
            ['value' => 'Emotional adjustment challenges initially'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular implant programming sessions'],
            ['value' => 'Continue speech and hearing rehabilitation consistently'],
            ['value' => 'Maintain device hygiene carefully'],
            ['value' => 'Attend long-term audiology follow-up visits'],
            ['value' => 'Monitor hearing and communication progress regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Surgical complications after implantation'],
            ['value' => 'Device-related malfunction'],
            ['value' => 'Infection risk'],
            ['value' => 'Need for long-term rehabilitation'],
            ['value' => 'Emotional adjustment challenges initially'],
        ],
                'long_term_outlook' => 'Cochlear implant programs improve hearing perception, speech development, and communication ability, especially when intervention occurs early and rehabilitation is consistent.',
                'conclusion' => '',
                'seo_title' => 'Cochlear Implant Evaluation Coordination',
                'seo_description' => 'Cochlear implant evaluation coordination is a specialized service that assesses patients with severe hearing loss for possible cochlear implantation and coordinates multidisciplinary care. The evaluation helps determine whether patients may benefit from surgically implanted hearing devices when hearing aids are insufficient. Early assessment improves speech, hearing, and communication outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
