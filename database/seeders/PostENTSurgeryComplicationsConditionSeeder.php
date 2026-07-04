<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostENTSurgeryComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-ENT Surgery Complications')],
            [
                'name' => 'Post-ENT Surgery Complications',
                'slug' => Str::slug('Post-ENT Surgery Complications'),
                'h1' => 'Post-ENT Surgery Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-ENT surgery complications are problems that may occur after surgeries involving the ear, nose, throat, neck, or airway. Complications may range from mild discomfort to serious medical conditions.',
                'about_more' => '',
                'overview' => 'Post-ENT surgery complications are problems that may occur after surgeries involving the ear, nose, throat, neck, or airway. Complications may range from mild discomfort to serious medical conditions.',
                'symptoms' => [
            ['value' => 'Pain and swelling after surgery'],
            ['value' => 'Bleeding from the surgical site'],
            ['value' => 'Fever or signs of infection'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Voice changes or dizziness'],
        ],
                'causes' => [
            ['value' => 'Surgical site infection'],
            ['value' => 'Bleeding or hematoma formation'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Reaction to anesthesia or medications'],
            ['value' => 'Injury to nearby nerves or tissues'],
        ],
                'risks' => [
            ['value' => 'Airway compromise'],
            ['value' => 'Persistent infection or abscess'],
            ['value' => 'Hearing or voice disturbances'],
            ['value' => 'Scar formation and cosmetic issues'],
            ['value' => 'Need for revision surgery'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Postoperative monitoring and follow-up'],
            ['value' => 'Antibiotics and pain management'],
            ['value' => 'Wound care and dressing changes'],
            ['value' => 'Emergency management of bleeding'],
            ['value' => 'Revision surgery if complications persist'],
        ],
                'recovery' => 'Most patients recover successfully with proper postoperative care. Early recognition and treatment of complications improve surgical outcomes.',
                'sort_order' => 50,
                'is_active' => true,
                'meta_title' => 'Post-ENT Surgery Complications',
                'meta_description' => 'Post-ENT surgery complications are problems that may occur after surgeries involving the ear, nose, throat, neck, or airway. Complications may range from mild d',
                'meta_keywords' => '',
            ]
        );
    }
}
