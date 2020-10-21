<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_SUPER_VISOR = 1; // スーパーバイザー
    const ROLE_EMPLOYEE = 2; // 社員

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function customers()
    {
        return $this->hasMany(CustomerLog::class);
    }

    /**
     * スーパーバイザーであればtrueを返す
     * @return bool
     */
    public function isSuperVisor(): bool
    {
        return $this['role_id'] === Role::SUPER_VISOR_ID;
    }

    public static function enumSupserVisor()
    {
        return User::where('role_id', '=', Role::SUPER_VISOR_ID)->get();
    }
}
