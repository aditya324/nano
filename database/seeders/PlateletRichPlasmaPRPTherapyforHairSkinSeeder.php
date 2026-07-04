<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PlateletRichPlasmaPRPTherapyforHairSkinSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Platelet-Rich Plasma (PRP) Therapy for Hair / Skin')],
            [
                'title' => 'Platelet-Rich Plasma (PRP) Therapy for Hair / Skin',
                'slug' => Str::slug('Platelet-Rich Plasma (PRP) Therapy for Hair / Skin'),
                'introduction' => '',
                'what_is' => '',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Platelet-Rich Plasma (PRP) Therapy for Hair / Skin',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
