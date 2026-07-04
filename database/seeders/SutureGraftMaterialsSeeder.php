<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SutureGraftMaterialsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Suture & Graft Materials')],
            [
                'title' => 'Suture & Graft Materials',
                'slug' => Str::slug('Suture & Graft Materials'),
                'introduction' => 'Suture and graft materials are essential supplies used in vascular reconstruction and blood vessel repair surgeries.',
                'what_is' => 'These materials help restore circulation during bypass surgery, aneurysm repair, and vascular trauma procedures.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Bypass graft surgery'],
            ['value' => 'Aneurysm repair'],
            ['value' => 'Vascular trauma repair'],
            ['value' => 'AV fistula surgery'],
            ['value' => 'Vessel reconstruction'],
            ['value' => 'Treatments'],
            ['value' => 'These materials are used in arterial bypass procedures, aneurysm grafting, vascular reconstruction, vessel repair, dialysis access surgery, and emergency trauma operations.'],
            ['value' => 'Benefits'],
            ['value' => 'Strong vascular repair support'],
            ['value' => 'Improved blood flow restoration'],
            ['value' => 'Durable surgical reconstruction'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Infection risk'],
            ['value' => 'Graft blockage'],
            ['value' => 'Need for long-term surveillance'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Infection prevention'],
            ['value' => 'Routine vascular imaging'],
            ['value' => 'Medication adherence'],
            ['value' => 'Follow-up surgical review'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Modern graft and suture technologies improve vascular surgery durability and patient recovery.',
                'conclusion' => '',
                'seo_title' => 'Suture & Graft Materials',
                'seo_description' => 'Suture and graft materials are essential supplies used in vascular reconstruction and blood vessel repair surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
