<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OperatingMicroscopeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Operating Microscope')],
            [
                'title' => 'Operating Microscope',
                'slug' => Str::slug('Operating Microscope'),
                'introduction' => 'An operating microscope is a high-precision surgical visualization system used during neurosurgical procedures to magnify delicate brain, spine, and nerve structures. The microscope allows surgeons to perform highly accurate microsurgical procedures while minimizing injury to surrounding tissues. It is an essential tool in modern neurosurgery.',
                'what_is' => 'The system provides: High-magnification surgical views Enhanced illumination Deep tissue visualization Microsurgical precision Improved anatomical detail Operating microscopes are commonly used in: Brain tumor surgery Vascular neurosurgery Spine surgery Peripheral nerve surgery Skull base surgery Advanced microscopes may also integrate imaging and navigation technologies.',
                'symptoms' => [
            ['value' => 'Brain tumors'],
            ['value' => 'Aneurysms'],
            ['value' => 'Nerve compression disorders'],
            ['value' => 'Spinal abnormalities'],
            ['value' => 'Cranial nerve conditions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Equipment malfunction'],
            ['value' => 'Prolonged surgical time'],
            ['value' => 'Technical visualization limitations'],
            ['value' => 'Surgical fatigue'],
            ['value' => 'Bleeding complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue neurological monitoring'],
            ['value' => 'Attend imaging follow-up appointments'],
            ['value' => 'Participate in rehabilitation if advised'],
            ['value' => 'Monitor wound healing carefully'],
            ['value' => 'Follow medication instructions properly'],
        ],
                'surgery_risks' => [
            ['value' => 'Equipment malfunction'],
            ['value' => 'Prolonged surgical time'],
            ['value' => 'Technical visualization limitations'],
            ['value' => 'Surgical fatigue'],
            ['value' => 'Bleeding complications'],
        ],
                'long_term_outlook' => 'Operating microscopes improve surgical accuracy and preservation of neurological function. Their use contributes to safer neurosurgical procedures and improved patient outcomes.',
                'conclusion' => '',
                'seo_title' => 'Operating Microscope',
                'seo_description' => 'An operating microscope is a high-precision surgical visualization system used during neurosurgical procedures to magnify delicate brain, spine, and nerve structures. The microscope allows surgeons to perform highly accurate microsurgical procedures while minimizing injury to surrounding tissues. It is an essential tool in modern neurosurgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
