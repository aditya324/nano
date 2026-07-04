<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArteriovenousFistulaCreationRevisionforHemodialysisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Arteriovenous Fistula Creation & Revision (for Hemodialysis)')],
            [
                'title' => 'Arteriovenous Fistula Creation & Revision (for Hemodialysis)',
                'slug' => Str::slug('Arteriovenous Fistula Creation & Revision (for Hemodialysis)'),
                'introduction' => 'An arteriovenous fistula (AVF) is a surgically created connection between an artery and vein used for long-term dialysis access.',
                'what_is' => 'AVFs provide reliable blood flow for hemodialysis and are considered the preferred dialysis access option.',
                'symptoms' => [
            ['value' => 'Poor dialysis flow'],
            ['value' => 'Swelling near access site'],
            ['value' => 'Bleeding'],
            ['value' => 'Pain'],
            ['value' => 'Loss of thrill or bruit'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'End-stage renal disease'],
            ['value' => 'Need for long-term dialysis'],
            ['value' => 'Failed dialysis access'],
        ],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Thrombosis'],
            ['value' => 'Access failure'],
            ['value' => 'Bleeding'],
            ['value' => 'Steal syndrome'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment involves surgical creation of a fistula, usually in the arm. Revision procedures may be required if narrowing, clotting, or inadequate blood flow develops.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy lifting on access arm'],
            ['value' => 'Keep access clean'],
            ['value' => 'Monitor bruit and thrill'],
            ['value' => 'Routine vascular follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Thrombosis'],
            ['value' => 'Access failure'],
            ['value' => 'Bleeding'],
            ['value' => 'Steal syndrome'],
        ],
                'long_term_outlook' => 'Well-functioning AVFs provide durable dialysis access and improve long-term dialysis effectiveness.',
                'conclusion' => '',
                'seo_title' => 'Arteriovenous Fistula Creation & Revision (for Hemodialysis)',
                'seo_description' => 'An arteriovenous fistula (AVF) is a surgically created connection between an artery and vein used for long-term dialysis access.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
