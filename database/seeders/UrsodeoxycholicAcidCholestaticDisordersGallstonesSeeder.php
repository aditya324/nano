<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UrsodeoxycholicAcidCholestaticDisordersGallstonesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ursodeoxycholic Acid (Cholestatic Disorders, Gallstones)')],
            [
                'title' => 'Ursodeoxycholic Acid (Cholestatic Disorders, Gallstones)',
                'slug' => Str::slug('Ursodeoxycholic Acid (Cholestatic Disorders, Gallstones)'),
                'introduction' => 'Ursodeoxycholic acid (UDCA) is a medication used to improve bile flow and treat certain liver and gallbladder disorders. It is commonly used in cholestatic liver diseases and selected gallstone cases.',
                'what_is' => 'UDCA helps: Reduce bile stasis Protect liver cells Dissolve certain cholesterol gallstones Improve liver enzyme levels Common indications include: Primary biliary cholangitis Cholestatic liver disease Gallstone management in selected patients',
                'symptoms' => [
            ['value' => 'Upper abdominal discomfort'],
            ['value' => 'Jaundice or itching'],
            ['value' => 'Gallstone-related symptoms'],
            ['value' => 'Abnormal liver function tests'],
            ['value' => 'Digestive discomfort related to bile disorders'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild diarrhea'],
            ['value' => 'Nausea or bloating'],
            ['value' => 'Incomplete gallstone dissolution'],
            ['value' => 'Rare allergic reactions'],
            ['value' => 'Liver function fluctuations'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications regularly as prescribed'],
            ['value' => 'Attend periodic liver function monitoring'],
            ['value' => 'Follow low-fat dietary recommendations'],
            ['value' => 'Maintain healthy body weight'],
            ['value' => 'Report worsening abdominal pain promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild diarrhea'],
            ['value' => 'Nausea or bloating'],
            ['value' => 'Incomplete gallstone dissolution'],
            ['value' => 'Rare allergic reactions'],
            ['value' => 'Liver function fluctuations'],
        ],
                'long_term_outlook' => 'UDCA therapy improves bile flow, supports liver health, and may reduce progression of certain cholestatic liver diseases.',
                'conclusion' => '',
                'seo_title' => 'Ursodeoxycholic Acid (Cholestatic Disorders, Gallstones)',
                'seo_description' => 'Ursodeoxycholic acid (UDCA) is a medication used to improve bile flow and treat certain liver and gallbladder disorders. It is commonly used in cholestatic liver diseases and selected gallstone cases.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
