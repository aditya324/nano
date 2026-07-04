<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCriticalCareRehabilitationFollowUpPostCriticalCareRehabilitationFollowUpConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Critical Care Rehabilitation & Follow-Up  Post-Critical Care Rehabilitation & Follow-Up')],
            [
                'name' => 'Post-Critical Care Rehabilitation & Follow-Up  Post-Critical Care Rehabilitation & Follow-Up',
                'slug' => Str::slug('Post-Critical Care Rehabilitation & Follow-Up  Post-Critical Care Rehabilitation & Follow-Up'),
                'h1' => 'Post-Critical Care Rehabilitation & Follow-Up  Post-Critical Care Rehabilitation & Follow-Up',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Post-Critical Care Rehabilitation & Follow-Up  Post-Critical Care Rehabilitation & Follow-Up',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
