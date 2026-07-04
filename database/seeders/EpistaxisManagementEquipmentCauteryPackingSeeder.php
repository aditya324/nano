<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EpistaxisManagementEquipmentCauteryPackingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Epistaxis Management Equipment (Cautery, Packing)')],
            [
                'title' => 'Epistaxis Management Equipment (Cautery, Packing)',
                'slug' => Str::slug('Epistaxis Management Equipment (Cautery, Packing)'),
                'introduction' => 'Epistaxis management equipment includes specialized tools used to control and treat nosebleeds through cauterization, nasal packing, and other bleeding control methods. The equipment is essential for both emergency and routine ENT management of nasal bleeding. Prompt treatment helps prevent severe blood loss and recurrence.',
                'what_is' => 'The setup may include: Nasal cautery devices Chemical cautery agents Nasal packing materials Suction systems Endoscopic visualization tools Balloon tamponade devices The equipment is used for: Recurrent nosebleeds Trauma-related bleeding Hypertension-related epistaxis Bleeding disorders Post-surgical bleeding Modern systems improve precision and patient safety.',
                'symptoms' => [
            ['value' => 'Recurrent nosebleeds'],
            ['value' => 'Sudden heavy nasal bleeding'],
            ['value' => 'Nasal crusting or dryness'],
            ['value' => 'Blood clots from the nose'],
            ['value' => 'Dizziness from excessive bleeding'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Nasal discomfort'],
            ['value' => 'Infection with prolonged packing'],
            ['value' => 'Nasal tissue injury'],
            ['value' => 'Rare airway compromise in severe bleeding'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid nose blowing temporarily'],
            ['value' => 'Keep nasal passages moist if advised'],
            ['value' => 'Avoid heavy lifting or strenuous activity'],
            ['value' => 'Control blood pressure properly'],
            ['value' => 'Attend ENT follow-up appointments regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Nasal discomfort'],
            ['value' => 'Infection with prolonged packing'],
            ['value' => 'Nasal tissue injury'],
            ['value' => 'Rare airway compromise in severe bleeding'],
        ],
                'long_term_outlook' => 'Effective epistaxis management reduces recurrence and prevents serious bleeding complications, improving long-term nasal health and patient safety.',
                'conclusion' => '',
                'seo_title' => 'Epistaxis Management Equipment (Cautery, Packing)',
                'seo_description' => 'Epistaxis management equipment includes specialized tools used to control and treat nosebleeds through cauterization, nasal packing, and other bleeding control methods. The equipment is essential for both emergency and routine ENT management of nasal bleeding. Prompt treatment helps prevent severe blood loss and recurrence.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
