<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PericardialDiseasesPericarditisPericardialEffusionTamponadeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)')],
            [
                'title' => 'Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)',
                'slug' => Str::slug('Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)'),
                'introduction' => 'Pericardial diseases involve disorders affecting the pericardium, the protective sac surrounding the heart. Common conditions include: Pericarditis (inflammation) Pericardial effusion (fluid accumulation) Cardiac tamponade (life-threatening pressure on the heart) These conditions may occur due to infections, autoimmune diseases, trauma, cancer, kidney failure, or after heart surgery.',
                'what_is' => 'Pericardial disorders can range from mild inflammation to severe emergencies requiring urgent treatment. Diagnosis may involve: Echocardiography ECG Chest imaging Blood tests CT or MRI scans Treatment depends on severity and may include: Anti-inflammatory medications Antibiotics Pericardiocentesis (fluid drainage) Surgical procedures Cardiac tamponade is a medical emergency that can severely impair heart pumping function.',
                'symptoms' => [
            ['value' => 'Sharp chest pain'],
            ['value' => 'Breathlessness'],
            ['value' => 'Fever or weakness'],
            ['value' => 'Rapid heartbeat'],
            ['value' => 'Swelling or low blood pressure in severe cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cardiac tamponade'],
            ['value' => 'Recurrent pericarditis'],
            ['value' => 'Chronic constrictive pericarditis'],
            ['value' => 'Heart failure symptoms'],
            ['value' => 'Sudden cardiovascular collapse in severe cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications regularly as prescribed'],
            ['value' => 'Avoid strenuous physical activity temporarily'],
            ['value' => 'Attend repeat echocardiography evaluations'],
            ['value' => 'Monitor chest pain or breathing difficulty'],
            ['value' => 'Seek emergency care for worsening symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Cardiac tamponade'],
            ['value' => 'Recurrent pericarditis'],
            ['value' => 'Chronic constrictive pericarditis'],
            ['value' => 'Heart failure symptoms'],
            ['value' => 'Sudden cardiovascular collapse in severe cases'],
        ],
                'long_term_outlook' => 'Most patients recover well with timely treatment, although some may require long-term monitoring for recurrence or chronic pericardial complications.',
                'conclusion' => '',
                'seo_title' => 'Pericardial Diseases (Pericarditis, Pericardial Effusion, Tamponade)',
                'seo_description' => 'Pericardial diseases involve disorders affecting the pericardium, the protective sac surrounding the heart. Common conditions include: Pericarditis (inflammation) Pericardial effusion (fluid accumulation) Cardiac tamponade (life-threatening pressure on the heart) These conditions may occur due to infections, autoimmune diseases, trauma, cancer, kidney failure, or after heart surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
