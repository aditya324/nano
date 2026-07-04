<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedureFaq extends Model
{
    protected $fillable = [
        'procedure_id',
        'question',
        'answer',
        'sort_order',
    ];

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }
}
