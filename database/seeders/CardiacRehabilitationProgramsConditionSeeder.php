<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacRehabilitationProgramsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cardiac Rehabilitation Programs')],
            [
                'name' => 'Cardiac Rehabilitation Programs',
                'slug' => Str::slug('Cardiac Rehabilitation Programs'),
                'h1' => 'Cardiac Rehabilitation Programs',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardiac rehabilitation programs are medically supervised treatment and recovery plans designed to improve heart health, physical endurance, and overall quality of life in individuals with cardiovascular conditions. These programs combine exercise training, education, lifestyle modification, and medical support to help patients recover safely after heart-related illnesses or procedures.',
                'about_more' => '',
                'overview' => 'Cardiac rehabilitation is commonly recommended after heart attack, heart failure, coronary artery disease, angioplasty, bypass surgery, or other cardiac procedures. Rehabilitation programs focus on improving cardiovascular fitness, strengthening the body, reducing risk factors, and helping individuals safely return to daily activities. Multidisciplinary teams including cardiologists, physiotherapists, nurses, and nutrition specialists work together to support long-term heart health and recovery.',
                'symptoms' => [
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Shortness of breath during activity'],
            ['value' => 'Chest discomfort or reduced exercise tolerance'],
            ['value' => 'Muscle weakness after cardiac illness or surgery'],
            ['value' => 'Anxiety or fear related to physical activity after heart disease'],
            ['value' => 'Common Causes'],
            ['value' => 'Heart attack (myocardial infarction)'],
            ['value' => 'Heart failure or weakened heart function'],
            ['value' => 'Coronary artery disease or blocked arteries'],
            ['value' => 'High blood pressure, diabetes, or high cholesterol'],
            ['value' => 'Recovery after cardiac surgery or intervention procedures'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Reduced cardiovascular fitness and endurance'],
            ['value' => 'Recurrent cardiac events or complications'],
            ['value' => 'Physical inactivity leading to muscle weakness'],
            ['value' => 'Emotional stress, anxiety, or depression'],
            ['value' => 'Difficulty returning to normal activities or work'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cardiac rehabilitation programs may include supervised aerobic exercise, strength training, breathing exercises, physiotherapy, nutritional counseling, stress management, lifestyle modification, smoking cessation support, and education on heart-healthy habits. Patients are also monitored for blood pressure, heart rate, and overall cardiovascular response during rehabilitation activities.'],
            ['value' => 'Following prescribed exercise and rehabilitation plans regularly'],
            ['value' => 'Taking medications consistently and attending follow-up appointments'],
            ['value' => 'Maintaining a heart-healthy diet and healthy body weight'],
            ['value' => 'Monitoring blood pressure, heart rate, and symptoms during activity'],
            ['value' => 'Avoiding smoking and other cardiovascular risk factors'],
        ],
                'recovery' => 'The long-term outlook with cardiac rehabilitation programs is generally very positive when rehabilitation and lifestyle recommendations are followed consistently. These programs can significantly improve heart function, physical endurance, emotional well-being, and overall quality of life. Continuous exercise, healthy lifestyle habits, regular medical follow-up, and risk factor management are essential for maintaining long-term cardiovascular health and preventing future complications. __________________________ 18. Home Exercise Program & Patient Education Home Exercise Program & Patient Education Procedures',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Cardiac Rehabilitation Programs',
                'meta_description' => 'Cardiac rehabilitation programs are medically supervised treatment and recovery plans designed to improve heart health, physical endurance, and overall quality ',
                'meta_keywords' => '',
            ]
        );
    }
}
