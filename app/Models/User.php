<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use App\Models\City;
use App\Models\Order;
use App\Models\Painting;
use App\Models\Permission;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'permissions',
        'city_name',
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function paintings(){
        return $this->hasMany(Painting::class);
    }
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
