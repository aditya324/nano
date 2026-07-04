<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricAtopicDermatitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Atopic Dermatitis')],
            [
                'name' => 'Pediatric Atopic Dermatitis',
                'slug' => Str::slug('Pediatric Atopic Dermatitis'),
                'h1' => 'Pediatric Atopic Dermatitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric atopic dermatitis is a common chronic inflammatory skin condition in infants and children that causes dry, itchy, and inflamed skin. It is one of the most common forms of eczema in children and often develops during infancy or early childhood. The condition may occur in flare-ups and is commonly associated with allergies, asthma, or sensitive skin.',
                'about_more' => '',
                'overview' => 'Pediatric atopic dermatitis is a common chronic inflammatory skin condition in infants and children that causes dry, itchy, and inflamed skin. It is one of the most common forms of eczema in children and often develops during infancy or early childhood. The condition may occur in flare-ups and is commonly associated with allergies, asthma, or sensitive skin.',
                'symptoms' => [
            ['value' => 'Dry, itchy, or irritated skin'],
            ['value' => 'Red or inflamed skin patches'],
            ['value' => 'Cracked, rough, or scaly skin'],
            ['value' => 'Skin rash commonly affecting the cheeks, arms, legs, or skin folds'],
            ['value' => 'Oozing, crusting, or thickened skin in severe cases'],
        ],
                'causes' => [
            ['value' => 'Genetic predisposition and family history of eczema or allergies'],
            ['value' => 'Exposure to allergens, dust, or irritants'],
            ['value' => 'Dry weather, heat, or temperature changes'],
            ['value' => 'Certain soaps, detergents, fabrics, or skincare products'],
            ['value' => 'Food allergies or skin infections in some children'],
        ],
                'risks' => [
            ['value' => 'Persistent itching and sleep disturbances'],
            ['value' => 'Skin infections caused by scratching or damaged skin'],
            ['value' => 'Thickened or discolored skin from repeated irritation'],
            ['value' => 'Increased risk of asthma or allergic conditions'],
            ['value' => 'Emotional stress and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular use of moisturizers and gentle skincare products'],
            ['value' => 'Topical corticosteroids and anti-inflammatory medications'],
            ['value' => 'Antihistamines for itching relief when required'],
            ['value' => 'Avoidance of allergens and known triggers'],
            ['value' => 'Advanced dermatologic therapies for severe or persistent cases'],
        ],
                'recovery' => 'The long-term outlook for pediatric atopic dermatitis is generally positive with proper skin care and medical management. Many children experience improvement as they grow older, although some may continue to have sensitive skin or recurrent flare-ups. Regular dermatologic care, trigger management, and healthy skincare habits help improve comfort, reduce symptoms, and support long-term skin health. _______________________',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Pediatric Atopic Dermatitis',
                'meta_description' => 'Pediatric atopic dermatitis is a common chronic inflammatory skin condition in infants and children that causes dry, itchy, and inflamed skin. It is one of the ',
                'meta_keywords' => '',
            ]
        );
    }
}
