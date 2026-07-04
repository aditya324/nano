<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ERCPStoneExtractionStentPlacementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ERCP (Stone Extraction, Stent Placement)')],
            [
                'title' => 'ERCP (Stone Extraction, Stent Placement)',
                'slug' => Str::slug('ERCP (Stone Extraction, Stent Placement)'),
                'introduction' => 'Endoscopic Retrograde Cholangiopancreatography (ERCP) is an advanced endoscopic procedure used to diagnose and treat disorders of the bile ducts, pancreatic ducts, and gallbladder. It is commonly performed for bile duct stones, strictures, obstruction, and stent placement.',
                'what_is' => 'During ERCP, a flexible endoscope is passed through the mouth into the small intestine. Contrast dye and X-ray guidance help visualize the bile and pancreatic ducts. Therapeutic procedures performed during ERCP include: Stone extraction Biliary stent placement Stricture dilatation Drainage procedures Sphincterotomy ERCP is both diagnostic and therapeutic, often avoiding major surgery.',
                'symptoms' => [
            ['value' => 'Jaundice or yellow discoloration'],
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Fever with bile duct infection'],
            ['value' => 'Gallstone-related obstruction'],
            ['value' => 'Pancreatic or biliary duct blockage'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Pancreatitis after procedure'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of intestine or ducts'],
            ['value' => 'Reaction to sedation'],
            ['value' => 'Stent blockage or migration'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor for abdominal pain or fever'],
            ['value' => 'Follow dietary advice after procedure'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Attend scheduled stent follow-up visits'],
            ['value' => 'Report vomiting or worsening jaundice immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Pancreatitis after procedure'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of intestine or ducts'],
            ['value' => 'Reaction to sedation'],
            ['value' => 'Stent blockage or migration'],
        ],
                'long_term_outlook' => 'ERCP effectively relieves bile duct obstruction, treats stones and strictures, and improves long-term liver and pancreatic health outcomes.',
                'conclusion' => '',
                'seo_title' => 'ERCP (Stone Extraction, Stent Placement)',
                'seo_description' => 'Endoscopic Retrograde Cholangiopancreatography (ERCP) is an advanced endoscopic procedure used to diagnose and treat disorders of the bile ducts, pancreatic ducts, and gallbladder. It is commonly performed for bile duct stones, strictures, obstruction, and stent placement.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
