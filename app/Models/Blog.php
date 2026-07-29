<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'h1',
        'title',
        'slug',
        'excerpt',
        'featured_image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content_blocks',
        'faqs',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'content_blocks' => 'array',
        'faqs'           => 'array',
        'is_published'   => 'boolean',
        'published_at'   => 'datetime',
    ];
}
