<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImmunomodulatoryTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Immunomodulatory Therapy')],
            [
                'title' => 'Immunomodulatory Therapy',
                'slug' => Str::slug('Immunomodulatory Therapy'),
                'introduction' => 'Immunomodulatory therapy involves the use of medications and advanced treatments to regulate or modify the immune system in individuals with autoimmune diseases and inflammatory disorders. These therapies help reduce abnormal immune activity, control inflammation, relieve symptoms, and prevent damage to organs and tissues.',
                'what_is' => 'Immunomodulatory therapy is commonly used in conditions such as rheumatoid arthritis, systemic lupus erythematosus (SLE), vasculitis, inflammatory bowel disease, psoriasis, and other autoimmune disorders. Treatment may include corticosteroids, disease-modifying antirheumatic drugs (DMARDs), biologic therapies, monoclonal antibodies, and other immune-suppressing medications. Therapy is carefully monitored to balance immune control while reducing the risk of infections and treatment-related complications.',
                'symptoms' => [
            ['value' => 'Joint pain, swelling, or stiffness'],
            ['value' => 'Chronic fatigue and weakness'],
            ['value' => 'Skin rashes or inflammatory symptoms'],
            ['value' => 'Fever or recurrent autoimmune flare-ups'],
            ['value' => 'Organ-related symptoms caused by immune system overactivity'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased susceptibility to infections'],
            ['value' => 'Long-term immune suppression complications'],
            ['value' => 'Organ damage from uncontrolled autoimmune disease'],
            ['value' => 'Medication-related side effects and metabolic complications'],
            ['value' => 'Increased risk of inflammatory flare-ups if untreated'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of immune function and disease activity'],
            ['value' => 'Laboratory testing and medication dose adjustments'],
            ['value' => 'Infection prevention and vaccination guidance'],
            ['value' => 'Monitoring for medication side effects and organ function'],
            ['value' => 'Long-term rheumatology or immunology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased susceptibility to infections'],
            ['value' => 'Long-term immune suppression complications'],
            ['value' => 'Organ damage from uncontrolled autoimmune disease'],
            ['value' => 'Medication-related side effects and metabolic complications'],
            ['value' => 'Increased risk of inflammatory flare-ups if untreated'],
        ],
                'long_term_outlook' => 'The long-term outlook with immunomodulatory therapy depends on the type of autoimmune disease, severity of inflammation, and response to treatment. Many individuals achieve good symptom control, reduced flare-ups, and improved quality of life with appropriate therapy and monitoring. Continuous specialist care, medication adherence, and regular follow-up are important for maintaining long-term immune and overall health.',
                'conclusion' => '',
                'seo_title' => 'Immunomodulatory Therapy',
                'seo_description' => 'Immunomodulatory therapy involves the use of medications and advanced treatments to regulate or modify the immune system in individuals with autoimmune diseases and inflammatory disorders. These therapies help reduce abnormal immune activity, control inflammation, relieve symptoms, and prevent damage to organs and tissues.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
