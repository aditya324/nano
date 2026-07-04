<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CongenitalHeartDiseasePediatricandAdultConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Congenital Heart Disease (Pediatric and Adult)')],
            [
                'name' => 'Congenital Heart Disease (Pediatric and Adult)',
                'slug' => Str::slug('Congenital Heart Disease (Pediatric and Adult)'),
                'h1' => 'Congenital Heart Disease (Pediatric and Adult)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Congenital Heart Disease (CHD) refers to structural abnormalities of the heart or major blood vessels that are present from birth. These defects may affect heart chambers, valves, arteries, or blood flow pathways. Some conditions are diagnosed during infancy, while others may remain undetected until adulthood.',
                'about_more' => '',
                'overview' => 'Congenital Heart Disease (CHD) refers to structural abnormalities of the heart or major blood vessels that are present from birth. These defects may affect heart chambers, valves, arteries, or blood flow pathways. Some conditions are diagnosed during infancy, while others may remain undetected until adulthood.',
                'symptoms' => [
            ['value' => 'Shortness of breath during feeding, exercise, or activity'],
            ['value' => 'Bluish discoloration of lips or fingers (cyanosis)'],
            ['value' => 'Poor weight gain and delayed growth in children'],
            ['value' => 'Fatigue and reduced exercise tolerance'],
            ['value' => 'Heart murmur detected during examination'],
        ],
                'causes' => [
            ['value' => 'Genetic and chromosomal abnormalities'],
            ['value' => 'Family history of congenital heart defects'],
            ['value' => 'Maternal infections during pregnancy'],
            ['value' => 'Maternal diabetes or certain medications during pregnancy'],
            ['value' => 'Abnormal heart development during fetal growth'],
        ],
                'risks' => [
            ['value' => 'Heart failure and poor oxygen circulation'],
            ['value' => 'Pulmonary hypertension'],
            ['value' => 'Arrhythmias and conduction abnormalities'],
            ['value' => 'Increased risk of infective endocarditis'],
            ['value' => 'Delayed growth and developmental issues in children'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Echocardiography and cardiac imaging evaluation'],
            ['value' => 'Medications for heart failure or rhythm control'],
            ['value' => 'Catheter-based corrective procedures'],
            ['value' => 'Open-heart surgical repair or reconstruction'],
            ['value' => 'Lifelong cardiology follow-up and rehabilitation'],
        ],
                'recovery' => 'Many congenital heart defects can be successfully corrected or managed with modern medical and surgical treatment. Early diagnosis and regular cardiac follow-up significantly improve survival and quality of life.',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Congenital Heart Disease (Pediatric and Adult)',
                'meta_description' => 'Congenital Heart Disease (CHD) refers to structural abnormalities of the heart or major blood vessels that are present from birth. These defects may affect hear',
                'meta_keywords' => '',
            ]
        );
    }
}
