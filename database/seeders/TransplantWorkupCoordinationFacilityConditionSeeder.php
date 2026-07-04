<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TransplantWorkupCoordinationFacilityConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Transplant Workup Coordination Facility')],
            [
                'name' => 'Transplant Workup Coordination Facility',
                'slug' => Str::slug('Transplant Workup Coordination Facility'),
                'h1' => 'Transplant Workup Coordination Facility',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Transplant Workup Coordination Facility is a specialized nephrology support unit that helps evaluate, prepare, and coordinate patients for kidney transplantation.',
                'about_more' => 'This facility manages the complete pre-transplant assessment process, including medical investigations, donor compatibility testing, specialist referrals, and transplant eligibility evaluation. Proper transplant coordination improves patient readiness, safety, and long-term transplant success.',
                'overview' => 'The transplant coordination facility provides: Kidney transplant eligibility assessment Donor-recipient compatibility testing Laboratory investigations Imaging coordination Cardiac and infection screening Psychological and nutritional evaluation Transplant counseling services The team works closely with: Nephrologists Transplant surgeons Immunologists Dialysis specialists Dietitians Counselors The facility ensures proper documentation, scheduling, and communication between patients and transplant centers. Patients and families are educated regarding: Transplant procedures Medication requirements Long-term transplant follow-up Lifestyle modifications after transplantation',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Progressive renal failure'],
            ['value' => 'Poor quality of life due to kidney disease'],
            ['value' => 'Need for renal replacement therapy'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delay in transplant eligibility clearance'],
            ['value' => 'Infection-related complications'],
            ['value' => 'Donor compatibility issues'],
            ['value' => 'Emotional stress during evaluation'],
            ['value' => 'Risk of transplant rejection after surgery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all transplant evaluation appointments'],
            ['value' => 'Complete recommended investigations on time'],
            ['value' => 'Follow dietary and medication instructions carefully'],
            ['value' => 'Maintain regular nephrology follow-up'],
            ['value' => 'Stay informed regarding transplant preparation requirements'],
        ],
                'recovery' => 'A dedicated transplant coordination facility improves transplant preparedness, reduces treatment delays, and supports smoother transition to kidney transplantation. Comprehensive evaluation and counseling contribute to better transplant outcomes and improved long-term quality of life.',
                'sort_order' => 41,
                'is_active' => true,
                'meta_title' => 'Transplant Workup Coordination Facility',
                'meta_description' => 'A Transplant Workup Coordination Facility is a specialized nephrology support unit that helps evaluate, prepare, and coordinate patients for kidney transplantat',
                'meta_keywords' => '',
            ]
        );
    }
}
