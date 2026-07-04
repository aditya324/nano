<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FungalBacterialInfectionsCellulitisAbscessConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Fungal / Bacterial Infections (Cellulitis, Abscess)')],
            [
                'name' => 'Fungal / Bacterial Infections (Cellulitis, Abscess)',
                'slug' => Str::slug('Fungal / Bacterial Infections (Cellulitis, Abscess)'),
                'h1' => 'Fungal / Bacterial Infections (Cellulitis, Abscess)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic patients are highly susceptible to fungal and bacterial foot infections due to poor immunity, reduced circulation, and delayed wound healing.',
                'about_more' => '',
                'overview' => 'Diabetic patients are highly susceptible to fungal and bacterial foot infections due to poor immunity, reduced circulation, and delayed wound healing.',
                'symptoms' => [
            ['value' => 'Redness and swelling of the foot'],
            ['value' => 'Warmth and tenderness'],
            ['value' => 'Pus-filled abscess formation'],
            ['value' => 'Itching or scaling skin in fungal infections'],
            ['value' => 'Fever in severe infections'],
        ],
                'causes' => [
            ['value' => 'Poor blood sugar control'],
            ['value' => 'Foot ulcers and skin cracks'],
            ['value' => 'Poor hygiene and moisture retention'],
            ['value' => 'Trauma or minor injuries'],
            ['value' => 'Reduced immunity and circulation'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to deeper tissues'],
            ['value' => 'Osteomyelitis and bone infection'],
            ['value' => 'Sepsis and systemic illness'],
            ['value' => 'Gangrene formation'],
            ['value' => 'Limb amputation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotic or antifungal medications'],
            ['value' => 'Drainage of abscesses'],
            ['value' => 'Wound cleaning and dressing'],
            ['value' => 'Blood sugar management'],
            ['value' => 'Surgical debridement in severe infections'],
        ],
                'recovery' => 'Prompt treatment and proper diabetic foot care help prevent serious complications and improve healing.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Fungal / Bacterial Infections (Cellulitis, Abscess)',
                'meta_description' => 'Diabetic patients are highly susceptible to fungal and bacterial foot infections due to poor immunity, reduced circulation, and delayed wound healing.',
                'meta_keywords' => '',
            ]
        );
    }
}
