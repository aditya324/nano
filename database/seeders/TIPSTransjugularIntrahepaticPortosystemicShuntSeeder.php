<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TIPSTransjugularIntrahepaticPortosystemicShuntSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('TIPS (Transjugular Intrahepatic Portosystemic Shunt)')],
            [
                'title' => 'TIPS (Transjugular Intrahepatic Portosystemic Shunt)',
                'slug' => Str::slug('TIPS (Transjugular Intrahepatic Portosystemic Shunt)'),
                'introduction' => 'TIPS is an advanced interventional radiology procedure used to reduce portal hypertension in severe liver disease. It creates a channel within the liver to improve blood flow and reduce pressure in portal veins.',
                'what_is' => 'TIPS is commonly used for: Recurrent variceal bleeding Refractory ascites Portal hypertension complications A stent is placed between liver veins and portal veins under imaging guidance. The procedure can significantly reduce complications of advanced liver disease.',
                'symptoms' => [
            ['value' => 'Recurrent vomiting of blood'],
            ['value' => 'Severe ascites or abdominal swelling'],
            ['value' => 'Portal hypertension complications'],
            ['value' => 'Liver cirrhosis-related bleeding'],
            ['value' => 'Difficulty controlling fluid accumulation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hepatic encephalopathy'],
            ['value' => 'Stent blockage or dysfunction'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Heart-related strain in some patients'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular imaging follow-up visits'],
            ['value' => 'Monitor for confusion or neurological symptoms'],
            ['value' => 'Follow liver disease dietary advice carefully'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Avoid alcohol completely'],
        ],
                'surgery_risks' => [
            ['value' => 'Hepatic encephalopathy'],
            ['value' => 'Stent blockage or dysfunction'],
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Heart-related strain in some patients'],
        ],
                'long_term_outlook' => 'TIPS effectively controls portal hypertension complications and improves quality of life in selected advanced liver disease patients.',
                'conclusion' => '',
                'seo_title' => 'TIPS (Transjugular Intrahepatic Portosystemic Shunt)',
                'seo_description' => 'TIPS is an advanced interventional radiology procedure used to reduce portal hypertension in severe liver disease. It creates a channel within the liver to improve blood flow and reduce pressure in portal veins.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
