<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class HealthFacilityPage extends Model
{


    use Searchable;

    protected $fillable = [
        'slug',

        'h1',
        'hero_title',
        'hero_button_text',
        'hero_button_link',
        'hero_background',
        'about_intro',
        'about_more',
        'overview_content',
        'workflow_content',
        'delivery_content',
        'benefits_content',
        'risks_content',
        'advantages_content',
        'faqs',
        'faqs_content',
        'meta_title',
        'meta_description',
        'is_active',
    ];

    protected $casts = [
        'faqs' => 'array',
        'is_active' => 'boolean',
    ];
}
