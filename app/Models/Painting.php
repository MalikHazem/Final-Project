<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;
use App\Models\Location;
use App\Models\Category;

class Painting extends Model
{
    use HasFactory;
    protected $table = "paintings";
    protected $fillable=[
        "p_name",
        "a_name",
        "image",
        "details",
        "price",
        "available",
        "date",
        "category",
        "location",
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}
