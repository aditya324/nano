<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PacemakerICDImplantationFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pacemaker / ICD Implantation Facility')],
            [
                'title' => 'Pacemaker / ICD Implantation Facility',
                'slug' => Str::slug('Pacemaker / ICD Implantation Facility'),
                'introduction' => 'A Pacemaker and ICD Implantation Facility is a specialized cardiac unit designed for safe implantation and monitoring of cardiac rhythm management devices. The facility supports treatment for patients with rhythm disorders and sudden cardiac arrest risk. Advanced monitoring systems and sterile procedural environments are essential components of the facility.',
                'what_is' => 'The facility provides: Pacemaker implantation ICD implantation Device programming Device follow-up monitoring Emergency rhythm management The procedures are performed using imaging guidance and specialized cardiac equipment. Highly trained cardiology and electrophysiology teams manage patient care before, during, and after implantation.',
                'symptoms' => [
            ['value' => 'Slow heart rate'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Syncope or fainting'],
            ['value' => 'Severe heart failure'],
            ['value' => 'Risk of sudden cardiac arrest'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Device-related infection'],
            ['value' => 'Bleeding or swelling'],
            ['value' => 'Lead displacement'],
            ['value' => 'Device malfunction'],
            ['value' => 'Psychological anxiety about device therapy'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular device check-ups'],
            ['value' => 'Avoid heavy arm movement temporarily'],
            ['value' => 'Keep the implantation area clean and dry'],
            ['value' => 'Report shocks or dizziness immediately'],
            ['value' => 'Carry device identification information'],
        ],
                'surgery_risks' => [
            ['value' => 'Device-related infection'],
            ['value' => 'Bleeding or swelling'],
            ['value' => 'Lead displacement'],
            ['value' => 'Device malfunction'],
            ['value' => 'Psychological anxiety about device therapy'],
        ],
                'long_term_outlook' => 'Specialized device implantation facilities improve patient safety, enhance arrhythmia management, and reduce mortality associated with cardiac rhythm disorders.',
                'conclusion' => '',
                'seo_title' => 'Pacemaker / ICD Implantation Facility',
                'seo_description' => 'A Pacemaker and ICD Implantation Facility is a specialized cardiac unit designed for safe implantation and monitoring of cardiac rhythm management devices. The facility supports treatment for patients with rhythm disorders and sudden cardiac arrest risk. Advanced monitoring systems and sterile procedural environments are essential components of the facility.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
