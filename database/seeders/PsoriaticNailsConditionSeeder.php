<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PsoriaticNailsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Psoriatic Nails')],
            [
                'name' => 'Psoriatic Nails',
                'slug' => Str::slug('Psoriatic Nails'),
                'h1' => 'Psoriatic Nails',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Psoriatic nail disease, also known as nail psoriasis, is an autoimmune condition that affects the nails of the fingers and toes. It occurs when psoriasis causes rapid buildup and abnormal growth of skin cells around the nails, leading to changes in nail color, texture, and structure. Nail psoriasis may occur alone or along with skin psoriasis and psoriatic arthritis.',
                'about_more' => '',
                'overview' => 'Psoriatic nail disease, also known as nail psoriasis, is an autoimmune condition that affects the nails of the fingers and toes. It occurs when psoriasis causes rapid buildup and abnormal growth of skin cells around the nails, leading to changes in nail color, texture, and structure. Nail psoriasis may occur alone or along with skin psoriasis and psoriatic arthritis.',
                'symptoms' => [
            ['value' => 'Nail discoloration such as yellow, brown, or white patches'],
            ['value' => 'Changes in nail structure including thickening or crumbling'],
            ['value' => 'Small dents or pits on the nail surface'],
            ['value' => 'Separation of the nail from the nail bed'],
            ['value' => 'Brittle, rough, or distorted nails'],
        ],
                'causes' => [
            ['value' => 'Autoimmune reactions affecting skin and nail cells'],
            ['value' => 'Family history of psoriasis or autoimmune disease'],
            ['value' => 'Emotional stress or physical trauma'],
            ['value' => 'Skin injuries or nail damage triggering flare-ups'],
            ['value' => 'Infections or immune system imbalance'],
        ],
                'risks' => [
            ['value' => 'Nail deformity or permanent nail damage'],
            ['value' => 'Pain or discomfort affecting daily activities'],
            ['value' => 'Increased risk of nail infections'],
            ['value' => 'Association with psoriatic arthritis and joint symptoms'],
            ['value' => 'Emotional stress and reduced self-confidence due to nail appearance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical corticosteroids and medicated nail treatments'],
            ['value' => 'Oral medications or biologic therapies for severe psoriasis'],
            ['value' => 'Nail care and protective measures'],
            ['value' => 'Corticosteroid injections around affected nails when required'],
            ['value' => 'Regular dermatology follow-up and management of psoriasis triggers'],
        ],
                'recovery' => 'The long-term outlook for psoriatic nail disease varies depending on the severity of psoriasis and response to treatment. Early diagnosis and continuous dermatologic care can help improve nail appearance, reduce discomfort, and prevent complications. Proper nail care, trigger management, and regular treatment are important for maintaining long-term nail and skin health. _______________________ 20. Chronic Pruritus Chronic Pruritus',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Psoriatic Nails',
                'meta_description' => 'Psoriatic nail disease, also known as nail psoriasis, is an autoimmune condition that affects the nails of the fingers and toes. It occurs when psoriasis causes',
                'meta_keywords' => '',
            ]
        );
    }
}
