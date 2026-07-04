<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CalciumChannelBlockersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Calcium Channel Blockers')],
            [
                'title' => 'Calcium Channel Blockers',
                'slug' => Str::slug('Calcium Channel Blockers'),
                'introduction' => 'Calcium channel blockers are medications that relax blood vessels and reduce heart workload by affecting calcium movement in the heart and blood vessel walls. They are commonly used to treat hypertension, angina, and certain arrhythmias. These medications improve blood flow and reduce cardiovascular stress.',
                'what_is' => 'Common calcium channel blockers include: Amlodipine Diltiazem Verapamil Nifedipine They are used for: High blood pressure Chest pain (angina) Coronary artery spasm Certain irregular heart rhythms The therapy improves oxygen supply to the heart and lowers blood pressure effectively.',
                'symptoms' => [
            ['value' => 'Elevated blood pressure'],
            ['value' => 'Chest pain during exertion'],
            ['value' => 'Palpitations'],
            ['value' => 'Coronary artery disease symptoms'],
            ['value' => 'Vascular spasms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Swelling of legs or ankles'],
            ['value' => 'Dizziness'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Constipation with some medications'],
            ['value' => 'Slow heart rate in certain patients'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications regularly as prescribed'],
            ['value' => 'Monitor blood pressure consistently'],
            ['value' => 'Reduce excessive salt intake'],
            ['value' => 'Attend follow-up cardiac evaluations'],
            ['value' => 'Report persistent swelling or dizziness promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Swelling of legs or ankles'],
            ['value' => 'Dizziness'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Constipation with some medications'],
            ['value' => 'Slow heart rate in certain patients'],
        ],
                'long_term_outlook' => 'Calcium channel blockers help improve blood pressure control, reduce angina symptoms, and support long-term cardiovascular stability.',
                'conclusion' => '',
                'seo_title' => 'Calcium Channel Blockers',
                'seo_description' => 'Calcium channel blockers are medications that relax blood vessels and reduce heart workload by affecting calcium movement in the heart and blood vessel walls. They are commonly used to treat hypertension, angina, and certain arrhythmias. These medications improve blood flow and reduce cardiovascular stress.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
