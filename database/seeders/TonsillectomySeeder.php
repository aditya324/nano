<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TonsillectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tonsillectomy')],
            [
                'title' => 'Tonsillectomy',
                'slug' => Str::slug('Tonsillectomy'),
                'introduction' => 'Tonsillectomy is a surgical procedure performed to remove the tonsils, which are lymphoid tissues located at the back of the throat. The surgery is commonly recommended for recurrent tonsillitis, enlarged tonsils causing breathing difficulty, sleep apnea, or chronic throat infections. It helps improve throat health, breathing, swallowing, and sleep quality.',
                'what_is' => 'The procedure is usually performed under general anesthesia through the mouth without external cuts. The ENT surgeon removes the tonsils using specialized surgical instruments, electrocautery, coblation, or other advanced techniques. Tonsillectomy may be recommended for: Recurrent throat infections Enlarged tonsils causing obstruction Sleep-disordered breathing Recurrent tonsil abscess Difficulty swallowing due to enlarged tonsils The surgery is commonly performed in children but may also be required in adults.',
                'symptoms' => [
            ['value' => 'Recurrent sore throat'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Snoring or sleep apnea'],
            ['value' => 'Fever with throat infections'],
            ['value' => 'Enlarged tonsils causing breathing difficulty'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding after surgery'],
            ['value' => 'Throat pain during recovery'],
            ['value' => 'Infection'],
            ['value' => 'Dehydration due to painful swallowing'],
            ['value' => 'Temporary voice changes'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Eat soft and cool foods initially'],
            ['value' => 'Avoid spicy or hard foods temporarily'],
            ['value' => 'Take prescribed pain medications regularly'],
            ['value' => 'Monitor for bleeding or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding after surgery'],
            ['value' => 'Throat pain during recovery'],
            ['value' => 'Infection'],
            ['value' => 'Dehydration due to painful swallowing'],
            ['value' => 'Temporary voice changes'],
        ],
                'long_term_outlook' => 'Tonsillectomy significantly reduces recurrent throat infections and improves breathing and sleep quality. Most patients experience long-term relief and improved overall health.',
                'conclusion' => '',
                'seo_title' => 'Tonsillectomy',
                'seo_description' => 'Tonsillectomy is a surgical procedure performed to remove the tonsils, which are lymphoid tissues located at the back of the throat. The surgery is commonly recommended for recurrent tonsillitis, enlarged tonsils causing breathing difficulty, sleep apnea, or chronic throat infections. It helps improve throat health, breathing, swallowing, and sleep quality.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
