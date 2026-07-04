<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GIBleedControlEndoscopicSurgicalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('GI Bleed Control (Endoscopic/Surgical)')],
            [
                'title' => 'GI Bleed Control (Endoscopic/Surgical)',
                'slug' => Str::slug('GI Bleed Control (Endoscopic/Surgical)'),
                'introduction' => 'Gastrointestinal (GI) bleed control involves emergency treatment to stop bleeding within the digestive tract using endoscopic or surgical methods. Prompt treatment is essential to prevent severe blood loss and shock.',
                'what_is' => 'GI bleeding may occur due to: Peptic ulcers Varices Tumors Diverticular disease Trauma Management options include: Endoscopic cauterization Injection therapy Clipping procedures Surgical bleeding control Blood transfusion support Emergency stabilization and monitoring are critical in severe bleeding cases.',
                'symptoms' => [
            ['value' => 'Vomiting blood'],
            ['value' => 'Black or bloody stools'],
            ['value' => 'Severe weakness or dizziness'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Abdominal pain or collapse'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Massive blood loss'],
            ['value' => 'Shock and organ failure'],
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Infection or perforation'],
            ['value' => 'Need for emergency surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Take ulcer or bleeding-control medications regularly'],
            ['value' => 'Avoid alcohol and NSAID medications if advised'],
            ['value' => 'Attend follow-up endoscopy appointments'],
            ['value' => 'Monitor for recurrent bleeding symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Massive blood loss'],
            ['value' => 'Shock and organ failure'],
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Infection or perforation'],
            ['value' => 'Need for emergency surgery'],
        ],
                'long_term_outlook' => 'Timely control of GI bleeding improves survival, prevents recurrence, and supports long-term digestive system stability and recovery.',
                'conclusion' => '',
                'seo_title' => 'GI Bleed Control (Endoscopic/Surgical)',
                'seo_description' => 'Gastrointestinal (GI) bleed control involves emergency treatment to stop bleeding within the digestive tract using endoscopic or surgical methods. Prompt treatment is essential to prevent severe blood loss and shock.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
