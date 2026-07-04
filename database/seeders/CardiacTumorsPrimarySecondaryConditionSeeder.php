<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacTumorsPrimarySecondaryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cardiac Tumors (Primary / Secondary)')],
            [
                'name' => 'Cardiac Tumors (Primary / Secondary)',
                'slug' => Str::slug('Cardiac Tumors (Primary / Secondary)'),
                'h1' => 'Cardiac Tumors (Primary / Secondary)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardiac tumors are abnormal growths occurring within the heart or surrounding tissues. Primary tumors originate in the heart, while secondary tumors spread from cancers elsewhere in the body.',
                'about_more' => '',
                'overview' => 'Cardiac tumors are abnormal growths occurring within the heart or surrounding tissues. Primary tumors originate in the heart, while secondary tumors spread from cancers elsewhere in the body.',
                'symptoms' => [
            ['value' => 'Shortness of breath and fatigue'],
            ['value' => 'Chest discomfort or palpitations'],
            ['value' => 'Fainting or dizziness'],
            ['value' => 'Signs of heart failure'],
            ['value' => 'Stroke-like symptoms due to embolism'],
        ],
                'causes' => [
            ['value' => 'Benign heart tumors such as myxoma'],
            ['value' => 'Metastatic spread from other cancers'],
            ['value' => 'Genetic tumor syndromes'],
            ['value' => 'Unknown abnormal cell growth'],
            ['value' => 'Rare connective tissue disorders'],
        ],
                'risks' => [
            ['value' => 'Obstruction of blood flow within the heart'],
            ['value' => 'Arrhythmias and sudden cardiac events'],
            ['value' => 'Stroke from tumor fragments or clots'],
            ['value' => 'Heart failure progression'],
            ['value' => 'Spread of malignant tumors to other organs'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Echocardiography and cardiac MRI evaluation'],
            ['value' => 'Surgical removal of accessible tumors'],
            ['value' => 'Chemotherapy or radiation for malignant disease'],
            ['value' => 'Cardiac rhythm and heart failure management'],
            ['value' => 'Long-term oncology and cardiology follow-up'],
        ],
                'recovery' => 'Benign cardiac tumors often have good outcomes after surgery. Prognosis for malignant tumors depends on cancer type and stage.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Cardiac Tumors (Primary / Secondary)',
                'meta_description' => 'Cardiac tumors are abnormal growths occurring within the heart or surrounding tissues. Primary tumors originate in the heart, while secondary tumors spread from',
                'meta_keywords' => '',
            ]
        );
    }
}
