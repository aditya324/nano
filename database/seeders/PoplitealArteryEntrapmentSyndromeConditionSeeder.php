<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PoplitealArteryEntrapmentSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Popliteal Artery Entrapment Syndrome')],
            [
                'name' => 'Popliteal Artery Entrapment Syndrome',
                'slug' => Str::slug('Popliteal Artery Entrapment Syndrome'),
                'h1' => 'Popliteal Artery Entrapment Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Popliteal artery entrapment syndrome occurs when muscles or tendons compress the popliteal artery behind the knee, reducing blood flow to the leg.',
                'about_more' => '',
                'overview' => 'Popliteal artery entrapment syndrome occurs when muscles or tendons compress the popliteal artery behind the knee, reducing blood flow to the leg.',
                'symptoms' => [
            ['value' => 'Calf pain during exercise'],
            ['value' => 'Leg cramps and fatigue'],
            ['value' => 'Coldness of the foot'],
            ['value' => 'Numbness or tingling in the leg'],
            ['value' => 'Reduced pulses during movement'],
        ],
                'causes' => [
            ['value' => 'Abnormal muscle anatomy near the artery'],
            ['value' => 'Repetitive athletic activity'],
            ['value' => 'Congenital structural abnormalities'],
            ['value' => 'Compression during leg movement'],
            ['value' => 'Increased muscle bulk in athletes'],
        ],
                'risks' => [
            ['value' => 'Artery damage or clot formation'],
            ['value' => 'Chronic limb ischemia'],
            ['value' => 'Reduced athletic performance'],
            ['value' => 'Tissue damage in severe cases'],
            ['value' => 'Acute arterial blockage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Doppler ultrasound and angiography'],
            ['value' => 'Surgical release of artery compression'],
            ['value' => 'Vascular reconstruction if needed'],
            ['value' => 'Exercise modification'],
            ['value' => 'Rehabilitation therapy'],
        ],
                'recovery' => 'Most patients recover well after surgery with restoration of normal blood flow and activity.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Popliteal Artery Entrapment Syndrome',
                'meta_description' => 'Popliteal artery entrapment syndrome occurs when muscles or tendons compress the popliteal artery behind the knee, reducing blood flow to the leg.',
                'meta_keywords' => '',
            ]
        );
    }
}
