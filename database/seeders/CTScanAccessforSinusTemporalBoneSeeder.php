<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTScanAccessforSinusTemporalBoneSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CT Scan Access for Sinus & Temporal Bone')],
            [
                'title' => 'CT Scan Access for Sinus & Temporal Bone',
                'slug' => Str::slug('CT Scan Access for Sinus & Temporal Bone'),
                'introduction' => 'CT scan access for sinus and temporal bone evaluation provides advanced imaging support for diagnosing disorders affecting the sinuses, middle ear, mastoid bone, and surrounding structures. CT imaging offers detailed visualization of bone anatomy and disease involvement. It is essential for ENT diagnosis, surgical planning, and emergency evaluation.',
                'what_is' => 'CT scans help evaluate: Chronic sinusitis Nasal polyps Skull base abnormalities Temporal bone infections Cholesteatoma Ear trauma Hearing-related structural abnormalities High-resolution imaging improves surgical planning for sinus and ear procedures. The scan is quick, painless, and widely used in both adults and children when necessary.',
                'symptoms' => [
            ['value' => 'Chronic sinus blockage'],
            ['value' => 'Recurrent ear infections'],
            ['value' => 'Hearing loss'],
            ['value' => 'Facial pain or swelling'],
            ['value' => 'Suspected bone-related ENT disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Radiation exposure'],
            ['value' => 'Contrast-related allergic reactions if contrast is used'],
            ['value' => 'Anxiety in claustrophobic patients'],
            ['value' => 'Need for sedation in some children'],
            ['value' => 'Rare imaging-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow ENT treatment recommendations carefully'],
            ['value' => 'Drink adequate fluids after contrast studies if advised'],
            ['value' => 'Attend follow-up consultations regularly'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Report any delayed allergic symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Radiation exposure'],
            ['value' => 'Contrast-related allergic reactions if contrast is used'],
            ['value' => 'Anxiety in claustrophobic patients'],
            ['value' => 'Need for sedation in some children'],
            ['value' => 'Rare imaging-related complications'],
        ],
                'long_term_outlook' => 'CT imaging improves diagnostic precision and treatment planning, leading to better surgical outcomes and long-term ENT disease management.',
                'conclusion' => '',
                'seo_title' => 'CT Scan Access for Sinus & Temporal Bone',
                'seo_description' => 'CT scan access for sinus and temporal bone evaluation provides advanced imaging support for diagnosing disorders affecting the sinuses, middle ear, mastoid bone, and surrounding structures. CT imaging offers detailed visualization of bone anatomy and disease involvement. It is essential for ENT diagnosis, surgical planning, and emergency evaluation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
