<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Speciality extends Model
{
    //



    use Searchable;


    public function searchableAs()
    {
        return 'specialities';
    }


      public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'about_intro' => $this->about_intro, // IMPORTANT
        ];
    }
    protected $fillable = [
        'name',
        'slug',
        'banner_image',
        'icon',
        'related_image',
        'about_intro',
        'about_more',
        'overview_content',
        'treatments_content',
        'facilities_content',
        'conditions_content',
        'risks_content',
        'subspecialties_content',
        'meta_title',
        'meta_description',
        'is_active',
    ];


    public function faqs()
    {
        return $this->hasMany(SpecialityFaq::class)->orderBy('sort_order');
    }


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
