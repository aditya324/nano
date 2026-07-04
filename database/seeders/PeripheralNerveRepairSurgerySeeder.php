<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralNerveRepairSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peripheral Nerve Repair Surgery')],
            [
                'title' => 'Peripheral Nerve Repair Surgery',
                'slug' => Str::slug('Peripheral Nerve Repair Surgery'),
                'introduction' => 'Peripheral nerve repair surgery is a neurosurgical procedure performed to restore function in damaged or severed peripheral nerves. The surgery helps improve movement, sensation, and muscle control following nerve injury. Microsurgical techniques are commonly used for precise nerve repair.',
                'what_is' => 'The procedure may involve: Direct nerve repair Nerve grafting Microsurgical nerve reconstruction Removal of scar tissue around nerves Functional restoration techniques Peripheral nerve surgery is performed for: Traumatic nerve injuries Nerve compression damage Laceration injuries Functional nerve loss Recovery often requires prolonged rehabilitation and physiotherapy.',
                'symptoms' => [
            ['value' => 'Weakness in affected limb'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Muscle wasting'],
            ['value' => 'Loss of sensation'],
            ['value' => 'Reduced limb function'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Incomplete nerve recovery'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
            ['value' => 'Persistent weakness'],
            ['value' => 'Chronic nerve pain'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend physiotherapy sessions regularly'],
            ['value' => 'Protect the operated limb carefully'],
            ['value' => 'Follow rehabilitation exercises consistently'],
            ['value' => 'Monitor for changes in sensation or strength'],
            ['value' => 'Attend scheduled follow-up evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Incomplete nerve recovery'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
            ['value' => 'Persistent weakness'],
            ['value' => 'Chronic nerve pain'],
        ],
                'long_term_outlook' => 'Peripheral nerve repair can improve functional recovery and sensation over time. Long-term outcomes depend on injury severity, timing of surgery, and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Peripheral Nerve Repair Surgery',
                'seo_description' => 'Peripheral nerve repair surgery is a neurosurgical procedure performed to restore function in damaged or severed peripheral nerves. The surgery helps improve movement, sensation, and muscle control following nerve injury. Microsurgical techniques are commonly used for precise nerve repair.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
