<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Painting;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable=[
        "user_id",
        "painting_id",
        "price",
        "payment",
        "date",
        "sent",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paintings(){
        return $this->hasMany(Painting::class);
    }
}
