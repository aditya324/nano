<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ACEInhibitorsARBsARNISeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('ACE Inhibitors / ARBs / ARNI')],
            [
                'title' => 'ACE Inhibitors / ARBs / ARNI',
                'slug' => Str::slug('ACE Inhibitors / ARBs / ARNI'),
                'introduction' => 'ACE inhibitors, ARBs, and ARNI medications are cardiovascular drugs used to lower blood pressure, improve heart function, and protect the kidneys and blood vessels. These medications are commonly used in hypertension, heart failure, and post-heart attack care. They help reduce strain on the heart and improve long-term cardiovascular outcomes.',
                'what_is' => 'Common medications include: Enalapril Ramipril Losartan Telmisartan Sacubitril/Valsartan (ARNI) The therapy helps: Relax blood vessels Reduce blood pressure Improve heart pumping efficiency Protect kidney function Reduce heart failure progression These medications are essential in modern heart failure management.',
                'symptoms' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Heart failure symptoms'],
            ['value' => 'Swelling of legs or breathlessness'],
            ['value' => 'Weak heart pumping function'],
            ['value' => 'Diabetic kidney involvement'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Low blood pressure'],
            ['value' => 'Persistent dry cough with ACE inhibitors'],
            ['value' => 'Elevated potassium levels'],
            ['value' => 'Kidney function changes'],
            ['value' => 'Rare allergic swelling reactions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor blood pressure regularly'],
            ['value' => 'Attend kidney function and electrolyte testing'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Avoid excessive salt intake'],
            ['value' => 'Report swelling or breathing difficulty immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Low blood pressure'],
            ['value' => 'Persistent dry cough with ACE inhibitors'],
            ['value' => 'Elevated potassium levels'],
            ['value' => 'Kidney function changes'],
            ['value' => 'Rare allergic swelling reactions'],
        ],
                'long_term_outlook' => 'These medications improve heart function, reduce hospitalizations, protect kidney health, and improve long-term cardiovascular survival.',
                'conclusion' => '',
                'seo_title' => 'ACE Inhibitors / ARBs / ARNI',
                'seo_description' => 'ACE inhibitors, ARBs, and ARNI medications are cardiovascular drugs used to lower blood pressure, improve heart function, and protect the kidneys and blood vessels. These medications are commonly used in hypertension, heart failure, and post-heart attack care. They help reduce strain on the heart and improve long-term cardiovascular outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
