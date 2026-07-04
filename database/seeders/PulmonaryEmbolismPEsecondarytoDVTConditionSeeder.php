<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryEmbolismPEsecondarytoDVTConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Embolism (PE) secondary to DVT')],
            [
                'name' => 'Pulmonary Embolism (PE) secondary to DVT',
                'slug' => Str::slug('Pulmonary Embolism (PE) secondary to DVT'),
                'h1' => 'Pulmonary Embolism (PE) secondary to DVT',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pulmonary embolism occurs when a blood clot from deep veins travels to the lungs and blocks pulmonary arteries, causing impaired oxygen circulation and respiratory distress.',
                'about_more' => '',
                'overview' => 'Pulmonary embolism occurs when a blood clot from deep veins travels to the lungs and blocks pulmonary arteries, causing impaired oxygen circulation and respiratory distress.',
                'symptoms' => [
            ['value' => 'Sudden shortness of breath'],
            ['value' => 'Sharp chest pain'],
            ['value' => 'Rapid heartbeat'],
            ['value' => 'Cough with or without blood'],
            ['value' => 'Dizziness or fainting'],
        ],
                'causes' => [
            ['value' => 'Deep vein thrombosis'],
            ['value' => 'Prolonged immobility'],
            ['value' => 'Surgery or fractures'],
            ['value' => 'Cancer and clotting disorders'],
            ['value' => 'Pregnancy and hormonal medications'],
        ],
                'risks' => [
            ['value' => 'Respiratory failure'],
            ['value' => 'Heart strain and shock'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Recurrent pulmonary embolism'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency anticoagulation therapy'],
            ['value' => 'Oxygen and supportive care'],
            ['value' => 'Clot-dissolving thrombolytic therapy'],
            ['value' => 'Catheter-directed clot removal'],
            ['value' => 'Long-term blood thinner treatment'],
        ],
                'recovery' => 'Early diagnosis and emergency treatment significantly improve survival and reduce recurrence risk.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Pulmonary Embolism (PE) secondary to DVT',
                'meta_description' => 'Pulmonary embolism occurs when a blood clot from deep veins travels to the lungs and blocks pulmonary arteries, causing impaired oxygen circulation and respirat',
                'meta_keywords' => '',
            ]
        );
    }
}
