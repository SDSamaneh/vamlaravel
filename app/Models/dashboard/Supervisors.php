<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supervisors extends Model
{
    protected $fillable = [
        'author_id',
        'name',
        'idCard',
        'departmans_id',

    ];

    public function departmans(): BelongsTo
    {
        return $this->belongsTo(Departmans::class);
    }
}





