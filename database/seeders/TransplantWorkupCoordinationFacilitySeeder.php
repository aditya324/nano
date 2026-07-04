<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TransplantWorkupCoordinationFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Transplant Workup Coordination Facility')],
            [
                'title' => 'Transplant Workup Coordination Facility',
                'slug' => Str::slug('Transplant Workup Coordination Facility'),
                'introduction' => 'A Transplant Workup Coordination Facility is a specialized nephrology support unit that helps evaluate, prepare, and coordinate patients for kidney transplantation. This facility manages the complete pre-transplant assessment process, including medical investigations, donor compatibility testing, specialist referrals, and transplant eligibility evaluation. Proper transplant coordination improves patient readiness, safety, and long-term transplant success.',
                'what_is' => 'The transplant coordination facility provides: Kidney transplant eligibility assessment Donor-recipient compatibility testing Laboratory investigations Imaging coordination Cardiac and infection screening Psychological and nutritional evaluation Transplant counseling services The team works closely with: Nephrologists Transplant surgeons Immunologists Dialysis specialists Dietitians Counselors The facility ensures proper documentation, scheduling, and communication between patients and transplant centers. Patients and families are educated regarding: Transplant procedures Medication requirements Long-term transplant follow-up Lifestyle modifications after transplantation',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Progressive renal failure'],
            ['value' => 'Poor quality of life due to kidney disease'],
            ['value' => 'Need for renal replacement therapy'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delay in transplant eligibility clearance'],
            ['value' => 'Infection-related complications'],
            ['value' => 'Donor compatibility issues'],
            ['value' => 'Emotional stress during evaluation'],
            ['value' => 'Risk of transplant rejection after surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend all transplant evaluation appointments'],
            ['value' => 'Complete recommended investigations on time'],
            ['value' => 'Follow dietary and medication instructions carefully'],
            ['value' => 'Maintain regular nephrology follow-up'],
            ['value' => 'Stay informed regarding transplant preparation requirements'],
        ],
                'surgery_risks' => [
            ['value' => 'Delay in transplant eligibility clearance'],
            ['value' => 'Infection-related complications'],
            ['value' => 'Donor compatibility issues'],
            ['value' => 'Emotional stress during evaluation'],
            ['value' => 'Risk of transplant rejection after surgery'],
        ],
                'long_term_outlook' => 'A dedicated transplant coordination facility improves transplant preparedness, reduces treatment delays, and supports smoother transition to kidney transplantation. Comprehensive evaluation and counseling contribute to better transplant outcomes and improved long-term quality of life.',
                'conclusion' => '',
                'seo_title' => 'Transplant Workup Coordination Facility',
                'seo_description' => 'A Transplant Workup Coordination Facility is a specialized nephrology support unit that helps evaluate, prepare, and coordinate patients for kidney transplantation. This facility manages the complete pre-transplant assessment process, including medical investigations, donor compatibility testing, specialist referrals, and transplant eligibility evaluation. Proper transplant coordination improves patient readiness, safety, and long-term transplant success.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
