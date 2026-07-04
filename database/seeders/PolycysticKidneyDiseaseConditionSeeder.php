<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PolycysticKidneyDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Polycystic Kidney Disease')],
            [
                'name' => 'Polycystic Kidney Disease',
                'slug' => Str::slug('Polycystic Kidney Disease'),
                'h1' => 'Polycystic Kidney Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Polycystic kidney disease (PKD) is a genetic disorder characterized by the development of multiple fluid-filled cysts inside the kidneys. Over time, these cysts enlarge and gradually impair kidney function, potentially leading to chronic kidney disease or kidney failure.',
                'about_more' => '',
                'overview' => 'Polycystic kidney disease (PKD) is a genetic disorder characterized by the development of multiple fluid-filled cysts inside the kidneys. Over time, these cysts enlarge and gradually impair kidney function, potentially leading to chronic kidney disease or kidney failure.',
                'symptoms' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Flank or abdominal pain'],
            ['value' => 'Blood in urine'],
            ['value' => 'Frequent urinary tract infections'],
            ['value' => 'Enlarged kidneys and abdominal swelling'],
        ],
                'causes' => [
            ['value' => 'Inherited genetic mutations'],
            ['value' => 'Family history of PKD'],
            ['value' => 'Progressive cyst enlargement with age'],
            ['value' => 'Associated liver cysts or vascular abnormalities'],
            ['value' => 'Genetic transmission from affected parents'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Recurrent kidney infections or stones'],
            ['value' => 'Brain aneurysm risk in some patients'],
            ['value' => 'Chronic pain and hypertension'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood pressure control and kidney-protective therapy'],
            ['value' => 'Pain management and infection treatment'],
            ['value' => 'Regular kidney imaging and monitoring'],
            ['value' => 'Dietary and lifestyle modifications'],
            ['value' => 'Dialysis or kidney transplantation in advanced disease'],
        ],
                'recovery' => 'PKD is a lifelong condition, but early management can slow disease progression and reduce complications. Many patients maintain kidney function for years with regular nephrology care.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Polycystic Kidney Disease',
                'meta_description' => 'Polycystic kidney disease (PKD) is a genetic disorder characterized by the development of multiple fluid-filled cysts inside the kidneys. Over time, these cysts',
                'meta_keywords' => '',
            ]
        );
    }
}
