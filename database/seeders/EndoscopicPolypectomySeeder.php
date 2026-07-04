<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicPolypectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Polypectomy')],
            [
                'title' => 'Endoscopic Polypectomy',
                'slug' => Str::slug('Endoscopic Polypectomy'),
                'introduction' => 'Endoscopic polypectomy is a minimally invasive procedure used to remove abnormal growths (polyps) from the gastrointestinal tract during endoscopy or colonoscopy. Removing polyps helps prevent cancer development.',
                'what_is' => 'The procedure is commonly performed during: Colonoscopy Upper GI endoscopy Special instruments such as snares or biopsy forceps are used to remove polyps safely. Polypectomy is important for: Colon cancer prevention Diagnosis of abnormal tissue Removal of precancerous lesions Most patients can return home the same day.',
                'symptoms' => [
            ['value' => 'Rectal bleeding'],
            ['value' => 'Changes in bowel habits'],
            ['value' => 'Positive screening tests'],
            ['value' => 'Unexplained anemia'],
            ['value' => 'Polyps detected during endoscopy'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding after removal'],
            ['value' => 'Bowel perforation'],
            ['value' => 'Infection risk'],
            ['value' => 'Incomplete removal of large polyps'],
            ['value' => 'Sedation-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Avoid heavy activity temporarily'],
            ['value' => 'Monitor for bleeding or severe pain'],
            ['value' => 'Attend biopsy result follow-up visits'],
            ['value' => 'Maintain future colonoscopy surveillance schedules'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding after removal'],
            ['value' => 'Bowel perforation'],
            ['value' => 'Infection risk'],
            ['value' => 'Incomplete removal of large polyps'],
            ['value' => 'Sedation-related complications'],
        ],
                'long_term_outlook' => 'Endoscopic polypectomy significantly reduces colorectal cancer risk and supports early gastrointestinal disease prevention.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Polypectomy',
                'seo_description' => 'Endoscopic polypectomy is a minimally invasive procedure used to remove abnormal growths (polyps) from the gastrointestinal tract during endoscopy or colonoscopy. Removing polyps helps prevent cancer development.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
