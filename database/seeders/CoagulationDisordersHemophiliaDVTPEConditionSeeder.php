<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoagulationDisordersHemophiliaDVTPEConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Coagulation Disorders (Hemophilia, DVT, PE)')],
            [
                'name' => 'Coagulation Disorders (Hemophilia, DVT, PE)',
                'slug' => Str::slug('Coagulation Disorders (Hemophilia, DVT, PE)'),
                'h1' => 'Coagulation Disorders (Hemophilia, DVT, PE)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Coagulation disorders are medical conditions that affect the body’s ability to form or regulate blood clots properly, leading to excessive bleeding or abnormal clot formation. Conditions such as hemophilia, Deep Vein Thrombosis (DVT), and Pulmonary Embolism (PE) can significantly impact circulation, organ function, and overall health. Hemophilia is a genetic bleeding disorder caused by deficiency of clotting factors, while DVT and PE occur due to abnormal blood clot formation in veins and lungs. Early diagnosis and proper medical management are essential to prevent serious complications and improve long-term health outcomes.',
                'about_more' => '',
                'overview' => 'Coagulation disorders are medical conditions that affect the body’s ability to form or regulate blood clots properly, leading to excessive bleeding or abnormal clot formation. Conditions such as hemophilia, Deep Vein Thrombosis (DVT), and Pulmonary Embolism (PE) can significantly impact circulation, organ function, and overall health. Hemophilia is a genetic bleeding disorder caused by deficiency of clotting factors, while DVT and PE occur due to abnormal blood clot formation in veins and lungs. Early diagnosis and proper medical management are essential to prevent serious complications and improve long-term health outcomes.',
                'symptoms' => [
            ['value' => 'Excessive bleeding or easy bruising'],
            ['value' => 'Swelling, pain, or redness in the legs due to blood clots'],
            ['value' => 'Shortness of breath or chest pain in pulmonary embolism'],
            ['value' => 'Fatigue, weakness, or prolonged bleeding after injury or surgery'],
            ['value' => 'Sudden breathing difficulty, dizziness, or rapid heartbeat in severe clotting disorders'],
        ],
                'causes' => [
            ['value' => 'Genetic clotting factor deficiency causing hemophilia'],
            ['value' => 'Prolonged immobility, surgery, or hospitalization increasing clot risk'],
            ['value' => 'Smoking, obesity, or hormonal medications affecting blood clotting'],
            ['value' => 'Inherited clotting disorders or family history of thrombosis'],
            ['value' => 'Cancer, infections, pregnancy, or chronic illness increasing coagulation abnormalities'],
        ],
                'risks' => [
            ['value' => 'Severe bleeding episodes or internal hemorrhage'],
            ['value' => 'Deep vein thrombosis causing circulation problems'],
            ['value' => 'Pulmonary embolism leading to respiratory or cardiac emergencies'],
            ['value' => 'Joint damage and chronic pain in repeated bleeding disorders'],
            ['value' => 'Stroke, organ damage, or life-threatening clot-related complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for coagulation disorders focuses on controlling bleeding, preventing abnormal clot formation, improving circulation, and reducing complications. Management may include clotting factor replacement therapy, blood thinners (anticoagulants), compression therapy, thrombolytic medications, oxygen support, and lifestyle modification. Severe cases may require hospitalization, emergency clot removal procedures, or intensive care support. Patients may also benefit from physiotherapy, nutritional counseling, smoking cessation, preventive healthcare, hematology follow-up, and long-term blood monitoring to maintain safe coagulation balance and overall health.'],
        ],
                'recovery' => 'The long-term outlook for coagulation disorders depends on the specific condition, severity, treatment adherence, and overall patient health. Early diagnosis, medication compliance, regular blood monitoring, healthy lifestyle habits, physical activity, smoking cessation, preventive care, and continuous medical follow-up significantly help reduce complications, improve circulation, prevent bleeding or clot-related emergencies, preserve organ function, and enhance overall quality of life. _____________ 21. Chronic Infectious Diseases (HIV, Hepatitis B/C) Chronic Infectious Diseases (HIV, Hepatitis B/C)',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Coagulation Disorders (Hemophilia, DVT, PE)',
                'meta_description' => 'Coagulation disorders are medical conditions that affect the body’s ability to form or regulate blood clots properly, leading to excessive bleeding or abnormal ',
                'meta_keywords' => '',
            ]
        );
    }
}
