<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarStore extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'is_open',
        'is_full',
        'address',
        'phone_number',
        'cs_name',
        'city_id',
    ];
}
