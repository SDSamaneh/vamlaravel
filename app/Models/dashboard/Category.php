<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    protected $fillable = [
        'author_id',
        'name',
        'slug',
        'description'
    ];



    public function vam(): HasMany
    {
        return $this->hasMany(Vam::class);
    }
}
