<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OTBurnCareSetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('OT & Burn Care Setup')],
            [
                'title' => 'OT & Burn Care Setup',
                'slug' => Str::slug('OT & Burn Care Setup'),
                'introduction' => 'OT (Operation Theatre) and burn care setup refers to the specialized infrastructure, equipment, sterile environment, and multidisciplinary support systems required for the emergency management, surgical treatment, intensive care, and rehabilitation of burn patients. These setups are designed to provide safe, efficient, and comprehensive care for patients with minor to severe burn injuries.',
                'what_is' => 'A dedicated burn care setup typically includes specialized operation theatres, burn intensive care units (ICU), wound care areas, infection control systems, rehabilitation facilities, and advanced monitoring equipment. Burn operation theatres are equipped for procedures such as debridement, skin grafting, reconstructive surgery, and emergency trauma management. The setup also includes temperature-controlled environments, sterile wound care protocols, fluid management systems, physiotherapy support, and multidisciplinary coordination involving plastic surgeons, anesthesiologists, critical care specialists, nurses, and rehabilitation teams. Surgical instruments for burn reconstruction and grafting procedures Skin grafting and microsurgical reconstruction equipment Advanced wound care systems and Wound VAC therapy support Temperature-controlled patient care and fluid resuscitation systems Emergency resuscitation, anesthesia, and critical care equipment',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Specialized burn operation theatre with sterile surgical environment'],
            ['value' => 'Burn ICU and advanced patient monitoring systems'],
            ['value' => 'Wound care and dressing management facilities'],
            ['value' => 'Infection control and isolation protocols'],
            ['value' => 'Rehabilitation, physiotherapy, and long-term recovery support infrastructure'],
        ],
                'condition_risks' => [
            ['value' => 'High risk of infection and cross-contamination in burn patients'],
            ['value' => 'Fluid imbalance and critical care complications'],
            ['value' => 'Need for continuous sterile wound management'],
            ['value' => 'Long-term rehabilitation and reconstructive care requirements'],
            ['value' => 'Complex multidisciplinary coordination for severe burn injuries'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Emergency burn stabilization and critical care management Surgical debridement and reconstructive burn surgery Skin grafting and flap reconstruction procedures Physiotherapy, occupational therapy, and rehabilitation support Long-term scar management and psychological care services',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [
            ['value' => 'High risk of infection and cross-contamination in burn patients'],
            ['value' => 'Fluid imbalance and critical care complications'],
            ['value' => 'Need for continuous sterile wound management'],
            ['value' => 'Long-term rehabilitation and reconstructive care requirements'],
            ['value' => 'Complex multidisciplinary coordination for severe burn injuries'],
        ],
                'long_term_outlook' => 'A well-equipped OT and burn care setup significantly improves patient survival, wound healing, infection control, and long-term functional recovery. Advanced surgical infrastructure, intensive rehabilitation, multidisciplinary teamwork, and continuous patient monitoring play a vital role in improving outcomes and quality of life for burn injury patients.',
                'conclusion' => '',
                'seo_title' => 'OT & Burn Care Setup',
                'seo_description' => 'OT (Operation Theatre) and burn care setup refers to the specialized infrastructure, equipment, sterile environment, and multidisciplinary support systems required for the emergency management, surgical treatment, intensive care, and rehabilitation of burn patients. These setups are designed to provide safe, efficient, and comprehensive care for patients with minor to severe burn injuries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
