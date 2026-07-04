<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TonsillectomyAdenoidectomyInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tonsillectomy & Adenoidectomy Instruments')],
            [
                'title' => 'Tonsillectomy & Adenoidectomy Instruments',
                'slug' => Str::slug('Tonsillectomy & Adenoidectomy Instruments'),
                'introduction' => 'Tonsillectomy and adenoidectomy instruments are specialized surgical tools used for removing the tonsils and adenoids in patients with recurrent infections or airway obstruction. These instrument sets support safe and precise ENT surgery in both children and adults. They are essential components of pediatric and general ENT surgical care.',
                'what_is' => 'The instrument sets may include: Mouth gags Tonsil holding forceps Dissectors Suction cautery devices Adenoid curettes Hemostatic instruments The equipment is used for: Recurrent tonsillitis Enlarged adenoids Sleep apnea Breathing difficulty Chronic throat infections Modern surgical tools improve efficiency, reduce bleeding, and enhance patient safety during surgery.',
                'symptoms' => [
            ['value' => 'Recurrent throat infections'],
            ['value' => 'Snoring or sleep apnea'],
            ['value' => 'Difficulty breathing through the nose'],
            ['value' => 'Enlarged tonsils or adenoids'],
            ['value' => 'Frequent ear infections in children'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding after surgery'],
            ['value' => 'Infection'],
            ['value' => 'Pain during swallowing'],
            ['value' => 'Temporary voice changes'],
            ['value' => 'Dehydration due to poor oral intake'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Encourage adequate fluid intake'],
            ['value' => 'Provide soft and cool foods during recovery'],
            ['value' => 'Take prescribed pain medications regularly'],
            ['value' => 'Avoid strenuous activities temporarily'],
            ['value' => 'Seek medical attention for bleeding or fever'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding after surgery'],
            ['value' => 'Infection'],
            ['value' => 'Pain during swallowing'],
            ['value' => 'Temporary voice changes'],
            ['value' => 'Dehydration due to poor oral intake'],
        ],
                'long_term_outlook' => 'Tonsillectomy and adenoidectomy improve breathing, reduce infections, and enhance sleep quality and overall health in many patients.',
                'conclusion' => '',
                'seo_title' => 'Tonsillectomy & Adenoidectomy Instruments',
                'seo_description' => 'Tonsillectomy and adenoidectomy instruments are specialized surgical tools used for removing the tonsils and adenoids in patients with recurrent infections or airway obstruction. These instrument sets support safe and precise ENT surgery in both children and adults. They are essential components of pediatric and general ENT surgical care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
