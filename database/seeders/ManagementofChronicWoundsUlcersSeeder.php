<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofChronicWoundsUlcersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Chronic Wounds / Ulcers')],
            [
                'title' => 'Management of Chronic Wounds / Ulcers',
                'slug' => Str::slug('Management of Chronic Wounds / Ulcers'),
                'introduction' => 'Management of chronic wounds and ulcers involves specialized medical care aimed at promoting healing, preventing infection, reducing pain, and improving skin integrity in wounds that fail to heal normally over time. Chronic wounds commonly occur due to diabetes, poor circulation, pressure injuries, infections, or underlying medical conditions.',
                'what_is' => 'Chronic wound management includes wound assessment, cleaning, infection control, advanced dressings, debridement, and supportive therapies to improve healing. Common types of chronic ulcers include diabetic foot ulcers, venous ulcers, arterial ulcers, and pressure sores. Treatment plans are individualized based on the wound type, severity, and underlying medical conditions to achieve optimal healing outcomes.',
                'symptoms' => [
            ['value' => 'Open sores or wounds that heal slowly'],
            ['value' => 'Pain, swelling, or redness around the wound'],
            ['value' => 'Drainage, bleeding, or foul odor from the ulcer'],
            ['value' => 'Skin discoloration or tissue breakdown'],
            ['value' => 'Persistent inflammation or recurrent wound infections'],
        ],
                'causes' => [
            ['value' => 'Chronic wounds and ulcers may develop due to several underlying medical and lifestyle-related factors that interfere with normal wound healing. Diabetes is one of the leading causes, especially in diabetic foot ulcers caused by nerve damage and poor circulation. Venous insufficiency, arterial disease, prolonged pressure on the skin, infections, immobility, poor nutrition, smoking, obesity, and weakened immunity can also contribute to delayed wound healing. In some cases, trauma, burns, surgical wounds, or chronic inflammatory conditions may lead to long-standing ulcers requiring specialized care.'],
        ],
                'condition_risks' => [
            ['value' => 'Severe skin and soft tissue infections'],
            ['value' => 'Delayed wound healing and chronic pain'],
            ['value' => 'Tissue damage or gangrene in severe cases'],
            ['value' => 'Reduced mobility and physical functioning'],
            ['value' => 'Increased risk of hospitalization or surgical intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for chronic wounds and ulcers focus on improving healing, controlling infection, and addressing the underlying cause of the wound. Initial management typically includes wound cleaning, removal of dead tissue through debridement, and application of advanced wound dressings that maintain a healthy healing environment. Antibiotics may be prescribed when infections are present. Specialized therapies such as negative pressure wound therapy, compression therapy for venous ulcers, offloading techniques for diabetic foot ulcers, and skin grafting procedures may be recommended in selected cases. Management of associated medical conditions such as diabetes, vascular disease, and nutritional deficiencies is also essential for successful wound healing. Regular follow-up care and preventive skin protection measures help reduce the risk of recurrence and complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular wound cleaning and dressing changes'],
            ['value' => 'Infection monitoring and antibiotic therapy when required'],
            ['value' => 'Pressure relief and circulation-supportive measures'],
            ['value' => 'Nutritional support and hydration management'],
            ['value' => 'Ongoing wound care follow-up and preventive skin care'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe skin and soft tissue infections'],
            ['value' => 'Delayed wound healing and chronic pain'],
            ['value' => 'Tissue damage or gangrene in severe cases'],
            ['value' => 'Reduced mobility and physical functioning'],
            ['value' => 'Increased risk of hospitalization or surgical intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for chronic wounds and ulcers focus on improving healing, controlling infection, and addressing the underlying cause of the wound. Initial management typically includes wound cleaning, removal of dead tissue through debridement, and application of advanced wound dressings that maintain a healthy healing environment. Antibiotics may be prescribed when infections are present. Specialized therapies such as negative pressure wound therapy, compression therapy for venous ulcers, offloading techniques for diabetic foot ulcers, and skin grafting procedures may be recommended in selected cases. Management of associated medical conditions such as diabetes, vascular disease, and nutritional deficiencies is also essential for successful wound healing. Regular follow-up care and preventive skin protection measures help reduce the risk of recurrence and complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook for chronic wound and ulcer management depends on the underlying cause, severity of the wound, and overall patient health. Early intervention, proper wound care, infection control, and management of contributing medical conditions can significantly improve healing outcomes. Continuous medical follow-up, preventive care, and healthy lifestyle practices are important for long-term recovery and reducing recurrence risk.',
                'conclusion' => '',
                'seo_title' => 'Management of Chronic Wounds / Ulcers',
                'seo_description' => 'Management of chronic wounds and ulcers involves specialized medical care aimed at promoting healing, preventing infection, reducing pain, and improving skin integrity in wounds that fail to heal normally over time. Chronic wounds commonly occur due to diabetes, poor circulation, pressure injuries, infections, or underlying medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
