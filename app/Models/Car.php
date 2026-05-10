<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'color',
        'license_plate',
        'user_id',
        'remolque_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function remolque()
    {
        return $this->belongsTo(Remolque::class); 
    }

}