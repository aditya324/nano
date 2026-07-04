<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Echocardiography2D3DStressEchoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Echocardiography (2D, 3D & Stress Echo)')],
            [
                'name' => 'Echocardiography (2D, 3D & Stress Echo)',
                'slug' => Str::slug('Echocardiography (2D, 3D & Stress Echo)'),
                'h1' => 'Echocardiography (2D, 3D & Stress Echo)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Echocardiography is a noninvasive cardiac imaging procedure that uses ultrasound waves to create real-time images of the heart’s structure, chambers, valves, and blood flow. It helps healthcare professionals evaluate heart function, detect cardiac abnormalities, and monitor cardiovascular conditions safely and effectively.',
                'about_more' => '',
                'overview' => 'Echocardiography includes several advanced techniques such as 2D echocardiography, 3D echocardiography, and stress echocardiography. 2D echocardiography provides standard real-time heart imaging, 3D echocardiography offers detailed three-dimensional visualization of cardiac structures, and stress echocardiography evaluates heart function during physical stress or medication-induced stimulation. These procedures are commonly used to diagnose heart disease, valve disorders, congenital abnormalities, heart failure, and circulation-related conditions.',
                'symptoms' => [
            ['value' => 'Chest pain or shortness of breath'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Dizziness, fainting, or fatigue'],
            ['value' => 'Swelling in the legs or reduced exercise tolerance'],
            ['value' => 'Symptoms suggestive of heart valve or cardiac disorders'],
        ],
                'causes' => [
            ['value' => 'Coronary artery disease or reduced blood flow to the heart'],
            ['value' => 'Heart valve abnormalities or structural defects'],
            ['value' => 'Congenital heart disease present from birth'],
            ['value' => 'Heart failure or weakened heart muscle function'],
            ['value' => 'High blood pressure, arrhythmias, or cardiomyopathy'],
        ],
                'risks' => [
            ['value' => 'Minimal discomfort during the ultrasound examination'],
            ['value' => 'Temporary fatigue or breathlessness during stress echocardiography'],
            ['value' => 'Rare allergic reactions to stress-inducing medications'],
            ['value' => 'Mild chest discomfort during stress testing in some individuals'],
            ['value' => 'Rare need for additional cardiac imaging if results are inconclusive'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Echocardiographic evaluation of heart structure and function'],
            ['value' => 'Monitoring heart valve disease and heart failure'],
            ['value' => 'Assessment of congenital and cardiovascular abnormalities'],
            ['value' => 'Cardiac stress testing and blood flow evaluation'],
            ['value' => 'Long-term cardiac monitoring and treatment planning'],
        ],
                'recovery' => 'The long-term outlook with echocardiography is highly positive because it provides safe, accurate, and detailed assessment of heart function and cardiovascular health. Early diagnosis, regular cardiac monitoring, healthy lifestyle practices, medication adherence, and timely treatment can significantly improve long-term heart function and overall cardiovascular outcomes.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Echocardiography (2D, 3D & Stress Echo)',
                'meta_description' => 'Echocardiography is a noninvasive cardiac imaging procedure that uses ultrasound waves to create real-time images of the heart’s structure, chambers, valves, an',
                'meta_keywords' => '',
            ]
        );
    }
}
