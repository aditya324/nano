<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofVascularGraftInfectionsDebridementRevascularizationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Vascular Graft Infections (Debridement, Revascularization)')],
            [
                'title' => 'Management of Vascular Graft Infections (Debridement, Revascularization)',
                'slug' => Str::slug('Management of Vascular Graft Infections (Debridement, Revascularization)'),
                'introduction' => 'Management of vascular graft infections involves treating infected blood vessel grafts through antibiotics, removal of infected tissue, and restoration of blood flow.',
                'what_is' => 'Vascular graft infection is a serious complication that can threaten both limb viability and patient survival if not treated aggressively.',
                'symptoms' => [
            ['value' => 'Fever'],
            ['value' => 'Redness and swelling near graft site'],
            ['value' => 'Persistent wound discharge'],
            ['value' => 'Pain'],
            ['value' => 'Bleeding'],
            ['value' => 'Weakness or fatigue'],
        ],
                'causes' => [
            ['value' => 'Surgical wound contamination'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Poor immune status'],
            ['value' => 'Repeated vascular procedures'],
            ['value' => 'Bloodstream infections'],
            ['value' => 'Poor wound healing'],
        ],
                'condition_risks' => [
            ['value' => 'Sepsis'],
            ['value' => 'Graft failure'],
            ['value' => 'Major bleeding'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Organ dysfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes intravenous antibiotics, surgical debridement of infected tissue, removal of infected graft material when necessary, and revascularization using new grafts or bypass procedures. Intensive wound care and infection control are essential parts of management.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Strict wound hygiene'],
            ['value' => 'Complete antibiotic therapy'],
            ['value' => 'Monitor for recurrent infection'],
            ['value' => 'Routine vascular imaging'],
            ['value' => 'Regular follow-up with vascular surgery team'],
        ],
                'surgery_risks' => [
            ['value' => 'Sepsis'],
            ['value' => 'Graft failure'],
            ['value' => 'Major bleeding'],
            ['value' => 'Limb ischemia'],
            ['value' => 'Organ dysfunction'],
        ],
                'long_term_outlook' => 'Early diagnosis and appropriate treatment improve graft preservation and survival while reducing recurrent infection risk.',
                'conclusion' => '',
                'seo_title' => 'Management of Vascular Graft Infections (Debridement, Revascularization)',
                'seo_description' => 'Management of vascular graft infections involves treating infected blood vessel grafts through antibiotics, removal of infected tissue, and restoration of blood flow.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
