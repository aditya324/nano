<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarotidEndarterectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Carotid Endarterectomy')],
            [
                'title' => 'Carotid Endarterectomy',
                'slug' => Str::slug('Carotid Endarterectomy'),
                'introduction' => 'Carotid endarterectomy is surgery to remove plaque buildup from the carotid artery and reduce stroke risk.',
                'what_is' => 'The procedure restores blood flow to the brain in patients with significant carotid artery narrowing.',
                'symptoms' => [
            ['value' => 'TIA'],
            ['value' => 'Stroke symptoms'],
            ['value' => 'Vision loss'],
            ['value' => 'Weakness'],
            ['value' => 'Slurred speech'],
        ],
                'causes' => [
            ['value' => 'Carotid artery stenosis'],
            ['value' => 'Atherosclerosis'],
            ['value' => 'High cholesterol'],
            ['value' => 'Hypertension'],
            ['value' => 'Smoking'],
            ['value' => 'Diabetes'],
        ],
                'condition_risks' => [
            ['value' => 'Stroke'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Recurrent narrowing'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'The surgeon opens the carotid artery, removes plaque deposits, and repairs the artery to improve cerebral circulation.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Neurological monitoring'],
            ['value' => 'BP control'],
            ['value' => 'Antiplatelet therapy'],
            ['value' => 'Doppler follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve injury'],
            ['value' => 'Recurrent narrowing'],
        ],
                'long_term_outlook' => 'The procedure effectively lowers stroke risk and improves long-term cerebral blood flow.',
                'conclusion' => '',
                'seo_title' => 'Carotid Endarterectomy',
                'seo_description' => 'Carotid endarterectomy is surgery to remove plaque buildup from the carotid artery and reduce stroke risk.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
