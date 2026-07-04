<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImpetigoConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Impetigo')],
            [
                'name' => 'Impetigo',
                'slug' => Str::slug('Impetigo'),
                'h1' => 'Impetigo',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Impetigo is a common and highly contagious bacterial skin infection that mainly affects infants and children, although it can occur at any age. The infection usually develops on the face, especially around the nose and mouth, but may also affect other parts of the body. Impetigo causes itchy sores and blisters that can break open and form honey-colored crusts on the skin.',
                'about_more' => '',
                'overview' => 'Impetigo is a common and highly contagious bacterial skin infection that mainly affects infants and children, although it can occur at any age. The infection usually develops on the face, especially around the nose and mouth, but may also affect other parts of the body. Impetigo causes itchy sores and blisters that can break open and form honey-colored crusts on the skin.',
                'symptoms' => [
            ['value' => 'Reddish sores, often around the nose and mouth'],
            ['value' => 'Itchy blisters or fluid-filled skin lesions'],
            ['value' => 'Honey-colored crusts forming after sores burst'],
            ['value' => 'Mild pain or skin irritation'],
            ['value' => 'Swollen lymph nodes near the infected area in some cases'],
        ],
                'causes' => [
            ['value' => 'Bacterial infection caused by Staphylococcus or Streptococcus bacteria'],
            ['value' => 'Close contact with infected individuals'],
            ['value' => 'Cuts, insect bites, or skin injuries'],
            ['value' => 'Poor hygiene or warm, humid environments'],
            ['value' => 'Skin conditions such as eczema or dermatitis increasing infection risk'],
        ],
                'risks' => [
            ['value' => 'Spread of infection to other body areas'],
            ['value' => 'Skin scarring or discoloration in severe cases'],
            ['value' => 'Cellulitis or deeper skin infections'],
            ['value' => 'Kidney complications in rare untreated infections'],
            ['value' => 'Recurrence of infection due to reinfection or poor hygiene'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical antibiotic creams or ointments'],
            ['value' => 'Oral antibiotics for widespread or severe infections'],
            ['value' => 'Gentle cleansing and proper skin hygiene'],
            ['value' => 'Keeping affected areas clean and covered'],
            ['value' => 'Avoiding scratching and close contact until healing occurs'],
        ],
                'recovery' => 'The long-term outlook for impetigo is generally very good with timely antibiotic treatment and proper hygiene. Most infections heal within a few weeks without complications. Early treatment and preventive care help reduce the spread of infection and lower the risk of recurrence or secondary skin complications. _______________________ 5. Bacterial Skin Infections (Impetigo, Cellulitis) Cellulitis',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Impetigo',
                'meta_description' => 'Impetigo is a common and highly contagious bacterial skin infection that mainly affects infants and children, although it can occur at any age. The infection us',
                'meta_keywords' => '',
            ]
        );
    }
}
