<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CognitiveNeuropsychologicalTestingToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cognitive & Neuropsychological Testing Tools')],
            [
                'title' => 'Cognitive & Neuropsychological Testing Tools',
                'slug' => Str::slug('Cognitive & Neuropsychological Testing Tools'),
                'introduction' => 'Cognitive and neuropsychological testing tools are specialized assessment systems used to evaluate brain function, memory, attention, language, problem-solving abilities, emotional functioning, behavior, and overall cognitive performance. These tools help healthcare professionals diagnose neurological, psychiatric, developmental, and cognitive disorders affecting thinking, learning, memory, and daily functioning.',
                'what_is' => 'Cognitive and neuropsychological assessments involve standardized tests, questionnaires, computerized evaluation systems, and performance-based tasks conducted by neurologists, neuropsychologists, psychiatrists, or trained healthcare professionals. These tools are widely used in neurology, psychiatry, rehabilitation medicine, geriatrics, and behavioral health settings to evaluate conditions such as dementia, mild cognitive impairment, traumatic brain injury, ADHD, stroke, epilepsy, learning disabilities, and psychological disorders. The assessments help identify cognitive strengths and weaknesses, guide treatment planning, and monitor recovery or disease progression.',
                'symptoms' => [
            ['value' => 'Memory loss or difficulty concentrating'],
            ['value' => 'Confusion, forgetfulness, or impaired decision-making'],
            ['value' => 'Difficulty with language, learning, or problem-solving'],
            ['value' => 'Behavioral changes, mood disturbances, or reduced attention span'],
            ['value' => 'Decline in daily functioning, academic performance, or work efficiency'],
        ],
                'causes' => [
            ['value' => 'Dementia, Alzheimer’s disease, or mild cognitive impairment'],
            ['value' => 'Brain injuries, stroke, or neurological disorders'],
            ['value' => 'ADHD, learning disabilities, or developmental conditions'],
            ['value' => 'Depression, anxiety, or psychiatric disorders affecting cognition'],
            ['value' => 'Neurodegenerative, metabolic, or autoimmune conditions impacting brain function'],
        ],
                'condition_risks' => [
            ['value' => 'Emotional stress or fatigue during lengthy assessments'],
            ['value' => 'Variability in test performance due to anxiety or medical conditions'],
            ['value' => 'Requirement for specialized interpretation by trained professionals'],
            ['value' => 'Need for repeated assessments for long-term monitoring'],
            ['value' => 'Difficulty evaluating severe cognitive or communication impairments in some patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Cognitive and neuropsychological testing tools help healthcare professionals create individualized treatment and rehabilitation plans based on the patient’s cognitive and behavioral profile. Treatment may include cognitive rehabilitation therapy, memory training, behavioral therapy, psychiatric treatment, educational interventions, speech therapy, occupational therapy, neurological rehabilitation, medications, and lifestyle modification. These assessments also support treatment monitoring, academic accommodations, rehabilitation planning, and long-term neurological or psychological care.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow-up consultation to review assessment findings'],
            ['value' => 'Cognitive rehabilitation or therapy programs if recommended'],
            ['value' => 'Monitoring changes in memory, attention, and behavioral functioning'],
            ['value' => 'Educational, occupational, or psychological support planning when required'],
            ['value' => 'Long-term neurological or psychiatric follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Emotional stress or fatigue during lengthy assessments'],
            ['value' => 'Variability in test performance due to anxiety or medical conditions'],
            ['value' => 'Requirement for specialized interpretation by trained professionals'],
            ['value' => 'Need for repeated assessments for long-term monitoring'],
            ['value' => 'Difficulty evaluating severe cognitive or communication impairments in some patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Cognitive and neuropsychological testing tools help healthcare professionals create individualized treatment and rehabilitation plans based on the patient’s cognitive and behavioral profile. Treatment may include cognitive rehabilitation therapy, memory training, behavioral therapy, psychiatric treatment, educational interventions, speech therapy, occupational therapy, neurological rehabilitation, medications, and lifestyle modification. These assessments also support treatment monitoring, academic accommodations, rehabilitation planning, and long-term neurological or psychological care.'],
        ],
                'long_term_outlook' => 'Cognitive and neuropsychological testing tools play an important role in early diagnosis, treatment planning, rehabilitation monitoring, and long-term cognitive healthcare. Advancements in digital assessment systems, computerized cognitive testing, AI-assisted analysis, and neurobehavioral evaluation technologies continue to improve diagnostic accuracy, cognitive rehabilitation outcomes, patient independence, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Cognitive & Neuropsychological Testing Tools',
                'seo_description' => 'Cognitive and neuropsychological testing tools are specialized assessment systems used to evaluate brain function, memory, attention, language, problem-solving abilities, emotional functioning, behavior, and overall cognitive performance. These tools help healthcare professionals diagnose neurological, psychiatric, developmental, and cognitive disorders affecting thinking, learning, memory, and daily functioning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
