<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HandSurgeryTendonRepairNerveRepairReplantationHandSurgeryTendonRepairNerveRepairReplantationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hand Surgery (Tendon Repair, Nerve Repair, Replantation)  Hand Surgery (Tendon Repair, Nerve Repair & Replantation)')],
            [
                'name' => 'Hand Surgery (Tendon Repair, Nerve Repair, Replantation)  Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
                'slug' => Str::slug('Hand Surgery (Tendon Repair, Nerve Repair, Replantation)  Hand Surgery (Tendon Repair, Nerve Repair & Replantation)'),
                'h1' => 'Hand Surgery (Tendon Repair, Nerve Repair, Replantation)  Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
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
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Hand Surgery (Tendon Repair, Nerve Repair, Replantation)  Hand Surgery (Tendon Repair, Nerve Repair & Replantation)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
