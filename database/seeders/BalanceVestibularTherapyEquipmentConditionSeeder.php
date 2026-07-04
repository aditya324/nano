<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BalanceVestibularTherapyEquipmentConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Balance & Vestibular Therapy Equipment')],
            [
                'name' => 'Balance & Vestibular Therapy Equipment',
                'slug' => Str::slug('Balance & Vestibular Therapy Equipment'),
                'h1' => 'Balance & Vestibular Therapy Equipment',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Balance and vestibular therapy equipment includes specialized rehabilitation tools used to improve balance, coordination, stability, posture, and spatial orientation in individuals experiencing dizziness, vertigo, gait instability, or vestibular disorders. These devices support rehabilitation programs aimed at reducing fall risk and improving safe movement and mobility.',
                'about_more' => '',
                'overview' => 'Common balance and vestibular therapy equipment includes balance boards, foam pads, stability trainers, vestibular rehabilitation systems, gait training devices, tilt platforms, therapy balls, parallel bars, visual tracking systems, and computerized balance assessment tools. These devices are widely used in rehabilitation programs for vestibular disorders, neurological conditions, post-stroke recovery, sports injuries, age-related balance decline, and post-concussion rehabilitation. Therapy programs are customized according to the patient’s balance deficits and functional goals.',
                'symptoms' => [
            ['value' => 'Dizziness or vertigo'],
            ['value' => 'Difficulty maintaining balance or walking steadily'],
            ['value' => 'Frequent falls or fear of falling'],
            ['value' => 'Poor coordination or postural instability'],
            ['value' => 'Motion sensitivity or visual disturbances during movement'],
            ['value' => 'Common Causes'],
            ['value' => 'Inner ear or vestibular disorders'],
            ['value' => 'Neurological conditions affecting balance and coordination'],
            ['value' => 'Head injury or concussion'],
            ['value' => 'Aging-related balance decline'],
            ['value' => 'Musculoskeletal weakness or postural abnormalities'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Increased risk of falls and injuries'],
            ['value' => 'Reduced mobility and physical confidence'],
            ['value' => 'Muscle weakness or coordination difficulties'],
            ['value' => 'Fatigue during rehabilitation exercises'],
            ['value' => 'Temporary dizziness or discomfort during therapy sessions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Balance and vestibular therapy equipment is used for gait training, balance retraining, posture correction, visual stabilization exercises, coordination training, fall prevention programs, and neuromuscular rehabilitation. Rehabilitation specialists may combine these devices with physiotherapy, strengthening exercises, vestibular exercises, and functional mobility training to improve stability and movement control.'],
            ['value' => 'Performing prescribed balance and vestibular exercises regularly'],
            ['value' => 'Using rehabilitation equipment safely under supervision'],
            ['value' => 'Monitoring dizziness, fatigue, or instability during therapy'],
            ['value' => 'Maintaining proper hydration and physical activity levels'],
            ['value' => 'Attending regular rehabilitation and progress evaluation sessions'],
        ],
                'recovery' => 'The long-term outlook with balance and vestibular rehabilitation equipment is generally very positive when therapy is performed consistently and under professional guidance. These tools can significantly improve balance, coordination, walking ability, posture, and confidence during movement. Ongoing rehabilitation, fall prevention strategies, and regular follow-up care are important for maintaining long-term mobility and functional independence. _______________________ 139. Patient Monitoring & Functional Assessment Tools Patient Monitoring & Functional Assessment Tools Equipment',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Balance & Vestibular Therapy Equipment',
                'meta_description' => 'Balance and vestibular therapy equipment includes specialized rehabilitation tools used to improve balance, coordination, stability, posture, and spatial orient',
                'meta_keywords' => '',
            ]
        );
    }
}
