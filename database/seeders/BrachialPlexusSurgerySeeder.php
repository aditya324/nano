<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrachialPlexusSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Brachial Plexus Surgery')],
            [
                'title' => 'Brachial Plexus Surgery',
                'slug' => Str::slug('Brachial Plexus Surgery'),
                'introduction' => 'Brachial plexus surgery is a specialized nerve reconstruction procedure performed to treat injuries affecting the network of nerves controlling the shoulder, arm, and hand. These injuries may occur due to trauma, birth injuries, or severe stretching of the nerves. The surgery aims to restore movement and sensation in the affected limb.',
                'what_is' => 'The procedure may include: Nerve grafting Nerve transfer surgery Microsurgical nerve repair Scar tissue release Functional reconstruction procedures Doctors evaluate: Extent of nerve injury Muscle function Sensory loss Limb movement impairment Long-term rehabilitation is essential after surgery to maximize recovery.',
                'symptoms' => [
            ['value' => 'Arm weakness or paralysis'],
            ['value' => 'Loss of sensation'],
            ['value' => 'Severe shoulder pain'],
            ['value' => 'Reduced hand movement'],
            ['value' => 'Muscle wasting'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Incomplete functional recovery'],
            ['value' => 'Persistent weakness'],
            ['value' => 'Chronic nerve pain'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue physiotherapy consistently'],
            ['value' => 'Protect the affected limb carefully'],
            ['value' => 'Attend regular neurological evaluations'],
            ['value' => 'Perform rehabilitation exercises daily'],
            ['value' => 'Monitor muscle recovery progress'],
        ],
                'surgery_risks' => [
            ['value' => 'Incomplete functional recovery'],
            ['value' => 'Persistent weakness'],
            ['value' => 'Chronic nerve pain'],
            ['value' => 'Infection'],
            ['value' => 'Scar tissue formation'],
        ],
                'long_term_outlook' => 'Brachial plexus surgery can improve arm and hand function in selected patients. Recovery may take months to years depending on nerve injury severity.',
                'conclusion' => '',
                'seo_title' => 'Brachial Plexus Surgery',
                'seo_description' => 'Brachial plexus surgery is a specialized nerve reconstruction procedure performed to treat injuries affecting the network of nerves controlling the shoulder, arm, and hand. These injuries may occur due to trauma, birth injuries, or severe stretching of the nerves. The surgery aims to restore movement and sensation in the affected limb.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
