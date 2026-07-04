<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiathermySuctionEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diathermy & Suction Equipment')],
            [
                'title' => 'Diathermy & Suction Equipment',
                'slug' => Str::slug('Diathermy & Suction Equipment'),
                'introduction' => 'Diathermy and suction equipment are essential operating room systems used to control bleeding, remove fluids, and maintain a clear surgical field during procedures.',
                'what_is' => 'Diathermy devices use electrical energy to: Cut tissue Seal blood vessels Control bleeding Suction systems help remove: Blood Fluids Smoke Secretions during surgery These systems improve visibility, reduce operative time, and enhance surgical safety.',
                'symptoms' => [
            ['value' => 'Conditions requiring surgery'],
            ['value' => 'Procedures with bleeding risk'],
            ['value' => 'Emergency trauma surgeries'],
            ['value' => 'Abdominal or thoracic operations'],
            ['value' => 'Minimally invasive surgical procedures'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Thermal injury from diathermy'],
            ['value' => 'Bleeding if equipment fails'],
            ['value' => 'Tissue damage from improper suction use'],
            ['value' => 'Electrical safety hazards'],
            ['value' => 'Rare equipment malfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor wounds for bleeding or infection'],
            ['value' => 'Follow postoperative wound care instructions'],
            ['value' => 'Attend regular surgical follow-up visits'],
            ['value' => 'Report excessive pain or swelling'],
            ['value' => 'Maintain proper rest and recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Thermal injury from diathermy'],
            ['value' => 'Bleeding if equipment fails'],
            ['value' => 'Tissue damage from improper suction use'],
            ['value' => 'Electrical safety hazards'],
            ['value' => 'Rare equipment malfunction'],
        ],
                'long_term_outlook' => 'Reliable diathermy and suction systems improve surgical precision, reduce complications, and support successful postoperative recovery.',
                'conclusion' => '',
                'seo_title' => 'Diathermy & Suction Equipment',
                'seo_description' => 'Diathermy and suction equipment are essential operating room systems used to control bleeding, remove fluids, and maintain a clear surgical field during procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
