<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageSectionItem extends Model
{
    protected $fillable = [
        'package_section_id',
        'item',
        'sort_order',
    ];

    public function section()
    {
        return $this->belongsTo(PackageSection::class, 'package_section_id');
    }
}

