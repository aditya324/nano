<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ERCPSuiteAccessoriesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('ERCP Suite & Accessories')],
            [
                'name' => 'ERCP Suite & Accessories',
                'slug' => Str::slug('ERCP Suite & Accessories'),
                'h1' => 'ERCP Suite & Accessories',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'ERCP (Endoscopic Retrograde Cholangiopancreatography) is an advanced endoscopic procedure used to diagnose and treat disorders of the bile ducts, pancreas, and gallbladder.',
                'about_more' => 'An ERCP suite contains specialized imaging systems, endoscopes, and therapeutic accessories required for these complex procedures.',
                'overview' => 'Services and capabilities include: Bile duct stone removal Biliary and pancreatic stenting Sphincterotomy procedures Stricture evaluation and treatment Contrast imaging of bile ducts Common conditions treated include: Gallstones in bile ducts Obstructive jaundice Biliary strictures Pancreatic duct disorders Cholangitis and pancreatitis-related blockage Fluoroscopy guidance and specialized accessories improve procedural accuracy and safety. Symptoms Indicating Evaluation Jaundice Severe upper abdominal pain Fever with bile duct infection Dark urine or pale stools Recurrent pancreatitis',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Post-ERCP pancreatitis'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation risk'],
            ['value' => 'Sedation complications'],
            ['value' => 'Stent blockage or migration'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Monitor for abdominal pain or fever'],
            ['value' => 'Follow dietary advice after the procedure'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend stent follow-up appointments'],
            ['value' => 'Seek urgent care for persistent vomiting or severe pain'],
        ],
                'recovery' => 'ERCP provides effective relief of bile duct obstruction and improves digestive and liver function. Long-term follow-up helps prevent recurrence and supports ongoing pancreatic and biliary health.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'ERCP Suite & Accessories',
                'meta_description' => 'ERCP (Endoscopic Retrograde Cholangiopancreatography) is an advanced endoscopic procedure used to diagnose and treat disorders of the bile ducts, pancreas, and ',
                'meta_keywords' => '',
            ]
        );
    }
}
