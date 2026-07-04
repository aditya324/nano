<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationonWoundCarePostoperativeRehabilitationScarPreventionPatientEducationonWoundCarePostoperativeRehabilitationScarPreventionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention  Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention')],
            [
                'name' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention  Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
                'slug' => Str::slug('Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention  Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention'),
                'h1' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention  Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
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
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention  Patient Education on Wound Care, Postoperative Rehabilitation & Scar Prevention',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
