<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AutoimmuneDisordersSLERAVasculitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Autoimmune Disorders (SLE, RA, Vasculitis)')],
            [
                'name' => 'Autoimmune Disorders (SLE, RA, Vasculitis)',
                'slug' => Str::slug('Autoimmune Disorders (SLE, RA, Vasculitis)'),
                'h1' => 'Autoimmune Disorders (SLE, RA, Vasculitis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Autoimmune disorders are conditions in which the body’s immune system mistakenly attacks its own healthy tissues and organs, leading to chronic inflammation and tissue damage. Conditions such as Systemic Lupus Erythematosus (SLE), Rheumatoid Arthritis (RA), and vasculitis can affect multiple body systems including the joints, skin, blood vessels, kidneys, lungs, heart, and nervous system. These disorders may range from mild chronic illness to severe organ-threatening disease, requiring early diagnosis and long-term medical management to control inflammation and prevent complications.',
                'about_more' => '',
                'overview' => 'Autoimmune disorders are conditions in which the body’s immune system mistakenly attacks its own healthy tissues and organs, leading to chronic inflammation and tissue damage. Conditions such as Systemic Lupus Erythematosus (SLE), Rheumatoid Arthritis (RA), and vasculitis can affect multiple body systems including the joints, skin, blood vessels, kidneys, lungs, heart, and nervous system. These disorders may range from mild chronic illness to severe organ-threatening disease, requiring early diagnosis and long-term medical management to control inflammation and prevent complications.',
                'symptoms' => [
            ['value' => 'Joint pain, swelling, or stiffness'],
            ['value' => 'Fatigue, weakness, or fever'],
            ['value' => 'Skin rashes or sensitivity to sunlight'],
            ['value' => 'Muscle pain, numbness, or weakness'],
            ['value' => 'Weight loss, organ-related symptoms, or inflammation affecting blood vessels and tissues'],
        ],
                'causes' => [
            ['value' => 'Abnormal immune system activity attacking healthy body tissues'],
            ['value' => 'Genetic predisposition or family history of autoimmune disease'],
            ['value' => 'Infections, environmental triggers, or hormonal influences'],
            ['value' => 'Chronic stress or immune system dysregulation'],
            ['value' => 'Certain medications or unknown immune-related factors contributing to inflammation'],
        ],
                'risks' => [
            ['value' => 'Joint damage, deformities, or reduced mobility'],
            ['value' => 'Kidney, lung, heart, or nervous system involvement'],
            ['value' => 'Chronic pain, fatigue, and reduced quality of life'],
            ['value' => 'Blood vessel inflammation causing circulation problems or organ damage'],
            ['value' => 'Increased risk of infections due to immune suppression or long-term medication use'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for autoimmune disorders focuses on controlling inflammation, suppressing abnormal immune activity, relieving symptoms, preventing organ damage, and improving overall quality of life. Management may include corticosteroids, immunosuppressive medications, biologic therapy, pain management, physiotherapy, and treatment of affected organs or systems. Patients may also benefit from nutritional counseling, stress management, lifestyle modification, rehabilitation programs, vaccination, rheumatology follow-up, and long-term monitoring to optimize immune balance and maintain overall health.'],
        ],
                'recovery' => 'The long-term outlook for autoimmune disorders depends on the specific condition, severity of organ involvement, treatment response, and overall patient health. Early diagnosis, medication adherence, healthy lifestyle habits, balanced nutrition, regular exercise, stress reduction, routine medical monitoring, and continuous specialist follow-up significantly help reduce inflammation, prevent complications, preserve organ function, improve mobility and daily functioning, and enhance overall quality of life. ______________',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Autoimmune Disorders (SLE, RA, Vasculitis)',
                'meta_description' => 'Autoimmune disorders are conditions in which the body’s immune system mistakenly attacks its own healthy tissues and organs, leading to chronic inflammation and',
                'meta_keywords' => '',
            ]
        );
    }
}
