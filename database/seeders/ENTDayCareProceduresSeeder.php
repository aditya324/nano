<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ENTDayCareProceduresSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ENT Day-Care Procedures')],
            [
                'title' => 'ENT Day-Care Procedures',
                'slug' => Str::slug('ENT Day-Care Procedures'),
                'introduction' => 'ENT day-care procedures are minor or minimally invasive treatments performed without the need for prolonged hospital admission. Patients are usually discharged on the same day after recovery and observation. These procedures improve convenience, reduce hospital stay, and support faster recovery.',
                'what_is' => 'Common ENT day-care procedures include: Ear cleaning and suction Nasal endoscopy Ear tube insertion Minor biopsies Foreign body removal Small lesion excision The procedures are performed under local or short-duration anesthesia depending on the condition and patient age. Day-care ENT services are designed to provide safe, efficient, and comfortable treatment.',
                'symptoms' => [
            ['value' => 'Ear blockage or discharge'],
            ['value' => 'Nasal obstruction'],
            ['value' => 'Minor throat lesions'],
            ['value' => 'Recurrent minor ENT problems'],
            ['value' => 'Small swellings or cysts'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Need for repeat procedures in some cases'],
            ['value' => 'Rare anesthesia-related issues'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest for the remainder of the day after the procedure'],
            ['value' => 'Take medications as advised'],
            ['value' => 'Keep treated areas clean and dry'],
            ['value' => 'Attend scheduled follow-up appointments'],
            ['value' => 'Report severe pain or bleeding promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Need for repeat procedures in some cases'],
            ['value' => 'Rare anesthesia-related issues'],
        ],
                'long_term_outlook' => 'ENT day-care procedures provide effective treatment with minimal disruption to daily life. Most patients recover quickly with excellent outcomes.',
                'conclusion' => '',
                'seo_title' => 'ENT Day-Care Procedures',
                'seo_description' => 'ENT day-care procedures are minor or minimally invasive treatments performed without the need for prolonged hospital admission. Patients are usually discharged on the same day after recovery and observation. These procedures improve convenience, reduce hospital stay, and support faster recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
