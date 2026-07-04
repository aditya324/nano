<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EchocardiographyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Echocardiography')],
            [
                'name' => 'Echocardiography',
                'slug' => Str::slug('Echocardiography'),
                'h1' => 'Echocardiography',
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
            ['value' => 'Evaluation of heart chamber and valve function'],
            ['value' => 'Detection of heart failure and structural heart disease'],
            ['value' => 'Assessment of congenital heart abnormalities'],
            ['value' => 'Monitoring blood flow and cardiac pumping function'],
            ['value' => 'Evaluation of coronary artery disease during stress testing'],
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
            ['value' => 'Echocardiography supports diagnosis, treatment planning, cardiac monitoring, and long-term follow-up of cardiovascular diseases. It is commonly used in cardiology for evaluating heart function, guiding medical therapy, assessing surgical outcomes, and monitoring disease progression or recovery.'],
            ['value' => 'Most individuals can resume normal activities immediately after standard echocardiography'],
            ['value' => 'Patients undergoing stress echocardiography may require brief observation after the test'],
            ['value' => 'Hydration and rest may be advised after stress testing'],
            ['value' => 'Follow-up cardiac evaluation or additional testing may be recommended'],
            ['value' => 'Patients should discuss imaging findings and treatment plans with their cardiologist'],
        ],
                'recovery' => 'The long-term outlook with echocardiography is highly positive because it provides safe, accurate, and detailed assessment of heart function and cardiovascular health. Early diagnosis, regular cardiac monitoring, healthy lifestyle practices, and timely treatment can significantly improve long-term heart function and overall cardiovascular outcomes. ______________________________ 13. Cardiac CT / Coronary Angiography Cardiac CT / Coronary Angiography Procedures',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Echocardiography',
                'meta_description' => 'Echocardiography is a noninvasive cardiac imaging procedure that uses ultrasound waves to create real-time images of the heart’s structure, chambers, valves, an',
                'meta_keywords' => '',
            ]
        );
    }
}
