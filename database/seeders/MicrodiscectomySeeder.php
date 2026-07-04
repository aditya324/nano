<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MicrodiscectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Microdiscectomy')],
            [
                'title' => 'Microdiscectomy',
                'slug' => Str::slug('Microdiscectomy'),
                'introduction' => 'Microdiscectomy is a minimally invasive spinal surgery performed to remove portions of a herniated spinal disc compressing nearby nerves. The procedure helps relieve severe leg pain, numbness, weakness, and nerve irritation caused by disc prolapse. Microsurgical techniques allow smaller incisions and faster recovery.',
                'what_is' => 'The surgery involves: Small skin incision Microsurgical visualization Removal of herniated disc fragments Nerve root decompression Preservation of healthy spinal structures Microdiscectomy is commonly performed for: Lumbar disc herniation Sciatica Nerve compression syndromes The procedure usually results in significant pain relief and improved mobility.',
                'symptoms' => [
            ['value' => 'Severe leg pain (sciatica)'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Muscle weakness'],
            ['value' => 'Back pain'],
            ['value' => 'Difficulty walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Disc recurrence'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
            ['value' => 'Spinal fluid leak'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid bending or lifting heavy objects'],
            ['value' => 'Attend physiotherapy regularly'],
            ['value' => 'Walk gradually as advised'],
            ['value' => 'Maintain proper posture'],
            ['value' => 'Follow medication instructions carefully'],
        ],
                'surgery_risks' => [
            ['value' => 'Disc recurrence'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury'],
            ['value' => 'Persistent pain'],
            ['value' => 'Spinal fluid leak'],
        ],
                'long_term_outlook' => 'Microdiscectomy provides excellent relief for nerve compression symptoms in many patients. Long-term outcomes improve with rehabilitation and spine care practices.',
                'conclusion' => '',
                'seo_title' => 'Microdiscectomy',
                'seo_description' => 'Microdiscectomy is a minimally invasive spinal surgery performed to remove portions of a herniated spinal disc compressing nearby nerves. The procedure helps relieve severe leg pain, numbness, weakness, and nerve irritation caused by disc prolapse. Microsurgical techniques allow smaller incisions and faster recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
