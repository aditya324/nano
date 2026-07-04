<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EarPainOtalgiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ear Pain (Otalgia)')],
            [
                'name' => 'Ear Pain (Otalgia)',
                'slug' => Str::slug('Ear Pain (Otalgia)'),
                'h1' => 'Ear Pain (Otalgia)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ear pain, also known as otalgia, is a common ENT condition that may arise from infections, inflammation, injury, pressure changes, or referred pain from nearby structures such as the throat or teeth. Ear pain can affect children and adults and may range from mild discomfort to severe throbbing pain that interferes with sleep and daily activities.',
                'about_more' => '',
                'overview' => 'Ear pain, also known as otalgia, is a common ENT condition that may arise from infections, inflammation, injury, pressure changes, or referred pain from nearby structures such as the throat or teeth. Ear pain can affect children and adults and may range from mild discomfort to severe throbbing pain that interferes with sleep and daily activities.',
                'symptoms' => [
            ['value' => 'Sharp, throbbing, or burning ear pain'],
            ['value' => 'Sensation of fullness or pressure in the ear'],
            ['value' => 'Difficulty hearing or muffled sounds'],
            ['value' => 'Fever or irritability in children'],
            ['value' => 'Pain worsening while chewing or lying down'],
        ],
                'causes' => [
            ['value' => 'Ear infections such as otitis media or externa'],
            ['value' => 'Impacted ear wax buildup'],
            ['value' => 'Sinus or throat infections'],
            ['value' => 'Trauma or foreign body in the ear'],
            ['value' => 'Dental infections or jaw joint disorders'],
        ],
                'risks' => [
            ['value' => 'Temporary or permanent hearing loss'],
            ['value' => 'Spread of infection to nearby structures'],
            ['value' => 'Chronic ear disease and recurrent infections'],
            ['value' => 'Sleep disturbances and irritability'],
            ['value' => 'Eardrum damage in severe infections'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and ear cleaning'],
            ['value' => 'Antibiotics or antifungal medications if needed'],
            ['value' => 'Pain relief medications and ear drops'],
            ['value' => 'Treatment of underlying throat or dental causes'],
            ['value' => 'Surgical drainage in severe infections'],
        ],
                'recovery' => 'Most cases improve with early diagnosis and proper treatment. Untreated infections may lead to chronic ear disease or hearing complications.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Ear Pain (Otalgia)',
                'meta_description' => 'Ear pain, also known as otalgia, is a common ENT condition that may arise from infections, inflammation, injury, pressure changes, or referred pain from nearby ',
                'meta_keywords' => '',
            ]
        );
    }
}
