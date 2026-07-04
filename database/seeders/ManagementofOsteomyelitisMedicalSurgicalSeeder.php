<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofOsteomyelitisMedicalSurgicalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Osteomyelitis (Medical / Surgical)')],
            [
                'title' => 'Management of Osteomyelitis (Medical / Surgical)',
                'slug' => Str::slug('Management of Osteomyelitis (Medical / Surgical)'),
                'introduction' => 'Management of osteomyelitis involves treatment of bone infection commonly associated with advanced diabetic foot ulcers.',
                'what_is' => 'Untreated osteomyelitis can lead to bone destruction, chronic infection, and amputation.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Bone infection in diabetic foot'],
            ['value' => 'Chronic infected ulcers'],
            ['value' => 'Deep tissue infection'],
            ['value' => 'Gangrene-associated infection'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include long-term antibiotics, surgical debridement of infected bone, drainage procedures, and partial bone removal when necessary.'],
            ['value' => 'Benefits'],
            ['value' => 'Infection control'],
            ['value' => 'Limb preservation'],
            ['value' => 'Pain reduction'],
            ['value' => 'Prevention of sepsis'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Recurrent infection'],
            ['value' => 'Need for surgery'],
            ['value' => 'Delayed healing'],
            ['value' => 'Possible amputation'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Long-term antibiotics'],
            ['value' => 'Wound dressing care'],
            ['value' => 'Imaging follow-up'],
            ['value' => 'Diabetic control and nutrition support'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Early diagnosis and combined medical-surgical treatment improve healing and reduce limb loss risk.',
                'conclusion' => '',
                'seo_title' => 'Management of Osteomyelitis (Medical / Surgical)',
                'seo_description' => 'Management of osteomyelitis involves treatment of bone infection commonly associated with advanced diabetic foot ulcers.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
