<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TesticularExplorationTorsionRepairSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Testicular Exploration & Torsion Repair')],
            [
                'title' => 'Testicular Exploration & Torsion Repair',
                'slug' => Str::slug('Testicular Exploration & Torsion Repair'),
                'introduction' => 'Testicular exploration and torsion repair are emergency surgical procedures performed to restore blood supply to a twisted testicle and prevent permanent damage. Testicular torsion is a surgical emergency requiring immediate treatment.',
                'what_is' => 'Testicular torsion occurs when the spermatic cord twists and cuts off blood flow to the testicle. The surgery involves: Untwisting the affected testicle Restoring blood circulation Fixing the testicle in place (orchidopexy) Often securing the opposite testicle preventively Delayed treatment can lead to testicular loss and fertility complications.',
                'symptoms' => [
            ['value' => 'Sudden severe scrotal pain'],
            ['value' => 'Swelling of the scrotum'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'High-riding or abnormal testicle position'],
            ['value' => 'Fever in delayed cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Loss of testicular function'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Reduced fertility'],
            ['value' => 'Recurrence if untreated early'],
            ['value' => 'Chronic pain complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Wear scrotal support garments if advised'],
            ['value' => 'Maintain wound hygiene carefully'],
            ['value' => 'Take pain medications as prescribed'],
            ['value' => 'Attend urology follow-up appointments regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Loss of testicular function'],
            ['value' => 'Infection or bleeding'],
            ['value' => 'Reduced fertility'],
            ['value' => 'Recurrence if untreated early'],
            ['value' => 'Chronic pain complications'],
        ],
                'long_term_outlook' => 'Early surgery usually preserves testicular function and fertility, while delayed treatment may result in permanent testicular damage.',
                'conclusion' => '',
                'seo_title' => 'Testicular Exploration & Torsion Repair',
                'seo_description' => 'Testicular exploration and torsion repair are emergency surgical procedures performed to restore blood supply to a twisted testicle and prevent permanent damage. Testicular torsion is a surgical emergency requiring immediate treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
