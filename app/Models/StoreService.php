<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreService extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'car_service_id',
        'car_store_id',
    ];
}
