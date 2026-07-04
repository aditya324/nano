<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DementiaAlzheimersVascularOtherConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dementia (Alzheimer’s, Vascular, Other)')],
            [
                'name' => 'Dementia (Alzheimer’s, Vascular, Other)',
                'slug' => Str::slug('Dementia (Alzheimer’s, Vascular, Other)'),
                'h1' => 'Dementia (Alzheimer’s, Vascular, Other)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dementia is a group of progressive neurological conditions that affect memory, thinking, behavior, communication, and the ability to perform daily activities. Alzheimer’s disease is the most common form of dementia, while vascular dementia results from reduced blood flow to the brain. Other forms of dementia may develop due to neurological, metabolic, or degenerative brain disorders. Dementia primarily affects older adults and can significantly impact cognitive function, emotional well-being, independence, and quality of life.',
                'about_more' => '',
                'overview' => 'Dementia is a group of progressive neurological conditions that affect memory, thinking, behavior, communication, and the ability to perform daily activities. Alzheimer’s disease is the most common form of dementia, while vascular dementia results from reduced blood flow to the brain. Other forms of dementia may develop due to neurological, metabolic, or degenerative brain disorders. Dementia primarily affects older adults and can significantly impact cognitive function, emotional well-being, independence, and quality of life.',
                'symptoms' => [
            ['value' => 'Memory loss and difficulty remembering recent events'],
            ['value' => 'Confusion, disorientation, or difficulty concentrating'],
            ['value' => 'Problems with communication, language, or decision-making'],
            ['value' => 'Mood changes, irritability, anxiety, or behavioral changes'],
            ['value' => 'Difficulty performing daily activities or managing routine tasks'],
            ['value' => 'Common Causes'],
            ['value' => 'Degenerative brain diseases such as Alzheimer’s disease'],
            ['value' => 'Reduced blood supply to the brain causing vascular dementia'],
            ['value' => 'Neurological disorders affecting brain function and cognition'],
            ['value' => 'Aging-related brain cell damage and memory decline'],
            ['value' => 'Chronic medical conditions, head injuries, or metabolic disorders affecting brain health'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Progressive cognitive decline and loss of independence'],
            ['value' => 'Behavioral and emotional disturbances affecting daily life'],
            ['value' => 'Increased risk of falls, injuries, or wandering behavior'],
            ['value' => 'Difficulty managing medications, finances, or personal care'],
            ['value' => 'Long-term caregiver stress and reduced quality of life for patients and families'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for dementia focuses on slowing cognitive decline, managing symptoms, improving quality of life, and supporting both patients and caregivers. Management may include memory-enhancing medications, cognitive rehabilitation, behavioral therapy, emotional support, nutritional counseling, sleep management, physiotherapy, and structured daily routines. Treatment of underlying vascular risk factors such as hypertension, diabetes, and high cholesterol is also important in vascular dementia. Supportive care, family education, and long-term neurological follow-up play a major role in maintaining patient safety and well-being.'],
            ['value' => 'Regular neurological and cognitive assessment follow-up'],
            ['value' => 'Monitoring memory, behavior, and daily functional abilities'],
            ['value' => 'Encouragement of mental stimulation and social engagement activities'],
            ['value' => 'Family counseling and caregiver support programs'],
            ['value' => 'Long-term safety planning and supportive rehabilitation when required'],
        ],
                'recovery' => 'The long-term outlook for dementia varies depending on the type, severity, and progression of the condition. Early diagnosis, proper medical care, cognitive support, healthy lifestyle habits, emotional support, and continuous follow-up significantly help slow functional decline, improve quality of life, maintain independence for as long as possible, and support overall patient and caregiver well-being. ___________',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Dementia (Alzheimer’s, Vascular, Other)',
                'meta_description' => 'Dementia is a group of progressive neurological conditions that affect memory, thinking, behavior, communication, and the ability to perform daily activities. A',
                'meta_keywords' => '',
            ]
        );
    }
}
