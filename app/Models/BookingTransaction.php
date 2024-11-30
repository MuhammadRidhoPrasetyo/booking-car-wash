<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'trx_id',
        'phone_number',
        'is_paid',
        'proof',
        'total_amount',
        'car_store_id',
        'car_service_id',
        'started_at',
        'time_at',
    ];
}
