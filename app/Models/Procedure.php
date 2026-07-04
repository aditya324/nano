<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Procedure extends Model
{


    use Searchable;
    protected $fillable = [
        'title',
        'h1',
        'slug',
        'introduction',
        'what_is',
        'symptoms',
        'causes',
        'condition_risks',
        'preventions',
        'diagnosis_tests',
        'treatment_overview',
        'surgery_types',
        'recovery_timeline',
        'post_op_care',
        'surgery_risks',
        'long_term_outlook',
        'conclusion',
        'seo_title',
        'banner_image',
        'related_image',
        'seo_description',
        'seo_keywords',
        'is_active',
    ];

    protected $casts = [
        'symptoms' => 'array',
        'causes' => 'array',
        'condition_risks' => 'array',
        'preventions' => 'array',
        'diagnosis_tests' => 'array',
        'surgery_types' => 'array',
        'recovery_timeline' => 'array',
        'post_op_care' => 'array',
        'surgery_risks' => 'array',
        'is_active' => 'boolean',
    ];

    public function faqs()
    {
        return $this->hasMany(ProcedureFaq::class)->orderBy('sort_order');
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'introduction' => $this->introduction,
        ];
    }
}
