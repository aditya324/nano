<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LASERforENTProceduresCODiodeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('LASER for ENT Procedures (CO₂ / Diode)')],
            [
                'title' => 'LASER for ENT Procedures (CO₂ / Diode)',
                'slug' => Str::slug('LASER for ENT Procedures (CO₂ / Diode)'),
                'introduction' => 'LASER systems such as CO₂ and diode LASERs are advanced surgical technologies used in ENT procedures for precise cutting, tissue removal, and coagulation with minimal bleeding. LASER surgery improves surgical precision and reduces damage to surrounding tissues. It is commonly used in airway, nasal, throat, and laryngeal procedures.',
                'what_is' => 'ENT LASER systems are used for: Vocal cord lesions Airway obstruction Nasal surgeries Oral lesions Tumor excision Sleep apnea procedures The LASER beam allows: Precise tissue targeting Reduced bleeding Minimal postoperative swelling Faster healing Different LASER types are selected based on the surgical requirement and tissue characteristics.',
                'symptoms' => [
            ['value' => 'Hoarseness of voice'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Nasal growths or polyps'],
            ['value' => 'Oral or throat lesions'],
            ['value' => 'Recurrent airway narrowing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Burns to surrounding tissue'],
            ['value' => 'Bleeding'],
            ['value' => 'Airway swelling'],
            ['value' => 'Scar formation'],
            ['value' => 'Rare LASER-related eye injury without protection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow voice rest instructions carefully if advised'],
            ['value' => 'Avoid smoking and irritants'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend regular postoperative ENT reviews'],
        ],
                'surgery_risks' => [
            ['value' => 'Burns to surrounding tissue'],
            ['value' => 'Bleeding'],
            ['value' => 'Airway swelling'],
            ['value' => 'Scar formation'],
            ['value' => 'Rare LASER-related eye injury without protection'],
        ],
                'long_term_outlook' => 'LASER-assisted ENT surgery improves precision, reduces complications, and supports faster recovery with excellent long-term functional outcomes.',
                'conclusion' => '',
                'seo_title' => 'LASER for ENT Procedures (CO₂ / Diode)',
                'seo_description' => 'LASER systems such as CO₂ and diode LASERs are advanced surgical technologies used in ENT procedures for precise cutting, tissue removal, and coagulation with minimal bleeding. LASER surgery improves surgical precision and reduces damage to surrounding tissues. It is commonly used in airway, nasal, throat, and laryngeal procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
