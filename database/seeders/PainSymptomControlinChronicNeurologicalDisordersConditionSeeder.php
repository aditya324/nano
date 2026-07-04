<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PainSymptomControlinChronicNeurologicalDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pain & Symptom Control in Chronic Neurological Disorders')],
            [
                'name' => 'Pain & Symptom Control in Chronic Neurological Disorders',
                'slug' => Str::slug('Pain & Symptom Control in Chronic Neurological Disorders'),
                'h1' => 'Pain & Symptom Control in Chronic Neurological Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pain and symptom control in chronic neurological disorders focuses on reducing discomfort, improving physical function, managing neurological symptoms, and enhancing quality of life in individuals living with long-term neurological conditions. Treatment involves multidisciplinary care aimed at controlling pain, muscle stiffness, fatigue, movement difficulties, and other symptoms affecting daily functioning.',
                'about_more' => '',
                'overview' => 'Chronic neurological disorders such as multiple sclerosis, Parkinson’s disease, stroke-related complications, spinal cord injuries, neuropathies, and neuromuscular disorders can cause persistent pain, weakness, muscle spasms, sensory changes, and mobility limitations. Pain and symptom management programs combine rehabilitation therapies, medications, supportive care, and lifestyle modifications to improve comfort, independence, and overall well-being.',
                'symptoms' => [
            ['value' => 'Chronic nerve or muscle pain'],
            ['value' => 'Muscle stiffness, spasms, or spasticity'],
            ['value' => 'Weakness or reduced mobility'],
            ['value' => 'Fatigue and reduced physical endurance'],
            ['value' => 'Sensory disturbances such as numbness or tingling'],
            ['value' => 'Common Causes'],
            ['value' => 'Neurological damage affecting nerves and muscles'],
            ['value' => 'Chronic inflammatory or degenerative neurological conditions'],
            ['value' => 'Muscle imbalance and abnormal movement patterns'],
            ['value' => 'Nerve compression or neuropathic pain'],
            ['value' => 'Long-term disability and reduced physical activity'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced mobility and physical functioning'],
            ['value' => 'Sleep disturbances and chronic fatigue'],
            ['value' => 'Emotional stress, anxiety, or depression'],
            ['value' => 'Joint stiffness and muscle contractures'],
            ['value' => 'Reduced independence and quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain and symptom control may include physiotherapy, stretching exercises, neuromuscular rehabilitation, electrotherapy, pain-relieving medications, muscle relaxants, spasticity management, occupational therapy, and psychological support. Additional treatments such as assistive devices, relaxation techniques, posture correction, respiratory therapy, and multidisciplinary neurological care may also be included depending on the individual’s condition and rehabilitation goals.'],
            ['value' => 'Following prescribed rehabilitation and medication plans consistently'],
            ['value' => 'Monitoring symptoms and reporting changes to healthcare providers'],
            ['value' => 'Maintaining regular physical activity within advised limits'],
            ['value' => 'Practicing posture correction, stretching, and relaxation techniques'],
            ['value' => 'Attending regular neurological and rehabilitation follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook for pain and symptom control in chronic neurological disorders varies depending on the underlying condition and severity of symptoms. Although many neurological disorders are chronic, early intervention, structured rehabilitation, and multidisciplinary care can significantly improve comfort, mobility, independence, and quality of life. Continuous medical follow-up, supportive therapy, and healthy lifestyle practices are important for maintaining long-term symptom control and functional well-being. _______________________________ 21. Balance & Vestibular Therapy Balance & Vestibular Therapy Procedures',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Pain & Symptom Control in Chronic Neurological Disorders',
                'meta_description' => 'Pain and symptom control in chronic neurological disorders focuses on reducing discomfort, improving physical function, managing neurological symptoms, and enha',
                'meta_keywords' => '',
            ]
        );
    }
}
