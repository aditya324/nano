<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicProceduresERCPforStoneRemovalWhenSurgicalCollaborationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Procedures (ERCP for Stone Removal When Surgical Collaboration)')],
            [
                'title' => 'Endoscopic Procedures (ERCP for Stone Removal When Surgical Collaboration)',
                'slug' => Str::slug('Endoscopic Procedures (ERCP for Stone Removal When Surgical Collaboration)'),
                'introduction' => 'Endoscopic Retrograde Cholangiopancreatography (ERCP) is a specialized endoscopic procedure used to diagnose and treat disorders of the bile ducts and pancreas, especially bile duct stones. It is commonly performed in collaboration between gastroenterology and surgical teams.',
                'what_is' => 'ERCP combines: Endoscopy Fluoroscopy imaging Therapeutic intervention The procedure may be used for: Bile duct stone removal Stent placement Bile duct obstruction relief Pancreatic duct evaluation A flexible endoscope is passed through the mouth into the small intestine, where instruments are used to access bile ducts. ERCP often prevents the need for major surgery in selected patients.',
                'symptoms' => [
            ['value' => 'Jaundice or yellowing of eyes'],
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Fever with bile duct infection'],
            ['value' => 'Gallstone pancreatitis symptoms'],
            ['value' => 'Abnormal liver function tests'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Pancreatitis after ERCP'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of digestive tract'],
            ['value' => 'Allergic reaction to contrast dye'],
            ['value' => 'Sedation-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid heavy meals immediately after procedure'],
            ['value' => 'Monitor for abdominal pain or fever'],
            ['value' => 'Maintain hydration adequately'],
            ['value' => 'Attend follow-up imaging or surgical evaluation'],
            ['value' => 'Seek urgent care if vomiting or severe pain develops'],
        ],
                'surgery_risks' => [
            ['value' => 'Pancreatitis after ERCP'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of digestive tract'],
            ['value' => 'Allergic reaction to contrast dye'],
            ['value' => 'Sedation-related complications'],
        ],
                'long_term_outlook' => 'ERCP provides effective minimally invasive treatment for biliary and pancreatic disorders and improves long-term digestive health and symptom relief.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Procedures (ERCP for Stone Removal When Surgical Collaboration)',
                'seo_description' => 'Endoscopic Retrograde Cholangiopancreatography (ERCP) is a specialized endoscopic procedure used to diagnose and treat disorders of the bile ducts and pancreas, especially bile duct stones. It is commonly performed in collaboration between gastroenterology and surgical teams.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
