<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaminectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laminectomy')],
            [
                'title' => 'Laminectomy',
                'slug' => Str::slug('Laminectomy'),
                'introduction' => 'Laminectomy is a spinal decompression surgery in which part of the vertebral bone called the lamina is removed to relieve pressure on the spinal cord or nerves. The procedure is commonly performed for spinal stenosis and severe nerve compression. It helps improve mobility and reduce neurological symptoms.',
                'what_is' => 'The surgery may include: Removal of lamina bone Enlargement of spinal canal space Nerve decompression Removal of thickened ligaments or bone spurs Conditions treated include: Spinal stenosis Degenerative spinal disease Nerve compression Spinal tumors The procedure may be combined with spinal stabilization if necessary.',
                'symptoms' => [
            ['value' => 'Chronic back pain'],
            ['value' => 'Leg weakness'],
            ['value' => 'Numbness in limbs'],
            ['value' => 'Difficulty standing or walking'],
            ['value' => 'Balance problems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Spinal instability'],
            ['value' => 'Nerve damage'],
            ['value' => 'Persistent symptoms'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow spinal rehabilitation programs'],
            ['value' => 'Avoid heavy activities during recovery'],
            ['value' => 'Maintain correct posture'],
            ['value' => 'Continue prescribed medications'],
            ['value' => 'Attend follow-up spine evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Spinal instability'],
            ['value' => 'Nerve damage'],
            ['value' => 'Persistent symptoms'],
        ],
                'long_term_outlook' => 'Laminectomy improves nerve decompression and mobility in many spinal disorders. Long-term success depends on rehabilitation and spinal health maintenance.',
                'conclusion' => '',
                'seo_title' => 'Laminectomy',
                'seo_description' => 'Laminectomy is a spinal decompression surgery in which part of the vertebral bone called the lamina is removed to relieve pressure on the spinal cord or nerves. The procedure is commonly performed for spinal stenosis and severe nerve compression. It helps improve mobility and reduce neurological symptoms.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
