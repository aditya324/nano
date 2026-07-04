<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConditionFaq extends Model
{
    protected $fillable = [
        'condition_id',
        'question',
        'answer',
        'sort_order',
    ];

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
