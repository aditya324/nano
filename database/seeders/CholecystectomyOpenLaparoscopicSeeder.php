<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CholecystectomyOpenLaparoscopicSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cholecystectomy (Open / Laparoscopic)')],
            [
                'title' => 'Cholecystectomy (Open / Laparoscopic)',
                'slug' => Str::slug('Cholecystectomy (Open / Laparoscopic)'),
                'introduction' => 'Cholecystectomy is the surgical removal of the gallbladder, most commonly performed for gallstones, gallbladder inflammation, or complications related to biliary disease. The surgery may be done through open surgery or laparoscopic minimally invasive techniques.',
                'what_is' => 'Gallstones can block bile flow and lead to: Severe abdominal pain Gallbladder infection Jaundice Pancreatitis Laparoscopic cholecystectomy is the preferred method because it offers: Smaller incisions Reduced postoperative pain Faster healing Shorter hospitalization Open surgery may be required in complicated cases such as severe infection, scarring, or anatomical difficulty. The surgery removes the diseased gallbladder while maintaining normal digestion in most patients.',
                'symptoms' => [
            ['value' => 'Upper abdominal pain after fatty meals'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever associated with gallbladder infection'],
            ['value' => 'Bloating and indigestion'],
            ['value' => 'Jaundice in severe obstruction cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or bleeding'],
            ['value' => 'Bile duct injury'],
            ['value' => 'Leakage of bile into the abdomen'],
            ['value' => 'Digestive discomfort after surgery'],
            ['value' => 'Rare anesthesia complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow a low-fat diet initially after surgery'],
            ['value' => 'Avoid strenuous activity for the advised period'],
            ['value' => 'Monitor wounds for redness or swelling'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Attend regular surgical follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or bleeding'],
            ['value' => 'Bile duct injury'],
            ['value' => 'Leakage of bile into the abdomen'],
            ['value' => 'Digestive discomfort after surgery'],
            ['value' => 'Rare anesthesia complications'],
        ],
                'long_term_outlook' => 'Most patients recover well with complete relief from gallbladder symptoms. Long-term digestive function is usually normal, and recurrence of gallstone-related pain is prevented.',
                'conclusion' => '',
                'seo_title' => 'Cholecystectomy (Open / Laparoscopic)',
                'seo_description' => 'Cholecystectomy is the surgical removal of the gallbladder, most commonly performed for gallstones, gallbladder inflammation, or complications related to biliary disease. The surgery may be done through open surgery or laparoscopic minimally invasive techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
