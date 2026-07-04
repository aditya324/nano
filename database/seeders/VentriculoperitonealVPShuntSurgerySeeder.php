<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VentriculoperitonealVPShuntSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ventriculoperitoneal (VP) Shunt Surgery')],
            [
                'title' => 'Ventriculoperitoneal (VP) Shunt Surgery',
                'slug' => Str::slug('Ventriculoperitoneal (VP) Shunt Surgery'),
                'introduction' => 'Ventriculoperitoneal (VP) shunt surgery is a neurosurgical procedure used to treat hydrocephalus by diverting excess cerebrospinal fluid (CSF) from the brain to the abdominal cavity. The procedure helps relieve pressure inside the brain and prevents complications caused by fluid accumulation. VP shunts are commonly used in both children and adults.',
                'what_is' => 'The surgery involves: Placement of a catheter into the brain ventricles Connection to a valve system Diversion of fluid to the abdomen Regulation of CSF drainage VP shunts help treat: Hydrocephalus Increased intracranial pressure Congenital CSF disorders Brain fluid obstruction Patients require long-term monitoring because shunt systems may occasionally malfunction or become infected.',
                'symptoms' => [
            ['value' => 'Enlarged head in infants'],
            ['value' => 'Headache'],
            ['value' => 'Vomiting'],
            ['value' => 'Vision problems'],
            ['value' => 'Balance or walking difficulty'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Shunt blockage'],
            ['value' => 'Infection'],
            ['value' => 'Over-drainage of CSF'],
            ['value' => 'Seizures'],
            ['value' => 'Need for repeat surgery'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor for fever or headache'],
            ['value' => 'Attend regular neurosurgical follow-up visits'],
            ['value' => 'Watch for signs of shunt malfunction'],
            ['value' => 'Avoid head injury'],
            ['value' => 'Continue rehabilitation if advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Shunt blockage'],
            ['value' => 'Infection'],
            ['value' => 'Over-drainage of CSF'],
            ['value' => 'Seizures'],
            ['value' => 'Need for repeat surgery'],
        ],
                'long_term_outlook' => 'VP shunt surgery effectively controls hydrocephalus and improves neurological function. Long-term follow-up is essential to monitor shunt performance and neurological health.',
                'conclusion' => '',
                'seo_title' => 'Ventriculoperitoneal (VP) Shunt Surgery',
                'seo_description' => 'Ventriculoperitoneal (VP) shunt surgery is a neurosurgical procedure used to treat hydrocephalus by diverting excess cerebrospinal fluid (CSF) from the brain to the abdominal cavity. The procedure helps relieve pressure inside the brain and prevents complications caused by fluid accumulation. VP shunts are commonly used in both children and adults.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
