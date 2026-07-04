<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofOralSubmucousFibrosisSurgicalReleaseGraftingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Oral Submucous Fibrosis (Surgical Release & Grafting)')],
            [
                'name' => 'Management of Oral Submucous Fibrosis (Surgical Release & Grafting)',
                'slug' => Str::slug('Management of Oral Submucous Fibrosis (Surgical Release & Grafting)'),
                'h1' => 'Management of Oral Submucous Fibrosis (Surgical Release & Grafting)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of Oral Submucous Fibrosis (OSMF) involves specialized medical and surgical treatments aimed at improving mouth opening, reducing tissue stiffness, relieving symptoms, and restoring normal oral function. Surgical release and grafting procedures are commonly performed in advanced cases where severe fibrosis restricts jaw movement and affects eating, speaking, and oral hygiene.',
                'about_more' => '',
                'overview' => 'Oral Submucous Fibrosis is a chronic progressive condition characterized by fibrosis and stiffening of the oral tissues, usually associated with areca nut and tobacco use. In advanced stages, fibrous bands inside the cheeks and mouth severely limit mouth opening. Surgical management involves release of fibrotic bands, removal of scarred tissue, and reconstruction using skin grafts, buccal fat pad grafts, or flap procedures to restore flexibility and oral function. Treatment is often combined with physiotherapy, nutritional support, and long-term habit cessation counseling.',
                'symptoms' => [
            ['value' => 'Restricted mouth opening and jaw movement'],
            ['value' => 'Burning sensation while eating spicy or hot foods'],
            ['value' => 'Tightness and stiffness of the cheeks and oral tissues'],
            ['value' => 'Difficulty chewing, speaking, or swallowing'],
            ['value' => 'Thickened oral mucosa with ulcers, white patches, or fibrous bands'],
        ],
                'causes' => [
            ['value' => 'Chewing areca nut, betel nut, gutka, or pan masala products'],
            ['value' => 'Tobacco use in smoked or smokeless forms'],
            ['value' => 'Chronic irritation of oral tissues'],
            ['value' => 'Nutritional deficiencies and poor oral health'],
            ['value' => 'Long-term fibrosis and progressive oral tissue scarring'],
        ],
                'risks' => [
            ['value' => 'Progressive reduction in mouth opening'],
            ['value' => 'Difficulty maintaining oral hygiene and nutrition'],
            ['value' => 'Chronic pain, ulcers, and speech impairment'],
            ['value' => 'Increased risk of oral cancer development'],
            ['value' => 'Recurrence of fibrosis if harmful habits continue'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical oral examination and biopsy evaluation when required'],
            ['value' => 'Complete cessation of areca nut and tobacco-related habits'],
            ['value' => 'Medical management with nutritional supplements and physiotherapy'],
            ['value' => 'Surgical release of fibrotic bands to improve mouth opening'],
            ['value' => 'Reconstruction using skin grafts, buccal fat pad grafts, or flap procedures with long-term rehabilitation support'],
        ],
                'recovery' => '',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Management of Oral Submucous Fibrosis (Surgical Release & Grafting)',
                'meta_description' => 'Management of Oral Submucous Fibrosis (OSMF) involves specialized medical and surgical treatments aimed at improving mouth opening, reducing tissue stiffness, r',
                'meta_keywords' => '',
            ]
        );
    }
}
