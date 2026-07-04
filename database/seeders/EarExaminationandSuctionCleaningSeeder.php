<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EarExaminationandSuctionCleaningSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ear Examination and Suction Cleaning')],
            [
                'title' => 'Ear Examination and Suction Cleaning',
                'slug' => Str::slug('Ear Examination and Suction Cleaning'),
                'introduction' => 'Ear examination and suction cleaning is a specialized ENT procedure used to inspect and clean the ear canal safely using medical suction equipment under direct visualization. The procedure removes wax, discharge, debris, fungal material, or infected secretions while preserving the delicate structures of the ear. It improves hearing, relieves discomfort, and supports treatment of ear infections and blockages.',
                'what_is' => 'The ENT specialist examines the ear canal and eardrum using an otoscope or microscope to identify wax buildup, infection, perforation, or foreign material. A controlled suction device is then used to gently remove debris or discharge from the ear canal. Microscopic visualization allows precise cleaning with minimal trauma to the ear. The procedure may also include medication placement or collection of samples for infection testing. Ear suction cleaning is commonly performed for: Ear infections Fungal ear disease Excessive ear wax Ear discharge Blocked ears causing hearing difficulty The procedure is generally quick and performed on an outpatient basis.',
                'symptoms' => [
            ['value' => 'Ear blockage or fullness'],
            ['value' => 'Reduced hearing'],
            ['value' => 'Ear discharge'],
            ['value' => 'Ear itching or discomfort'],
            ['value' => 'Ringing sensation in the ear'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild temporary dizziness'],
            ['value' => 'Ear canal irritation'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Temporary sensitivity to sound'],
            ['value' => 'Rare injury to the ear canal or eardrum'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the ear dry as advised'],
            ['value' => 'Avoid inserting objects into the ear'],
            ['value' => 'Use prescribed ear drops regularly'],
            ['value' => 'Attend follow-up examinations if needed'],
            ['value' => 'Report pain or persistent discharge promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild temporary dizziness'],
            ['value' => 'Ear canal irritation'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Temporary sensitivity to sound'],
            ['value' => 'Rare injury to the ear canal or eardrum'],
        ],
                'long_term_outlook' => 'Regular ear examination and cleaning help maintain ear hygiene, improve hearing, and reduce recurrent infections or blockage-related complications.',
                'conclusion' => '',
                'seo_title' => 'Ear Examination and Suction Cleaning',
                'seo_description' => 'Ear examination and suction cleaning is a specialized ENT procedure used to inspect and clean the ear canal safely using medical suction equipment under direct visualization. The procedure removes wax, discharge, debris, fungal material, or infected secretions while preserving the delicate structures of the ear. It improves hearing, relieves discomfort, and supports treatment of ear infections and blockages.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
