<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StrengthTrainingFunctionalMobilityExercisesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Strength Training & Functional Mobility Exercises')],
            [
                'name' => 'Strength Training & Functional Mobility Exercises',
                'slug' => Str::slug('Strength Training & Functional Mobility Exercises'),
                'h1' => 'Strength Training & Functional Mobility Exercises',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Strength training and functional mobility exercises are rehabilitation and fitness therapies designed to improve muscle strength, endurance, balance, coordination, and the ability to perform daily activities safely and independently. These exercises help restore physical function, prevent injuries, and enhance overall mobility and quality of life.',
                'about_more' => '',
                'overview' => 'Strength training focuses on improving muscle power and stability through targeted resistance exercises, while functional mobility exercises are designed to improve movement patterns used in everyday activities such as walking, climbing stairs, lifting, reaching, and maintaining balance. These programs are commonly used in physiotherapy, post-surgical rehabilitation, neurological recovery, sports rehabilitation, geriatric care, and chronic pain management.',
                'symptoms' => [
            ['value' => 'Muscle weakness or reduced endurance'],
            ['value' => 'Difficulty walking or performing daily activities'],
            ['value' => 'Balance or coordination problems'],
            ['value' => 'Reduced flexibility or movement limitations'],
            ['value' => 'Fatigue during physical activity or rehabilitation'],
            ['value' => 'Common Causes'],
            ['value' => 'Physical deconditioning or prolonged inactivity'],
            ['value' => 'Musculoskeletal injuries or surgeries'],
            ['value' => 'Neurological disorders affecting mobility'],
            ['value' => 'Aging-related muscle loss and weakness'],
            ['value' => 'Chronic pain or joint disorders limiting movement'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Muscle soreness or fatigue after exercise'],
            ['value' => 'Risk of strain or injury if exercises are performed incorrectly'],
            ['value' => 'Joint discomfort during rehabilitation'],
            ['value' => 'Temporary imbalance or dizziness during training'],
            ['value' => 'Delayed recovery if therapy is inconsistent'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Strength and mobility rehabilitation programs may include resistance exercises, balance training, gait exercises, core strengthening, posture correction, endurance conditioning, and functional movement training. Rehabilitation specialists may also use resistance bands, weights, therapeutic equipment, bodyweight exercises, and assistive devices to improve muscle function, mobility, and overall physical performance.'],
            ['value' => 'Following prescribed exercise programs consistently'],
            ['value' => 'Maintaining proper exercise technique and posture'],
            ['value' => 'Monitoring for pain, swelling, or excessive fatigue'],
            ['value' => 'Staying hydrated and maintaining balanced nutrition'],
            ['value' => 'Attending regular rehabilitation follow-up sessions'],
        ],
                'recovery' => 'The long-term outlook with strength training and functional mobility exercises is generally very positive when programs are performed consistently under professional guidance. These exercises can significantly improve muscle strength, mobility, endurance, balance, and independence. Ongoing physical activity, rehabilitation support, and healthy lifestyle habits are important for maintaining long-term functional health and preventing future mobility problems. _________________________',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Strength Training & Functional Mobility Exercises',
                'meta_description' => 'Strength training and functional mobility exercises are rehabilitation and fitness therapies designed to improve muscle strength, endurance, balance, coordinati',
                'meta_keywords' => '',
            ]
        );
    }
}
