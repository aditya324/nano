<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleNeurosurgeryConsultationFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Neurosurgery Consultation Facility')],
            [
                'title' => 'Tele-Neurosurgery Consultation Facility',
                'slug' => Str::slug('Tele-Neurosurgery Consultation Facility'),
                'introduction' => 'A tele-neurosurgery consultation facility is a remote healthcare service that allows neurosurgeons to evaluate, monitor, and guide patient care using digital communication technology. The facility improves access to neurosurgical expertise for patients in remote or underserved areas. It supports follow-up care, emergency consultation, and multidisciplinary coordination.',
                'what_is' => 'The facility may provide: Video consultations Remote imaging review Follow-up neurological assessments Rehabilitation guidance Emergency referral coordination Tele-neurosurgery is commonly used for: Post-operative follow-up Stroke consultation Spine disorder assessment Rehabilitation monitoring Chronic neurological disease management Digital healthcare systems improve convenience and continuity of care.',
                'symptoms' => [
            ['value' => 'Chronic neurological symptoms'],
            ['value' => 'Post-surgical recovery concerns'],
            ['value' => 'Spine pain or weakness'],
            ['value' => 'Headaches or seizures'],
            ['value' => 'Follow-up neurological complaints'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Limited physical examination capability'],
            ['value' => 'Technical connectivity issues'],
            ['value' => 'Delayed emergency recognition'],
            ['value' => 'Communication limitations'],
            ['value' => 'Incomplete remote assessment'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled virtual consultations regularly'],
            ['value' => 'Share imaging and reports promptly'],
            ['value' => 'Continue prescribed medications'],
            ['value' => 'Report emergency symptoms immediately'],
            ['value' => 'Follow rehabilitation advice consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Limited physical examination capability'],
            ['value' => 'Technical connectivity issues'],
            ['value' => 'Delayed emergency recognition'],
            ['value' => 'Communication limitations'],
            ['value' => 'Incomplete remote assessment'],
        ],
                'long_term_outlook' => 'Tele-neurosurgery improves access to specialized neurological care and long-term follow-up. It supports continuity of treatment, patient convenience, and multidisciplinary care coordination.',
                'conclusion' => '',
                'seo_title' => 'Tele-Neurosurgery Consultation Facility',
                'seo_description' => 'A tele-neurosurgery consultation facility is a remote healthcare service that allows neurosurgeons to evaluate, monitor, and guide patient care using digital communication technology. The facility improves access to neurosurgical expertise for patients in remote or underserved areas. It supports follow-up care, emergency consultation, and multidisciplinary coordination.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
