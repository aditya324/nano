<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FemoropoplitealFemorodistalBypassSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Femoropopliteal / Femoro-distal Bypass Surgery')],
            [
                'title' => 'Femoropopliteal / Femoro-distal Bypass Surgery',
                'slug' => Str::slug('Femoropopliteal / Femoro-distal Bypass Surgery'),
                'introduction' => 'This bypass surgery reroutes blood around blocked arteries in the thigh or lower leg using grafts.',
                'what_is' => 'It is commonly performed in advanced peripheral arterial disease to save limbs and improve walking ability.',
                'symptoms' => [
            ['value' => 'Severe leg pain'],
            ['value' => 'Non-healing ulcers'],
            ['value' => 'Gangrene'],
            ['value' => 'Reduced walking distance'],
            ['value' => 'Cold feet'],
        ],
                'causes' => [
            ['value' => 'Severe peripheral arterial disease'],
            ['value' => 'Diabetes'],
            ['value' => 'Smoking'],
            ['value' => 'Arterial thrombosis'],
            ['value' => 'Critical limb ischemia'],
        ],
                'condition_risks' => [
            ['value' => 'Graft blockage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Limb loss if unsuccessful'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'A vein or synthetic graft is connected above and below the blockage to restore blood flow to the lower limb.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Walking rehabilitation'],
            ['value' => 'Foot care'],
            ['value' => 'Blood thinner medications'],
            ['value' => 'Routine vascular scans'],
        ],
                'surgery_risks' => [
            ['value' => 'Graft blockage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Limb loss if unsuccessful'],
        ],
                'long_term_outlook' => 'Bypass surgery improves limb circulation and reduces the risk of amputation in severe PAD.',
                'conclusion' => '',
                'seo_title' => 'Femoropopliteal / Femoro-distal Bypass Surgery',
                'seo_description' => 'This bypass surgery reroutes blood around blocked arteries in the thigh or lower leg using grafts.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
