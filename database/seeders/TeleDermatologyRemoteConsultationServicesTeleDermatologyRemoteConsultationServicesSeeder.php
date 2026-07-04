<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeleDermatologyRemoteConsultationServicesTeleDermatologyRemoteConsultationServicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tele-Dermatology / Remote Consultation Services Tele-Dermatology / Remote Consultation Services')],
            [
                'title' => 'Tele-Dermatology / Remote Consultation Services Tele-Dermatology / Remote Consultation Services',
                'slug' => Str::slug('Tele-Dermatology / Remote Consultation Services Tele-Dermatology / Remote Consultation Services'),
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
                'seo_title' => 'Tele-Dermatology / Remote Consultation Services Tele-Dermatology / Remote Consultation Services',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
