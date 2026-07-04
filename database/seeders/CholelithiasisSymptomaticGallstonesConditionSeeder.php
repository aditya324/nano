<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CholelithiasisSymptomaticGallstonesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cholelithiasis / Symptomatic Gallstones')],
            [
                'name' => 'Cholelithiasis / Symptomatic Gallstones',
                'slug' => Str::slug('Cholelithiasis / Symptomatic Gallstones'),
                'h1' => 'Cholelithiasis / Symptomatic Gallstones',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cholelithiasis refers to the formation of stones in the gallbladder. Symptomatic gallstones may block bile flow and cause abdominal pain, nausea, or digestive problems, especially after fatty meals.',
                'about_more' => '',
                'overview' => 'Cholelithiasis refers to the formation of stones in the gallbladder. Symptomatic gallstones may block bile flow and cause abdominal pain, nausea, or digestive problems, especially after fatty meals.',
                'symptoms' => [
            ['value' => 'Pain in the upper right abdomen'],
            ['value' => 'Pain after eating oily or fatty food'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Bloating and indigestion'],
            ['value' => 'Pain radiating to the back or shoulder'],
        ],
                'causes' => [
            ['value' => 'High cholesterol concentration in bile'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Female gender and hormonal factors'],
            ['value' => 'Diabetes and metabolic disorders'],
            ['value' => 'Family history of gallstones'],
        ],
                'risks' => [
            ['value' => 'Acute cholecystitis'],
            ['value' => 'Blockage of bile ducts'],
            ['value' => 'Pancreatitis due to gallstones'],
            ['value' => 'Jaundice and infection'],
            ['value' => 'Recurrent abdominal pain attacks'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Ultrasound abdomen evaluation'],
            ['value' => 'Dietary modification and pain relief'],
            ['value' => 'Laparoscopic gallbladder removal surgery'],
            ['value' => 'ERCP for bile duct stones if needed'],
            ['value' => 'Antibiotics for associated infection'],
        ],
                'recovery' => 'Most patients recover well after laparoscopic surgery. Removal of the gallbladder usually prevents recurrence of symptoms.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Cholelithiasis / Symptomatic Gallstones',
                'meta_description' => 'Cholelithiasis refers to the formation of stones in the gallbladder. Symptomatic gallstones may block bile flow and cause abdominal pain, nausea, or digestive p',
                'meta_keywords' => '',
            ]
        );
    }
}
