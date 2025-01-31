<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'domain',
        'image',
        'type',
        'phone',
        'email',
        'address',
        'status',
        'billing_cycle',
        'expiry_date',
    ];

    protected $casts = [
        'expiry_date' => 'date',
    ];
}
