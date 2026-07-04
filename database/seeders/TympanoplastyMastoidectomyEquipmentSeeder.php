<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TympanoplastyMastoidectomyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tympanoplasty & Mastoidectomy Equipment')],
            [
                'title' => 'Tympanoplasty & Mastoidectomy Equipment',
                'slug' => Str::slug('Tympanoplasty & Mastoidectomy Equipment'),
                'introduction' => 'Tympanoplasty and mastoidectomy equipment includes specialized ENT surgical instruments and systems used for repairing the eardrum and treating mastoid bone disease. The equipment supports advanced ear surgeries aimed at restoring hearing and controlling chronic infections. Modern surgical systems improve safety and precision during ear operations.',
                'what_is' => 'The setup commonly includes: Operating microscope Microsurgical instruments Suction-irrigation systems High-speed drills Endoscopic support systems Grafting materials The equipment is used for: Chronic ear infection surgery Cholesteatoma treatment Eardrum repair Mastoid bone surgery Hearing restoration procedures Advanced technology improves visualization and surgical outcomes.',
                'symptoms' => [
            ['value' => 'Persistent ear discharge'],
            ['value' => 'Hearing loss'],
            ['value' => 'Chronic middle ear infection'],
            ['value' => 'Ear pain or swelling'],
            ['value' => 'Cholesteatoma-related symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Hearing deterioration'],
            ['value' => 'Facial nerve injury'],
            ['value' => 'Dizziness or balance disturbance'],
            ['value' => 'Recurrence of ear disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the ear protected from water exposure'],
            ['value' => 'Attend scheduled ear dressing and cleaning appointments'],
            ['value' => 'Use medications regularly'],
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Report fever or worsening ear discharge promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Hearing deterioration'],
            ['value' => 'Facial nerve injury'],
            ['value' => 'Dizziness or balance disturbance'],
            ['value' => 'Recurrence of ear disease'],
        ],
                'long_term_outlook' => 'Advanced tympanoplasty and mastoidectomy systems improve infection control, hearing preservation, and long-term ear health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Tympanoplasty & Mastoidectomy Equipment',
                'seo_description' => 'Tympanoplasty and mastoidectomy equipment includes specialized ENT surgical instruments and systems used for repairing the eardrum and treating mastoid bone disease. The equipment supports advanced ear surgeries aimed at restoring hearing and controlling chronic infections. Modern surgical systems improve safety and precision during ear operations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
