<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CognitiveImpairmentMildCognitiveImpairmentMildCognitiveImpairmentMildCognitiveImpairmentMCIConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cognitive Impairment / Mild Cognitive Impairment  Mild Cognitive Impairment  Mild Cognitive Impairment (MCI)')],
            [
                'name' => 'Cognitive Impairment / Mild Cognitive Impairment  Mild Cognitive Impairment  Mild Cognitive Impairment (MCI)',
                'slug' => Str::slug('Cognitive Impairment / Mild Cognitive Impairment  Mild Cognitive Impairment  Mild Cognitive Impairment (MCI)'),
                'h1' => 'Cognitive Impairment / Mild Cognitive Impairment  Mild Cognitive Impairment  Mild Cognitive Impairment (MCI)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mild Cognitive Impairment (MCI) is a condition involving noticeable changes in memory, thinking, attention, or reasoning that are greater than expected with normal aging but not severe enough to significantly interfere with daily life or independence. Individuals with MCI may remain functionally independent while experiencing mild difficulties with mental tasks, concentration, or remembering information.',
                'about_more' => 'Cognitive impairment refers to difficulties with mental abilities such as memory, concentration, learning, reasoning, decision-making, and communication. It can range from mild forgetfulness to more severe problems that interfere with daily activities and independent functioning. Cognitive impairment may occur due to aging, neurological conditions, brain injuries, mental health disorders, or other medical illnesses affecting brain function. Stress-related disorders are mental health conditions that develop when emotional, psychological, or physical stress becomes overwhelming and difficult to manage. These disorders can affect mood, behavior, sleep, concentration, relationships, and overall well-being. Prolonged or intense stress may interfere with daily functioning and increase the risk of anxiety, depression, emotional exhaustion, and physical health problems.',
                'overview' => 'Mild Cognitive Impairment (MCI) is a condition involving noticeable changes in memory, thinking, attention, or reasoning that are greater than expected with normal aging but not severe enough to significantly interfere with daily life or independence. Individuals with MCI may remain functionally independent while experiencing mild difficulties with mental tasks, concentration, or remembering information. Cognitive impairment refers to difficulties with mental abilities such as memory, concentration, learning, reasoning, decision-making, and communication. It can range from mild forgetfulness to more severe problems that interfere with daily activities and independent functioning. Cognitive impairment may occur due to aging, neurological conditions, brain injuries, mental health disorders, or other medical illnesses affecting brain function. Stress-related disorders are mental health conditions that develop when emotional, psychological, or physical stress becomes overwhelming and difficult to manage. These disorders can affect mood, behavior, sleep, concentration, relationships, and overall well-being. Prolonged or intense stress may interfere with daily functioning and increase the risk of anxiety, depression, emotional exhaustion, and physical health problems.',
                'symptoms' => [
            ['value' => 'Frequent forgetfulness or misplacing items'],
            ['value' => 'Difficulty remembering appointments, names, or recent events'],
            ['value' => 'Trouble concentrating or following conversations'],
            ['value' => 'Slower thinking or difficulty making decisions'],
            ['value' => 'Mild challenges with planning or completing familiar tasks'],
            ['value' => 'Memory loss or frequent forgetfulness'],
            ['value' => 'Difficulty concentrating or processing information'],
            ['value' => 'Trouble making decisions or solving problems'],
            ['value' => 'Confusion with time, place, or familiar tasks'],
            ['value' => 'Difficulty communicating or understanding conversations'],
            ['value' => 'Persistent worry, tension, or feeling overwhelmed'],
            ['value' => 'Irritability, mood swings, or emotional outbursts'],
            ['value' => 'Difficulty sleeping or constant fatigue'],
            ['value' => 'Trouble concentrating or making decisions'],
            ['value' => 'Physical symptoms such as headaches, muscle tension, or rapid heartbeat'],
        ],
                'causes' => [
            ['value' => 'Aging-related brain changes'],
            ['value' => 'Family history of cognitive or neurological disorders'],
            ['value' => 'High blood pressure, diabetes, or cardiovascular disease'],
            ['value' => 'Stress, depression, or sleep disturbances'],
            ['value' => 'Brain injury, nutritional deficiencies, or certain medications'],
            ['value' => 'Aging-related brain changes or neurodegenerative conditions'],
            ['value' => 'Brain injury, stroke, or neurological disorders'],
            ['value' => 'Mental health conditions such as depression or anxiety'],
            ['value' => 'Substance misuse, alcohol use, or medication side effects'],
            ['value' => 'Nutritional deficiencies, infections, or chronic medical illnesses'],
            ['value' => 'Chronic work pressure or academic stress'],
            ['value' => 'Financial problems or relationship difficulties'],
            ['value' => 'Emotional trauma or major life changes'],
            ['value' => 'Family conflicts, social isolation, or lack of support'],
            ['value' => 'Long-term illness, caregiving stress, or overwhelming responsibilities'],
        ],
                'risks' => [
            ['value' => 'Increased risk of developing dementia or Alzheimer’s disease'],
            ['value' => 'Difficulty managing complex daily activities'],
            ['value' => 'Emotional distress, anxiety, or depression'],
            ['value' => 'Reduced social interaction and confidence'],
            ['value' => 'Progressive decline in memory and cognitive abilities over time'],
            ['value' => 'Difficulty performing daily activities independently'],
            ['value' => 'Reduced work, academic, or social functioning'],
            ['value' => 'Increased risk of anxiety, depression, or emotional distress'],
            ['value' => 'Problems with communication and relationships'],
            ['value' => 'Progressive decline in memory and thinking abilities in severe cases'],
            ['value' => 'Anxiety disorders and depression'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Reduced work, school, or social performance'],
            ['value' => 'Substance misuse or unhealthy coping behaviors'],
            ['value' => 'Increased risk of physical health problems such as high blood pressure or heart disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cognitive training and memory improvement exercises'],
            ['value' => 'Management of underlying medical conditions and risk factors'],
            ['value' => 'Healthy diet, regular exercise, and mental stimulation activities'],
            ['value' => 'Psychological counseling and emotional support programs'],
            ['value' => 'Regular neurological evaluations and cognitive monitoring'],
            ['value' => 'Cognitive rehabilitation and memory support therapy'],
            ['value' => 'Medications to manage underlying neurological or mental health conditions'],
            ['value' => 'Lifestyle modifications including exercise, healthy diet, and mental stimulation'],
            ['value' => 'Psychological counseling and emotional support programs'],
            ['value' => 'Regular medical evaluation and long-term cognitive monitoring'],
            ['value' => 'Psychological counseling and stress management therapy'],
            ['value' => 'Cognitive Behavioral Therapy (CBT) and supportive psychotherapy'],
            ['value' => 'Relaxation techniques, meditation, and breathing exercises'],
            ['value' => 'Healthy lifestyle changes including exercise and proper sleep habits'],
            ['value' => 'Emotional support programs and regular mental health follow-up care'],
        ],
                'recovery' => 'The outlook for Mild Cognitive Impairment varies depending on the underlying cause and overall health condition. Some individuals remain stable for years, while others may experience gradual progression of cognitive symptoms. Early diagnosis, healthy lifestyle modifications, mental stimulation, and regular medical follow-up can help support brain health and improve overall quality of life. _______________ 14. Cognitive Impairment / Mild Cognitive Impairment Cognitive Impairment Cognitive Impairment The recovery outlook for cognitive impairment depends on the underlying cause, severity of symptoms, and timing of treatment. Some individuals experience improvement with therapy, medical treatment, and supportive care, while others may require long-term management and rehabilitation. Early intervention, healthy lifestyle habits, and continuous cognitive support can help improve daily functioning and overall quality of life. __________________ 15. Stress-Related Disorders Stress-Related Disorders Recovery from stress-related disorders is possible with early support, healthy coping strategies, and proper mental health care. Many individuals improve significantly through therapy, stress management techniques, emotional support, and lifestyle modifications. Long-term mental wellness can be strengthened by maintaining balanced routines, supportive relationships, and ongoing self-care practices. ______________ 16. Somatic Symptom Disorder / Psychosomatic Disorders Somatic Symptom Disorder / Psychosomatic Disorders',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Cognitive Impairment / Mild Cognitive Impairment  Mild Cognitive Impairment  Mild Cognitive Impairment (MCI)',
                'meta_description' => 'Mild Cognitive Impairment (MCI) is a condition involving noticeable changes in memory, thinking, attention, or reasoning that are greater than expected with nor',
                'meta_keywords' => '',
            ]
        );
    }
}
