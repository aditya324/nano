<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LichenPlanusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lichen Planus')],
            [
                'name' => 'Lichen Planus',
                'slug' => Str::slug('Lichen Planus'),
                'h1' => 'Lichen Planus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lichen planus is an inflammatory skin condition that causes a rash to develop on the skin, mouth, nails, scalp, or genital areas. The condition commonly appears as purple, itchy, flat-topped bumps and may affect one area or multiple parts of the body simultaneously. Lichen planus is believed to be related to immune system dysfunction and can vary from mild irritation to chronic discomfort.',
                'about_more' => '',
                'overview' => 'Lichen planus is an inflammatory skin condition that causes a rash to develop on the skin, mouth, nails, scalp, or genital areas. The condition commonly appears as purple, itchy, flat-topped bumps and may affect one area or multiple parts of the body simultaneously. Lichen planus is believed to be related to immune system dysfunction and can vary from mild irritation to chronic discomfort.',
                'symptoms' => [
            ['value' => 'Purple, shiny, flat bumps on the skin, especially on the wrists, forearms, or ankles'],
            ['value' => 'Lines or streaks of rash where the skin has been scratched'],
            ['value' => 'Lacy white patches inside the mouth or on the tongue'],
            ['value' => 'Painful sores in the mouth or genital region'],
            ['value' => 'Dark lines or abnormalities affecting the nails'],
        ],
                'causes' => [
            ['value' => 'Hepatitis C infection'],
            ['value' => 'Certain pain relievers and medications'],
            ['value' => 'Allergic reactions to dental filling materials or metals'],
            ['value' => 'Medications used for arthritis, heart disease, or high blood pressure'],
            ['value' => 'Nonsteroidal anti-inflammatory drugs (NSAIDs) and immune-related triggers'],
        ],
                'risks' => [
            ['value' => 'Persistent itching and skin discomfort'],
            ['value' => 'Darkening or discoloration of affected skin after healing'],
            ['value' => 'Painful oral or genital ulcers affecting eating or daily activities'],
            ['value' => 'Nail damage or permanent nail changes'],
            ['value' => 'Emotional stress and reduced quality of life due to chronic symptoms'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical corticosteroids and anti-inflammatory medications'],
            ['value' => 'Oral medications or immunosuppressive therapy for severe cases'],
            ['value' => 'Antihistamines to reduce itching and irritation'],
            ['value' => 'Phototherapy (light therapy) for widespread skin involvement'],
            ['value' => 'Regular dermatologic follow-up and trigger management'],
        ],
                'recovery' => 'The long-term outlook for lichen planus varies depending on the severity and location of involvement. Many cases improve gradually over time with proper treatment, although some individuals may experience recurrent or chronic symptoms. Early diagnosis, trigger avoidance, regular dermatologic care, and supportive treatment can significantly improve symptom control and overall quality of life. —-------------------------------- 12. Seborrheic Dermatitis Seborrheic Dermatitis',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Lichen Planus',
                'meta_description' => 'Lichen planus is an inflammatory skin condition that causes a rash to develop on the skin, mouth, nails, scalp, or genital areas. The condition commonly appears',
                'meta_keywords' => '',
            ]
        );
    }
}
