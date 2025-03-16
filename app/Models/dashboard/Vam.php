<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vam extends Model
{
    protected $fillable = [
        'name',
        'idCard',
        'departmans_id',
        'supervisors_id',
        'price',
        'category_id',
        'description1',
        'resone',
        'member',
        'status',
        'validationvams',
        'memberDate',
        'memberPrice',
        'debt',
        'lastSalary',
        'maxVam',
        'number',
        'date',
        'description2',
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
