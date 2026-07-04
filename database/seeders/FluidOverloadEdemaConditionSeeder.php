<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FluidOverloadEdemaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fluid Overload / Edema')],
            [
                'name' => 'Fluid Overload / Edema',
                'slug' => Str::slug('Fluid Overload / Edema'),
                'h1' => 'Fluid Overload / Edema',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fluid overload, also known as edema when swelling is present, is a medical condition characterized by excessive accumulation of fluid within the body’s tissues, blood vessels, or body cavities. This condition commonly affects the legs, lungs, abdomen, and other tissues, leading to swelling, breathing difficulty, and impaired organ function. Fluid overload may occur due to heart failure, kidney disease, liver disease, hormonal imbalance, or excessive fluid retention. Early diagnosis and proper medical management are essential to relieve symptoms, maintain fluid balance, and prevent serious complications.',
                'about_more' => '',
                'overview' => 'Fluid overload, also known as edema when swelling is present, is a medical condition characterized by excessive accumulation of fluid within the body’s tissues, blood vessels, or body cavities. This condition commonly affects the legs, lungs, abdomen, and other tissues, leading to swelling, breathing difficulty, and impaired organ function. Fluid overload may occur due to heart failure, kidney disease, liver disease, hormonal imbalance, or excessive fluid retention. Early diagnosis and proper medical management are essential to relieve symptoms, maintain fluid balance, and prevent serious complications.',
                'symptoms' => [
            ['value' => 'Swelling of the legs, ankles, feet, or face'],
            ['value' => 'Sudden weight gain due to fluid retention'],
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Abdominal bloating or fluid accumulation'],
            ['value' => 'Fatigue, reduced physical activity, or tightness of the skin'],
        ],
                'causes' => [
            ['value' => 'Heart failure reducing effective blood circulation'],
            ['value' => 'Kidney disease impairing fluid and salt balance'],
            ['value' => 'Chronic liver disease causing fluid accumulation'],
            ['value' => 'Excessive salt intake or intravenous fluid overload'],
            ['value' => 'Hormonal imbalance, medications, or poor lymphatic drainage affecting fluid regulation'],
        ],
                'risks' => [
            ['value' => 'Respiratory distress due to fluid accumulation in the lungs'],
            ['value' => 'Reduced oxygen supply and cardiovascular strain'],
            ['value' => 'Kidney dysfunction or worsening organ failure'],
            ['value' => 'Skin breakdown, infection, or reduced mobility due to severe swelling'],
            ['value' => 'Increased risk of hospitalization and life-threatening complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for fluid overload and edema focuses on removing excess fluid, correcting the underlying cause, improving circulation, and preventing complications. Management may include diuretic medications, fluid and salt restriction, oxygen therapy, kidney or heart disease management, compression therapy, and lifestyle modification. Severe cases may require hospitalization, intravenous medications, dialysis, or intensive monitoring. Patients may also benefit from nutritional counseling, weight monitoring, physiotherapy, cardiovascular and renal evaluation, specialist follow-up, and long-term fluid management programs to maintain overall health and stability.'],
        ],
                'recovery' => 'The long-term outlook for fluid overload and edema depends on the underlying medical condition, severity of fluid retention, treatment response, and overall patient health. Early diagnosis, medication adherence, healthy nutrition, fluid management, regular exercise, monitoring of weight and swelling, treatment of underlying diseases, and continuous medical follow-up significantly help reduce complications, improve circulation and breathing, preserve organ function, and enhance overall quality of life. ______________ 25. Multi-Organ Dysfunction / Critical Internal Medicine Cases Multi-Organ Dysfunction / Critical Internal Medicine Cases',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Fluid Overload / Edema',
                'meta_description' => 'Fluid overload, also known as edema when swelling is present, is a medical condition characterized by excessive accumulation of fluid within the body’s tissues,',
                'meta_keywords' => '',
            ]
        );
    }
}
