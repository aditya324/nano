<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopyColonoscopyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopy / Colonoscopy Equipment')],
            [
                'title' => 'Endoscopy / Colonoscopy Equipment',
                'slug' => Str::slug('Endoscopy / Colonoscopy Equipment'),
                'introduction' => 'Endoscopy and colonoscopy equipment are advanced diagnostic and therapeutic systems used to examine the digestive tract using flexible camera-guided instruments. These procedures help diagnose and treat gastrointestinal diseases with minimal invasiveness.',
                'what_is' => 'The equipment includes: Flexible endoscopes Camera and monitor systems Light sources Biopsy instruments Therapeutic accessories Common uses include: Ulcer evaluation Colon cancer screening Polyp removal GI bleeding diagnosis Foreign body removal These procedures allow early disease detection and reduce the need for major surgery in many cases.',
                'symptoms' => [
            ['value' => 'Abdominal pain or bloating'],
            ['value' => 'Rectal bleeding or blood in stool'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chronic digestive symptoms'],
            ['value' => 'Unexplained weight loss or anemia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding after biopsy or polyp removal'],
            ['value' => 'Perforation of digestive tract'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Temporary abdominal discomfort'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary instructions after procedure'],
            ['value' => 'Avoid heavy activity immediately after sedation'],
            ['value' => 'Monitor for bleeding or severe pain'],
            ['value' => 'Attend follow-up evaluations if biopsies were taken'],
            ['value' => 'Maintain hydration after the procedure'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding after biopsy or polyp removal'],
            ['value' => 'Perforation of digestive tract'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Temporary abdominal discomfort'],
        ],
                'long_term_outlook' => 'Endoscopy and colonoscopy improve early diagnosis, support minimally invasive treatment, and significantly enhance gastrointestinal health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Endoscopy / Colonoscopy Equipment',
                'seo_description' => 'Endoscopy and colonoscopy equipment are advanced diagnostic and therapeutic systems used to examine the digestive tract using flexible camera-guided instruments. These procedures help diagnose and treat gastrointestinal diseases with minimal invasiveness.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
