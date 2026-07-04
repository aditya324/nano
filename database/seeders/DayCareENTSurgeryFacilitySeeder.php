<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DayCareENTSurgeryFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Day Care ENT Surgery Facility')],
            [
                'title' => 'Day Care ENT Surgery Facility',
                'slug' => Str::slug('Day Care ENT Surgery Facility'),
                'introduction' => 'A day care ENT surgery facility provides specialized surgical care for minor and minimally invasive ENT procedures that allow same-day discharge. The facility improves patient convenience, reduces hospital stay, and supports faster recovery. It is widely used for pediatric and adult ENT procedures.',
                'what_is' => 'Common day care ENT surgeries include: Ear tube insertion Nasal endoscopy procedures Tonsillectomy Adenoidectomy Minor biopsies Foreign body removal The facility includes: Preoperative assessment areas Procedure rooms Recovery monitoring Short-stay observation support Modern day-care surgery improves efficiency and patient comfort.',
                'symptoms' => [
            ['value' => 'Recurrent throat infections'],
            ['value' => 'Nasal obstruction'],
            ['value' => 'Ear problems requiring minor surgery'],
            ['value' => 'Small ENT lesions'],
            ['value' => 'Foreign body emergencies'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Anesthesia-related complications'],
            ['value' => 'Need for unexpected admission in rare cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest adequately after discharge'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Attend postoperative review appointments'],
            ['value' => 'Report fever or bleeding immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Anesthesia-related complications'],
            ['value' => 'Need for unexpected admission in rare cases'],
        ],
                'long_term_outlook' => 'Day-care ENT surgery provides safe and effective treatment with faster recovery, reduced hospitalization, and improved patient satisfaction.',
                'conclusion' => '',
                'seo_title' => 'Day Care ENT Surgery Facility',
                'seo_description' => 'A day care ENT surgery facility provides specialized surgical care for minor and minimally invasive ENT procedures that allow same-day discharge. The facility improves patient convenience, reduces hospital stay, and supports faster recovery. It is widely used for pediatric and adult ENT procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
