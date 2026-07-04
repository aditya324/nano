<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PoplitealArteryEntrapmentReleaseSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Popliteal Artery Entrapment Release')],
            [
                'title' => 'Popliteal Artery Entrapment Release',
                'slug' => Str::slug('Popliteal Artery Entrapment Release'),
                'introduction' => 'This surgical procedure relieves abnormal compression of the popliteal artery behind the knee.',
                'what_is' => 'The surgery restores normal blood flow and prevents progressive artery damage.',
                'symptoms' => [
            ['value' => 'Leg pain during exercise'],
            ['value' => 'Cramping'],
            ['value' => 'Cold foot'],
            ['value' => 'Reduced pulses'],
            ['value' => 'Numbness'],
        ],
                'causes' => [
            ['value' => 'Congenital muscle abnormalities'],
            ['value' => 'Repetitive athletic strain'],
            ['value' => 'Abnormal tendon positioning'],
        ],
                'condition_risks' => [
            ['value' => 'Persistent symptoms'],
            ['value' => 'Arterial damage'],
            ['value' => 'Blood clots'],
            ['value' => 'Recurrent compression'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Surgery involves releasing the compressing muscle or tendon around the artery and repairing damaged vessels if necessary.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Physiotherapy'],
            ['value' => 'Walking rehabilitation'],
            ['value' => 'Vascular imaging follow-up'],
            ['value' => 'Gradual return to activity'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent symptoms'],
            ['value' => 'Arterial damage'],
            ['value' => 'Blood clots'],
            ['value' => 'Recurrent compression'],
        ],
                'long_term_outlook' => 'Most patients recover well with restored circulation and improved exercise tolerance.',
                'conclusion' => '',
                'seo_title' => 'Popliteal Artery Entrapment Release',
                'seo_description' => 'This surgical procedure relieves abnormal compression of the popliteal artery behind the knee.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
