<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoblationRadiofrequencySurgeryUnitSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Coblation / Radiofrequency Surgery Unit')],
            [
                'title' => 'Coblation / Radiofrequency Surgery Unit',
                'slug' => Str::slug('Coblation / Radiofrequency Surgery Unit'),
                'introduction' => 'A Coblation or Radiofrequency Surgery Unit is an advanced ENT surgical system that uses controlled radiofrequency energy to remove or shrink soft tissue with minimal damage to surrounding structures. The technology allows precise tissue dissection with reduced bleeding, pain, and faster recovery compared to conventional surgical methods. It is widely used in tonsil, adenoid, nasal, and airway surgeries.',
                'what_is' => 'The system works by generating low-temperature plasma energy that dissolves tissue while preserving nearby healthy structures. Common ENT applications include: Tonsillectomy Adenoidectomy Turbinate reduction Sleep apnea surgery Soft palate procedures Airway tissue reduction Coblation surgery produces less thermal injury, resulting in reduced postoperative discomfort and improved healing. The equipment is commonly used in both adult and pediatric ENT surgery.',
                'symptoms' => [
            ['value' => 'Recurrent tonsillitis'],
            ['value' => 'Enlarged adenoids'],
            ['value' => 'Chronic nasal obstruction'],
            ['value' => 'Snoring or sleep apnea'],
            ['value' => 'Airway blockage symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary throat pain'],
            ['value' => 'Rare tissue injury'],
            ['value' => 'Need for repeat procedures in some cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain good hydration after surgery'],
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Avoid spicy or hard foods temporarily'],
            ['value' => 'Attend follow-up ENT appointments'],
            ['value' => 'Report bleeding or breathing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Temporary throat pain'],
            ['value' => 'Rare tissue injury'],
            ['value' => 'Need for repeat procedures in some cases'],
        ],
                'long_term_outlook' => 'Coblation and radiofrequency surgery provide effective minimally invasive treatment with faster recovery, less pain, and improved long-term airway and throat function.',
                'conclusion' => '',
                'seo_title' => 'Coblation / Radiofrequency Surgery Unit',
                'seo_description' => 'A Coblation or Radiofrequency Surgery Unit is an advanced ENT surgical system that uses controlled radiofrequency energy to remove or shrink soft tissue with minimal damage to surrounding structures. The technology allows precise tissue dissection with reduced bleeding, pain, and faster recovery compared to conventional surgical methods. It is widely used in tonsil, adenoid, nasal, and airway surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
