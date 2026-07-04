<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MalignanciesHematologicSolidTumorsinitialdiagnosissupportMalignanciesHematologicSolidTumorsInitialDiagnosisSupportConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Malignancies (Hematologic, Solid Tumors – initial diagnosis & support)  Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)')],
            [
                'name' => 'Malignancies (Hematologic, Solid Tumors – initial diagnosis & support)  Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'slug' => Str::slug('Malignancies (Hematologic, Solid Tumors – initial diagnosis & support)  Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)'),
                'h1' => 'Malignancies (Hematologic, Solid Tumors – initial diagnosis & support)  Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Malignancies (Hematologic, Solid Tumors – initial diagnosis & support)  Malignancies (Hematologic, Solid Tumors – Initial Diagnosis & Support)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
