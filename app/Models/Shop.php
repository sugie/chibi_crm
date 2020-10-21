<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    const SHOP_ID_TOKYO = 1;
    const SHOP_ID_NAGOYA = 2;
    const SHOP_ID_OSAKA = 3;
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
