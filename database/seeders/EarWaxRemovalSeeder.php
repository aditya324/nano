<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EarWaxRemovalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ear Wax Removal')],
            [
                'title' => 'Ear Wax Removal',
                'slug' => Str::slug('Ear Wax Removal'),
                'introduction' => 'Ear wax removal is a medical ENT procedure performed to safely clear excessive or impacted ear wax from the ear canal. Ear wax normally protects the ear, but excessive buildup can cause hearing problems, discomfort, infection, and blockage. Professional removal prevents damage that may occur from self-cleaning attempts.',
                'what_is' => 'The ENT specialist evaluates the ear canal using an otoscope or microscope before selecting the safest removal technique. Methods may include suction cleaning, irrigation, or specialized instruments depending on the consistency and location of the wax. The procedure improves hearing and relieves symptoms caused by impacted wax. It is commonly performed in outpatient ENT clinics and usually takes only a short time. Ear wax removal is especially important for: Hearing aid users Elderly patients Recurrent wax buildup Children with ear blockage symptoms Patients with narrow ear canals',
                'symptoms' => [
            ['value' => 'Ear blockage sensation'],
            ['value' => 'Temporary hearing loss'],
            ['value' => 'Ear discomfort or itching'],
            ['value' => 'Ringing in the ear'],
            ['value' => 'Dizziness or balance disturbance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Ear canal irritation'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Infection risk if improperly performed'],
            ['value' => 'Rare eardrum injury'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid inserting cotton buds into the ear'],
            ['value' => 'Keep the ears dry temporarily if advised'],
            ['value' => 'Use ear drops if prescribed'],
            ['value' => 'Attend repeat cleaning if necessary'],
            ['value' => 'Monitor for pain or discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Ear canal irritation'],
            ['value' => 'Temporary dizziness'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Infection risk if improperly performed'],
            ['value' => 'Rare eardrum injury'],
        ],
                'long_term_outlook' => 'Professional ear wax removal improves hearing comfort and reduces the risk of recurrent blockage or infection. Proper ear care helps maintain long-term ear health.',
                'conclusion' => '',
                'seo_title' => 'Ear Wax Removal',
                'seo_description' => 'Ear wax removal is a medical ENT procedure performed to safely clear excessive or impacted ear wax from the ear canal. Ear wax normally protects the ear, but excessive buildup can cause hearing problems, discomfort, infection, and blockage. Professional removal prevents damage that may occur from self-cleaning attempts.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
