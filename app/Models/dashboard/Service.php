<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{

    protected $fillable = [
        'name',
        'idCard',
        'departmans_id',
        'supervisors_id',
        'price',
        'category_id',
        'description',
        'status',
        'memberDate',
        'memberPrice',
        'debt',
        'lastSalary',
        'date',
        'description2',
        'validationHr',
        'validationManager1',
        'validationManager2'
    ];



    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function departmans(): BelongsTo
    {
        return $this->belongsTo(Departmans::class, 'departmans_id');
    }
    public function supervisors(): BelongsTo
    {
        return $this->belongsTo(Supervisors::class, 'supervisors_id');
    }
}
