<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalSuturesStaplersMeshSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Surgical Sutures / Staplers / Mesh')],
            [
                'title' => 'Surgical Sutures / Staplers / Mesh',
                'slug' => Str::slug('Surgical Sutures / Staplers / Mesh'),
                'introduction' => 'Surgical sutures, staplers, and mesh are essential surgical materials used for wound closure, tissue repair, and reinforcement during various surgical procedures.',
                'what_is' => 'These materials are commonly used in: Hernia repair Gastrointestinal surgery Trauma surgery Skin closure Laparoscopic procedures Sutures help close tissues securely, while surgical staplers provide rapid closure during major procedures. Surgical mesh is used to strengthen weakened tissues, especially in hernia repair surgeries. Modern materials improve healing and reduce recurrence risk.',
                'symptoms' => [
            ['value' => 'Conditions requiring surgical tissue repair'],
            ['value' => 'Hernias or abdominal wall weakness'],
            ['value' => 'Traumatic wounds or lacerations'],
            ['value' => 'Gastrointestinal surgical procedures'],
            ['value' => 'Large surgical incisions needing closure'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection around surgical materials'],
            ['value' => 'Mesh rejection or chronic pain'],
            ['value' => 'Bleeding or wound breakdown'],
            ['value' => 'Staple or suture irritation'],
            ['value' => 'Rare recurrence after repair'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain wound hygiene carefully'],
            ['value' => 'Avoid heavy lifting after surgery'],
            ['value' => 'Monitor for swelling or redness'],
            ['value' => 'Attend scheduled wound evaluations'],
            ['value' => 'Follow activity restrictions advised by surgeons'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection around surgical materials'],
            ['value' => 'Mesh rejection or chronic pain'],
            ['value' => 'Bleeding or wound breakdown'],
            ['value' => 'Staple or suture irritation'],
            ['value' => 'Rare recurrence after repair'],
        ],
                'long_term_outlook' => 'Modern surgical closure materials provide durable repair, improve wound healing, reduce recurrence risk, and support successful long-term surgical recovery.',
                'conclusion' => '',
                'seo_title' => 'Surgical Sutures / Staplers / Mesh',
                'seo_description' => 'Surgical sutures, staplers, and mesh are essential surgical materials used for wound closure, tissue repair, and reinforcement during various surgical procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
