<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForeignBodyRemovalInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Foreign Body Removal Instruments')],
            [
                'title' => 'Foreign Body Removal Instruments',
                'slug' => Str::slug('Foreign Body Removal Instruments'),
                'introduction' => 'Foreign body removal instruments are specialized ENT tools used to safely remove objects lodged in the ear, nose, throat, or airway. These instruments help prevent injury, infection, airway obstruction, and complications caused by retained foreign bodies. They are essential in emergency and pediatric ENT care.',
                'what_is' => 'The instrument sets may include: Forceps Suction devices Hooks Endoscopic retrieval tools Magnification systems Airway support equipment The tools are used for removing: Beads or toys in children Food particles Insects Cotton fragments Airway foreign bodies Quick and safe removal reduces complications and discomfort.',
                'symptoms' => [
            ['value' => 'Sudden ear or nasal blockage'],
            ['value' => 'Pain or irritation'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Ear discharge or foul smell'],
            ['value' => 'Persistent coughing or choking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Tissue injury'],
            ['value' => 'Infection'],
            ['value' => 'Airway compromise during difficult removal'],
            ['value' => 'Rare perforation of delicate structures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid inserting objects into the ear or nose'],
            ['value' => 'Use medications if prescribed'],
            ['value' => 'Monitor for infection or bleeding'],
            ['value' => 'Attend follow-up evaluations if advised'],
            ['value' => 'Seek urgent care for breathing difficulty'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Tissue injury'],
            ['value' => 'Infection'],
            ['value' => 'Airway compromise during difficult removal'],
            ['value' => 'Rare perforation of delicate structures'],
        ],
                'long_term_outlook' => 'Proper foreign body removal prevents complications and supports complete recovery with preservation of normal ENT function.',
                'conclusion' => '',
                'seo_title' => 'Foreign Body Removal Instruments',
                'seo_description' => 'Foreign body removal instruments are specialized ENT tools used to safely remove objects lodged in the ear, nose, throat, or airway. These instruments help prevent injury, infection, airway obstruction, and complications caused by retained foreign bodies. They are essential in emergency and pediatric ENT care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
