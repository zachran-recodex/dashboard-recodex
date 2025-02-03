<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
{
    use LogsActivity;

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

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'name',
                'domain',
                'type',
                'status',
                'email',
                'phone',
                'address',
                'billing_cycle',
                'expiry_date'
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function recentActivities()
    {
        return $this->activities()->latest()->limit(5);
    }
}
