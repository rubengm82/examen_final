<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remolque extends Model
{
    protected $table = 'remolques';
    
    protected $fillable = [
        'model',
        'kilograms',
        'car_id',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
