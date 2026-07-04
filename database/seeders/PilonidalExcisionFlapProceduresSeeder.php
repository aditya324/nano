<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PilonidalExcisionFlapProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pilonidal Excision / Flap Procedures')],
            [
                'title' => 'Pilonidal Excision / Flap Procedures',
                'slug' => Str::slug('Pilonidal Excision / Flap Procedures'),
                'introduction' => 'Pilonidal excision and flap procedures are surgeries performed to treat pilonidal sinus disease, a chronic infection near the tailbone caused by hair and debris accumulation. The condition often causes pain, swelling, and recurrent abscess formation.',
                'what_is' => 'Treatment options include: Excision of sinus tract Drainage of abscess Flap reconstruction procedures for recurrent disease Flap procedures help: Reduce recurrence Improve wound healing Flatten the natal cleft area The surgery may be performed under regional or general anesthesia.',
                'symptoms' => [
            ['value' => 'Pain near the tailbone'],
            ['value' => 'Swelling or redness'],
            ['value' => 'Pus or blood discharge'],
            ['value' => 'Fever during infection'],
            ['value' => 'Recurrent abscess formation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Wound infection'],
            ['value' => 'Delayed healing'],
            ['value' => 'Recurrence of pilonidal disease'],
            ['value' => 'Pain during recovery'],
            ['value' => 'Scar formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain wound cleanliness carefully'],
            ['value' => 'Avoid prolonged sitting initially'],
            ['value' => 'Remove hair around the area regularly if advised'],
            ['value' => 'Attend dressing and follow-up appointments'],
            ['value' => 'Monitor for recurrent swelling or discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Wound infection'],
            ['value' => 'Delayed healing'],
            ['value' => 'Recurrence of pilonidal disease'],
            ['value' => 'Pain during recovery'],
            ['value' => 'Scar formation'],
        ],
                'long_term_outlook' => 'Proper surgical treatment usually provides long-term relief, although maintaining hygiene and hair control is important to reduce recurrence risk.',
                'conclusion' => '',
                'seo_title' => 'Pilonidal Excision / Flap Procedures',
                'seo_description' => 'Pilonidal excision and flap procedures are surgeries performed to treat pilonidal sinus disease, a chronic infection near the tailbone caused by hair and debris accumulation. The condition often causes pain, swelling, and recurrent abscess formation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
