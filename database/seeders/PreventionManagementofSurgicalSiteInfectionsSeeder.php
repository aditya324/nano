<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreventionManagementofSurgicalSiteInfectionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Prevention & Management of Surgical Site Infections')],
            [
                'title' => 'Prevention & Management of Surgical Site Infections',
                'slug' => Str::slug('Prevention & Management of Surgical Site Infections'),
                'introduction' => 'Prevention and management of surgical site infections (SSI) involve measures to reduce infection risk before, during, and after surgery. SSIs can delay healing, prolong hospitalization, and increase surgical complications.',
                'what_is' => 'Preventive strategies include: Sterile surgical techniques Antibiotic prophylaxis Proper wound care Blood sugar control Infection surveillance Management of SSI may involve: Antibiotic therapy Wound drainage Debridement Dressing changes Advanced wound care therapies Early identification and treatment are essential to prevent severe complications.',
                'symptoms' => [
            ['value' => 'Redness around the surgical wound'],
            ['value' => 'Fever or chills'],
            ['value' => 'Swelling or warmth at incision site'],
            ['value' => 'Pus or foul-smelling discharge'],
            ['value' => 'Increased wound pain'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed wound healing'],
            ['value' => 'Spread of infection or sepsis'],
            ['value' => 'Wound breakdown'],
            ['value' => 'Need for repeat surgery'],
            ['value' => 'Prolonged hospital stay'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain proper wound hygiene'],
            ['value' => 'Take antibiotics exactly as prescribed'],
            ['value' => 'Monitor wounds for redness or discharge'],
            ['value' => 'Keep dressings clean and dry'],
            ['value' => 'Attend regular postoperative wound evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed wound healing'],
            ['value' => 'Spread of infection or sepsis'],
            ['value' => 'Wound breakdown'],
            ['value' => 'Need for repeat surgery'],
            ['value' => 'Prolonged hospital stay'],
        ],
                'long_term_outlook' => 'Proper infection prevention and timely management improve healing, reduce complications, and support safer long-term surgical recovery.',
                'conclusion' => '',
                'seo_title' => 'Prevention & Management of Surgical Site Infections',
                'seo_description' => 'Prevention and management of surgical site infections (SSI) involve measures to reduce infection risk before, during, and after surgery. SSIs can delay healing, prolong hospitalization, and increase surgical complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
