<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RaynaudsSurgicalInterventionsSympathectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Raynaud’s Surgical Interventions (Sympathectomy)')],
            [
                'title' => 'Raynaud’s Surgical Interventions (Sympathectomy)',
                'slug' => Str::slug('Raynaud’s Surgical Interventions (Sympathectomy)'),
                'introduction' => 'Sympathectomy is a surgical procedure used in severe Raynaud’s phenomenon to reduce excessive blood vessel spasm and improve circulation to the hands or feet.',
                'what_is' => 'The surgery is generally reserved for patients with severe pain, ulcers, or tissue damage that does not respond to medications and lifestyle measures.',
                'symptoms' => [
            ['value' => 'Finger color changes'],
            ['value' => 'Severe cold sensitivity'],
            ['value' => 'Finger pain'],
            ['value' => 'Ulcer formation'],
            ['value' => 'Numbness'],
            ['value' => 'Tissue damage in severe disease'],
        ],
                'causes' => [
            ['value' => 'Severe Raynaud’s disease'],
            ['value' => 'Autoimmune disorders'],
            ['value' => 'Connective tissue diseases'],
            ['value' => 'Chronic vascular spasm'],
            ['value' => 'Smoking'],
            ['value' => 'Occupational vibration exposure'],
        ],
                'condition_risks' => [
            ['value' => 'Persistent symptoms'],
            ['value' => 'Infection'],
            ['value' => 'Nerve-related complications'],
            ['value' => 'Incomplete symptom relief'],
            ['value' => 'Recurrence of vasospasm'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'The procedure involves interrupting sympathetic nerves responsible for abnormal blood vessel constriction. This helps improve blood flow, reduce pain, and promote healing of ulcers or ischemic tissue.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Protect extremities from cold'],
            ['value' => 'Continue vascular medications'],
            ['value' => 'Maintain skin care'],
            ['value' => 'Avoid smoking'],
            ['value' => 'Follow-up vascular assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Persistent symptoms'],
            ['value' => 'Infection'],
            ['value' => 'Nerve-related complications'],
            ['value' => 'Incomplete symptom relief'],
            ['value' => 'Recurrence of vasospasm'],
        ],
                'long_term_outlook' => 'Many patients experience improved circulation and reduced pain after sympathectomy, though long-term management of underlying vascular disease remains important.',
                'conclusion' => '',
                'seo_title' => 'Raynaud’s Surgical Interventions (Sympathectomy)',
                'seo_description' => 'Sympathectomy is a surgical procedure used in severe Raynaud’s phenomenon to reduce excessive blood vessel spasm and improve circulation to the hands or feet.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
