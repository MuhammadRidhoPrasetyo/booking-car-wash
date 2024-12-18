<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StorePhoto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photo',
        'car_store_id',
    ];
}
