<?php

namespace App;

use App\Events\KramerInComming;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const KRAMER_FLAG_ON = 1;
    protected $dispatchesEvents = [
        'created' => KramerInComming::class,
    ];

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::created(function ($customer) {
        });
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function customerLogs()
    {
        return $this->hasMany(CustomerLog::class);
    }

    public function isKramer(): bool
    {
        return $this->kramer_flag == Customer::KRAMER_FLAG_ON;
    }
}
