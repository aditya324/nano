<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PericardialDiseasesPericarditisPericardialEffusionTamponadeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)')],
            [
                'name' => 'Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)',
                'slug' => Str::slug('Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)'),
                'h1' => 'Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pericardial diseases involve disorders affecting the pericardium, the protective sac surrounding the heart. Conditions such as pericarditis, fluid accumulation (pericardial effusion), and cardiac tamponade can interfere with normal heart function and circulation.',
                'about_more' => '',
                'overview' => 'Pericardial diseases involve disorders affecting the pericardium, the protective sac surrounding the heart. Conditions such as pericarditis, fluid accumulation (pericardial effusion), and cardiac tamponade can interfere with normal heart function and circulation.',
                'symptoms' => [
            ['value' => 'Sharp chest pain worsening with breathing or lying down'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Fever and weakness in inflammatory cases'],
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Swelling and low blood pressure in severe tamponade'],
        ],
                'causes' => [
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Autoimmune and inflammatory diseases'],
            ['value' => 'Kidney failure and metabolic disorders'],
            ['value' => 'Heart surgery or chest trauma'],
            ['value' => 'Cancer-related spread to the pericardium'],
        ],
                'risks' => [
            ['value' => 'Cardiac tamponade causing circulatory collapse'],
            ['value' => 'Chronic constrictive pericarditis'],
            ['value' => 'Recurrent pericardial inflammation'],
            ['value' => 'Heart failure symptoms'],
            ['value' => 'Reduced cardiac output and shock'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECG and echocardiographic evaluation'],
            ['value' => 'Anti-inflammatory medications and pain relief'],
            ['value' => 'Antibiotics for infectious causes'],
            ['value' => 'Pericardiocentesis for fluid drainage'],
            ['value' => 'Surgical pericardial procedures in severe cases'],
        ],
                'recovery' => 'Many patients recover well with prompt treatment. Cardiac tamponade requires emergency intervention to prevent life-threatening complications.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)',
                'meta_description' => 'Pericardial diseases involve disorders affecting the pericardium, the protective sac surrounding the heart. Conditions such as pericarditis, fluid accumulation ',
                'meta_keywords' => '',
            ]
        );
    }
}
