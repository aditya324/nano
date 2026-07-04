<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BiofeedbackNeurostimulationDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Biofeedback & Neurostimulation Devices')],
            [
                'title' => 'Biofeedback & Neurostimulation Devices',
                'slug' => Str::slug('Biofeedback & Neurostimulation Devices'),
                'introduction' => 'Biofeedback and neurostimulation devices are advanced therapeutic technologies used to monitor, regulate, and improve brain and body functions. These devices help individuals gain better control over physiological responses such as heart rate, muscle tension, breathing patterns, and brain activity while also supporting neurological and mental health treatment through controlled stimulation techniques.',
                'what_is' => 'Biofeedback devices provide real-time information about body functions, allowing patients to learn relaxation techniques and improve emotional and physical control. Neurostimulation devices use electrical or magnetic stimulation to influence nerve activity and brain function for therapeutic purposes. These technologies are commonly used in the management of anxiety, stress disorders, chronic pain, neurological conditions, attention disorders, rehabilitation, and mental health treatment programs.',
                'symptoms' => [
            ['value' => 'Chronic stress, anxiety, or emotional tension'],
            ['value' => 'Difficulty concentrating or regulating emotions'],
            ['value' => 'Chronic pain, headaches, or muscle tension'],
            ['value' => 'Neurological symptoms affecting movement or brain function'],
            ['value' => 'Sleep disturbances or stress-related physical symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Anxiety disorders, depression, or emotional instability'],
            ['value' => 'Neurological conditions affecting nerve or brain function'],
            ['value' => 'Chronic stress and psychosomatic symptoms'],
            ['value' => 'Attention, behavioral, or cognitive disorders'],
            ['value' => 'Chronic pain conditions requiring supportive therapy'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of therapy response and symptom improvement'],
            ['value' => 'Guided training sessions using biofeedback or neurostimulation devices'],
            ['value' => 'Follow-up evaluations and therapy adjustments when necessary'],
            ['value' => 'Continued emotional support, rehabilitation, or counseling programs'],
            ['value' => 'Long-term neurological and mental wellness monitoring'],
        ],
                'surgery_risks' => [
            ['value' => 'Anxiety disorders, depression, or emotional instability'],
            ['value' => 'Neurological conditions affecting nerve or brain function'],
            ['value' => 'Chronic stress and psychosomatic symptoms'],
            ['value' => 'Attention, behavioral, or cognitive disorders'],
            ['value' => 'Chronic pain conditions requiring supportive therapy'],
        ],
                'long_term_outlook' => 'The long-term outlook with biofeedback and neurostimulation therapy is generally positive when used as part of a structured treatment and rehabilitation plan. Many individuals experience improved emotional regulation, reduced stress, better concentration, pain relief, and enhanced neurological functioning. Ongoing therapy and follow-up care can significantly improve overall mental and physical well-being.',
                'conclusion' => '',
                'seo_title' => 'Biofeedback & Neurostimulation Devices',
                'seo_description' => 'Biofeedback and neurostimulation devices are advanced therapeutic technologies used to monitor, regulate, and improve brain and body functions. These devices help individuals gain better control over physiological responses such as heart rate, muscle tension, breathing patterns, and brain activity while also supporting neurological and mental health treatment through controlled stimulation techniques.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
