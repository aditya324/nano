<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BalanceVestibularTherapyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Balance & Vestibular Therapy Equipment')],
            [
                'title' => 'Balance & Vestibular Therapy Equipment',
                'slug' => Str::slug('Balance & Vestibular Therapy Equipment'),
                'introduction' => 'Balance and vestibular therapy equipment includes specialized rehabilitation tools used to improve balance, coordination, stability, posture, and spatial orientation in individuals experiencing dizziness, vertigo, gait instability, or vestibular disorders. These devices support rehabilitation programs aimed at reducing fall risk and improving safe movement and mobility.',
                'what_is' => 'Common balance and vestibular therapy equipment includes balance boards, foam pads, stability trainers, vestibular rehabilitation systems, gait training devices, tilt platforms, therapy balls, parallel bars, visual tracking systems, and computerized balance assessment tools. These devices are widely used in rehabilitation programs for vestibular disorders, neurological conditions, post-stroke recovery, sports injuries, age-related balance decline, and post-concussion rehabilitation. Therapy programs are customized according to the patient’s balance deficits and functional goals.',
                'symptoms' => [
            ['value' => 'Dizziness or vertigo'],
            ['value' => 'Difficulty maintaining balance or walking steadily'],
            ['value' => 'Frequent falls or fear of falling'],
            ['value' => 'Poor coordination or postural instability'],
            ['value' => 'Motion sensitivity or visual disturbances during movement'],
        ],
                'causes' => [
            ['value' => 'Inner ear or vestibular disorders'],
            ['value' => 'Neurological conditions affecting balance and coordination'],
            ['value' => 'Head injury or concussion'],
            ['value' => 'Aging-related balance decline'],
            ['value' => 'Musculoskeletal weakness or postural abnormalities'],
        ],
                'condition_risks' => [
            ['value' => 'Increased risk of falls and injuries'],
            ['value' => 'Reduced mobility and physical confidence'],
            ['value' => 'Muscle weakness or coordination difficulties'],
            ['value' => 'Fatigue during rehabilitation exercises'],
            ['value' => 'Temporary dizziness or discomfort during therapy sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Balance and vestibular therapy equipment is used for gait training, balance retraining, posture correction, visual stabilization exercises, coordination training, fall prevention programs, and neuromuscular rehabilitation. Rehabilitation specialists may combine these devices with physiotherapy, strengthening exercises, vestibular exercises, and functional mobility training to improve stability and movement control.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Performing prescribed balance and vestibular exercises regularly'],
            ['value' => 'Using rehabilitation equipment safely under supervision'],
            ['value' => 'Monitoring dizziness, fatigue, or instability during therapy'],
            ['value' => 'Maintaining proper hydration and physical activity levels'],
            ['value' => 'Attending regular rehabilitation and progress evaluation sessions'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased risk of falls and injuries'],
            ['value' => 'Reduced mobility and physical confidence'],
            ['value' => 'Muscle weakness or coordination difficulties'],
            ['value' => 'Fatigue during rehabilitation exercises'],
            ['value' => 'Temporary dizziness or discomfort during therapy sessions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Balance and vestibular therapy equipment is used for gait training, balance retraining, posture correction, visual stabilization exercises, coordination training, fall prevention programs, and neuromuscular rehabilitation. Rehabilitation specialists may combine these devices with physiotherapy, strengthening exercises, vestibular exercises, and functional mobility training to improve stability and movement control.'],
        ],
                'long_term_outlook' => 'The long-term outlook with balance and vestibular rehabilitation equipment is generally very positive when therapy is performed consistently and under professional guidance. These tools can significantly improve balance, coordination, walking ability, posture, and confidence during movement. Ongoing rehabilitation, fall prevention strategies, and regular follow-up care are important for maintaining long-term mobility and functional independence.',
                'conclusion' => '',
                'seo_title' => 'Balance & Vestibular Therapy Equipment',
                'seo_description' => 'Balance and vestibular therapy equipment includes specialized rehabilitation tools used to improve balance, coordination, stability, posture, and spatial orientation in individuals experiencing dizziness, vertigo, gait instability, or vestibular disorders. These devices support rehabilitation programs aimed at reducing fall risk and improving safe movement and mobility.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
