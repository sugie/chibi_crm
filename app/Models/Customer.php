<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const KRAMER_FLAG_ON = 1;

    use HasFactory;
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => \App\Events\KramerInComming::class,
    ];

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
