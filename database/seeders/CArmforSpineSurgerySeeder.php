<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CArmforSpineSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('C-Arm for Spine Surgery')],
            [
                'title' => 'C-Arm for Spine Surgery',
                'slug' => Str::slug('C-Arm for Spine Surgery'),
                'introduction' => 'A C-Arm is a mobile fluoroscopic imaging system used during spine surgery to provide real-time X-ray guidance for accurate surgical positioning and implant placement. The system helps neurosurgeons visualize spinal anatomy during procedures and improves surgical precision. It is widely used in minimally invasive and complex spinal surgeries.',
                'what_is' => 'The C-Arm system supports: Real-time intraoperative imaging Implant positioning guidance Spinal alignment verification Minimally invasive surgery assistance Instrument placement monitoring The equipment is commonly used in: Spinal fusion surgery Fracture fixation Disc surgery Vertebroplasty and kyphoplasty Spinal instrumentation procedures Fluoroscopic guidance improves surgical accuracy and safety.',
                'symptoms' => [
            ['value' => 'Spinal fractures'],
            ['value' => 'Disc prolapse'],
            ['value' => 'Spinal instability'],
            ['value' => 'Nerve compression'],
            ['value' => 'Degenerative spine disorders'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Radiation exposure'],
            ['value' => 'Technical imaging limitations'],
            ['value' => 'Implant misplacement'],
            ['value' => 'Prolonged operative time'],
            ['value' => 'Surgical complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up spinal imaging evaluations'],
            ['value' => 'Follow spinal movement precautions'],
            ['value' => 'Continue physiotherapy if prescribed'],
            ['value' => 'Monitor wound healing regularly'],
            ['value' => 'Take medications as advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Radiation exposure'],
            ['value' => 'Technical imaging limitations'],
            ['value' => 'Implant misplacement'],
            ['value' => 'Prolonged operative time'],
            ['value' => 'Surgical complications'],
        ],
                'long_term_outlook' => 'C-Arm guidance improves accuracy in spinal procedures and supports safer surgery. Long-term outcomes improve with proper spinal stabilization and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'C-Arm for Spine Surgery',
                'seo_description' => 'A C-Arm is a mobile fluoroscopic imaging system used during spine surgery to provide real-time X-ray guidance for accurate surgical positioning and implant placement. The system helps neurosurgeons visualize spinal anatomy during procedures and improves surgical precision. It is widely used in minimally invasive and complex spinal surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
