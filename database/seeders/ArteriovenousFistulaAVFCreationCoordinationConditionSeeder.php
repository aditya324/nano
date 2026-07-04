<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArteriovenousFistulaAVFCreationCoordinationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arteriovenous Fistula (AVF) Creation (Coordination)')],
            [
                'name' => 'Arteriovenous Fistula (AVF) Creation (Coordination)',
                'slug' => Str::slug('Arteriovenous Fistula (AVF) Creation (Coordination)'),
                'h1' => 'Arteriovenous Fistula (AVF) Creation (Coordination)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arteriovenous fistula (AVF) creation is a surgical procedure coordinated for patients requiring long-term hemodialysis access.',
                'about_more' => 'An AVF is created by connecting an artery and a vein, usually in the arm, to provide strong blood flow for efficient dialysis treatment. AVFs are considered the safest and most durable form of dialysis access.',
                'overview' => 'The procedure involves: Pre-surgical vascular assessment Vein mapping Surgical connection of artery and vein Access maturation monitoring After surgery, the fistula gradually enlarges and strengthens over several weeks before dialysis use. Healthcare teams coordinate: Surgical referral Access monitoring Dialysis planning Patient education Patients are instructed regarding fistula exercises and protection to support proper maturation.',
                'symptoms' => [
            ['value' => 'Advanced kidney disease'],
            ['value' => 'Long-term dialysis requirement'],
            ['value' => 'Poor kidney function'],
            ['value' => 'Dialysis preparation'],
            ['value' => 'Need for permanent vascular access'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Fistula non-maturation'],
            ['value' => 'Clot formation'],
            ['value' => 'Reduced blood circulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Perform fistula exercises if advised'],
            ['value' => 'Avoid pressure on the access arm'],
            ['value' => 'Keep the surgical site clean'],
            ['value' => 'Monitor fistula vibration daily'],
            ['value' => 'Attend follow-up vascular assessments'],
        ],
                'recovery' => 'AVF creation provides reliable long-term dialysis access with lower infection risk compared to temporary catheters. Proper fistula care and monitoring support safer dialysis treatment and improved long-term outcomes.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Arteriovenous Fistula (AVF) Creation (Coordination)',
                'meta_description' => 'Arteriovenous fistula (AVF) creation is a surgical procedure coordinated for patients requiring long-term hemodialysis access.',
                'meta_keywords' => '',
            ]
        );
    }
}
