<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermanentDialysisAccessCareConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Permanent Dialysis Access Care')],
            [
                'name' => 'Permanent Dialysis Access Care',
                'slug' => Str::slug('Permanent Dialysis Access Care'),
                'h1' => 'Permanent Dialysis Access Care',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Permanent dialysis access care is a specialized nephrology service focused on maintaining long-term vascular access used for regular hemodialysis treatment.',
                'about_more' => 'Permanent dialysis access, such as an arteriovenous fistula (AVF) or graft, is essential for safe and effective long-term dialysis therapy. Proper access care helps prevent infections, clotting, and access failure.',
                'overview' => 'Permanent access care includes: Regular access examination Blood flow monitoring Infection prevention Needle site care Surveillance for narrowing or clotting Healthcare professionals educate patients regarding: Daily fistula monitoring Hygiene practices Protection of the access arm Warning signs of complications Routine evaluation helps identify problems early before dialysis effectiveness is affected. Timely intervention can preserve long-term access function.',
                'symptoms' => [
            ['value' => 'Reduced dialysis blood flow'],
            ['value' => 'Swelling near access site'],
            ['value' => 'Pain or redness'],
            ['value' => 'Weak fistula vibration'],
            ['value' => 'Bleeding from access area'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Access infection'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Access narrowing'],
            ['value' => 'Dialysis interruption'],
            ['value' => 'Permanent access failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Keep the access site clean'],
            ['value' => 'Avoid heavy lifting with access arm'],
            ['value' => 'Check fistula vibration daily'],
            ['value' => 'Attend regular dialysis access reviews'],
            ['value' => 'Report swelling or bleeding promptly'],
        ],
                'recovery' => 'Good permanent access care significantly improves dialysis safety and treatment efficiency. Regular surveillance and early intervention help preserve long-term vascular access function and patient quality of life.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Permanent Dialysis Access Care',
                'meta_description' => 'Permanent dialysis access care is a specialized nephrology service focused on maintaining long-term vascular access used for regular hemodialysis treatment.',
                'meta_keywords' => '',
            ]
        );
    }
}
