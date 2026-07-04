<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TracheostomyEmergencyElectiveSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tracheostomy (Emergency / Elective)')],
            [
                'title' => 'Tracheostomy (Emergency / Elective)',
                'slug' => Str::slug('Tracheostomy (Emergency / Elective)'),
                'introduction' => 'Tracheostomy is a surgical procedure in which an opening is created in the neck into the windpipe (trachea) to help breathing. The procedure may be performed as an emergency for airway obstruction or electively for long-term breathing support. It provides a direct airway for ventilation and respiratory management.',
                'what_is' => 'The procedure is performed under sterile conditions in the operating theatre or emergency setting. A tracheostomy tube is inserted into the trachea through the neck opening. Tracheostomy may be required for: Airway obstruction Severe trauma Prolonged ventilator support Neurological breathing disorders Head and neck cancers The procedure improves oxygen delivery and airway stability.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Neck swelling affecting breathing'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Severe throat or airway injury'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Airway blockage'],
            ['value' => 'Tracheal injury'],
            ['value' => 'Difficulty speaking temporarily'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain tracheostomy tube hygiene carefully'],
            ['value' => 'Perform suctioning as instructed'],
            ['value' => 'Attend regular follow-up visits'],
            ['value' => 'Monitor for breathing difficulty or infection'],
            ['value' => 'Continue respiratory rehabilitation if advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Airway blockage'],
            ['value' => 'Tracheal injury'],
            ['value' => 'Difficulty speaking temporarily'],
        ],
                'long_term_outlook' => 'Tracheostomy provides life-saving airway support in critical conditions. Long-term outcomes depend on the underlying disease and respiratory recovery.',
                'conclusion' => '',
                'seo_title' => 'Tracheostomy (Emergency / Elective)',
                'seo_description' => 'Tracheostomy is a surgical procedure in which an opening is created in the neck into the windpipe (trachea) to help breathing. The procedure may be performed as an emergency for airway obstruction or electively for long-term breathing support. It provides a direct airway for ventilation and respiratory management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
