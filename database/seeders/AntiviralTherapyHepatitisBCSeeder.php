<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiviralTherapyHepatitisBCSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiviral Therapy (Hepatitis B, C)')],
            [
                'title' => 'Antiviral Therapy (Hepatitis B, C)',
                'slug' => Str::slug('Antiviral Therapy (Hepatitis B, C)'),
                'introduction' => 'Antiviral therapy is used to treat chronic viral hepatitis infections such as Hepatitis B and Hepatitis C. Treatment helps suppress or eliminate the virus and prevent liver damage.',
                'what_is' => 'Modern antiviral medications: Reduce viral activity Prevent cirrhosis Lower liver cancer risk Improve liver function Hepatitis C can often be completely cured with direct-acting antiviral therapy. Long-term monitoring is essential during treatment.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice or dark urine'],
            ['value' => 'Abdominal discomfort'],
            ['value' => 'Elevated liver enzymes'],
            ['value' => 'Chronic liver inflammation symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Medication side effects'],
            ['value' => 'Liver function fluctuations'],
            ['value' => 'Viral resistance in some cases'],
            ['value' => 'Need for prolonged therapy in Hepatitis B'],
            ['value' => 'Rare allergic reactions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take antiviral medications regularly'],
            ['value' => 'Avoid alcohol and liver-toxic substances'],
            ['value' => 'Attend routine blood investigations'],
            ['value' => 'Maintain healthy nutrition and hydration'],
            ['value' => 'Continue long-term liver monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Medication side effects'],
            ['value' => 'Liver function fluctuations'],
            ['value' => 'Viral resistance in some cases'],
            ['value' => 'Need for prolonged therapy in Hepatitis B'],
            ['value' => 'Rare allergic reactions'],
        ],
                'long_term_outlook' => 'Antiviral therapy significantly reduces liver damage, prevents complications, and improves survival and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Antiviral Therapy (Hepatitis B, C)',
                'seo_description' => 'Antiviral therapy is used to treat chronic viral hepatitis infections such as Hepatitis B and Hepatitis C. Treatment helps suppress or eliminate the virus and prevent liver damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
