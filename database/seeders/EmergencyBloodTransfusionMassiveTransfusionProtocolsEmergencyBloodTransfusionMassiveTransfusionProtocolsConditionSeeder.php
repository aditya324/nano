<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyBloodTransfusionMassiveTransfusionProtocolsEmergencyBloodTransfusionMassiveTransfusionProtocolsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Emergency Blood Transfusion & Massive Transfusion Protocols  Emergency Blood Transfusion & Massive Transfusion Protocols')],
            [
                'name' => 'Emergency Blood Transfusion & Massive Transfusion Protocols  Emergency Blood Transfusion & Massive Transfusion Protocols',
                'slug' => Str::slug('Emergency Blood Transfusion & Massive Transfusion Protocols  Emergency Blood Transfusion & Massive Transfusion Protocols'),
                'h1' => 'Emergency Blood Transfusion & Massive Transfusion Protocols  Emergency Blood Transfusion & Massive Transfusion Protocols',
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
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Emergency Blood Transfusion & Massive Transfusion Protocols  Emergency Blood Transfusion & Massive Transfusion Protocols',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
