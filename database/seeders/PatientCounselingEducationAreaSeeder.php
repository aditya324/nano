<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientCounselingEducationAreaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Counseling & Education Area')],
            [
                'title' => 'Patient Counseling & Education Area',
                'slug' => Str::slug('Patient Counseling & Education Area'),
                'introduction' => 'A patient counseling and education area is a dedicated healthcare space where ENT patients and families receive information, emotional support, treatment guidance, and preventive health education. The facility helps patients understand their conditions and actively participate in treatment decisions. Education improves treatment compliance and long-term health outcomes.',
                'what_is' => 'The counseling area may provide: Disease education Surgical counseling Hearing rehabilitation guidance Allergy and lifestyle counseling Postoperative care instructions Preventive ENT health education The service supports: Better communication between doctors and patients Improved understanding of treatment plans Emotional reassurance and support Long-term disease management Special counseling may also be provided for pediatric, cancer, and hearing-impaired patients.',
                'symptoms' => [
            ['value' => 'Anxiety regarding ENT conditions'],
            ['value' => 'Difficulty understanding treatment plans'],
            ['value' => 'Hearing or speech rehabilitation needs'],
            ['value' => 'Chronic ENT disease management concerns'],
            ['value' => 'Postoperative recovery questions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Emotional stress related to illness'],
            ['value' => 'Poor treatment compliance without counseling'],
            ['value' => 'Misunderstanding of medical instructions'],
            ['value' => 'Anxiety about surgery or procedures'],
            ['value' => 'Delayed recovery due to inadequate education'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow counseling recommendations consistently'],
            ['value' => 'Attend educational and rehabilitation sessions regularly'],
            ['value' => 'Clarify doubts with healthcare providers promptly'],
            ['value' => 'Continue medications and lifestyle modifications properly'],
            ['value' => 'Maintain regular follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Emotional stress related to illness'],
            ['value' => 'Poor treatment compliance without counseling'],
            ['value' => 'Misunderstanding of medical instructions'],
            ['value' => 'Anxiety about surgery or procedures'],
            ['value' => 'Delayed recovery due to inadequate education'],
        ],
                'long_term_outlook' => 'Patient counseling and education improve treatment understanding, emotional well-being, treatment adherence, and overall long-term ENT health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Patient Counseling & Education Area',
                'seo_description' => 'A patient counseling and education area is a dedicated healthcare space where ENT patients and families receive information, emotional support, treatment guidance, and preventive health education. The facility helps patients understand their conditions and actively participate in treatment decisions. Education improves treatment compliance and long-term health outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
