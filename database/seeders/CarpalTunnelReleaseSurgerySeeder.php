<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarpalTunnelReleaseSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Carpal Tunnel Release Surgery')],
            [
                'title' => 'Carpal Tunnel Release Surgery',
                'slug' => Str::slug('Carpal Tunnel Release Surgery'),
                'introduction' => 'Carpal tunnel release surgery is a minimally invasive nerve decompression procedure performed to relieve pressure on the median nerve at the wrist. The surgery helps reduce pain, numbness, tingling, and hand weakness caused by carpal tunnel syndrome. It is one of the most common peripheral nerve surgeries.',
                'what_is' => 'The procedure involves: Small incision at the wrist Release of the carpal tunnel ligament Decompression of the median nerve Restoration of nerve space The surgery may be performed using: Open surgical techniques Endoscopic methods Carpal tunnel release improves nerve function and hand comfort.',
                'symptoms' => [
            ['value' => 'Hand numbness'],
            ['value' => 'Tingling in fingers'],
            ['value' => 'Wrist pain'],
            ['value' => 'Weak grip strength'],
            ['value' => 'Night-time hand discomfort'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Scar tenderness'],
            ['value' => 'Persistent numbness'],
            ['value' => 'Nerve injury'],
            ['value' => 'Incomplete symptom relief'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the surgical site clean and dry'],
            ['value' => 'Avoid heavy hand activity temporarily'],
            ['value' => 'Perform hand exercises if advised'],
            ['value' => 'Attend follow-up appointments regularly'],
            ['value' => 'Monitor hand strength and sensation'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Scar tenderness'],
            ['value' => 'Persistent numbness'],
            ['value' => 'Nerve injury'],
            ['value' => 'Incomplete symptom relief'],
        ],
                'long_term_outlook' => 'Carpal tunnel release surgery provides significant symptom relief in most patients. Long-term outcomes are generally excellent with proper rehabilitation and hand care.',
                'conclusion' => '',
                'seo_title' => 'Carpal Tunnel Release Surgery',
                'seo_description' => 'Carpal tunnel release surgery is a minimally invasive nerve decompression procedure performed to relieve pressure on the median nerve at the wrist. The surgery helps reduce pain, numbness, tingling, and hand weakness caused by carpal tunnel syndrome. It is one of the most common peripheral nerve surgeries.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
