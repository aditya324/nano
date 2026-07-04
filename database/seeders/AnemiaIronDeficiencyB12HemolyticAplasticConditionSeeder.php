<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnemiaIronDeficiencyB12HemolyticAplasticConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)')],
            [
                'name' => 'Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)',
                'slug' => Str::slug('Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)'),
                'h1' => 'Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Anemia is a medical condition characterized by a reduced number of healthy red blood cells or decreased hemoglobin levels, leading to inadequate oxygen delivery throughout the body. Different types of anemia include iron deficiency anemia, vitamin B12 deficiency anemia, hemolytic anemia, and aplastic anemia, each caused by different underlying mechanisms affecting red blood cell production or survival. Anemia can range from mild fatigue to severe life-threatening complications depending on the severity and underlying cause. Early diagnosis and proper treatment are essential to restore healthy blood function and prevent complications.',
                'about_more' => '',
                'overview' => 'Anemia is a medical condition characterized by a reduced number of healthy red blood cells or decreased hemoglobin levels, leading to inadequate oxygen delivery throughout the body. Different types of anemia include iron deficiency anemia, vitamin B12 deficiency anemia, hemolytic anemia, and aplastic anemia, each caused by different underlying mechanisms affecting red blood cell production or survival. Anemia can range from mild fatigue to severe life-threatening complications depending on the severity and underlying cause. Early diagnosis and proper treatment are essential to restore healthy blood function and prevent complications.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Pale skin or pale inner eyelids'],
            ['value' => 'Shortness of breath or dizziness'],
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Headaches, poor concentration, or cold hands and feet'],
        ],
                'causes' => [
            ['value' => 'Iron deficiency due to poor nutrition or blood loss'],
            ['value' => 'Vitamin B12 or folate deficiency affecting red blood cell production'],
            ['value' => 'Autoimmune disorders or infections causing destruction of red blood cells in hemolytic anemia'],
            ['value' => 'Bone marrow failure or immune-related damage in aplastic anemia'],
            ['value' => 'Chronic diseases, kidney disorders, medications, or genetic conditions affecting blood formation'],
        ],
                'risks' => [
            ['value' => 'Severe fatigue and reduced physical performance'],
            ['value' => 'Heart strain, palpitations, or heart failure in severe anemia'],
            ['value' => 'Neurological complications in prolonged vitamin B12 deficiency'],
            ['value' => 'Increased risk of infections or bleeding in aplastic anemia'],
            ['value' => 'Organ damage and reduced oxygen supply if severe anemia remains untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for anemia focuses on correcting the underlying cause, restoring healthy red blood cell levels, improving oxygen delivery, and preventing complications. Management may include iron supplementation, vitamin B12 or folate replacement, dietary modification, blood transfusions, medications to control immune-related blood destruction, bone marrow support therapy, and treatment of underlying chronic diseases. Severe cases may require hospitalization, immunosuppressive therapy, or bone marrow transplantation. Patients may also benefit from nutritional counseling, preventive health screening, hematology follow-up, and long-term blood monitoring to maintain healthy blood function and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for anemia depends on the specific type, severity, underlying cause, and treatment response. Early diagnosis, proper nutrition, medication adherence, regular blood monitoring, treatment of underlying medical conditions, healthy lifestyle habits, and continuous medical follow-up significantly help restore healthy blood counts, reduce complications, improve energy levels, preserve organ function, and enhance overall quality of life. _____________',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Anemia (Iron Deficiency, B12, Hemolytic, Aplastic)',
                'meta_description' => 'Anemia is a medical condition characterized by a reduced number of healthy red blood cells or decreased hemoglobin levels, leading to inadequate oxygen delivery',
                'meta_keywords' => '',
            ]
        );
    }
}
